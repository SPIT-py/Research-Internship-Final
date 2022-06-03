<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;


class SpeechController extends Controller
{
    //
    // public function predict_emotion(){
    //     $output = shell_exec('C:\Users\lenovo\AppData\Local\Programs\Python\Python310\python.exe'." ".'C:/xampp/htdocs/speech/public/Speech2.py');
    //     echo $output;
    // }
    public function index()
    {
        //$output = shell_exec('C:\Users\lenovo\AppData\Local\Programs\Python\Python310\python.exe'." ".'C:/xampp/htdocs/speech/public/Speech_record.py');
        //echo $output;
        //predict_emotion();
        $data = shell_exec('C:/Users/lenovo/AppData/Local/Programs/Python/Python310/python.exe'." ".'D:/Third_Year_EXTC/Jupyter_Notebooks/Image_Reading.py');
        echo $data;
        //session()->flash('output2',$output2['output2']);
        //return view('out',['data'=>$data]);
        //echo $output2;
        // $process = new Process(['C:\Users\lenovo\AppData\Local\Programs\Python\Python310\python.exe', 'C:/xampp/htdocs/speech/public/Speech.py']);
        // $process->run();
        // error handling
        // if (!$process->isSuccessful()) {
        //     throw new ProcessFailedException($process);
        // }

        // $output_data = $process->getOutput();
    }

}
