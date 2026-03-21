<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\User;
use App\Models\Group;
use App\Jobs\BroadcastToGroup;
use Illuminate\Support\Facades\Queue;

class GroupBroadcastTest extends TestCase
{
    use RefreshDatabase;

    public function test_a_user_can_belong_to_multiple_groups()
    {
        $user = User::factory()->create();
        $groups = Group::factory()->count(3)->create();

        $user->groups()->attach($groups);

        $this->assertCount(3, $user->groups);
    }

    public function test_a_group_can_have_multiple_users()
    {
        $group = Group::factory()->create();
        $users = User::factory()->count(3)->create();

        $group->users()->attach($users);

        $this->assertCount(3, $group->users);
    }

    public function test_broadcast_job_is_dispatched()
    {
        Queue::fake();

        $user = User::factory()->create();
        $group = Group::factory()->create();
        $group->users()->attach($user);

        BroadcastToGroup::dispatch($group, $user, 'Hello world');

        Queue::assertPushed(BroadcastToGroup::class, function ($job) use ($group, $user) {
            return $job->group->id === $group->id && $job->sender->id === $user->id;
        });
    }
}
