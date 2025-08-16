@extends('admin.dashboard')

@section('content')
    <div class="container bg-white p-4 rounded shadow">
        <h1 class="h3 mb-4">Edit Contact Information</h1>
        <form action="{{ route('admin.contact.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Address</label>
                <input type="text" name="address" class="form-control"
                    value="{{ old('address', $contact->address ?? '') }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email', $contact->email ?? '') }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" value="{{ old('phone', $contact->phone ?? '') }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Facebook</label>
                <input type="text" name="facebook" class="form-control"
                    value="{{ old('facebook', $contact->facebook ?? '') }}">
            </div>
            <div class="mb-3">
                <label class="form-label">GitHub</label>
                <input type="text" name="github" class="form-control" value="{{ old('github', $contact->github ?? '') }}">
            </div>
            <div class="mb-3">
                <label class="form-label">X (Twitter)</label>
                <input type="text" name="x" class="form-control" value="{{ old('x', $contact->x ?? '') }}">
            </div>
            <div class="mb-3">
                <label class="form-label">LinkedIn</label>
                <input type="text" name="linkedin" class="form-control"
                    value="{{ old('linkedin', $contact->linkedin ?? '') }}">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection