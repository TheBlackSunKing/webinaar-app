<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;
use App\Models\Reunion;
use log;
class ReunionController extends Controller
{
    //
    public function create(): Response
    {
        return Inertia::render('Reunions');
    }
    public function index()
    {
        return Reunion::all();

        //return  request()->input('page', 1) - 1 * $reunions->perPage();
        //return $reunions;
    }
    public function destroy($id)
    {
        Reunion::find($id)->delete();

        return redirect()->route('reunions.index')
            ->with('success', 'Reunion deleted successfully');
    }
}
