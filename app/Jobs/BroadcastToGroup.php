<?php

namespace App\Jobs;

use App\Models\Group;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;

class BroadcastToGroup implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public Group $group,
        public User $sender,
        public string $message
    ) {}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $this->group->users()->each(function (User $user) {
            Log::info("Broadcasting to User {$user->id} ({$user->email}) in Group {$this->group->name}: Sender ({$this->sender->email}) says: {$this->message}");
        });
    }
}
