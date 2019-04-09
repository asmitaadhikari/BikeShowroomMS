<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class bikeTest extends TestCase
{
    /**
     * A basic test example.
     *@test
     * @return void
     */
    public function testUserlogin()
    {
        $email="daisyna@gmail.com";
        $password="123456";

        $response=$this->call("GET","/login");
        $this->assertEquals(200,$response->status());
    }
    public function testUserregistration()
    {
        
        $name="Ashutosh Adhikari";
        $email="ashuadhikari62@gmail.com";
        $password="123456";
        $confirmpassword="123456";

        $response=$this->call("POST","/register");
        $this->assertEquals(302,$response->status());
    }
    public function testwelcome()
    {
        
        $response=$this->call("GET","/welcome");
        $this->assertEquals(200,$response->status());
    }
    public function testProducttype()
    {
        
        $response=$this->call("POST","/ProductCategory");
        $this->assertEquals(200,$response->status());
    }
}