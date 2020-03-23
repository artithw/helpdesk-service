@extends('user.layouts.users')

@section('content')
<ticket-widget  api ={{ Auth::user()->api_token }} user="{{Auth::user()->username}}" ></ticket-widget>
@endsection

@section('scripts')

@endsection
