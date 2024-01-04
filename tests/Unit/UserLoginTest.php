<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\TestCase;

class UserLoginTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /**
     * A basic unit test example.
     */
    public function testLoginUser(): void
    {
        $user = [
            "email" => "seda21@gmail.com",
            "password" => "12345678"
        ];

        $response = $this->call('POST', route("user.login"), $user);
        $response->assertOk();

        $response->assertRedirect(route('panel.home'));
        $this->assertAuthenticatedAs($user);
    }
}
