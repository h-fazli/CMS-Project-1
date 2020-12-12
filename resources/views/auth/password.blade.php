@extends('layouts.app')

@section('content')
    <form action="{{route('checkpassword',$mobile)}}" method="post">
        @csrf
        <div class="form-group col-3">
            <label for="password">Enter Your Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary mx-3">Submit</button>
    </form>


@endsection
