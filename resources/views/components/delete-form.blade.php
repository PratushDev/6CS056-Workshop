@props(['action'])

<form action="{{ $action }}" method="POST" class="inline-form"
      onsubmit="return confirm('Are you sure you want to delete this record?');">
    @csrf
    @method('DELETE')
    <button type="submit" {{ $attributes->merge(['class' => 'btn btn-danger']) }}>
        {{ $slot->isEmpty() ? 'Delete' : $slot }}
    </button>
</form>
