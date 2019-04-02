<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ParticipateInForum extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_authenticated_user_may_participate_in_forum_threads()
    {

        // given we have an authenticated user
        $user = factory('App\User')->create();
        $this->be($user);
        // and an existing thread
        $thread = factory('App\Thread')->create();
        // when the user adds a reply to the thread
        $reply = factory('App\Reply')->create();
        $this->post('/threads/' . $thread->id . '/replies', $replies->toArray());
        // then their reply should be visible on the page
        $this->get($thread->path());
    }

}