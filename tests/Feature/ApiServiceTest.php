<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiServiceTest extends TestCase
{
    public function test_circle()
    {
        $response = $this->get('/circle/10');

        $response
            ->assertStatus(200)
            ->assertExactJson([
                'type' => 'circle',
                'radius' => 10.0,
                'surface' => 314.16,
                'circumference' => 62.83,
            ]);
    }

    public function test_triangle()
    {
        $response = $this->get('/triangle/3/4/5');

        $response
            ->assertStatus(200)
            ->assertExactJson([
                'type' => 'triangle',
                'a' => 3.0,
                'b' => 4.0,
                'c' => 5.0,
                'surface' => 6.0,
                'circumference' => 12.0,
            ]);
    }

    public function test_logs_index()
    {
        $response = $this->get('/logs');

        $response->assertStatus(200);
    }

    public function test_logs_show()
    {
        $rl = new \App\Models\RequestLog();
        $rl->route = 'Hello from test';
        $rl->response_status = 200;
        $rl->save();

        $response = $this->get('/logs/' . $rl->id);

        $response
            ->assertStatus(200)
            ->assertJsonFragment([
                'route' => 'Hello from test',
                'response_status' => 200,
            ]);
    }

    public function test_logs_show_404()
    {
        $response = $this->get('/logs/0');

        $response
            ->assertStatus(404);
    }
}
