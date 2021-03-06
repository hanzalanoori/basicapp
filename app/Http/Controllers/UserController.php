<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use DB;
use App\Http\Requests;




class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         $users = DB::table('contact')->get();

        return view('messages', ['users' => $users]);

       

}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("contact");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $this->validate($request, [
            'name'=>'required',
            'email'=> 'required',
            'number'=>'required',
            'message'=> 'required'
        ]);
       

         
          $name = $request->input('name');
          $email = $request->input('email');
          $mobile = $request->input('number');
          $message = $request->input('message');
         
          $data = array('name'=>$name,'email'=>$email,'mobile'=>$mobile,'message'=>$message);
          DB::table('contact')->insert($data);
         return redirect('/')->with('success', 'Data is inserted successfully');
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
       
        $users = DB::table('contact')->where('id',$id)->get();
        return view('editMessages', ['users' => $users]);
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
        $data = $this->validate($request, [
            'name'=>'required',
            'email'=> 'required',
            'number'=>'required',
            'message'=> 'required'
        ]);
       

         
          $name = $request->input('name');
          $email = $request->input('email');
          $mobile = $request->input('number');
          $message = $request->input('message');
         
          $data = array('name'=>$name,'email'=>$email,'mobile'=>$mobile,'message'=>$message);
          DB::table('contact')->where('id',$id)->update($data);
         return redirect('/messages')->with('success', 'Data is Updated successfully');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = DB::table('contact')->where('id',$id)->delete();
        return redirect('/messages')->with('Deleted', 'Data is Deleted successfully');

    }
}
