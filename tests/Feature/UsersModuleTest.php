<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{

    public function testExample()
    {
        $this->assertTrue(true);
    }

    /* @test */

    public function it_show_the_users_list_page()
    {
        $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('Listagem de usuários')
        ->assertSee('Joel')
        ->assertSee('Ellie');
    }

    /* @test */

    public function it_show_a_default_message_if_the_user_list_is_empty()
    {
        $this->get('/usuarios?empty')
        ->assertStatus(200)
        ->assertSee('Não existem usuários registrados!');
    }

    /* @test */

    public function it_loads_the_users_details_page()
    {
        $this->get('/usuarios/5')
        ->assertStatus(200)
        ->assertSee('Mostrando detalhes do usuário 5');
    }

    /* @test */
    
    public function it_loads_new_user_page()
    {
        $this->get('/usuarios/novo')
        ->assertStatus(200)
        ->assertSee('Criar novo usuário');
    }



}
