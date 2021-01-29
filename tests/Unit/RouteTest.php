<?php

namespace Tests\Unit;

use Tests\TestCase;

class RouteTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    // public function testExample()
    // {
    //     $response = $this->get('/');
    //     $response->assertStatus(200);
    // }

     public function testDatabase(){
         $this->assertDataBaseHas('users',[
            'email'=>'jhon@gmail.com'
         ]);
     }


    // public function testJson(){
    //     $this->withoutMiddleware();
    //     $response = $this->json('POST', '/test');
    //     $response->assertStatus(200)
    //     ->assertJson(['name'=>'kalkidan']);;
    // }
}
