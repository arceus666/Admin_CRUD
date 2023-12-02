<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" type="text/css" href="{{asset('cssfile/style2.css')}}">
</head>
<body>
<div class="container">
    @if(Session::get('success'))
    <div class="alert alert-sucess">
        {{Session::get('success')}}
    </div>
    @endif
        @if(Session::get('fail'))
            <div class="alert alert-danger">
                {{Session::get('fail')}}
            </div>
        @endif
    <div class="title">Registration</div>
    <form action="add" method="post">
        @csrf
        <div class="desc">
            <h5>Personal Details</h5>
        </div>
        <div class="user-details">
            <div class="input-box">
                <span class="details">First Name</span>
                <input type="text" name="fname" placeholder="Enter first name" >
                <span style="color: red">@error('fname'){{$message}}@enderror</span>
            </div>
            <div class="input-box">
                <span class="details">Last Name</span>
                <input type="text" name="lname" placeholder="Enter last name" >
                <span style="color: red">@error('lname'){{$message}}@enderror</span>
            </div>
            <div class="input-box">
                <span class="details">Birthdate</span>
                <input type="date" name="birthdate" class="form-control" >
                <span style="color: red">@error('birthdate'){{$message}}@enderror</span>
            </div>
        </div>
        <div class="user-details">
            <div class="input-box">
                <span class="details">Nationality</span>
                <input type="text" name="nationality" placeholder="Enter your nationality" >
                <span style="color: red">@error('nationality'){{$message}}@enderror</span>
            </div>
            <div class="input-box">
                <span class="details">Address</span>
                <textarea type="text" name="address" placeholder="Enter your full address" ></textarea>
                <span style="color: red">@error('address'){{$message}}@enderror</span>
            </div>
            <div class="input-box">
                <span class="details">City</span>
                <input type="text" name="city" placeholder="Enter your city" >
                <span style="color: red">@error('city'){{$message}}@enderror</span>
            </div>
        </div>
        <div class="user-details">
            <div class="input-box">
                <span class="details">Country</span>
                <input type="text" name="country" placeholder="Enter your country" >
                <span style="color: red">@error('country'){{$message}}@enderror</span>
            </div>
            <div class="input-box">
                <span class="details">Marital Status</span>
                <select name="civil_status" class="form-control">
                    <span style="color: red">@error('civil_status'){{$message}}@enderror</span>
                    <option value="" disabled selected>Select</option>
                    <option value="single">Single</option>
                    <option value="in_relationship">In a Relationship</option>
                    <option value="married">Married</option>
                    <option value="divorced">Divorced</option>
                    <option value="widowed">Widowed</option>
                </select>
            </div>
        </div>
        <div class="gender-details">
            <span class="gender-title">Gender</span>
            <div class="category">
                <label for="maleGender">Male</label>
                <input type="radio" id="maleGender" name="gender" value="Male">
                <label for="femaleGender">Female</label>
                <input type="radio" id="femaleGender" name="gender" value="Female">
                <span style="color: red">@error('gender'){{$message}}@enderror</span>
            </div>
        </div>

        <div class="desc">
            <h5>Identity Details</h5>
        </div>
        <div class="user-details">
            <div class="input-box">
                <span class="details">Email</span>
                <input type="email" name="email" placeholder="Enter your email" >
                <span style="color: red">@error('email'){{$message}}@enderror</span>
            </div>
            <div class="input-box">
                <span class="details">Mobile Number</span>
                <input type="text" name="phone_number" placeholder="Enter your mobile number" >
                <span style="color: red">@error('phone_number'){{$message}}@enderror</span>
            </div>
            <div class="input-box">
                <span class="details">Identity Document Type</span>
                <input type="text" name="document_type" placeholder="Enter identity document type" >
                <span style="color: red">@error('document_type'){{$message}}@enderror</span>
            </div>
        </div>
        <div class="user-details">
            <div class="input-box">
                <span class="details">Identity Number</span>
                <input type="text" name="identity_number" placeholder="Enter your identity number" pattern="[0-9]{11}" >
                <span style="color: red">@error('identity_number'){{$message}}@enderror</span>
            </div>
            <div class="input-box">
                <span class="details">Employee Type</span>
                <input type="text" name="employee_type" placeholder="Enter employee type" >
                <span style="color: red">@error('employee_type'){{$message}}@enderror</span>
            </div>
            <div class="input-box">
                <span class="details">Designation</span>
                <input type="text" name="designation" placeholder="Enter designation" >
                <span style="color: red">@error('designation'){{$message}}@enderror</span>

            </div>
            <div class="input-box">
                <span class="details">Upload Profile</span>
                <input type="file" name="upload_profile" accept="image/*" >
                <span style="color: red">@error('upload_profile'){{$message}}@enderror</span>
            </div>
        </div>

        <div class="button">
            <a href="/login">
                <input type="submit" value="Next">
            </a>
            <a href="/login" class="btn btn-primary">Login now</a>
        </div>
    </form>
</div>
</body>
</html>
