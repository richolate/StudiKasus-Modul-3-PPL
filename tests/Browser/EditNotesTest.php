<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
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
                    ->clickLink('Notes')

                    ->assertSee('Edit');
        });
    }
}
