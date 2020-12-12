@extends('layouts.admin')

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Content</th>
        <th scope="col">Slug</th>
        <th scope="col">User</th>
        <th scope="col">Active</th>

    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td><a href="{{route('admin.posts.show',$post)}}">{{$post->title}}</a></td>
            <td>{{$post->content}}</td>
            <td>{{$post->slug}}</td>
            <td>{{$post->users->name}}</td>
            <td>{{$post->isActive}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
