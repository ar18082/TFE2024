<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;


class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {

        $data = $request->getPathInfo();
        $id = explode('/', $data);

        return $request->expectsJson() ? null : route('inscription', ['user' => $id[2]]);
    }
}
