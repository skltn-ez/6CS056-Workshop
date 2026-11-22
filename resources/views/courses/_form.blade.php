@csrf
<label>Course Name</label>
<input name="name" value="{{ old('name', $course->name ?? '') }}" required>
<label>Description</label>
<textarea name="description" required>{{ old('description', $course->description ?? '') }}</textarea>
<label>Duration (weeks)</label>
<input type="number" name="duration" min="1" value="{{ old('duration', $course->duration ?? '') }}" required>
<label>Fee</label>
<input type="number" name="fee" min="0" step="0.01" value="{{ old('fee', $course->fee ?? '') }}" required>
<label>Difficulty</label>
<select name="difficulty" required>
@foreach(['Easy', 'Medium', 'Hard'] as $level)
<option value="{{ $level }}" @selected(old('difficulty', $course->difficulty ?? '') == $level)>{{ $level }}</option>
@endforeach
</select>
<label>Active Status</label>
<select name="is_active" required>
<option value="1" @selected((string)old('is_active', $course->is_active ?? '1') === '1')>Active</option>
<option value="0" @selected((string)old('is_active', $course->is_active ?? '1') === '0')>Inactive</option>
</select>
@foreach($errors->all() as $error)
<p class="error">{{ $error }}</p>
@endforeach
<button class="btn">Save Course</button>
<a class="btn secondary" href="{{ route('courses.index') }}">Cancel</a>
