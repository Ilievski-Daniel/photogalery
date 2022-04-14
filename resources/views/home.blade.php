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
                            <a href="/home" class="nav-link active" aria-current="page">
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
                    @if(auth()->user()->is_permission == 1)
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li>
                                <a href="/users" class="nav-link link-dark">
                                <svg class="bi me-2" width="16" height="16"><use xlink:href="/"/></svg>
                                View users
                                </a>
                            </li>
                        </ul>
                        <hr>
                    @endif     
                    
                </div>
            </div>
            <div class="col-9 pe-5">
                <table class="table caption-top p-1">
                    <caption>List of users</caption>
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>    
@endsection
