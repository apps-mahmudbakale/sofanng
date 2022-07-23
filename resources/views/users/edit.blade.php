@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Edit User</div>

                <div class="card-body">
                  <form action="{{route('users.update', $user->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        Name
                        <input type="text" name="name" value="{{old('name', isset($user) ? $user->name : '')}}" class="form-control" placeholder="Post Title">
                    </div>
                    <div class="form-group">
                        Email
                        <input type="email" value="{{old('email', isset($user) ? $user->email : '')}}" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <br>
                       <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
