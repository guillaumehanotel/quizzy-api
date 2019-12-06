<?php

namespace App\Console\Commands;

use App\Libraries\MusicFetcher\DeezerFetcher;
use App\Libraries\MusicFetcher\MusicPopularityFetcher;
use Illuminate\Console\Command;

class FetchTracks extends Command {

    protected $signature = 'fetch:tracks';

    protected $description = 'Fetch tracks from Deezer API and store in database';

    private $deezerFetcher;

    public function __construct(DeezerFetcher $deezerFetcher) {
        parent::__construct();
        $this->deezerFetcher = $deezerFetcher;
    }

    public function handle() {
        $this->deezerFetcher->fetchDeezerTracks();
    }
}
