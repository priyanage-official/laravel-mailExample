<?php

namespace App\Http\Services;

use App\Models\User;

class UserService
{
    public function getAllUsers()
    {
        return User::orderBy('id')->get();
    }

    public function getSpecificUsers($id)
    {
        return User::find($id);
    }
}
