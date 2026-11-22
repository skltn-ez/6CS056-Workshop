<x-layouts.app title="Student Details">
    <h1>Student Details</h1>

    <p><strong>Name:</strong> {{ $student->name }}</p>
    <p><strong>Email:</strong> {{ $student->email }}</p>
    <p><strong>Phone:</strong> {{ $student->phone }}</p>
    <p><strong>Address:</strong> {{ $student->address ?? 'Not provided' }}</p>
    <p><strong>Date of Birth:</strong> {{ $student->date_of_birth?->format('d M Y') ?? 'Not provided' }}</p>
    <p><strong>Age:</strong> {{ $student->age ?? 'Not available' }}</p>

    <a class="btn" href="{{ route('students.edit', $student) }}">Edit Student</a>
    <a class="btn secondary" href="{{ route('students.index') }}">Back</a>
</x-layouts.app>
