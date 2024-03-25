<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('my.css') }}" >
</head>
<body>
    
<div class="container-xl px-4 mt-4">
    @extends('app')
    @section('content')
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-md-12 col-xs-6 text-sm-end">
            <a href="{{ route('create') }}" class="btn btn-success btn-block mb-3">Create New User</a>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header">List of User</div>
        <div class="card-body p-0">
            <div class="table-responsive table-billing-history">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">User ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $count = 1; @endphp
                        @foreach($users as $user)
                        <tr>
                            <td scope="row">{{ $count++ }}</td>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->user_name }}</td>
                            <td>{{ $user->user_email }}</td>
                            <td class="d-flex justify-content-center">
                                <a href="{{ route('view', ['users' => $user->id]) }}" class="btn btn-info text-white mr-2">View</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>
