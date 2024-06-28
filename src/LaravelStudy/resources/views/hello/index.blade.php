@extends('layouts.helloapp')

@section('title','Index')
@section("menubar")
    @parent
    Index
@endsection

@section('content')
    <p>Index Page</p>
    <h3>---- compornent ----</h3>
    @component('components.message')
        @slot('msg_title')
        CAUTION!
        @endslot

        @slot('msg_content')
            this is message
        @endslot
    @endcomponent
    @include("components.message",['msg_title'=>'OK','msg_content'=>'sub view'])
@endsection
@section('test_content')
    <p>これは<middleware>google.com</middleware>へのリンクです</p>
    <p>これは<middleware>yahho.co.jp</middleware>へのリンクです</p>
@endsection


@section("footer")
    copyright 2024 kmjak
@endsection