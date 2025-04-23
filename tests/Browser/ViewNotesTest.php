<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ViewNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group viewnotes
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->clickLink('Log in')
            ->assertPathIs('/login')
            ->assertSee('Email')
            ->assertSee('Password')
            ->type('email', 'tes1@gmail.com')
            ->type('password', 'tes1')
            ->press('LOG IN')
            
            ->assertPathIs('/dashboard')
            ->pause(1000) 
            ->clickLink('Notes')
            ->assertPathIs('/notes')
            ->pause(500)
            ->clickLink('tes 1') 
            ->assertSee('Author');
        });
    }
}
