@props([
    'action',
    'message' => 'Are you sure you want to delete this record?',
])

<form class="inline" method="POST" action="{{ $action }}"
      onsubmit="return confirm('{{ $message }}')">
    @csrf
    @method('DELETE')

    <button type="submit" class="btn danger">Delete</button>
</form>
