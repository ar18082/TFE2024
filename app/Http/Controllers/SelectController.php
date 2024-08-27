<?php

namespace App\Http\Controllers;

use App\Models\PostalCode_Localite;
use Illuminate\Http\Request;

class SelectController extends Controller
{
    public function searchByCPOrLocalite(Request $request)
    {
        $data = [];

        if($request->has('q')){
            $search = $request->q;


            if (is_numeric($search)) {
                // Si la valeur est numérique, recherche par Codecli
                $data = PostalCode_Localite::where('postCode', 'LIKE', "%$search%")->get();
            } else {
                // Si la valeur n'est pas numérique, recherche par nom
                $data = PostalCode_Localite::where('localite', 'LIKE', "%$search%")->get();
            }



        }
        //$data = CodePostelb::all();


        return response()->json($data);

    }
}
