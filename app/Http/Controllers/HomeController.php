<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Information;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $informations = Information::orderBy('id', 'desc')->paginate(12);

        $information_count = Information::count();
        $skill_count = Skill::count();
        $education_count = Education::count();
        $experience_count = Experience::count();
        $project_count = Project::count();

        return view('web.home', compact('informations', 'information_count', 'skill_count', 'education_count', 'experience_count', 'project_count'));
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
    public function show(string $id)
    {
        $allInfo = Information::with(['skills', 'experiences', 'educations', 'projects'])->findOrfail(decrypt($id));

        return view('web.portfolio', compact('allInfo'));
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
