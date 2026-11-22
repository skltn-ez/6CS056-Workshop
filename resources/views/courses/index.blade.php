<x-layouts.app title="Courses">
    <h1>Courses</h1>

    <a class="btn" href="{{ route('courses.create') }}">Add Course</a>

    <table>
        <tr>
            <th>Name</th>
            <th>Duration</th>
            <th>Fee</th>
            <th>Difficulty</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>

        @forelse($courses as $course)
            <tr>
                <td>{{ $course->name }}</td>
                <td>{{ $course->duration }} weeks</td>
                <td>{{ number_format($course->fee, 2) }}</td>
                <td>{{ $course->difficulty }}</td>
                <td>{{ $course->is_active ? 'Active' : 'Inactive' }}</td>
                <td>
                    <a href="{{ route('courses.show', $course) }}">View</a> |
                    <a href="{{ route('courses.edit', $course) }}">Edit</a> |

                    <x-delete-form
                        :action="route('courses.destroy', $course)"
                        message="Delete this course?"
                    />
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">No courses found.</td>
            </tr>
        @endforelse
    </table>

    {{ $courses->links() }}
</x-layouts.app>
