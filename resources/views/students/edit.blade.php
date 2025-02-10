@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card p-4 shadow-sm">
        <h4 class="mb-3">Add Details</h4>
        <form action="/student/update/{{ $student->id }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your name" value="{{ $student->name }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Address</label>
                <input type="text" name="address" class="form-control" placeholder="Enter your address" value="{{ $student->address }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email" value="{{ $student->email }}">
            </div>
            <button type="submit" class="btn btn-secondary">Update</button>
        </form>
    </div>
</div>
@endsection
