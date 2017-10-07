<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RoutesTest extends TestCase
{
    /** @test */
    public function any_user_may_not_access_admin_view()
    {
        $this->get('/admin')
            ->assertRedirect('/')
            ->assertSessionHas('error_message');
    }

    /** @test */
    function any_user_may_not_see_admin_messages()
    {
        $this->get('/admin/messages')
            ->assertRedirect('/')
            ->assertSessionHas('error_message');
    }

    /** @test */
    function auth_user_may_not_access_admin_view()
    {
        $this->signIn();
        $this->get('/admin')
            ->assertRedirect('/')
            ->assertSessionHas('error_message');
    }

    /** @test */
    function auth_users_may_not_see_admin_messages()
    {
        $this->signIn();
        $this->get('/admin/messages')
            ->assertRedirect('/')
            ->assertSessionHas('error_message');
    }

    /** @test */
    function products_display_properly()
    {
        $this->get('/products')
            ->assertSee('id', 'category', 'image', 'price');
    }
}
