@extends('layouts.app')

@section('content')
<h1>Update Messages</h1> 
@foreach($users as $user)
<form  method="POST" action="{{ route('editMessages', $user->id) }}">
<div class="form-group">
<label for="Name">Name</label>
<input type="text" class="form-control" name="name" value={{ $user->name }}>
<label for="Name">Email</label>
<input type="email" class="form-control" name="email" value={{ $user->email }}>
<label for="Name">Mobile No</label>
<input type="number" class="form-control" name="number" value={{ $user->mobile }}>
<label for="Name">Message</label>
<textarea name="message" id="" style="margin: 0px;height: 264px;width: 750px;">{{ $user->message }}</textarea>
{{csrf_field()}}
<button type="submit" class="btn btn-primary btn-outline">
                            <i class="ti-save-alt"></i> Save
                        </button>
</div>
</form>
@endforeach
@endsection