<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use PHPUnit\Framework\Attributes\Test;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function it_can_register_500_users_without_crashing()
    {
        // Create 500 users
        User::factory()->count(500)->create();

        // Ensure 500 users exist in the database
        $this->assertEquals(500, User::count());
    }

    #[Test]
    public function a_user_can_register()
    {
        $response = $this->post(route('register'), [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertRedirect(route('dashboard'));
        $this->assertDatabaseHas('users', ['email' => 'john@example.com']);
    }

    #[Test]
    public function a_user_can_login()
    {
        $user = User::factory()->create([
            'email' => 'user@example.com',
            'password' => bcrypt('password'),
        ]);

        $response = $this->post(route('login'), [
            'email' => 'user@example.com',
            'password' => 'password',
        ]);

        $response->assertRedirect(route('dashboard'));
        $this->assertAuthenticatedAs($user);
    }

    #[Test]
    public function a_user_cannot_login_with_invalid_credentials()
    {
        User::factory()->create(['email' => 'user@example.com']);

        $response = $this->post(route('login'), [
            'email' => 'user@example.com',
            'password' => 'wrongpassword',
        ]);

        $response->assertSessionHasErrors();
        $this->assertGuest();
    }

    #[Test]
    public function a_user_can_logout()
    {
        $user = User::factory()->create();

        $this->actingAs($user)->post(route('logout'));

        $this->assertGuest();
    }
}
