@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-3"></div>
            <div class="col-md-6  rounded ">
                <div class="container">
                    <form action="/schedules/{{$schedule->id}}" method="post" class="pb-1 index-color p-2">
                        @method('PATCH')
                    @csrf
                    <h2 class="pt-3 text-center text-md-left">Schedule Your Activity All Year Round</h2>
                    <div class="form-group">
                        <label for="description">Event Description</label>
                        <textarea name="description" id="description" cols="30" rows="5" class="form-control" placeholder="Describe your event">{{$schedule ->description}}</textarea>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="container">
                        <div class="row justify-content-between">
                        <div class="col-dm-4">
                            <div class="form-group">
                                <label for="startDate">Start Date</label>
                                <input type="date" name="start_date" id="startDate" placeholder="mm/dd/yy" class="form-control" value="{{$schedule->start_date}}">
                                @error('start_date')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-dm-4">
                            <div class="form-group">
                                <label for="Date">End Date</label>
                                <input type="date" name="end_date" id="EndDate" placeholder="mm/dd/yy" class="form-control" value="{{$schedule->end_date}}">
                                @error('end_date')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-dm-4">
                            <div class="form-group">
                            <label for="Time">Time</label>
                            <input type="time" name="time" id="time" class="form-control" value="{{$schedule->time}}">
                            @error('time')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row justify-content-between">
                        <div class="col-dm-4">
                            <div class="form-group">
                            <label for="venue">Venue</label>
                            <input type="venue" name="venue" id="venue" placeholder="venue" class="form-control" value="{{$schedule->venue}}">
                            @error('venue')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>
                        <div class="col-dm-4">
                            <div class="form-group">
                            <label for="city">City</label>
                            <input type="city" name="city" id="city" placeholder="city" class="form-control" value="{{$schedule->city}}">
                            @error('city')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>
                        <div class="col-dm-4">
                            <div class="form-group">
                            <label for="state">State</label>
                            <input type="state" name="state" id="state" placeholder="state" class="form-control" value="{{$schedule->state}}">
                            @error('state')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-block btn-primary mb-3">Save Event</button>
                    </form>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection