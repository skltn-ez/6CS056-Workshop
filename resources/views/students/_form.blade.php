@csrf
<label>Name</label>
<input name="name" value="{{ old('name', $student->name ?? '') }}" required>
<label>Email</label>
<input type="email" name="email" value="{{ old('email', $student->email ?? '') }}" required>
<label>Phone</label>
<input name="phone" value="{{ old('phone', $student->phone ?? '') }}" required>
<label>Address</label>
<textarea name="address">{{ old('address', $student->address ?? '') }}</textarea>
<label>Date of Birth</label>
<input type="date" name="date_of_birth" value="{{ old('date_of_birth', $student->date_of_birth ?? '') }}">
@foreach($errors->all() as $error)
<p class="error">{{ $error }}</p>
@endforeach
<button class="btn">Save Student</button>
<a class="btn secondary" href="{{ route('students.index') }}">Cancel</a>
