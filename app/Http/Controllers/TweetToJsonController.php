<?php

namespace App\Http\Controllers;

use App\Services\TwitterService;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class TweetToJsonController extends Controller
{
    public function index(Request $request)
    {
        return view('pages/tweet-to-json/index');
    }

    public function getTweet(Request $request, TwitterService $twitter)
    {
        if (is_null($tweetId = $request->tweetId)) {
            abort(403);
        }
        
        $tweet = json_encode($twitter->getTweet($tweetId));

        return view('pages/tweet-to-json/getTweet', compact('tweet'));
    }
}
