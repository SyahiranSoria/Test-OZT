<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('my.css') }}" >
</head>
<body>
    <div class="container-xl px-4 mt-4">
    @extends('app')
    @section('content')
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-md-12 col-xs-6 text-sm-end">
            <button onclick="window.location.reload();" class="btn btn-success btn-block mb-3">Refresh</button>
        </div>
    </div>
    @foreach ($photos as $photo)
    <div class="card mb-4">
        <div class="row">
            <div class="col-xl-5">
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Unsplash Image</div>
                    <div class="card-body text-center">
                        <img id="" class="img-fluid" src="{{ $photo['urls']['small'] }}" alt="{{ $photo['alt_description'] }}">
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card-header">Image Details</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Description</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $photo['alt_description']}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Userame</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $photo['user']['username'] }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Instagram</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $photo['user']['social']['instagram_username'] }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Camera</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $photo['exif']['make'] }} {{ $photo['exif']['model'] }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Exposure Time</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $photo['exif']['exposure_time'] }}
                        </div>
                        <div class="col-sm-3">
                            <h6 class="mb-0">Aperture</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $photo['exif']['aperture'] }}
                        </div>
                        <div class="col-sm-3">
                            <h6 class="mb-0">Focal</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $photo['exif']['focal_length'] }}
                        </div>
                        <div class="col-sm-3">
                            <h6 class="mb-0">ISO</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $photo['exif']['iso'] }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3 col-md-2 mb-2">
                            <h6 class="mb-0">URL</h6>
                        </div>
                        <div class="col-sm-9 col-md-10 text-sm-end">
                            <a href="{{ $photo['urls']['full'] }}" class="btn btn-info text-white mr-2" target="_blank">Full Image</a>
                        </div>
                    </div>
                                                     
                </div>
            </div>
        </div>
    </div>
    @endforeach
    </div>
    @endsection
</body>
</html>
