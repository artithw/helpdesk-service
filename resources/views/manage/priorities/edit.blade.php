@extends('layouts.manage')

@section('content')

<manage-edit-user  api ={{ Auth::user()->api_token }} id="{{$id}}" ></manage-edit-user>
@endsection


@section('scripts')


@endsection
