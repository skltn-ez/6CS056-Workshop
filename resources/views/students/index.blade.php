@extends('layouts.app')
@section('title', 'Students')
@section('content')
<h1>Students</h1>
<a class="btn" href="{{ route('students.create') }}">Add Student</a>
<table>
<tr><th>Name</th><th>Email</th><th>Phone</th><th>Actions</th></tr>
@forelse($students as $student)
<tr>
<td>{{ $student->name }}</td>
<td>{{ $student->email }}</td>
<td>{{ $student->phone }}</td>
<td>
<a href="{{ route('students.show', $student) }}">View</a> |
<a href="{{ route('students.edit', $student) }}">Edit</a> |
<form class="inline" method="POST" action="{{ route('students.destroy', $student) }}" onsubmit="return confirm('Delete this student?')">
@csrf
@method('DELETE')
<button class="btn danger">Delete</button>
</form>
</td>
</tr>
@empty
<tr><td colspan="4">No students found.</td></tr>
@endforelse
</table>
{{ $students->links() }}
@endsection
