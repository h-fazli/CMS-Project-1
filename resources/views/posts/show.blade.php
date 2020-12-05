@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <h1>
                    {{$post->title}}
                </h1>
                <h3>
                    {{$post->authors->name}}
                </h3>
                <p>
                    {{$post->content}}
                </p>
            </div>
            <div class="col-md-4">
                <img  src={{$post->images->path}} />
            </div>
        </div>
    </div>


@endsection('content')
