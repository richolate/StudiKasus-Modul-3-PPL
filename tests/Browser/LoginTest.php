<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group login
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/') // Mengunjungi halaman web dengan route "/".
                    ->clickLink('Log in') // Mengklik tautan dengan teks "Log in" pada halaman.
                    ->assertSee('Email') // Memeriksa apakah teks "Email" terlihat di halaman.
                    ->assertSee('Password') // Memeriksa apakah teks "Password" terlihat di halaman.
                    ->type('email', 'admin@gmail.com') // Mengetik "admin@gmail.com" pada input field dengan nama atau id "email".
                    ->type('password', 'password') // Mengetik "password" pada input field dengan nama atau id "password".
                    ->press('LOG IN'); // Menekan tombol dengan teks "LOG IN" untuk mengirimkan form.
        });
    }
}
