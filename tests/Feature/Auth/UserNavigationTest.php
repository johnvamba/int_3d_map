<?php

namespace Tests\Feature\Auth;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserNavigationTest extends TestCase
{

    public function testGuestUserFrontNavigation()
    {
    	$response = $this->get( route('front.site') );

    	$response
    		->assertStatus(200);
    }

    /*
    *	Core (Guest) Admin Navigations follows
    */
    public function testGuestUserIndexControl()
    {
    	$response = $this->get( route('admin.index') );

    	$response
    		->assertRedirect( route('front.login') );
    }

    public function testAuthUserIndexControl()
    {
    	$user = factory(User::class)->create();

    	$response = $this->actingAs($user)
    					->get(route('admin.index'));

    	$response->assertStatus(200); //No redirection
    }

    
}
