<x-layouts.app title="Students">
    <div class="page-header">
        <h1>Students</h1>
        <a href="{{ route('students.create') }}" class="btn">Add Student</a>
    </div>

    @if ($students->isEmpty())
        <p>No students found.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->phone }}</td>
                        <td>
                            <a href="{{ route('students.show', $student) }}" class="btn btn-small">View</a>
                            <a href="{{ route('students.edit', $student) }}" class="btn btn-small">Edit</a>
                            <x-delete-form :action="route('students.destroy', $student)" class="btn-small" />
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</x-layouts.app>
