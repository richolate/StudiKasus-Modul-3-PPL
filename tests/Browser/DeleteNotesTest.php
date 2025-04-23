<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DeleteNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group deletenotes
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
                    ->pause(1000) // Menjeda eksekusi selama 1 detik untuk memastikan halaman selesai dimuat.
                    ->clickLink('Notes') // Mengklik tautan dengan teks "Notes" pada halaman.
                    ->assertPathIs('/notes') // Memeriksa apakah URL saat ini adalah "/notes".
                    ->press('Delete'); // Menekan tombol dengan teks "Delete" untuk menghapus item, kemungkinan catatan tertentu.
        });
    }
}
