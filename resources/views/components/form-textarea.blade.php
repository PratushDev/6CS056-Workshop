@props(['name', 'label', 'value' => ''])

<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <textarea id="{{ $name }}" name="{{ $name }}" {{ $attributes->merge(['rows' => 4]) }}>{{ old($name, $value) }}</textarea>
    @error($name)
        <span class="error">{{ $message }}</span>
    @enderror
</div>
