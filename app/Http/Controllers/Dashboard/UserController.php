<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Traits\UploadImage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
       
        
       // $input- = Carbon::createFromFormat('m/d/Y', $request->birthday)->format('Y-m-d');
       // dd($users);
        return view('dashboard.user',compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('dashboard.cruduser.createuser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $users = User::all();
        
        $input = $request->all();
        if($request->hasFile('avatar'))
        {
            $destination_path = 'public/Linkimageproduct';
            $image = $request->file('avatar');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('avatar')->storeAs( $destination_path,$image_name);
            $input['avatar'] = $image_name;

        }
        $input['password'] = Hash::make($request->password);

        $input['birthday'] = Carbon::createFromFormat('d/m/Y', $request->birthday)->format('Y-m-d');
       // dd( $input['birthday']);
       // $birthday = date('Y-m-d H:i:s');
        //dd($input);
        User::create($input);
        return redirect()->route('user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        //dd($user['birthday']);
        //$user['birthday'] = Carbon::createFromFormat('Y-m-d', $user->birthday)->format('m/d/Y');
        //$user['birthday'] = Carbon::createFromFormat('d/m/Y', $request->birthday)->format('Y-m-d');
        return view('dashboard.cruduser.detailuser',compact('user'));
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
