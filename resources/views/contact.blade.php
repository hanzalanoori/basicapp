@extends('layouts.app')

@section('content')
<h1>contact</h1> 
<form  method="POST" action="{{url('users/store')}}">
<div class="form-group">
<label for="Name">Name</label>
<input type="text" class="form-control" name="name">
<label for="Name">Email</label>
<input type="email" class="form-control" name="email">
<label for="Name">Mobile No</label>
<input type="number" class="form-control" name="number">
<label for="Name">Message</label>
<textarea name="message" id="" style="margin: 0px;height: 264px;width: 750px;"></textarea>
{{csrf_field()}}
<button type="submit" class="btn btn-primary btn-outline">
                            <i class="ti-save-alt"></i> Save
                        </button>
</div>
</form>
@endsection