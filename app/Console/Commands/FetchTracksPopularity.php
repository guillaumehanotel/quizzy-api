<?php

namespace App\Console\Commands;

use App\Libraries\MusicFetcher\MusicPopularityFetcher;
use Illuminate\Console\Command;

class FetchTracksPopularity extends Command {

    protected $signature = 'fetch:tracksPopularity';

    protected $description = 'Command description';

    private $musicPopularityFetcher;

    public function __construct(MusicPopularityFetcher $musicPopularityFetcher) {
        parent::__construct();
        $this->musicPopularityFetcher = $musicPopularityFetcher;
    }

    public function handle() {
        $this->musicPopularityFetcher->scrapTracksPopularity();
    }
}
