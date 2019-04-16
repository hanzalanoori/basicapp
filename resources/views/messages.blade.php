@extends('layouts.app')

@section('content')
<h1>Messages</h1> 
@foreach($users as $user)
<ul class=list-group>
<li class="list-group-item">Name:<b>{{ $user->name }}</b></li>
<li class="list-group-item">Email:{{ $user->email }}</li>
<li class="list-group-item">Mobile No:{{ $user->mobile }}</li>
<li class="list-group-item">Message:{{ $user->message }}</li>
<li class="list-group-item"><a href="/editMessages/{{ $user->id }}" ><button class = "btn btn-primary">Edit</button></a></li>
<li class="list-group-item"><a href="/delete/{{ $user->id }}" ><button class = "btn btn-danger">Delete</button></a></li>
</ul>
@endforeach
@endsection


@section('sidebar')
@parent
<p>this is append side bar</p>
@endsection