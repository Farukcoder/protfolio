<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\File;
use Intervention\Image\Drivers\Gd\Driver;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $informations = Information::orderby('id', 'desc')->get();

        return view('admin.information.list', compact('informations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.information.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'photo' => 'required|image',
            'age' => 'required|integer|min:0',
            'nationality' => 'required|string|max:255',
            'address' => 'required|string',
            'phone' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:informations',
            'skype' => 'string|max:255',
            'whatsapp' => 'string|max:255',
            'linkedin' => 'string|max:255',
            'facebook' => 'string|max:255',
            'is_freelancer' => 'boolean',
            'language' => 'required',
            'project' => 'integer|min:0',
            'customer' => 'integer|min:0',
            'description' => 'required|string',
        ]);

        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'age' => $request->age,
            'nationality' => $request->nationality,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'skype' => $request->skype,
            'whatsapp' => $request->whatsapp,
            'linkedin' => $request->linkedin,
            'facebook' => $request->facebook,
            'is_freelancer' => $request->is_freelancer,
            'languages' => json_encode($request->language),
            'project' => $request->project,
            'customer' => $request->customer,
            'description' => $request->description
        ];

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;

            ///image resize
            $manager = new ImageManager(new Driver());
            $photo = $manager->read($file);
            $photo->resize(500, 500)->save(public_path('admin/assets/photo/'. $filename));

            $data['photo'] = $filename;
        }

        Information::create($data);

        $notify = ['message' => 'Information added successfully!', 'alert-type' => 'success'];

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
        $information = Information::findOrFail($id);

        return view('admin.information.edit', compact('information'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $information = Information::findOrFail($id);

        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'photo' => 'required|image',
            'age' => 'required|integer|min:0',
            'nationality' => 'required|string|max:255',
            'address' => 'required|string',
            'phone' => 'required|string|max:20',
            'email' => 'required|string|email|unique:informations,email,'. $information->id .'|max:255',
            'skype' => 'string|max:255',
            'whatsapp' => 'string|max:255',
            'linkedin' => 'string|max:255',
            'facebook' => 'string|max:255',
            'is_freelancer' => 'boolean',
            'language' => 'required',
            'project' => 'integer|min:0',
            'customer' => 'integer|min:0',
            'description' => 'required|string',
        ]);

        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'age' => $request->age,
            'nationality' => $request->nationality,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'skype' => $request->skype,
            'whatsapp' => $request->whatsapp,
            'linkedin' => $request->linkedin,
            'facebook' => $request->facebook,
            'is_freelancer' => $request->is_freelancer,
            'languages' => json_encode($request->language),
            'project' => $request->project,
            'customer' => $request->customer,
            'description' => $request->description
        ];

        if ($request->hasFile('photo')) {

            if($request->old_photo) {
                File::delete(public_path('admin/assets/photo/' . $request->old_photo));
            }

            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;

            ///image resize
            $manager = new ImageManager(new Driver());
            $photo = $manager->read($file);
            $photo->resize(500, 500)->save(public_path('admin/assets/photo/'. $filename));

            $data['photo'] = $filename;
        }

        Information::where('id', $id)->update($data);

        $notify = ['message'=> 'Information Update Successfully', 'alert-type' => 'success'];

        return redirect()->back()->with($notify);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $information = Information::findOrFail($id);

        $information->delete();

        $notify = ['message' => 'Information successfully delete', 'alert-type' => 'error'];

        return redirect()->back()->with($notify);
    }

    public function statusUpdate(Request $request, string $id)
    {

        Information::where('is_active', 1)->update(['is_active' => 0]);

        Information::where('id', $id)->update(['is_active' => $request->is_active]);

        $notify = ['message'=> 'Status Update Successfully', 'alert-type' => 'success'];

        return redirect()->back()->with($notify);
    }


}
