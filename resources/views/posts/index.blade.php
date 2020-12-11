@extends('layouts.app')

@section('content')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Post Title</th>
            <th scope="col">Post Slug</th>
            <th scope="col">Post Author</th>
            <th scope="col">Post Categories</th>
            <th scope="col">Post Tags</th>
        </tr>
        </thead>
        <tbody>
        @foreach($user->posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td><a href="{{route('posts.show',$post)}}">{{$post->title}}</a></td>
            <td>{{$post->slug}}</td>
            <td>{{$post->authors->name}}</td>
            <td>@foreach($post->categories as $category)
                    <span class="badge badge-primary">{{$category->title}}</span>
                @endforeach
            </td>
            <td>@foreach($post->tags as $tag)
                    <span class="badge badge-primary">{{$tag->title}}</span>
                @endforeach
            </td>

        </tr>
        @endforeach
        </tbody>
    </table>

@endsection
