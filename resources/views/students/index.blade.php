@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Students') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a href="/student/add" class="btn btn-info">Add</a>
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Option</th>
                            </tr>
                            <tbody>
                                @foreach ($students as $student)
                                    <tr>
                                        <td> {{ $student->id }} </td>
                                        <td> {{ $student->name }} </td>
                                        <td> {{ $student->address }} </td>
                                        <td> {{ $student->email }} </td>
                                        <td><a href="/student/edit/{{ $student->id }}" class="btn btn-success">Edit</a>
                                            <a href="/student/delete/{{ $student->id }}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
