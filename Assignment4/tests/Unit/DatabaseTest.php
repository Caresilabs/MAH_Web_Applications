<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DatabaseTest extends TestCase
{
    public function testDatabaseContent()
    {
        $this->assertDatabaseHas('tags', [
            'name' => 'Random'
            ]);

        $this->assertDatabaseHas('comments', [
            'blogpost_id' => 1
            ]);

        $this->assertDatabaseHas('blogposts', [
            'title' => 'Why PHP should have died long time ago'
            ]);
    }
}
