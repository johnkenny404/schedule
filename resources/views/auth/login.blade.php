@extends('layouts.app')


@section('content')
  <div class="row mt-3 ">
    <div class="col-md-5"></div>
    <div class="col-md-3 index-color  ">
      @if(session('status'))
        <div class="alert alert-danger mt-2">
          {{session('status')}}
        </div>
      @endif
        <form action="{{route('login')}}" method="post" autocomplete="off">
            @csrf
            <div>
                <h2 class="text-center">Login Form</h2>
            </div>
           
            <div class="mt-2">
                <label for="email" class="form-label">Email</label>
                @error('email')
                  <div class="alert alert-danger">
                      {{ $message }}
                  </div>
                @enderror
                <input type="email" name="email" placeholder="Your email" id="email" autocomplete="email" class="form-control" value="{{old('email')}}">
            </div>
            <div class="mt-2">
                <label for="password" class="form-label">Password</label>
                @error('password')
                  <div class="alert alert-danger">
                      {{ $message }}
                  </div>
                @enderror
                <input type="password" name="password" placeholder="Choose password" class="form-control" >
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" name="remember" id="exampleCheck1">
              <label class="form-check-label" for="remember">Remember</label>
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-2 mb-2">Login</button>
        </form>
    </div>
    <div class="col-md-4"></div>
  </div>
@endsection