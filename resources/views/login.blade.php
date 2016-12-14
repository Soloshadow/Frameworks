@extends('layouts.master')

@section('sidebar')
    @parent
        <p>This is the appended sidebar to the parent</p>
    @endsection

@section('content')
        <h1>Login</h1>
        <?php
        Form::open(['url' => 'foo/bar']);
            echo Form::label('email', 'E-Mail Address: ');
            echo Form::text('email','Example@hotmail.com');
                echo '<br/>';
            echo Form::label('username','Username: ');
            echo Form::text('username','Username');
         Form::close()
    ?>
    @endsection