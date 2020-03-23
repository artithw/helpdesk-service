<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Ticket;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */

    public function index()
    {
       $ticket = DB::table('tickets')
       ->select(['tickets.id', 'tickets.user', 'tickets.name_th','tickets.last_th'
       ,'tickets.subject','tickets.type','tickets.ticket_status','tickets.staff'
       ,'users.username' ,'tickets.created_at'])
       ->leftJoin('users', 'tickets.staff', '=', 'users.id')
       ->get();
        //dd($ticket);
        //return response()->json( $ticket);
        //.format('d/m/Y')
       // $ticket =  DB::table('tickets')
     //->select(['users.name', 'communities.title', 'communities.content'])
     //->join('users', 'users.id', '=', 'tickets.staff')
     //->where('users.name', 'like', '%' . $request->name . '%')
     //->get();
     //return response()->json( $ticket);
     //$ticket = Ticket::all();
     return response()->json( $ticket);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = User::where('username', $request->get('name'))->first();
        //dd($user->name);
        $ticket=new Ticket();
        $ticket->user=$user->name;
        $ticket->name_th=$user->firstnamethai;
        $ticket->last_th=$user->lastnamethai;
        $ticket->name_en=$user->cn;
        $ticket->last_en=$user->sn;
        $ticket->division=$user->department;
        $ticket->phone=$request->get('phone');
        $ticket->subject=$request->get('subject');
        $ticket->trouble=$request->get('trouble');
        $ticket->ticket_status="0";
        $ticket->staff="0";
        $ticket->save();
        //return redirect()->route('ticket.index');
        return ['redirect' => route('ticket.index')];
        //return response()->json($ticket);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ticket = DB::table('tickets')
        ->select(['tickets.id', 'tickets.user', 'tickets.name_th','tickets.last_th'
        ,'tickets.subject','tickets.trouble','tickets.type','tickets.ticket_status'
        ,'tickets.phone','users.username','tickets.staff' ,'tickets.created_at'])
        ->leftJoin('users', 'tickets.staff', '=', 'users.id')
        ->where('tickets.id','=',$id)
        ->get();
        //dd($ticket);
        return response()->json( $ticket);
    }

    public function addstaff(Request $ticket_id)
    {
        //dd($ticket_id->get('user_id'));
        $ticket = Ticket::findOrFail($ticket_id->get('ticket_id'));
        $ticket->staff = $ticket_id->get('user_id');
        $ticket->ticket_status = '1';
        $ticket->update();

        return response()->json($ticket);
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
