<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use App\User;
use Exception;


class ResetPassController extends Controller
{

    



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

           return view('auth.passwords.reset');     
    }


    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
    

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

     
        $email2 = $request->email;

        $updates = User::where('email', $email2)->first();

        
        $pass = bcrypt($request['password']);

        
                
            if ($updates->email == $email2) {

                $updates->password = $pass;
                
                $updates->save();

               return redirect()->back()->with('success', '  You Have Successfully Reset Your Password!');
      
      
            }

          else {
              return redirect()->back()->with('error', 'Your entered invalid email address!');
      
          

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
    public function update(Request $request)
    {
        
            try {
                
                $email = $request->email;


               $user = User::all();
                 
               foreach ($user as $key => $value) {
                
                  if ($value->email == $email) {

                     return redirect()->back()->with('success', ' Please Enter New Password!');
            
            
                  }

                else {
                    return redirect()->back()->with('error', 'Your entered invalid email address!');
            
                }

               }


            
              


            } catch (Exception $th) {
                return redirect()->back()->with('error', 'Something went wrong, Try again later!');
            
            }
        


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
