<div class="container">
    <h1>Edit User</h1>
    <form action="{{ route('employee.update', $employee->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name" class="form-control" value="{{ old('first_name', $employee->first_name) }}">
        </div><br>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name" class="form-control" value="{{ old('last_name', $employee->last_name) }}">
        </div><br>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $employee->email) }}">
        </div><br>
        <div class="form-group">
            <label for="country_code">Country Code</label>
            <select type="text" name="country_code" id="country_code" class="form-control">
                <option value="usa" {{ $employee->country_code == 'usa' ? 'selected' : '' }}>+1</option>
                <option value="india" {{ $employee->country_code == 'india' ? 'selected' : '' }}>+91</option>
                <option value="china" {{ $employee->country_code == 'china' ? 'selected' : '' }}>+44</option>
                <option value="uk" {{ $employee->country_code == 'uk' ? 'selected' : '' }}>+81</option>
                <option value="australia" {{ $employee->country_code == 'australia' ? 'selected' : '' }}>+13</option>
                <option value="france" {{ $employee->country_code == 'france' ? 'selected' : '' }}>+71</option>
            </select>
        </div><br>
        <div class="form-group">
            <label for="mobile_number">Mobile Number</label>
            <input type="text" name="mobile_number" id="mobile_number" class="form-control" value="{{ old('mobile_number', $employee->mobile_number) }}">
        </div><br>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea name="address" class="form-control" rows="3"> value="{{ old('address', $employee->address) }}"</textarea>
        </div><br>
        <div class="form-group">
            <label for="gender">Gender</label><br>
            <input type="radio" name="gender" value="male" {{ $employee->gender == 'male' ? 'checked' : '' }}>Male
            <input type="radio" name="gender" value="female" {{ $employee->gender == 'female' ? 'checked' : '' }}>Female
            <input type="radio" name="gender" value="other" {{ $employee->gender == 'other' ? 'checked' : '' }}>Other
        </div><br>
        <div class="form-group">
            <label for="hobbies">Hobbies</label><br>
            <input type="checkbox" name="hobbies[]" value="coding">Coding
            <input type="checkbox" name="hobbies[]" value="travelling">Traelling
            <input type="checkbox" name="hobbies[]" value="sports">Sports
        </div><br>
        <div class="form-group">
            <label for="photo">Photo</label>
            <input type="file" name="photo" class="form-control">
        </div><br>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>