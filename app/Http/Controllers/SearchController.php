<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchForm(Request $request)
    {
        dd($request);

        return view('shared.searchForm');
    }
}
