<x-layouts.app title="Edit Course">
    <h1>Edit Course</h1>

    <form method="POST" action="{{ route('courses.update', $course) }}">
        @method('PUT')
        <x-courses.form :course="$course" />
    </form>
</x-layouts.app>
