<?php

namespace App\Http\Controllers\WebLabs;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPanel\ContactRequest;
use App\Models\About;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('id','desc')->get();
        return view('webLabs.index',compact('services'));
    }

    public function about()
    {
        $abouts = About::orderBy('id','desc')->get();
        return view('webLabs.about',compact('abouts'));
    }
    public function service()
    {
        $services = Service::orderBy('id','desc')->get();
        return view('webLabs.service',compact('services'));
    }

    public function serviceDetails($title)
    {
        $service = Service::where('title',$title)->first();
        return view('webLabs.service-details',compact('service'));
    }

    public function project(Request $request)
    {
        $categories = Category::all();
        $search = $request['search'];
        if (isset($search))
        {
            $projects = Project::where('title','Like',"%$search%")->get();
        }else{
            $projects = Project::orderBy('id','desc')->get();
        }
        return view('webLabs.project',compact('projects','categories','search'));
    }

    public function contact()
    {
        return view('webLabs.contact');
    }

    public function contactPost(ContactRequest $request)
    {
        try {
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->surname = $request->surname;
            $contact->phone = $request->phone;
            $contact->email = $request->email;
            $contact->messages = $request->messages;
            $contact->save();

            Mail::send([], [],

                function ($message) use ($request) {
//                    $message->from('Weblabs', 'test');
                    $message->to('info@weblabs.az');
                    $message->setBody(
                        "Soyad,Ad: " . $request->name .' '. $request->surname.
                        "<br />Mobil: " . $request->phone .
                        "<br />E-Po??t: " . $request->email .
                        "<br />M??tn: " . " " . $request->messages . '', 'text/html');

//                    dd($message);
                    $message->subject($request->name .' '.$request->surname. ' ' . 'mesaj gonderdi!');
                    return $message;
                });

            return redirect()->back()->with('messages','M??lumat??n??z u??urla g??nd??rildi!');

        }catch (\Exception $exception)
        {
            return $exception->getMessage();
        }
    }


}
