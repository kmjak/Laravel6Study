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
    <p>Controller value<br>'message' = {{$message}}</p>
    <p>ViewComposer value<br>'message' = {{$view_message}}</p>
@endsection

<!-- @section('users')
    @each('components.item',$data,'data')
@endsection -->
@section('users')
    <table>
        @foreach ($data as $d)
            <tr><th>{{$d['name']}}</th><td>{{$d['mail']}}</td></tr>
        @endforeach
    </table>
@endsection

@section("footer")
    copyright 2024 kmjak
@endsection