<?php

namespace Tests\Feature;

use App\Models\Anime;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PageRenderingTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     * @test
     */
    public function rendering_index_page()
    {
        $response = $this->get('/');

        $response->assertViewIs('index');
    }

    /** @test */
    public function rendering_edit_page() 
    {
        $animeTest = Anime::factory()->create();

        $id = $animeTest->id;

        $response = $this->get("/edit/{$id}");

        $response->assertViewIs('edit');
    }
}
