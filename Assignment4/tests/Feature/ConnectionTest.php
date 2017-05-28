<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class ConnectionTest extends TestCase
{
    /**
    * A basic test example.
    *
    * @return void
    */
    public function testWelcome()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    
    public function testBlog()
    {
        $response = $this->get('/blog');
        $response->assertStatus(200);
    }
    
    public function testTag()
    {
        $response = $this->get('/tag');
        $response->assertStatus(200);
    }
    
    public function testBlogCreate()
    {
        $response = $this->get('/blog/create');
        $response->assertStatus(302);
    }
    
    public function testTagCreate()
    {
        $response = $this->get('/tag/create');
        $response->assertStatus(302);
    }
    
    
}