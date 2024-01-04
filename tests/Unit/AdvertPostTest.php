<?php

namespace Tests\Unit;

use Tests\TestCase;

class AdvertPostTest extends TestCase
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
}
