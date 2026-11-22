@props([
    'name',
    'label',
    'value' => '',
    'required' => false,
])

<label for="{{ $name }}">{{ $label }}</label>

<textarea
    id="{{ $name }}"
    name="{{ $name }}"
    @if($required) required @endif
>{{ old($name, $value) }}</textarea>

@error($name)
    <p class="error">{{ $message }}</p>
@enderror
