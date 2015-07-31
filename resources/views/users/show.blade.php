@extends('layouts.defaultAdmin')

@section('title', 'Show user')

@section('content')
    <h1>Hello, {{ $user->email }}</h1>
@stop