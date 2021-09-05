<?php

namespace App\Repositories;

use App\Models\Record;
use App\Models\User;

class RecordRepository
{
    /**
     * Get all of the records for a given user.
     *
     * @param  User $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return Record::where('user_id', $user->id)
            ->orderBy('created_at', 'asc')
            ->get();
    }

    public function showRecord($id)
    {
        return Record::where('id', $id)->get();
    }
}
