@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Posts <a href="{{route('posts.create')}}" class="btn btn-primary float-right">Create Post</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                            <th>S/N</th>
                            <th>Title</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->created_at}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{route('posts.show', $post->id)}}" class="btn btn-secondary">View</a>
                                            <a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary">Edit</a>
                                            <a href="" onclick="event.preventDefault(); document.getElementById('del#{{ $post->id }}').submit();" class="btn btn-danger">Delete</a>
                                            <form id="del#{{ $post->id }}" action="{{route('posts.destroy', $post->id)}}" method="POST"
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
                    {{$posts->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
