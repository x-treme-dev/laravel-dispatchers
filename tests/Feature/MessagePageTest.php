<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MessagePageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testMessagePageStatus()
    {
        $response = $this->post('/message');
        // 302 - статус временного перенаправления
        // получили сообщение о незаполненных полях формы 
        $response->assertStatus(302);
    }

    public function testClickLinkRedirectToDispatcherHomePage()
    {
        $response = $this->from('/message')->get('/');

        $response->assertStatus(200);
     } 

     /*public function testOutDataFromControllerToMessagePage()
     {
        
     }*/
}