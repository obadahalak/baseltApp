@extends('layouts.master')
@section('css')

@section('title')
    Messages
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> Messages</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">Page Message ContactSupport</li>
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
                <table class="table">
                    <thead>


                        <tr>

                            <th scope="col">name</th>
                            <th scope="col">email</th>
                            <th scope="col">Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($messages as $items)
                        <tr>

                            <td>{{$items->name}}</td>
                            <td>{{$items->email}}</td>
                            <td>{{$items->message}}</td>
                        </tr>
                        @endforeach


                    </tbody>
                  </table>
                  {{$messages->links()}}
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
