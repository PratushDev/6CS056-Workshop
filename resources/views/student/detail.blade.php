<x-layouts.app :title="$student->name">
    <h1>{{ $student->name }}</h1>

    <table class="detail-table">
        <tr>
            <th>Email</th>
            <td>{{ $student->email }}</td>
        </tr>
        <tr>
            <th>Phone</th>
            <td>{{ $student->phone }}</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>{{ $student->address ?? 'Not available' }}</td>
        </tr>
        <tr>
            <th>Date of Birth</th>
            <td>{{ $student->date_of_birth?->format('d M Y') ?? 'Not available' }}</td>
        </tr>
        <tr>
            <th>Age</th>
            <td>{{ $student->age ?? 'Not available' }}</td>
        </tr>
    </table>

    <div class="actions">
        <a href="{{ route('students.edit', $student) }}" class="btn">Edit</a>
        <x-delete-form :action="route('students.destroy', $student)" />
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to list</a>
    </div>
</x-layouts.app>
