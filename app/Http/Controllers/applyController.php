<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use App\AddVersity;
use App\ScoreMarks;
use App\Apply;

class applyController extends Controller
{
	
	 public function __construct()
    {
        $this->middleware('auth');
    }
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$data = AddVersity::all();
		
		
        return view('apply', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    
	    $count = 1;
		$vasity = $request->varsity_id;
        $id = $request->name_id;
		$school = $request->school;
		$course = $request->course;
		$accounting = $request->Accounting;
		$computer = $request->Computer;
		$sesotho = $request->Sesotho;
		$business_Studies = $request->Business_Studies;
		$english = $request->English;
		$mathematics = $request->Mathematics;
		$physical_Science = $request->Physical_Science;
		$biology  = $request->Biology;
		
		$cat = Apply::where('name_id', $id)->count();
		
		
		
		if($cat <= 2){
		
		if($mathematics >= 7 && $english >= 7){
			
			
			
			
			
			
			
			Apply::create([
			        'name_id' => $id,
					'varsity_id' => $vasity,
					'school' => $school,
					'course' => $course,
					'accounting' => $accounting,
		            'computer' => $computer,
		            'sesotho' => $sesotho,
		            'business_Studies' => $business_Studies,
		            'english' => $english,
		            'mathematics' => $mathematics,
		            'physical_Science' => $physical_Science,
		            'biology'  => $biology,
					
			 
			 ]); 
			
				 return redirect()->back()->with('success', 'You have successfully applied!');
		
			
			
		}
		
		else{
			 return redirect()->back()->with('error', 'Mathematics Or English Language Should be grade C or Above!');
		}
		
		}
		
		else{
			 return redirect()->back()->with('error', 'Maximum of two application for institute!');
		
			
		}
		
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
