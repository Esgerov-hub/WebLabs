<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPanel\AboutRequest;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::orderBy('id','desc')->get();

        return view('admin.abouts.index',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.abouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AboutRequest $request)
    {
//        dd($request->all());
        try {
            if($request->hasFile('image')){
                $image = Storage::putFile('public/aboutImage',$request->file('image'));
            }else{
                $image = NULL;
            }
            $about = new About();
            $about->image = $image;
            $about->title = $request->title;
            $about->text = $request->text;
            $about->save();

            return redirect()->back()->with('messages','Məlumatınız əlavə edildi!');
        }catch (\Exception $exception)
        {
            return $exception->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('admin.abouts.edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $request->validate([
            'title' => 'required|string:100',
            'text' => 'required'
        ]);
        try {
            if($request->hasFile('image')){
                $image = Storage::putFile('public/aboutImage',$request->file('image'));;
                $about->image = $image;
                $about->save();
            }
            $about->title = $request->title;
            $about->text = $request->text;
            $about->save();

            return redirect()->back()->with('messages','Məlumatınız düzəliş edildi!');

        }catch (\Exception $exception)
        {
            return $exception->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        try {
            $about->delete();

            return redirect()->back()->with('messages','Məlumatınız ləvğ edildi!');
        }catch (\Exception $exception)
        {
            return  $exception->getMessage();
        }
    }
}
