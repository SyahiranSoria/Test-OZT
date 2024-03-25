<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{ asset('my.css') }}" >
</head>
<body>
    <div class="container-xl px-4 mt-4">
        @extends('app')
        @section('content')
        <hr class="mt-0 mb-4">
        <div class="row">
            <div class="col-xl-12">
                <form method="POST" action="{{ route('update', ['users' => $users->id]) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card mb-4">
                        <div class="card-header">User Details</div>
                        <div class="card-body text-center">
                            <img id="previewImage" class="img-account-profile rounded-circle mb-2 bigger-image" src="{{ asset($users->user_image) }}" alt="">
                            <div class="small font-italic text-muted mb-4">Profile Picture</div>
                            <input type="file" name="user_image" class="form-control" value="" onchange="previewFile(this)">
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Name</label>
                                <input type="text" class="form-control" name="user_name" placeholder="Name" value="{{ $users->user_name }}">
                                @error('user_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputFirstName">Email</label>
                                    <input type="text" class="form-control" name="user_email" placeholder="Email Address" value="{{ $users->user_email }}">
                                    @error('user_email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Phone Number</label>
                                    <input type="text" class="form-control" name="user_phone" placeholder="Personal Number" value="{{ $users->user_phone }}">
                                    @error('user_phone')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Address</label>
                                <input type="text" class="form-control" name="user_address" placeholder="Home Address" value="{{ $users->user_address }}">
                                @error('user_address')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="text-center">
                                <input type="submit" value="Submit" class="btn btn-primary mx-auto" />
                            </div> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
</body>
<script>
    function previewFile(input) {
        var file = input.files[0];
        var reader = new FileReader();
        reader.onloadend = function () {
            document.getElementById("previewImage").src = reader.result;
        }
        if (file) {
            reader.readAsDataURL(file);
        } else {
            document.getElementById("previewImage").src = "";
        }
    }
    function goBack() {
        window.history.back();
    }
</script>
</html>
