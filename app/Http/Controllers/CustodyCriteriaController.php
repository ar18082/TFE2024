<?php

namespace App\Http\Controllers;

use App\Models\Custody_criteria;
use http\Message;
use Illuminate\Http\Request;

class CustodyCriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $criterias = Custody_criteria::all();

        return view('custody_criteria.index', compact('criterias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $criteria = new Custody_criteria();

        return view('custody_criteria.form', compact('criteria'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'custody_criteria' => 'required',
            'description' => 'required',
        ], [
            'custody_criteria.required' => 'Le critère est obligatoire',
            'description.required' => 'La description est obligatoire',
        ]);

        $criteria = new Custody_criteria();
        $criteria->custody_criteria = $request->custody_criteria;
        $criteria->description = $request->description;
        $criteria->valide = false;
        $criteria->save();

        $message = 'critère de garde créé avec succès ! en attente de validation par l\'administrateur';

        return redirect()->route('custody_criteria.index')->with('success', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $criteria = Custody_criteria::find($id);

        return view('custody_criteria.show', compact('criteria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $criteria = Custody_criteria::find($id);

        return view('custody_criteria.form', compact('criteria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'custody_criteria' => 'required',
            'description' => 'required',
        ], [
            'custody_criteria.required' => 'Le critère est obligatoire',
            'description.required' => 'La description est obligatoire',
        ]);

        $criteria = Custody_criteria::find($id);
        $criteria->custody_criteria = $request->custody_criteria;
        $criteria->description = $request->description;
        $criteria->valide = false;
        $criteria->save();

        $message = 'critère de garde modifié avec succès ! en attente de validation par l\'administrateur';

        return redirect()->route('custody_criteria.index')->with('success', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $criteria = Custody_criteria::find($id);
        $criteria->delete();

        $message = 'critère de garde supprimé avec succès !';

        return redirect()->route('custody_criteria.index')->with('success', $message);
    }
}
