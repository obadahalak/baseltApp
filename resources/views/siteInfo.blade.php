@extends('layouts.master')
@section('css')

@section('title')
    SiteInfo
@stop
@endsection
@section('page-header')
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
                        <div class="row">
                            <div class="col-4">
                                @csrf
                                <label for="">Update Email : </label>
                                <div class="input-group mb-3">
                                    <input type="text" name="email" class="form-control" value="{{ $data->email }}"
                                        placeholder="Enter the email">
                                </div>

                            </div>

                            <div class="col-4">
                                @csrf
                                <label for="">Update phone Number : </label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="phone"
                                        value="{{ $data->phone }}" placeholder="Enter the phone Number">
                                </div>

                            </div>


                            <div class="col-4">
                                @csrf
                                <label for="">Update AboutUs : </label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="about_us"
                                        value="{{ $data->about_us }}" placeholder="Enter the aboutUs">
                                </div>

                            </div>


                            <div class="col-4">
                                @csrf
                                <label for="">Update Fax : </label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="fax"
                                        value="{{ $data->fax }}" placeholder="Enter the Fax">
                                </div>

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
                                @csrf
                                <label for="">Update youtube Link : </label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="youtube"
                                        value="{{ $links->youtube }}" placeholder="Enter the youtube Link">
                                </div>

                            </div>

                            <div class="col-4">
                                @csrf
                                <label for="">Update Main Office Name : </label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="mainOfficeName"
                                        value="{{ $officeMain->name }}" placeholder="Enter main Offic eName">
                                </div>

                            </div>

                            <div class="col-4">
                                @csrf
                                <label for="">Update Section Office Name : </label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="mainOfficeName"
                                        value="{{ $officeSection->name }}" placeholder="Enter Section Offic eName">
                                </div>

                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
