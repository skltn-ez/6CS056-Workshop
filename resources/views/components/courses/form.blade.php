@props(['course' => null])

@csrf

<x-form-input
    name="name"
    label="Course Name"
    :value="$course?->name ?? ''"
    required
/>

<x-form-textarea
    name="description"
    label="Description"
    :value="$course?->description ?? ''"
    required
/>

<x-form-input
    name="duration"
    label="Duration (weeks)"
    type="number"
    min="1"
    :value="$course?->duration ?? ''"
    required
/>

<x-form-input
    name="fee"
    label="Fee"
    type="number"
    min="0"
    step="0.01"
    :value="$course?->fee ?? ''"
    required
/>

<label for="difficulty">Difficulty</label>
<select id="difficulty" name="difficulty" required>
    @foreach(['Easy', 'Medium', 'Hard'] as $level)
        <option value="{{ $level }}"
            @selected(old('difficulty', $course?->difficulty ?? '') == $level)>
            {{ $level }}
        </option>
    @endforeach
</select>

<label for="is_active">Active Status</label>
<select id="is_active" name="is_active" required>
    <option value="1"
        @selected((string) old('is_active', $course?->is_active ?? '1') === '1')>
        Active
    </option>
    <option value="0"
        @selected((string) old('is_active', $course?->is_active ?? '1') === '0')>
        Inactive
    </option>
</select>

@error('difficulty')
    <p class="error">{{ $message }}</p>
@enderror

@error('is_active')
    <p class="error">{{ $message }}</p>
@enderror

<button type="submit" class="btn">Save Course</button>

<a class="btn secondary" href="{{ route('courses.index') }}">Cancel</a>
