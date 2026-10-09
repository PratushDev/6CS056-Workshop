<nav class="navbar">
    <a href="{{ route('welcome') }}" class="brand">Training Institute</a>
    <ul>
        <li>
            <a href="{{ route('students.index') }}" @class(['active' => request()->routeIs('students.*')])>Students</a>
        </li>
        <li>
            <a href="{{ route('courses.index') }}" @class(['active' => request()->routeIs('courses.*')])>Courses</a>
        </li>
    </ul>
</nav>
