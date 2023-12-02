<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Employee Profile</title>
</head>
<body>
<h1>Update Employee Information</h1>
    <div class="container">
        <form action="{{url('update-data/'.$prof->user_id)}}" method="post">
            {{@csrf_field()}}
            @method('PUT')
            @foreach(\App\Models\Crud::all() as $prof)
                <label for="id">ID</label>
                <input type="text" readonly value="{{$prof->user_id}}">
                <label for="fname">First Nam</label>
                <input type="text" name="user_fname" value="{{$prof->fname}}">
                <label for="lname">Last Name</label>
                <input type="text" name="user_lname" value="{{$prof->lname}}">
                <label for="birthdate">Birth Date</label>
                <input type="date" name="birthdate" value="{{$prof->birthdate}}">
                <label for="nationality">Nationality</label>
                <input type="text" name="nationality" value="{{$prof->nationality}}">
                <label for="address">Address</label>
                <input type="text" name="address" value="{{$prof->address}}">
                <label for="city">City</label>
                <input type="text" name="city" value="{{$prof->city}}">
                <label for="country">Country</label>
                <input type="text" name="country" value="{{$prof->country}}">
                <label for="civil_status">Civil Status</label>
                <input type="text" name="civil_status" value="{{$prof->civil_status}}">
                <label for="gender">Gender</label>
                <input type="text" name="gender" value="{{$prof->gender}}">
                <label for="email">Email</label>
                <input type="text" name="email" value="{{$prof->email}}">
                <label for="phone_number">Phone Number</label>
                <input type="number" name="phone_number" value="{{$prof->phone_number}}">
                <label for="document_type">Document Type</label>
                <input type="text" name="document_type" value="{{$prof->document_type}}">
                <label for="identity_number">Identity Number</label>
                <input type="number" name="identity_number" value="{{$prof->identity_number}}">
                <label for="designation">Designation</label>
                <input type="text" name="designation" value="{{$prof->designation}}">
                <label for="upload_profile">Upload Profile</label>
                <input type="file" name="upload_profile" accept="image/*" value="{{$prof->upload_profile}}" >
            @endforeach
            <button type="submit" name="update">Update</button>
        </form>


    </div>
</body>
</html>
