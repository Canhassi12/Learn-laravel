<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Anime;

class AnimeControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     * @test
     */
    public function data_insert()
    {
        $anime = Anime::factory()->make();

        $token = csrf_token();

        $this->post('/', ['name' => $anime->name, 'score' => $anime->score, 'rewatched' => $anime->rewatched, '_token' => $token])
            ->assertRedirect('/')
            ->assertValid();
    }

    public function delete_anime()
    {
        $animeTest = Anime::factory()->create();

        $fds = $animeTest['id'];

        $response = $this->delete("/delete/{$fds}");

        $response->assertRedirect();
    }
}
