@extends('layouts.app') @section('content')
<div class="content">
    <div class="row">
        <h1>User Editing Id: {{$user->id}}</h1>
    </div>
    <div class="row">
        <a class="btn btn-sm  btn-dark" href="/admin_users">Back</a>
    </div>
</div>
<div class="row">
    <div class="col">
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="/admin_users/{{$user->id}}" method="post">
            @csrf @method('put')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Type a name" value="{{old('name' , $user->name)}}">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Type an email" value="{{old('email' , $user->email)}}">
            </div>
            <button class="btn btn-warning" type="submit">Edit</button>
        </form>
    </div>
</div>
@endsection