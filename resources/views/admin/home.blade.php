@extends('admin.dashboard')

@section('content')
    <div class="container bg-white p-4 rounded shadow d-flex flex-column align-items-center">
        <h1 class="h3 mb-4">Welcome to Admin Panel</h1>
        <div class="row w-100 justify-content-center">
            <div class="col-md-5 mb-3">
                <div class="card border-primary">
                    <div class="card-body">
                        <h2 class="card-title h5 mb-3 text-primary">Quick Actions</h2>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="{{ route('admin.about') }}" class="link-primary">Edit About
                                    Section</a></li>
                            <li class="list-group-item"><a href="{{ route('admin.skills') }}" class="link-primary">Manage
                                    Skills</a></li>
                            <li class="list-group-item"><a href="{{ route('admin.projects') }}" class="link-primary">Update
                                    Projects</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-5 mb-3">
                <div class="card border-success">
                    <div class="card-body d-flex flex-column align-items-center">
                        <h2 class="card-title h5 mb-2 text-success">Recent Updates</h2>
                        <ul class="list-group list-group-flush w-100">
                            <li class="list-group-item">Last login: {{ now()->format('M d, Y h:i A') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection