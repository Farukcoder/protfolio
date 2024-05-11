<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::with('information')->latest()->get();
        $informations = Information::latest()->get();

        return view('admin.project', compact('informations', 'projects'));
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
        $request->validate([
            'information_id' => 'bail|required',
            'title' => 'bail|required',
            'technology' => 'bail|required',
        ]);

        $data = [
            'information_id' => $request->information_id,
            'title' => $request->title,
            'client' => $request->client,
            'technology' => $request->technology,
            'url' => $request->url,
        ];

        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = "PR". time(). '.' . $extension;

            ///image resize
            $manager = new ImageManager(new Driver());
            $photo = $manager->read($file);
            $photo->resize(1349, 643)->save(public_path('admin/assets/photo/project'. $filename));

            $data['image'] = $filename;
        }

        Project::create($data);

        $notify = ['message'=> 'Project Save Successfully', 'alert-type' => 'success'];

        return redirect()->back()->with($notify);
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
        $request->validate([
            'information_id' => 'bail|required',
            'title' => 'bail|required',
            'technology' => 'bail|required',
        ]);

        $data = [
            'information_id' => $request->information_id,
            'title' => $request->title,
            'client' => $request->client,
            'technology' => $request->technology,
            'url' => $request->url,
        ];

        if ($request->hasFile('image')) {

            if ($request->old_thumb) {
                File::delete(public_path('admin/assets/photo/project' . $request->old_image));
            }

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = "PR". time(). '.' . $extension;

            ///image resize
            $manager = new ImageManager(new Driver());
            $photo = $manager->read($file);
            $photo->resize(1349, 643)->save(public_path('admin/assets/photo/project'. $filename));

            $data['image'] = $filename;
        }

        $project = new Project();
        $project->update($data);

        $notify = ['message'=> 'Project Update Successfully', 'alert-type' => 'success'];

        return redirect()->back()->with($notify);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::findOrfail($id);

        $project->delete();

        $notify = ['message'=> 'Project Delete Successfully', 'alert-type' => 'success'];
        return redirect()->back()->with($notify);
    }
}