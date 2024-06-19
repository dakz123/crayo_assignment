@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Students</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name of Student</th>
                    <th>Class</th>
                    <th>Subject</th>
                    <th>Total mark in all semesters</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->standard->name }}</td>
                        @foreach($student->marks as $mark)
                        <td>{{ $mark->subject->name }}</td>
                        <td>{{ $mark->mark }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
