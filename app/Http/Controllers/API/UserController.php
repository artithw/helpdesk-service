<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        return response()->json( $users);
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
        $user=User::find($id);
        return response()->json($user);
    }

    public function edit($id)
    {
       // $user = DB::table('users')
       //       ->select(['users.id', 'users.name', 'users.email','users.firstnamethai'
       //                ,'users.lastnamethai','users.type','role_user.role_id' ])
       //       ->leftJoin('role_user', 'role_user.user_id', '=', 'users.id')
       //       ->where('id', $id)
       //       ->get();
              //dd($user);
              $roles = Role::all();
              $user = User::where('id', $id)->with('roles')->first();
              //$userrole = $user->roles->pluck('id');
        return response()->json($user);

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

    function getUser(Request $request)
    {
        //dd($request->user());
       return json_encode($request->user());
    }
}
