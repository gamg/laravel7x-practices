<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_testing_http_client()
    {
        Http::fake([
            'randomuser.me/*' => Http::response(['Dato' => 'ejemplo']),
            'jsonplaceholder.typicode.com/*' => Http::response(['Titulo' => 'Mi super titulo']),
        ]);

        //$response1 = Http::get('https://randomuser.me/api/?results=1');

        $response2 = Http::post('https://jsonplaceholder.typicode.com/posts', [
            'title' => 'Mi titulo...',
            'code' => 78
        ]);

        Http::assertSent(function ($request) {
            return $request->url() == 'https://jsonplaceholder.typicode.com/posts'
                    && $request['code'] == 78;
        });

        //dd($response2->json());
    }
}
