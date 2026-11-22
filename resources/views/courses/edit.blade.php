@extends('layouts.app')
@section('content')
<h1>Edit Course</h1>
<form method="POST" action="{{ route('courses.update', $course) }}">
@method('PUT')
@include('courses._form')
</form>
@endsection
