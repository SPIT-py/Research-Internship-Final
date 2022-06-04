<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MyController extends Controller
{
    //
    public function SpeechOutput(Request $request)
    {
        $input = $request->input('Message');

        exec("python -m textblob.download_corpora");

        $result6= json_encode($input);
        $result7 = exec("python emotionanalysisOriginal.py  $result6");
        $result7=json_decode($result7,true);

        unset($result7["positive"]);
        unset($result7["negative"]);
        unset($result7["anticip"]);
        //print_r($result7);
        foreach ($result7 as $k => $value)
            $result7[$k]=$value*100;
        arsort($result7);


        $keyArray = array_keys($result7);
        $result8 = $keyArray[0];

        //Movie Recommendation
        $result = exec("python mvRecc.py  $result8");
        $result = $result." full movie";

        //echo $result;

        $part = 'snippet';
        $country = 'BD';
        $apiKey = config('services.youtube.api_key');
        $maxResults = 1;
        $youTubeEndPoint = config('services.youtube.search_endpoint');
        $type = 'video'; // You can select any one or all, we are getting only videos
        $url = "$youTubeEndPoint?part=$part&maxResults=$maxResults&regionCode=$country&type=$type&key=$apiKey&q=$result";

        $response = Http::get($url);
        //echo $response;
        $results = json_decode($response);
        $thumbnail=$results->items[0]->snippet->thumbnails->default->url;
        //echo $thumbnail;
        $videoId= $results->items[0]->id->videoId;

        //movie Recommendation

        $links = [];

        $i = 0;

        $handle = fopen("Audio_input/output.txt", "r");
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                // process the line read.

                //string + '~' + string

                $link = explode('~', $line);

                //https://open.spotify.com/track/7zQRF2pG5pty9sck6L6hF4

                //https://open.spotify.com/embed/playlist/37i9dQZF1DX1s9knjP51Oa?utm_source=generator

                $Url = $link[1];

                $trackId = explode('track/', $Url);

                $links[$i] = $trackId[1];

                $i = $i + 1;

            }

            fclose($handle);
        } else {
            // error opening the file.
        }

        // return view('speech_output',compact('input', 'result1','result2','result7','positive_sentence'));
        $result = "";
        return view('sp_output', compact('result7', 'result','links','videoId'));

    }

    public function UploadPost(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:application/octet-stream,audio/mpeg,mpga,mp3,wav',
        ]);

        $imageName = 'img' . '.' . $request->image->extension();

        $request->image->move(public_path('Audio_input'), $imageName);

        /* Store $imageName name in DATABASE from HERE */
        //$request->image->move(public_path('images'), $imageName);
        //return view('out', ['data' => $imageName]);
        exec("python -m textblob.download_corpora");

        $result = exec("python speechEmotion.py");

        $result7 = [];

        $links = [];

        $i = 0;

        $handle = fopen("Audio_input/output.txt", "r");
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                // process the line read.

                //string + '~' + string

                $link = explode('~', $line);

                //https://open.spotify.com/track/7zQRF2pG5pty9sck6L6hF4

                //https://open.spotify.com/embed/playlist/37i9dQZF1DX1s9knjP51Oa?utm_source=generator

                $Url = $link[1];

                $trackId = explode('track/', $Url);

                $links[$i] = $trackId[1];

                $i = $i + 1;

            }

            fclose($handle);
        } else {
            // error opening the file.
        }


        //return view('out', ['data' => $data]);

        //Movie recommendation output
        $result_new = exec("python mvRecc.py  $result");
        $result_new = $result." full movie";
        //echo $result;

        $part = 'snippet';
        $country = 'BD';
        $apiKey = config('services.youtube.api_key');
        $maxResults = 1;
        $youTubeEndPoint = config('services.youtube.search_endpoint');
        $type = 'video'; // You can select any one or all, we are getting only videos
        $url = "$youTubeEndPoint?part=$part&maxResults=$maxResults&regionCode=$country&type=$type&key=$apiKey&q=$result_new";

        $response = Http::get($url);
        //echo $response;
        $results = json_decode($response);
        $thumbnail=$results->items[0]->snippet->thumbnails->default->url;
        //echo $thumbnail;
        $videoId= $results->items[0]->id->videoId;



        return view('sp_output' , compact('result7', 'result','links', 'videoId'));

    }

    public function Upload()
    {
        return view('uploadInput');
    }

    public function recommend(Request $request)
    {
        $emotion = $request->input('emotion');
        print_r($emotion);
        return redirect()->away('https://www.youtube.com/results?search_query= '.$emotion.' +songs');
    }

    //Text

    public function Text(Request $request){
        $input=$request->inp;

        exec("python -m textblob.download_corpora");

        $result6= json_encode($input);
        $result7 = exec("python emotionanalysisOriginal.py  $result6");
        $result7=json_decode($result7,true);


        unset($result7["positive"]);
        unset($result7["negative"]);
        unset($result7["anticip"]);

        //print_r($result7);

        foreach ($result7 as $k => $value)
            $result7[$k]=round($value*100);
        arsort($result7);

        $keyArray = array_keys($result7);
        $result8 = $keyArray[0];

        $result = exec("python mvRecc.py  $result8");
        $result = $result." full movie";
        //echo $result;

        $part = 'snippet';
        $country = 'BD';
        $apiKey = config('services.youtube.api_key');
        $maxResults = 1;
        $youTubeEndPoint = config('services.youtube.search_endpoint');
        $type = 'video'; // You can select any one or all, we are getting only videos
        $url = "$youTubeEndPoint?part=$part&maxResults=$maxResults&regionCode=$country&type=$type&key=$apiKey&q=$result";

        $response = Http::get($url);
        //echo $response;
        $results = json_decode($response);
        $thumbnail=$results->items[0]->snippet->thumbnails->default->url;
        //echo $thumbnail;
        $videoId= $results->items[0]->id->videoId;

        return view('textoutput' , compact('result7', 'videoId', ));

    }

    // Joke

    public function index(Request $request)
    {
        // $process = new Process(['python', 'C:\xampp\htdocs\recommendation\public\recom4.py']);
        $data = exec("python recom3.py");

        // $data->run();
        // $data = exec('C:\xampp\htdocs\recommendation\public\recom4.py');
        // error handling
        // if (!$data->isSuccessful()) {
        //     throw new ProcessFailedException($process);
        // }

        // $output_data = $data;
        // print_r($data);
        echo $data;
        // print $process;
    }

    // Comic
    public function comic(Request $request)
    {
        // $process = new Process(['python', 'C:\xampp\htdocs\recommendation\public\recom4.py']);
        $result = exec("python recom4.py");
        // $data->run();
        // $data = exec('C:\xampp\htdocs\recommendation\public\recom4.py');
        // error handling
        // if (!$data->isSuccessful()) {
        //     throw new ProcessFailedException($process);
        // }

        // $output_data = $data;
        // print_r($data);
        // print $process;
    }
}

