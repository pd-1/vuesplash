<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class LogoutApiTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function setUp(): void
    {
        parent::setUp();

        $this->user = factory(User::class)->create();
    }
    public function should_認証済みのユーザーをログアウトさせる()
    {
        $response = $this->actingAs($this->user)
                        ->json('POST',route('logout'));

                        $response->assertStatus(200);
                        $this->assertGuest();
    }
}
