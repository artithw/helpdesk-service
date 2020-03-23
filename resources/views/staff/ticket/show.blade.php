@extends('staff.layouts.users')

@section('content')
<staff-ticket-table staffname="{{Auth::user()->name}}" id="{{$id}}"></staff-ticket-table>
@endsection

@section('scripts')

@endsection
