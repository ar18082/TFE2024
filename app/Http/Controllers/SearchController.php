<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchForm(Request $request)
    {

        $name = $request->session()->get('name');
        $codePost = $request->session()->get('codePost');
        $selectedCriteria = $request->session()->get('selectedCriteria');

        $searchResults = User::with('postal_code_localite', 'babySitterUser', 'image', 'custodyCriteria')
            ->where('babysitter_user_id', '!=', null)
            ->where('name', 'like', '%' . $name . '%')
            ->orWhere('firstname', 'like', '%' . $name . '%')
            ->where(function ($query) use ($selectedCriteria) {
                if ($selectedCriteria) {
                    $query->whereHas('custodyCriteria', function ($query) use ($selectedCriteria) {
                        $query->whereIn('criteria_id', $selectedCriteria);
                    });
                }
            })
            ->where('postal_code_localite_id', $codePost)
            ->paginate(5);

        return view('search.searchResult', compact('searchResults'));
    }

}
