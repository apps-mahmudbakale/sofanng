@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Users <a href="{{route('users.create')}}" class="btn btn-primary float-right">Create User</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->created_at->diffForHumans()}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{route('users.edit', $user->id)}}" class="btn btn-primary">Edit</a>
                                            <a href="" onclick="event.preventDefault(); document.getElementById('del#{{ $user->id }}').submit();" class="btn btn-danger">Delete</a>
                                            <form id="del#{{ $user->id }}" action="{{route('users.destroy', $user->id)}}" method="POST"
                                                onsubmit="return confirm('Are you sure');" style="display: inline-block;">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$users->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
