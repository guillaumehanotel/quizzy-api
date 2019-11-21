<?php

namespace App\Console\Commands;

use App\Libraries\DeezerFetcher\DeezerFetcher;
use Illuminate\Console\Command;

class FetchTracks extends Command {

    protected $signature = 'fetch:tracks';

    protected $description = 'Fetch tracks from Deezer API and store in database';

    public function __construct() {
        parent::__construct();
    }

    public function handle() {
        $deezerFetcher = new DeezerFetcher();
        $deezerFetcher->fetchDeezerTracks();
    }
}
