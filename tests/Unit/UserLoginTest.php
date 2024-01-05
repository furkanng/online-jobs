<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase; // Tests\TestCase sınıfını ekledik

class UserLoginTest extends TestCase // Tests\TestCase sınıfını miras aldık
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

        $response = $this->post(route("user.login"), $user); // post fonksiyonunu kullandık
        $response->assertOk();

        $response->assertRedirect(route('panel.home'));
        $this->assertAuthenticatedAs($user);
    }
}
