@extends('layouts.app')
@section('content')
<h1>Add Course</h1>
<form method="POST" action="{{ route('courses.store') }}">
@include('courses._form')
</form>
@endsection
