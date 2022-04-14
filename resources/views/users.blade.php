@if(auth()->user()->is_permission != 1)
@php 
header("Location: /home");
die();
@endphp
@endif
@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <div class="d-flex flex-column flex-shrink-0 p-1 bg-light">
                    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 link-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                    <span class="fs-4">Gallery</span>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li>
                            <a href="/" class="nav-link link-dark">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href="/"/></svg>
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/home" class="nav-link link-dark"" aria-current="page">
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="/home"/></svg>
                            Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="/" class="nav-link link-dark">
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="/"/></svg>
                            Add Image
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li>
                            <a href="/users" class="nav-link link-dark active">
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="/"/></svg>
                            View users
                            </a>
                        </li>
                    </ul>
                    <hr>
                </div>
            </div>
            <div class="col-9 pe-5">
                <table class="table caption-top p-1 table-dark table-striped">
                    <caption>List of users</caption>
                    <thead>
                      <tr>
                        <th scope="col">#Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Permission</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    @foreach ($users as $user)
                        <tbody>
                            <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->password}}</td>
                            <td>
                                @if ($user->is_permission == 1)
                                    {{'Super Admin'}}
                                @else
                                    {{'User'}}
                                @endif
                            </td>
                            <td>📝</td>
                            <td>🗑️</td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>    
@endsection
