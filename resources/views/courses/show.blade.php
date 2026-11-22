@extends('layouts.app')
@section('content')
<h1>Course Details</h1>
<p><strong>Name:</strong> {{ $course->name }}</p>
<p><strong>Description:</strong> {{ $course->description }}</p>
<p><strong>Duration:</strong> {{ $course->duration }} weeks</p>
<p><strong>Fee:</strong> {{ number_format($course->fee, 2) }}</p>
<p><strong>Difficulty:</strong> {{ $course->difficulty }}</p>
<p><strong>Status:</strong> {{ $course->is_active ? 'Active' : 'Inactive' }}</p>
<a class="btn" href="{{ route('courses.index') }}">Back</a>
<a class="btn" href="{{ route('courses.edit', $course) }}">Edit</a>
@endsection
