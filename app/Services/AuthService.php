<?php

declare(strict_types=1);

namespace App\Services;

// Request
use Illuminate\Http\Request;
// Models
use App\Models\User;
// Others
use Carbon\Carbon;

class AuthService
{
    /**
     * Fetch User By Id
     *
     * @method fetchUserById
     *
     * @param integer $id
     * @return App\Models\User
     */
    public function fetchUserById(int $id): ?User
    {
        return User::selectRaw('
            id, 
            email, 
            name,
            status
        ')
        ->with('roles')
        ->where('id', $id)
        ->first();
    }
    
    /**
     * Fetch User By Email
     *
     * @method fetchUserByEmail
     *
     * @param string $email
     * @return App\Models\User
     */
    public function fetchUserByEmail(string $email): ?User
    {
        return User::selectRaw('
            id, 
            email, 
            name,
            status
        ')
        ->with('roles')
        ->where('email', $email)
        ->first();
    }

    /**
     * Create User
     *
     * @method createUser
     *
     * @param Illuminate\Http\Request $request
     * @return App\Models\User
     */
    public function createUser(Request $request): User
    {
        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
    }

    /**
     * Update User Password
     *
     * @method updateUserPassword
     *
     * @param App\Models\User $user
     * @param Illuminate\Http\Request $request
     * @return bool
     */
    public function updateUserPassword(User $user, Request $request): bool
    {
        $user->password = bcrypt($request->password);
        $user->save();
        return true;
    }
}
