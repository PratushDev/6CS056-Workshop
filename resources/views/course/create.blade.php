<x-layouts.app title="Add Course">
    <h1>Add Course</h1>

    <form action="{{ route('courses.store') }}" method="POST">
        @csrf

        <x-courses.form />

        <button type="submit" class="btn">Save</button>
        <a href="{{ route('courses.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</x-layouts.app>
