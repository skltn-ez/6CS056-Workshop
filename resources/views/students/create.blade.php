<x-layouts.app title="Add Student">
    <h1>Add Student</h1>

    <form method="POST" action="{{ route('students.store') }}">
        <x-students.form />
    </form>
</x-layouts.app>
