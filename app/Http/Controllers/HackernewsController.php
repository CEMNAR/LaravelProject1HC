<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HackernewsController extends Controller
{
    public function index()
    {
        $url = "https://api.hnpwa.com/v0/news/1.json";
        $raw = file_get_contents($url);
        $json = json_decode($raw);
        return view('hackernews',['articles'=> $json]);
    }
}
