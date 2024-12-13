<div class="container">
    <h1>Create User</h1>
    <form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name" class="form-control">
        </div><br>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name" class="form-control">
        </div><br>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div><br>
        <div class="form-group">
            <label for="country_code">Country Code</label>
            <select type="text" name="country_code" id="country_code" class="form-control">
                <option value="usa">+1</option>
                <option value="india">+91</option>
                <option value="china">+44</option>
                <option value="uk">+81</option>
                <option value="australia">+13</option>
                <option value="france">+71</option>
            </select>
        </div><br>
        <div class="form-group">
            <label for="mobile_number">Mobile Number</label>
            <input type="text" name="mobile_number" id="mobile_number" class="form-control">
        </div><br>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea name="address" class="form-control" rows="3"></textarea>
        </div><br>
        <div class="form-group">
            <label for="gender">Gender</label><br>
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="other">Other
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