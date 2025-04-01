<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use PHPUnit\Framework\Attributes\Test;

class LayoutTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function it_shows_dashboard_page()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/dashboard');

        $response->assertStatus(200);
        $response->assertSee('Dashboard'); // Ensure it contains the dashboard text
    }

    #[Test]
    public function it_shows_navigation_bar_for_authenticated_users()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/dashboard');

        $response->assertStatus(200);
        $response->assertSee('Quiz'); // Ensure navbar has 'Quiz'
        $response->assertSee($user->name); // Ensure user name is displayed
    }

    #[Test]
    public function guest_users_cannot_access_dashboard()
    {
        $response = $this->get('/dashboard');

        $response->assertRedirect('/login'); // Guests should be redirected to login
    }
}
