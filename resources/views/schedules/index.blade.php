@extends('layouts.app')


@section('content')
<div class="container">
  <div class="row mt-5 mb-5">
    <div class="col-md-6  rounded ">
      <div class="container">
        <form action="{{route('schedules')}}" method="post" class="pb-1 index-color p-2">
          @csrf
          <h2 class="pt-3 text-center text-md-left">Schedule Your Activity All Year Round</h2>
          <div class="form-group">
              <label for="description">Event Description</label>
              <textarea name="description" id="description" cols="30" rows="5" class="form-control" placeholder="Describe your event">{{old('description')}}</textarea>
              @error('description')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
          </div>
          <div class="container">
            <div class="row justify-content-between">
              <div class="col-dm-4">
                <div class="form-group">
                    <label for="startDate">Start Date</label>
                    <input type="date" name="start_date" id="startDate" placeholder="mm/dd/yy" class="form-control" value="{{old('start_date')}}">
                    @error('start_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
              </div>
              <div class="col-dm-4">
                <div class="form-group">
                    <label for="Date">End Date</label>
                    <input type="date" name="end_date" id="EndDate" placeholder="mm/dd/yy" class="form-control" value="{{old('end_date')}}">
                    @error('end_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
              </div>
              <div class="col-dm-4">
                <div class="form-group">
                  <label for="Time">Time</label>
                  <input type="time" name="time" id="time" class="form-control" value="{{old('time')}}">
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
                  <input type="venue" name="venue" id="venue" placeholder="venue" class="form-control" value="{{old('venue')}}">
                  @error('venue')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-dm-4">
                <div class="form-group">
                  <label for="city">City</label>
                  <input type="city" name="city" id="city" placeholder="city" class="form-control" value="{{old('city')}}">
                  @error('city')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-dm-4">
                <div class="form-group">
                  <label for="state">State</label>
                  <input type="state" name="state" id="state" placeholder="state" class="form-control" value="{{old('state')}}">
                  @error('state')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-block btn-primary mb-3">Submit Event</button>
        </form>
        
      </div>
    </div>
    <div class="col-md-6">
    <div class="container">
       
       @if($schedules->count())
       @foreach($schedules as $schedule)
        @can('view', $schedule)
         <div class="card text-center rounded mb-2">
           <div class=" index-color pt-3 pb-3">
             <h3>{{$schedule->user->name}}'s Schedule</h3>
           </div>
           <div class="card-body">
             <h5 class="card-title">Description Of Event</h5>
             <p class="card-text">{{$schedule->description}}</p>
             <div>{{$schedule->venue}} <span>{{$schedule->city}}</span></div>
             <div>{{$schedule->state}}</div>
           </div>
           <div class="index-color pt-3 pb-3">
             <div>
             <span class="mr-3">{{$schedule->start_date}}</span> <span class="mr-3">{{$schedule->end_date}}</span> <span>{{$schedule->time}}</span>
             </div>
             <div class="d-flex  justify-content-center">
                 <a href="{{route('schedules.edit', $schedule)}}" class="btn btn-primary mr-2 ">Edit</a>
               <form action="{{route('schedules.destroy', $schedule)}}" method="post">
                 @method('DELETE')
                 @csrf
                 <button type="submit" class="btn btn-danger">Delete</button>
               </form>
               
             </div>
           </div>
         </div>
        
         @endcan
         @endforeach
         
        
     @else
     @endif
   </div>
    </div>
  </div>
</div>
 
@endsection