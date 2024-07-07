<?php

namespace App\Console\Commands;

use App\Models\Film;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class UpdateFilmData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-film-data';

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
        // https://image.tmdb.org/t/p/original
        // https://developer.themoviedb.org/docs/image-basics
        $response = Http::withToken(config('api.tmdb-api-key'))
            ->get("https://api.themoviedb.org/3/trending/movie/day?language=fr-FR&page=1")
            ->json();

        DB::beginTransaction();

        foreach ($response['results'] as $result) {
            try {
                // if more details are needed for the movies, we are just fetching the bare minimum here
                // $details = Http::withToken(config('api.tmdb-api-key'))->get("https://api.themoviedb.org/3/movie/${$result['id'}:::::::::::::::?language=fr-FR") ->json()

                Film::query()->updateOrInsert(
                    [ 'movie_id' => $result["id"] ],
                    [
                        'title' => $result["title"],
                        'overview' => $result["overview"],
                        'poster_path' => $result["poster_path"],
                        'release_date' => $result["release_date"],
                    ]
                );
            } catch (\Throwable $t) {
                $this->error($t->getMessage());
                DB::rollBack();
                return;
            }
        }

        DB::commit();

        $this->info(sizeof($response["results"]) . " trending movies fetched");
    }
}
