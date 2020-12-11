@extends('layouts.app')

@section('content')

    <form action="{{route('checkmobile')}}" method="post">
        @csrf
        <div class="form-group col-3">
            <label for="mobile">Enter Your Mobile Number</label>
            <input type="text" class="form-control" id="mobile" name="mobile">
        </div>
        <button type="submit" class="btn btn-primary mx-3">Submit</button>
    </form>


@endsection
