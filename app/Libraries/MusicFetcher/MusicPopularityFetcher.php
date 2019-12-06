<?php

namespace App\Libraries\MusicFetcher;

use App\Models\Track;
use Goutte\Client;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\DomCrawler\Crawler;

class MusicPopularityFetcher {

    private $client;

    public function __construct() {
        $this->client = new Client();
    }

    public function scrapTracksPopularity() {
        $tracks = Track::whereNull('youtube_view')->get();
        foreach ($tracks as $track) {
            $this->getYoutubeViewNumber($track);
        }
    }

    public function getYoutubeViewNumber(Track $track) {
        $searchUrl = $this->getPageUrl($track);
        $crawler = $this->client->request('GET', $searchUrl);
        try {
            $crawler->filter('ol[class="item-section"] ul[class="yt-lockup-meta-info"]')->eq(0)->each(function (Crawler $node) use ($track) {
                 echo $track->full_title . " : ";
                $rawNbViews = $node->filter('li')->count() == 2 ? $node->filter('li')->eq(1)->text() : $node->filter('li')->text();
                $nbViews = (int)str_replace(" ", "", str_replace("vues", "", $rawNbViews));
                $track->youtube_view = $nbViews;
                $track->save();
                 echo $nbViews . "\n";
            });
        } catch (\Exception $exception) {
            echo $exception->getMessage();
            Storage::put('result.html', $crawler->html());
        }
    }

    public function getPageUrl($track) {
        $searchTrack = str_replace(" ", "+", $track->full_title);
        return "https://www.youtube.com/results?search_query=" . $searchTrack;
    }
}
