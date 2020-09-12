<?php

namespace App\Http\Controllers;

//下記を追加する
use Illuminate\Http\Request;
//下記を追加する
use App\Models\Avatar;

class ImgController extends Controller
{
    public function index()
    {
        return view('upload.img');
    }
    public function create()
    {
        return view('upload.create');
    }
}
