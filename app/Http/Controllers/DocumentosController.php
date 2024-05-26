<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documento;

class DocumentosController extends Controller
{
    public function index()
    {
        return view('documentos.index');
    }

    /**
     * Mostrar el form para crear un nuevo usuario.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $input = $request->all();
        
        // // Call the create method from CreateNewUser
        // $user = $this->createNewUser->create($input);
        
        // // Return a response or redirect as necessary
        // return redirect()->route('dashboard')->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
