<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MailTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_send_mail(): void
    {
        $response = $this->post('/sendMail', [
            'name' => 'fftt',
            'phone' => '89177729419',
            'email' => 'hungry_la@mail.ru'
        ]);

        $response->assertStatus(200);
    }
}
