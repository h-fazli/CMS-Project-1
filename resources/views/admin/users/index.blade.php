@extends('layouts.admin')

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Mobile</th>
        <th scope="col">Active</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td><a href="{{route('admin.users.show',$user)}}">{{$user->name}}</a></td>
            <td>{{$user->email}}</td>
            <td>{{$user->mobile}}</td>
            <td>{{$user->isActive}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
