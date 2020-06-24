<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MemeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        $uploads = [];

        foreach(Storage::allFiles('public/memes') as $upload) {
            $uploads[] = Storage::url($upload);
        }

        return view('pages.memes', compact('uploads'));
    }

    public function upload(Request $request)
    {
        $file = $request->file('files')->store('public/memes');

        return Storage::url($file);
    }
}
