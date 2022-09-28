@extends('layouts.master')
@section('css')

@section('title')
    SiteInfo
@stop
@endsection
@section('page-header')

@if (session()->has('success'))
    <div class="alert alert-success" role="alert"
        style="display: flex;
        justify-content: center;
        height: 58px;
        align-items: center;">
        {{ session()->get('success') }}
    </div>
@endif

@if (session()->has('error'))
    <div class="alert alert-error" role="alert"
        style="display: flex;
        justify-content: center;
        height: 58px;
        align-items: center;">
        {{ session()->get('error') }}
    </div>
@endif


<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css"
    type="text/css">
<style>
    .geocoder {
        position: absolute;
        z-index: 1;
        width: 50%;
        left: 50%;
        margin-left: -25%;
        top: 10px;
    }

    .mapboxgl-ctrl-geocoder {
        min-width: 100%;
    }

    #map {
        margin-top: 0px;
    }
</style>
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> SiteInfo</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">Page SiteInfo</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">

                <div class="card col-12  ">
                    <div class="card-body">
                        <form action="{{ route('updateSiteInfo') }}" method="POST">
                            @csrf
                            <div class="row">

                                <div class="col-4">

                                    <label for="">Update Email : </label>
                                    <div class="input-group mb-3">

                                        <input type="text" name="email" class="form-control"
                                            value="{{ $data->email }}" placeholder="Enter the email">

                                    </div>
                                    @error('email')
                                        <div class=" alert-danger">{{ $message }}</div>
                                    @enderror

                                </div>

                                <div class="col-4">

                                    <label for="">Update phone Number : </label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="phone"
                                            value="{{ $data->phone }}" placeholder="Enter the phone Number">

                                    </div>
                                    @error('phone')
                                        <div class=" alert-danger">{{ $message }}</div>
                                    @enderror

                                </div>


                                <div class="col-4">
                                    @csrf
                                    <label for="">Update AboutUs : </label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="about_us"
                                            value="{{ $data->about_us }}" placeholder="Enter the aboutUs">


                                    </div>
                                    @error('about_us')
                                        <div class=" alert-danger">{{ $message }}</div>
                                    @enderror

                                </div>


                                <div class="col-4">
                                    @csrf
                                    <label for="">Update Fax : </label>

                                    <div class="input-group mb-3">

                                        <input type="text" class="form-control" name="fax"
                                            value="{{ $data->fax }}" placeholder="Enter the Fax">
                                    </div>
                                    @error('fax')
                                        <div class="alert-danger">{{ $message }}</div>
                                    @enderror


                                </div>
                                <div class="col-4">
                                    @csrf
                                    <label for="">Update faceBook Link : </label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="facebook"
                                            value="{{ $links->facebook }}" placeholder="Enter the faceBook Link">
                                    </div>

                                </div>
                                <div class="col-4">
                                    @csrf
                                    <label for="">Update instagram Link : </label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="instagram"
                                            value="{{ $links->instagram }}" placeholder="Enter the instagram Link">
                                    </div>

                                </div>

                                <div class="col-4">

                                    <label for="">Update youtube Link : </label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="youtube"
                                            value="{{ $links->youtube }}" placeholder="Enter the youtube Link">
                                    </div>

                                </div>

                                <div class="col-4">

                                    <label for="">Update Main Office Name : </label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="mainOfficeName"
                                            value="{{ $officeMain->name }}" placeholder="Enter main Offic eName">
                                    </div>

                                </div>

                                <div class="col-4">

                                    <label for="">Update Section Office Name : </label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="officeSection"
                                            value="{{ $officeSection->name }}"
                                            placeholder="Enter Section Offic eName">
                                    </div>

                                </div>

                                <div class="col-4">

                                    <label for="">Update location main Office</label>
                                    <div class="input-group mb-3">
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#main">
                                            select location
                                        </button>
                                    </div>

                                </div>

                                <div class="col-4">

                                    <label for="">Update location section Office</label>
                                    <div class="input-group mb-3">
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#section">
                                            select location for section office
                                        </button>
                                    </div>

                                </div>

                                <div class="col-4">


                                    <div class="input-group mb-3">
                                        <button type="submit" class="btn btn-success">Save</button>
                                        <input type="text" name="" id="location">
                                    </div>


                                </div>






                            </div>
                            {{-- <div class="">

                                    <div id="map"></div>

                                    <div id="geocoder" class="geocoder"></div>
                                </div> --}}
                    </div>

                    </form>
                    {{-- <button>asd</button> --}}

                </div>
            </div>
        </div>

    </div>

</div>


<!-- Modal -->
<div class="modal fade" id="main" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">select location </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12" style="post">

                        <div id="map"></div>

                        <div id="geocoder" class="geocoder"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="section" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">select location</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="map"></div>

                <div id="geocoder" class="geocoder"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>

            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

<script>
    mapboxgl.accessToken =
        'pk.eyJ1Ijoib2JhZGFoYWxsYWsiLCJhIjoiY2wzYjJsZ2ZkMDNqZjNrcW5hYjAwMTA1YSJ9.LuE8p0KasMJk6Kl-sFKLJg';
    const map = new mapboxgl.Map({
        container: 'map',
        // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [-79.4512, 43.6568],
        zoom: 13
    });

    // Add the control to the map.
    const geocoder = new MapboxGeocoder({
        accessToken: mapboxgl.accessToken,
        mapboxgl: mapboxgl
    });

    document.getElementById('geocoder').appendChild(geocoder.onAdd(map));
    geocoder.on('result', e => {

        console.log(e.result.center);
        $('#location').val(e.result.center);
    })

</script>



@endsection

        </script>
