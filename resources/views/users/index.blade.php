@extends('layouts.default')

@section('title', 'All users')

@section('content')
    <h1>All users</h1>
    @if($users->count() > 0)
        @foreach($users as $user)
            <li>{!! link_to("/users/{$user->email}",$user->email) !!}</li>
        @endforeach
    @else
        <p>
            No matches
        </p>
    @endif
@stop