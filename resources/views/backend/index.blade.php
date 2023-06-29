@extends('layouts.backend')
@section('content')
    <h1>Welcome back {{Auth::user()->first_name}}</h1>
@endsection


