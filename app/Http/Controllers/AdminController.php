<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ScoreMarks;
use App\AddVersity;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
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
    public function index(Request $request)
    {
            $varsity = AddVersity::all();
             $data = array();
            $role = Auth::user()->role;

            if($role == 'admin'){
				
				$astar = 10;
				$a = 9;
				$b = 8;
				$d = 6;
				$c = 7;
				$e = 5;
				$f = 0;
				$g = 0;
				$u = 0;

            ScoreMarks::create([
			        'A*' => $astar,
					'A' => $a,
					'B' => $b,
					'C' => $c,
					'D' => $d,
					'E' => $e,
					'F' => $f,
					'G' => $g,
					'U' => $u,
			 
			 ]); 

                return view('admin',compact('varsity'));

            }

            else{

                return redirect()->back()->with('error', 'Your are not authorized to view this page!');
            }


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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $docx = AddVersity::find($id);
		
		return view('showVarsity')->with([
		       'docx' => $docx
		]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        $dl = AddVersity::find($id);
		$dl->delete();
		
		   return redirect()->back()->with('success', 'Your are Successfully Deleted University!');
            
		
    }
}
