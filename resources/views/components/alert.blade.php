@props(['type' => 'success'])

@if (session($type))
    <div {{ $attributes->merge(['class' => 'alert alert-' . $type]) }}>
        {{ session($type) }}
    </div>
@endif
