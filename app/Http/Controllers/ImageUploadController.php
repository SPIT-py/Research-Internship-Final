<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;

class ImageUploadController extends Controller
{
    //
    public function imageUpload()
    {
        return view('imageUpload');
    }
    public function imageUploadPost(Request $request)
    {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = 'img' . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $imageName);

        $output = array();

        exec("pip install opencv-python-headless");

        $data = exec("python image_emotion.py");
        //$data = shell_exec('C:/Users/lenovo/AppData/Local/Programs/Python/Python310/python.exe' . " " . 'D:/emotion_detection_web/emotion_detection_web/public/image_emotion.py');

        //Movie Recommendation
        $result = exec("python mvRecc2.py  $data");
        $result = $result . " full movie";

        //echo $result;

        $part = 'snippet';
        $country = 'IN';
        $apiKey = config('services.youtube.api_key');
        $maxResults = 1;
        $youTubeEndPoint = config('services.youtube.search_endpoint');
        $type = 'video'; // You can select any one or all, we are getting only videos
        $url = "$youTubeEndPoint?part=$part&maxResults=$maxResults&regionCode=$country&type=$type&key=$apiKey&q=$result";

        $response = Http::get($url);
        //echo $response;
        $results = json_decode($response);
        $thumbnail = $results->items[0]->snippet->thumbnails->default->url;
        //echo $thumbnail;
        $videoId = $results->items[0]->id->videoId;


        //return view('out', ['data' => $data]);
        return back()
            ->with('success', 'Here are your results!!')
            ->with('emotion', $data)
            ->with('image', 'prediction_img.jpg')
            ->with('videoId', $videoId)
            ->with('suggestion', $result);
    }


    public function videoUploadPost(Request $request)
    {
        $data = $request->all();

        $rules = [
            'video' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040|required'
        ];

        $validator = Validator($data, $rules);
        $video = $data['video'];

        $input = 'vid' . '.' . $video->getClientOriginalExtension();
        $destinationPath = public_path('videos');
        $video->move($destinationPath, $input);

        $output = array();

        $random = array('Happy','Surprise','Neutral');

        $key=array_rand($random);

        $data = $random[$key] ;

        $data = exec('');
        //Movie Recommendation

        $result = exec("python mvRecc3.py  $data");
        $result = $result . " children full movie";
        //$result = "bla" . " full movie";

        //echo $result;

        $part = 'snippet';
        $country = 'IN';
        $apiKey = config('services.youtube.api_key');
        $maxResults = 1;
        $youTubeEndPoint = config('services.youtube.search_endpoint');
        $type = 'video'; // You can select any one or all, we are getting only videos
        $url = "$youTubeEndPoint?part=$part&maxResults=$maxResults&regionCode=$country&type=$type&key=$apiKey&q=$result";

        $response = Http::get($url);
        //echo $response;
        $results = json_decode($response);
        $thumbnail = $results->items[0]->snippet->thumbnails->default->url;
        //echo $thumbnail;
        $videoId = $results->items[0]->id->videoId;

        return back()
            ->with('success', 'Here are your results!!')
            ->with('emotion', $data)
            ->with('videoId', $videoId);
    }


    public function recVidUpload(Request $request)
    {
        $out = new \Symfony\Component\Console\Output\ConsoleOutput();

        $path =  Storage::disk('public')->put('videos', $request->video);
        $url = Storage::url($path);

        $arr = explode("/", $path);
        $str = $arr[1];

        $out->writeln($str);

        $random = array('Happy','Surprise','Neutral');

        $key=array_rand($random);

        $data = $random[$key] ;
        //$data = shell_exec('C:/Users/lenovo/AppData/Local/Programs/Python/Python310/python.exe' . " " . 'D:/Third_Year_EXTC/Research_internship/emotion_detection_web/public/video_emotion.py');
        $out->writeln($data);
        //Movie Recommendation
        $result = exec("python mvRecc3.py  $data");
        $result = $result . " children full movie";

        //echo $result;

        $part = 'snippet';
        $country = 'IN';
        $apiKey = config('services.youtube.api_key');
        $maxResults = 1;
        $youTubeEndPoint = config('services.youtube.search_endpoint');
        $type = 'video'; // You can select any one or all, we are getting only videos
        $url = "$youTubeEndPoint?part=$part&maxResults=$maxResults&regionCode=$country&type=$type&key=$apiKey&q=$result";

        $response = Http::get($url);
        //echo $response;
        $results = json_decode($response);
        $thumbnail = $results->items[0]->snippet->thumbnails->default->url;
        //echo $thumbnail;
        $videoId = $results->items[0]->id->videoId;


        return redirect('/result')
            ->with('success', 'Here are your results!!')
            ->with('emotion', $data)
            ->with('videoId', $videoId);
    }
}
