@extends('layouts.admin')

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">isActive</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->isActive}}</td>
            <td>
                <form action="{{route('admin.users.activate')}}" method="post">
                    <button type="button" class="btn btn-outline-success">Activate</button>
                </form>
                <form action="{{route('admin.users.deactivate')}}" method="post">
                    <button type="button" class="btn btn-outline-danger">Deactivate</button>
                </form>
            </td>
        </tr>
    </tbody>
</table>
