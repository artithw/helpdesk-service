@extends('staff.layouts.users')

@section('content')
<staff-edit-table staffname="{{Auth::user()->name}}" id="{{$id}}"></staff-edit-table>
@endsection

@section('scripts')

@endsection
