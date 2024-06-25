@extends('layouts.helloapp')

@section('title','Index')
@section("menubar")
    @parent
    Index
@endsection

@section('content')
    <p>Index Page</p>
    <p>---- sample ---- </p>
@endsection

@section("footer")
    copyright 2024 kmjak
@endsection