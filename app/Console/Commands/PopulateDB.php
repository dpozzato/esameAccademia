<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use League\Csv\Reader;
use App\Models\Song;

class PopulateDB extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:populatedb';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //load the CSV document from a file path
        $csv = Reader::createFromPath('./resources/csv/songs.csv', 'r');
        $csv->setDelimiter(',');
        $csv->setHeaderOffset(0);
        $records = $csv->getRecords();

        foreach ($records as $record) {
            $song = new Song();
            $song->title = $record['title'];
            $song->artist = $record['artist'];
            $song->genre = $record['the genre of the track'];
            $song->year = $record['year'];
            $song->popularity = $record['Popularity- The higher the value the more popular the song is'];
            echo "Canzone ".$record['title']." salvata\n";
            $song->save();
        }
    }
}
