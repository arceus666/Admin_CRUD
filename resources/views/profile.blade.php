<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"

    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css')}}">
    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('cssfile/profilecss.css')}}">
    <title>Profile Page</title>
</head>
<body>
    <h1>Admin Profile</h1>
    <div>
        <table class="table table-stripe">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Birthdate</th>
                    <th scope="col">Nationality</th>
                    <th scope="col">Address</th>
                    <th scope="col">City</th>
                    <th scope="col">Country</th>
                    <th scope="col">Civil Status</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Document Type</th>
                    <th scope="col">Identity Number</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Upload Profile</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($data as $prof)
                <tr>
                   <td>{{$prof->user_id}}</td>
                    <td>{{$prof->fname}}</td>
                    <td>{{$prof->lname}}</td>
                    <td>{{$prof->birthdate}}</td>
                    <td>{{$prof->nationality}}</td>
                    <td>{{$prof->address}}</td>
                    <td>{{$prof->city}}</td>
                    <td>{{$prof->country}}</td>
                    <td>{{$prof->civil_status}}</td>
                    <td>{{$prof->gender}}</td>
                    <td>{{$prof->email}}</td>
                    <td>{{$prof->phone_number}}</td>
                    <td>{{$prof->document_type}}</td>
                    <td>{{$prof->identity_number}}</td>
                    <td>{{$prof->designation}}</td>
                    <td>{{$prof->upload_profile}}</td>
                    <td>
                        <a href="{{url('edit/'.$prof->user_id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <a href="{{url('/profile/delete/'.$prof->user_id)}}" class="btn btn-primary">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

<a href="/dashboard" class="btn btn-primary">Dashboard</a>
    <a href="/addemploye" class="btn btn-primary">Add Employee</a>
</body>
</html>
