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
        $response = Http::get('http://tsideris.westeurope.cloudapp.azure.com:5000/api/fees'); 
        $fees = $response->json();
        
        return view('welcome',compact('fees'));
    }

    public function store(Request $request)
    {
        $application = $request->all();
        $response = Http::post('http://tsideris.westeurope.cloudapp.azure.com:5000/api/requests', [
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
        $response = Http::get('http://tsideris.westeurope.cloudapp.azure.com:5000/api/requests'); 
        $requests = $response->json();

        return view('admin',compact('requests'));
    }

    

}
