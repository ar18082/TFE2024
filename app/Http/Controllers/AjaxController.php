<?php

namespace App\Http\Controllers;

use App\Models\Custody_criteria;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function formInscriptionDescription($name)
    {

        return view('inscription.form.descriptionForm', compact('name'));
    }

    public function formInscriptionParent()
    {
        return view('inscription.form.ParentForm');
    }

    public function formInscriptionBabysitter()
    {
        $custodies = Custody_criteria::all();
        return view('inscription.form.BabysitterForm' , compact('custodies'));
    }


    public function formInscriptionChildren($name)
    {

        return view('inscription.form.Children', compact('name'));
    }
}
