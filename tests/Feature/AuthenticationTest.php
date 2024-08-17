<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    /** @test */
    public function user_can_sign_in()
    {
        $response = $this->post('/sign-in', [
            'email' => 'staff@example.com',
            'password' => 'ibikoffice123!#',
        ]);
        $response->assertStatus(302);
        $this->assertAuthenticated();
    }

    /** @test */
    public function user_can_sign_out()
    {
        $this->post('/sign-in', [
            'email' => 'staff@example.com',
            'password' => 'ibikoffice123!#',
        ]);
        $user = auth()->user();
        $this->assertAuthenticatedAs($user);
        $response = $this->post('/sign-out');
        $response->assertStatus(302);
        $this->assertGuest();
    }
}
