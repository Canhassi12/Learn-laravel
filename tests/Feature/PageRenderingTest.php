<?php

namespace Tests\Feature;

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

    public function rendering_edit_page() 
    {
        $response = $this->get('/edit');

        $response->assertViewIs('edit');
    }
}
