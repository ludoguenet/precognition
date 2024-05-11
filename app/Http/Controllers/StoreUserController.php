<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

final class StoreUserController extends Controller
{
    public function __invoke(
        Request $request,
    ) {
        $validated = $request->validate(
            [
                'name' => 'required|string',
                'email' => 'required|email',
                'avatar' => 'nullable|mimes:jpeg,jpg,png,gif,svg|max:10000',
            ],
        );

        $validated['avatar']->store('public/avatars');

        return response()->json([
           'message' => 'User created with ' . $validated['email'] . '!',
        ]);
    }
}
