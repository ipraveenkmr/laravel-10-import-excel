<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\TodosImport;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function import(Request $request)
    {
        $file = $request->file('excel_file');

        $this->validate($request, [
            'excel_file' => 'required|mimes:xlsx,xls'
        ]);

        try {
            Excel::import(new TodosImport, $file);
            return redirect()->back()->with('success', 'Data Imported! ');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error importing data: ', $e->getMessage());
        }
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        //
    }
}
