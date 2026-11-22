<x-layouts.app title="Add Course">
    <h1>Add Course</h1>

    <form method="POST" action="{{ route('courses.store') }}">
        <x-courses.form />
    </form>
</x-layouts.app>
