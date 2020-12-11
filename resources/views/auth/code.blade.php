@extends('layouts.app')

@section('content')

    <form action="{{route('checkcode')}}" method="post">
        @csrf
        <div class="form-group col-3">
            <label for="code">Enter the Code Sent to Your Mobile Phone</label>
            <input type="text" class="form-control" id="code" name="code">
        </div>
        <button type="submit" class="btn btn-primary mx-3">Submit</button>
    </form>


@endsection
