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
                    ->clickLink('Log in') // Mengklik tautan dengan teks "Log in" pada halaman.
                    ->assertSee('Email') // Memeriksa apakah teks "Email" terlihat di halaman.
                    ->assertSee('Password') // Memeriksa apakah teks "Password" terlihat di halaman.
                    ->type('email', 'tes1@gmail.com') // Mengetik "tes1@gmail.com" pada input field dengan nama atau id "email".
                    ->type('password', 'tes1') // Mengetik "tes1" pada input field dengan nama atau id "password".
                    ->press('LOG IN') // Menekan tombol dengan teks "LOG IN" untuk mengirimkan form.

                    ->click('#click-dropdown') // Mengklik elemen dengan id "click-dropdown", kemungkinan untuk membuka menu dropdown.
                    ->waitFor('#click-dropdown') // Menunggu hingga elemen dengan id "click-dropdown" muncul atau tersedia di halaman.
                    ->clickLink('Log Out'); // Mengklik tautan dengan teks "Log Out" untuk keluar dari akun.
        });
    }
}
