<x-layouts.app title="Edit Student">
    <h1>Edit Student</h1>

    <form method="POST" action="{{ route('students.update', $student) }}">
        @method('PUT')
        <x-students.form :student="$student" />
    </form>
</x-layouts.app>
