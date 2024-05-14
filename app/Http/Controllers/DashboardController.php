<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Information;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function home()
    {
        $isAdmin = Auth::user()->type == 1;

        $baseQueryInformation = $isAdmin ? new Information : Information::where('user_id', Auth::id());
        $baseQuerySkill = $isAdmin ? new Skill : Skill::where('user_id', Auth::id());
        $baseQueryEducation = $isAdmin ? new Education : Education::where('user_id', Auth::id());
        $baseQueryExperience = $isAdmin ? new Experience : Experience::where('user_id', Auth::id());
        $baseQueryProject = $isAdmin ? new Project : Project::where('user_id', Auth::id());

        $information_count = $baseQueryInformation->count();
        $skill_count = $baseQuerySkill->count();
        $education_count = $baseQueryEducation->count();
        $experience_count = $baseQueryExperience->count();
        $project_count = $baseQueryProject->count();

        return view('admin.dashboard', compact('information_count', 'skill_count', 'education_count', 'experience_count', 'project_count'));
    }

}
