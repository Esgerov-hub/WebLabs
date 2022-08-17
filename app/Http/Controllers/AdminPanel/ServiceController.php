<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPanel\ServicesRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::orderBy('id','desc')->get();

        return view('admin.services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServicesRequest $request)
    {
        try {
            if($request->hasFile('image')){
                $image = Storage::putFile('public/serviceImage',$request->file('image'));
            }else{
                $image = NULL;
            }
            $service = new Service();
            $service->image = $image;
            $service->title = $request->title;
            $service->text = $request->text;
            $service->save();

            return redirect()->back()->with('messages','Məlumatınız əlavə edildi!');
        }catch (\Exception $exception)
        {
            return $exception->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(ServicesRequest $request, Service $service)
    {
        try {
            if($request->hasFile('image')){
                $image = Storage::putFile('public/serviceImage',$request->file('image'));;
                $service->image = $image;
                $service->save();
            }
            $service->title = $request->title;
            $service->text = $request->text;
            $service->save();

            return redirect()->back()->with('messages','Məlumatınız düzəliş edildi!');

        }catch (\Exception $exception)
        {
            return $exception->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        try {
            $service->delete();

            return redirect()->back()->with('messages','Məlumatınız ləvğ edildi!');
        }catch (\Exception $exception)
        {
            return  $exception->getMessage();
        }
    }
}
