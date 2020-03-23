@extends('staff.layouts.users')

@section('content')

        <staff-table staffname="{{Auth::user()->name}}" staffid="{{Auth::user()->id}}"></staff-table>


@endsection
@section('scripts')

@endsection

