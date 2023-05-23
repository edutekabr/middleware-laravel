<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function getLastestNews(Request $request)
    {
        $userLocation = $request->query('location');

        $latestNews = News::getNewsByLocation($userLocation);

        return $latestNews;
    }
}
