<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\View\View;

class Index extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        return view('index');
    }
}
