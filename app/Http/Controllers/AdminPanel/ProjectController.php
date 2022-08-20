<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('id','desc')->get();

        return view('admin.projects.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.projects.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            if($request->hasFile('image')){
                $image = Storage::putFile('public/projectImage',$request->file('image'));
            }else{
                $image = NULL;
            }
            $project = new Project();
            $project->image = $image;
            $project->title = $request->title;
            $project->url = $request->url;
            $project->text = $request->text;
            $project->category_id = $request->category_id;
            $project->save();

            return redirect()->back()->with('messages','Məlumatınız əlavə edildi!');
        }catch (\Exception $exception)
        {
            return $exception->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $categories = Category::all();
        return view('admin.projects.edit',compact('project','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $regex = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';
        $request->validate([
//            'image' => 'required|string|mimes:jpeg,png,jpg,gif,svg',
            'title' => 'required|string:100',
//            'text' => 'some|required|text',
            'category_id' => 'required|integer',
            'url' => 'required|url|regex:'.$regex
        ]);
        try {
            if($request->hasFile('image')){
                $image = Storage::putFile('public/projectImage',$request->file('image'));;
                $project->image = $image;
                $project->save();
            }
            $project->title = $request->title;
            $project->url = $request->url;
            $project->text = $request->text;
            $project->category_id = $request->category_id;
            $project->save();

            return redirect()->back()->with('messages','Məlumatınız düzəliş edildi!');

        }catch (\Exception $exception)
        {
            return $exception->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        try {
            $project->delete();

            return redirect()->back()->with('messages','Məlumatınız ləvğ edildi!');
        }catch (\Exception $exception)
        {
            return  $exception->getMessage();
        }
    }
}
