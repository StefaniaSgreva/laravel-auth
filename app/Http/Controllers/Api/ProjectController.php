<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        // $projects = Project::all();
        // $projects = Project::paginate(5);
        // $projects = Project::with('category', 'tags')->get(); //li prende tutti se non lo voglio paginato
        $projects = Project::with('category', 'tags')->paginate(3); //di solito non si fa così per tutti -> si fa per il singolo projects, non si scaricano i dettagli per tutti i project in all
        return response()->json([
            'success' => true,
            'results' => $projects //sto passando solo i project e non category e tag -solo category id-
        ]);
    }
    public function show($slug)
    {
        $project = Project::with('category', 'tags')->where('slug', $slug)->first();
        if ($project) {
            return response()->json([
                'success' => true,
                'results' => $project
            ]);
        } else {
            return response()->json([
                'success' => false,
                'results' => 'No Project found'
            ]);
        }
    }
}