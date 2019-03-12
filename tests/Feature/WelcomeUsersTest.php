<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{

    public function testExample()
    {
        $this->assertTrue(true);
    }
	
    /* @test  */

    public function it_welcome_users_with_nickname()
    {
        $this->get('/usuarios/Roberto/Pinheiro')
        ->assertStatus(200)
        ->assertSee('Bem-vindo Roberto Pinheiro!');
    }

	/* @test  */

    public function it_welcome_users_without_nickname()
    {
        $this->get('/usuarios/Roberto')
        ->assertStatus(200)
        ->assertSee('Bem-vindo Roberto !');
    }


}
