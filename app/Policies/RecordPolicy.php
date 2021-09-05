<?php

namespace App\Policies;

use App\Models\Record;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RecordPolicy
{
    use HandlesAuthorization;

    /**
     * Determine if the given user can view the given record.
     *
     * @param  User $user
     * @param  Record $record
     * @return bool
     */
    public function view(User $user, Record $record)
    {
        return $user->id === $record->user_id;
    }
}
