@extends('layouts.admin')

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Publishment</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$user->isPublished}}</td>
            <td>
                <form action="{{route('admin.posts.activate')}}" method="post">
                    <button type="button" class="btn btn-outline-success">Activate</button>
                </form>
                <form action="{{route('admin.posts.deactivate')}}" method="post">
                    <button type="button" class="btn btn-outline-danger">Deactivate</button>
                </form>
            </td>
        </tr>
    </tbody>
</table>
