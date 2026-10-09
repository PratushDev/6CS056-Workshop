<x-layouts.app title="Add Student">
    <h1>Add Student</h1>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <x-students.form />

        <button type="submit" class="btn">Save</button>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</x-layouts.app>
