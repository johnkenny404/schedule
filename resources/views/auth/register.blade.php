@extends('layouts.app')


@section('content')
  <div class="row mt-3 ">
    <div class="col-md-5"></div>
    <div class="col-md-3 index-color  ">
        <form action="{{route('register')}}" method="post" autocomplete="off">
            @csrf
            <div>
                <h2 class="text-center">Registeration Form</h2>
            </div>
            <div class="mt-2">
                
                <label for="name" class="form-label">Name</label>
                @error('name')
                  <div class="alert alert-danger">
                      {{ $message }}
                  </div>
                @enderror
                <input type="text" name="name" placeholder="Name" class="form-control" value="{{old('name')}}" autocomplete="off">
            </div>
            <div class="mt-2">
                <label for="username" class="form-label">Username</label>
                @error('Username')
                  <div class="alert alert-danger">
                      {{ $message }}
                  </div>
                @enderror
                <input type="text" name="username" placeholder="Username" class="form-control" value="{{old('Username')}}" autocomplete="off"> 
            </div>
            <div class="mt-2">
                <label for="email" class="form-label">Email</label>
                @error('email')
                  <div class="alert alert-danger">
                      {{ $message }}
                  </div>
                @enderror
                <input type="email" name="email" placeholder="Your email" class="form-control" value="{{old('email')}}" autocomplete="off">
            </div>
            <div class="mt-2">
                <label for="password" class="form-label">Password</label>
                @error('password')
                  <div class="alert alert-danger">
                      {{ $message }}
                  </div>
                @enderror
                <input type="password" name="password" placeholder="Choose password" class="form-control" autocomplete="off" >
            </div>
            <div class="mt-2">
                <label for="password_confirmation" class="form-label">Confirm password</label>
                <input type="password" name="password_confirmation" placeholder="Choose password" class="form-control" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-2 mb-2">Register</button>
        </form>
    </div>
    <div class="col-md-4"></div>
  </div>
@endsection