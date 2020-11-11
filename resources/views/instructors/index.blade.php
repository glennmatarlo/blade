@extends('base')

@section('content')

<div class="container">
    <h1>INSTRUCTORS</h1>
    <table class="table table-bordered table-striped table-sm">
        <thead>
            <tr>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Expertise</th>
                <th>Rating</th>
            </tr>
        </thead>
        <tbody>
            @foreach($instructors as $instructor)
            <tr>
                <td>{{ $instructor->lname }}</td>
                <td>{{ $instructor->fname }}</td>
                <td>{{ $instructor->aoe }}</td>
                <td>{{ $instructor->rating }}</td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
@stop