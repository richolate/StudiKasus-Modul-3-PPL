<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class MakeNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group makenotestest
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/') 
                    ->clickLink('Log in') // Mengklik tautan dengan teks "Log in" pada halaman.
                    ->assertPathIs('/login') // Memeriksa apakah URL saat ini adalah "/login".
                    ->assertSee('Email') // Memeriksa apakah teks "Email" terlihat di halaman.
                    ->assertSee('Password') // Memeriksa apakah teks "Password" terlihat di halaman.
                    ->type('email', 'tes1@gmail.com') // Mengetik "tes1@gmail.com" pada input field dengan nama atau id "email".
                    ->type('password', 'tes1') // Mengetik "tes1" pada input field dengan nama atau id "password".
                    ->press('LOG IN') // Menekan tombol dengan teks "LOG IN" untuk mengirimkan form.

                    ->assertPathIs('/dashboard') // Memeriksa apakah URL saat ini adalah "/dashboard" setelah login.
                    ->clickLink('Notes') // Mengklik tautan dengan teks "Notes" pada halaman.
                    ->clickLink('Create Note') // Mengklik tautan dengan teks "Create Note" pada halaman.

                    ->assertSee('Title') // Memeriksa apakah teks "Title" terlihat di halaman.
                    ->assertSee('Description') // Memeriksa apakah teks "Description" terlihat di halaman.
                    ->type('title', 'tes 1') // Mengetik "tes 1" pada input field dengan nama atau id "title".
                    ->type('description', 'testing 1') // Mengetik "testing 1" pada input field dengan nama atau id "description".
                    ->press('CREATE'); // Menekan tombol dengan teks "CREATE" untuk mengirimkan form.
        });
    }
}
