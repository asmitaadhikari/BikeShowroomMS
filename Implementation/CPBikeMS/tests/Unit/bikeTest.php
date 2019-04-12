<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\ModelProductType;
use App\Productmodel;


class bikeTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *@test
     * @return void
     */
    public function testUserlogin()
    {
        $email="asmitaadhikari62@gmail.com";
        $password="123456";

        $response=$this->call("GET",'/login',[
        'email'=>$email,
        'password'=>$password,
        ]);
        $this->assertEquals(200,$response->status());
    }
    public function testUserregistration()
    {
        $response=$this->call("POST",'/register',[
            'name'=>"Asmita Adhikari",
            'email'=>"asmitaadhikari62@gmail.com",
            'password'=>"123456",
            'confirmpassword'=>"123456",
        ]);
        $this->assertEquals(302,$response->status());
    }
   

public function testInsertProductType()
{
    $producttype=ModelProductType::create([
        'producttypename'=>"Bikes",
        
]);
    $this->assertEquals('Bikes',$producttype->producttypename);
}

public function testInsertProduct()
{
    $product=Productmodel::create([
        'name'=>"Sports",
        'cc'=>"140",
        'fuel'=>"12",
        'gear'=>"12",
        'speed'=>"89",
        'technology'=>"latest",
        'tyre'=>"fuga",
        'price'=>"1400",
        'img'=>"g1.jpg",
        'stroke'=>"100",
        'Clutch'=>"102",
        'warranty'=>"1",
        'producttypeid'=>"2",
        
]);
    $this->assertEquals('Sports',$product->name);
}

}