<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ParticipateInForum extends TestCase
{
    /** @test */
    public function an_authenticated_user_may_participate_in_forum_threads()
    {
        // given we have an authenticated user
        $user = factory('App\User')->create();
        // and an existing thread
        
        // when the user adds a reply to the thread
        // then their reply should be visible on the page
    }
}
