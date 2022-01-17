<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewMoviesTest extends TestCase
{
    /** @test */
    public function the_main_page_shows_correct_info()
    {
        // rewatch in tutorial no 3
        // Http::fake();
        Http::fake(
            ['https://api.themoviedb.org/3/movie/popular' => $this->fakePopularMovies(),
            'https://api.themoviedb.org/3/movie/now_playing' => $this->fakeNowPlayinMovies(),
            // ['https://api.themoviedb.org/3/movie/popular' => $this->fakeGenres()];
            ]
        );
        
        
        $response = $this->get(route('movies.index'));
        $response->assertSuccessful();
        $response->assertSee('Popular movies');
        $response->assertSee('Fake movie');
        $response->assertSee('now playing movies');
        $response->assertSee('Now Playing Fake movie');
    }
    private function fakePopularMovies()
    {
        return Http::response(
            [
        "result" =>[
        "adult" => false,
        "backdrop_path" => "/4gKxQIW91hOTELjY5lzjMbLoGxB.jpg",
        "genre_ids" =>  [
          0 => 28,
          1 => 53,
          2 => 878,
        ],
        "id" => 763164,
        "original_language" => "en",
        "original_title" => "Apex",
        "overview" => "Ex-cop Thomas Malone is serving a life sentence for a crime he didn’t commit. He is offered a chance at freedom if he can survive a deadly game of Apex, in which six hunters pay for the pleasure of hunting another human on a remote island. He accepts, and once he arrives, all hell breaks loose.",
        "popularity" => 588.51,
        "poster_path" => "/chTkFGToW5bsyw3hgLAe4S5Gt3.jpg",
        "release_date" => "2021-11-12",
        "title" => "Fake Movie",
        "video" => false,
        "vote_average" => 5.5,
        "vote_count" => 335,
        ],
        200]
        );
    }
    private function fakeNowPlayinMovies()
    {
        return Http::response(
            [
        "result" =>[
        "adult" => false,
        "backdrop_path" => "/4gKxQIW91hOTELjY5lzjMbLoGxB.jpg",
        "genre_ids" =>  [
          0 => 28,
          1 => 53,
          2 => 878,
        ],
        "id" => 763164,
        "original_language" => "en",
        "original_title" => "Apex",
        "overview" => "Ex-cop Thomas Malone is serving a life sentence for a crime he didn’t commit. He is offered a chance at freedom if he can survive a deadly game of Apex, in which six hunters pay for the pleasure of hunting another human on a remote island. He accepts, and once he arrives, all hell breaks loose.",
        "popularity" => 588.51,
        "poster_path" => "/chTkFGToW5bsyw3hgLAe4S5Gt3.jpg",
        "release_date" => "2021-11-12",
        "title" => "Now Playing Fake Movie",
        "video" => false,
        "vote_average" => 5.5,
        "vote_count" => 335,
        ],
        200]
        );
    }
}
