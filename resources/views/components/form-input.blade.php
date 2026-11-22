@props([
    'name',
    'label',
    'type' => 'text',
    'value' => '',
    'required' => false,
    'min' => null,
    'step' => null,
])

<label for="{{ $name }}">{{ $label }}</label>

<input
    id="{{ $name }}"
    type="{{ $type }}"
    name="{{ $name }}"
    value="{{ old($name, $value) }}"
    @if($required) required @endif
    @if($min !== null) min="{{ $min }}" @endif
    @if($step !== null) step="{{ $step }}" @endif
>

@error($name)
    <p class="error">{{ $message }}</p>
@enderror
