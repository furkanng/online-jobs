<?php

namespace Tests\Unit;

use Tests\TestCase;

class UnitTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function testAdvertPost(): void
    {
        $data = [
            "subject" => fake()->text(),
            "content" => fake()->text(),
            "price" => fake()->randomNumber(),
            "admin_id" => 1,
            "advert_no" => fake()->randomNumber(),
            "status" => 0,
        ];

        $this->post(route('panel.ilanlar.store'), $data);

        $this->assertTrue(true);
    }

    public function testMicroPost(): void
    {
        $data = [
            "subject" => fake()->text(),
            "content" => fake()->text(),
            "price" => fake()->randomNumber(),
            "admin_id" => 1,
            "advert_no" => fake()->randomNumber(),
            "status" => 0,
        ];

        $this->post(route('panel.mikro-is.store'), $data);

        $this->assertTrue(true);
    }

    public function testLoginAdmin(): void
    {
        $user = [
            "email" => "admin@gmail.com",
            "password" => "123456789"
        ];

        $response = $this->post(route("panel.login"), $user); // post fonksiyonunu kullandık
        $response->assertOk();

    }
}
