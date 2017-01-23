<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('welcome');
    }

    public function testAddArtist()
    {
      $this->visit('/login')
            ->type('will@will.com', 'email')
            ->type('password', 'password')
            ->press('Login')
            ->seePageIs('/');

    $this->visit('/addArtistForm')
        ->type('Will Robinson', 'name')
        ->type('07.03.1995', 'DOB')
        ->type('British', 'nationality')
        ->type('Test about', 'about')
        ->press('Save')
        ->seePageIs('artist/add');

    }
}
