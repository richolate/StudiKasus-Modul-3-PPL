<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogoutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group logout
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Log in')
                    ->assertSee('Email')
                    ->assertSee('Password')
                    ->type('email', 'tes1@gmail.com')
                    ->type('password', 'tes1')
                    ->press('LOG IN')

                    ->click('#click-dropdown')
                    ->waitFor('#click-dropdown')
                    ->clickLink('Log Out');        
        });
    }
}
