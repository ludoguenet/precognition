<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;

final class StoreUserController extends Controller
{
    public function __invoke(
        StoreUserRequest $request,
    ) {
        $validated = $request->validated();

        $validated['avatar']->store('public/avatars');

        return response()->json([
           'message' => 'User created with ' . $validated['email'] . '!',
        ]);
    }
}
