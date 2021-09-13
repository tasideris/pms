<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;


class EfeeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $response = Http::get(env('API_URL','localhost').'/api/fees'); 
        $fees = $response->json();
        
        return view('welcome',compact('fees'));
    }

    public function store(Request $request)
    {
        $application = $request->all();
        $response = Http::post(env('API_URL','localhost').'/api/requests', [
            'first_name' => $application['first_name'],
            'last_name' => $application['last_name'],
            'father_name' => $application['father_name'],
            'afm' =>  $application['afm'],
            'status' => 'pending',
            'fee_id' => $application['fee_types']
        ]);
        return redirect()->route('efee')->with('message','Submit successfull, application pending!');;  
    }


    public function admin(Request $request)
    {
        $response = Http::get(env('API_URL','localhost').'/api/requests'); 
        $requests = $response->json();

        return view('admin',compact('requests'));
    }


    public function updatesuccess(Request $request)
    {
        
        return view('admin')->with('message','Request status to success');
    }

    public function updatereject(Request $request)
    {
        
        return view('admin')->with('message','Request status to remove');
    }


    

}
