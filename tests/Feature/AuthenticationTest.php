<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use App\Models\User;

class AuthenticationTest extends TestCase
{
    /** @test */
    public function user_can_sign_in_with_correct_credentials()
    {
        $user = \App\Models\User::where('email', 'staff@example.com')->first();
        $response = $this->post('/authenticate', [
            'email' => 'staff@example.com',
            'password' => 'ibikoffice123!#',
        ]);
        $response->assertRedirect('/dashboard');
        $response->assertSessionHas('status', 'success');
        $response->assertSessionHas('message', 'melakukan sign in.');
        $this->assertAuthenticatedAs($user);
    }

    /** @test */
    public function user_cannot_sign_in_with_incorrect_credentials()
    {
        \App\Models\User::where('email', 'staff@example.com')->first();
        $response = $this->post('/authenticate', [
            'email' => 'staff@example.com',
            'password' => 'wrongpassword',
        ]);
        $response->assertRedirect('/');
        $response->assertSessionHasErrors(['email' => 'Kredensial yang diberikan tidak cocok.']);
        $this->assertGuest();
    }

    /** @test */
    public function user_can_sign_out()
    {
        $user = \App\Models\User::where('email', 'staff@example.com')->first();
        $this->actingAs($user);
        $response = $this->post('/sign-out');
        $response->assertRedirect('/sign-in');
        $this->assertGuest();
    }
}
