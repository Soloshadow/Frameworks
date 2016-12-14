@extends('layouts.master')

@section('sidebar')
    @parent
        <p>This is the appended sidebar to the parent</p>
    @endsection

@section('content')
        <h1>Login</h1>
    @endsection