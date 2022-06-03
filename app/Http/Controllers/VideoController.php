<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    //
    public function index()
    {
        shell_exec('C:/Users/lenovo/AppData/Local/Programs/Python/Python310/python.exe'." ".'C:/xampp/htdocs/speech/public/Img_Emotion.py');

        return view('cap');

    }
}
