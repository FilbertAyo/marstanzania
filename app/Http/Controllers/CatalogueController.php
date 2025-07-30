<?php

namespace App\Http\Controllers;

use App\Models\Catalogue;
use App\Models\CatalogueFile;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    public function redirect()
    {
        return redirect()->route('login');
    }

    public function catalogue()
    {
       $catalogues = Catalogue::with('latestFile')->get();

        return view('frontend.catalogue', compact('catalogues'));
    }

    public function index()
    {
        $catalogues = Catalogue::all();
        return view('backend.catalogue.index', compact('catalogues'));
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:catalogues,name',
            'logo' => 'required|image|max:2048',
        ]);

        $logoPath = $request->file('logo')->store('logo', 'public');

        Catalogue::create([
            'name' => $request->name,
            'logo' => $logoPath,
        ]);

        return redirect()->back()->with('success', 'Catalogue added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $catalogue = Catalogue::findOrFail($id);
        return view('backend.catalogue.show', compact('catalogue'));
    }


    public function storeFile(Request $request, $catalogueId)
    {
        $request->validate([
            'file' => 'required|mimes:pdf|max:2048',
            'user_id' => 'required|string'
        ]);

        $catalogue = Catalogue::findOrFail($catalogueId);

        // Expire existing visible file
        CatalogueFile::where('catalogue_id', $catalogueId)
            ->where('status', 'visible')
            ->update(['status' => 'expired']);

        $filePath = $request->file('file')->store('catalogue_files', 'public');

        // Save new file as visible
        CatalogueFile::create([
            'catalogue_id' => $catalogueId,
            'file_path' => $filePath,
            'status' => 'visible',
            'user_id' => $request->user_id
        ]);

        return redirect()->back()->with('success', 'New catalogue file uploaded.');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Catalogue $catalogue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Catalogue $catalogue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Catalogue $catalogue)
    {
        //
    }
}
