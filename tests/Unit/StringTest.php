<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class StringTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = User::inRandomOrder()->first();

        // this asserts that the user ID is an integer - if true, test passes.
        $this->assertInternalType('string',$user->name);

        //dd($user);
        $this->assertInstanceOf('App\User',$user);
    }
}
