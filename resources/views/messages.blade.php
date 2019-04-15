@extends('layouts.app')

@section('content')
<h1>Messages</h1> 
@foreach($users as $message)
<ul class=list-group>
<li class="list-group-item">Name:{{$message->name}}</li>
<li class="list-group-item">Email:{{$message->email}}</li>
<li class="list-group-item">Mobile No:{{$message->mobile}}</li>
<li class="list-group-item">Message:{{$message->message}}</li>
</ul>
@endforeach
@endsection


@section('sidebar')
@parent
<p>this is append side bar</p>
@endsection