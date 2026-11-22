@extends('layouts.app')
@section('title', 'Courses')
@section('content')
<h1>Courses</h1>
<a class="btn" href="{{ route('courses.create') }}">Add Course</a>
<table>
<tr><th>Name</th><th>Duration</th><th>Fee</th><th>Difficulty</th><th>Actions</th></tr>
@forelse($courses as $course)
<tr>
<td>{{ $course->name }}</td>
<td>{{ $course->duration }} weeks</td>
<td>{{ number_format($course->fee, 2) }}</td>
<td>{{ $course->difficulty }}</td>
<td>
<a href="{{ route('courses.show', $course) }}">View</a> |
<a href="{{ route('courses.edit', $course) }}">Edit</a> |
<form class="inline" method="POST" action="{{ route('courses.destroy', $course) }}" onsubmit="return confirm('Delete this course?')">
@csrf
@method('DELETE')
<button class="btn danger">Delete</button>
</form>
</td>
</tr>
@empty
<tr><td colspan="5">No courses found.</td></tr>
@endforelse
</table>
{{ $courses->links() }}
@endsection
