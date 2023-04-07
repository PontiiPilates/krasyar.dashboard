@extends('layout')

@section('title', 'Dashboard')

{{-- Grid --}}
@section('content')

    <div class="container-fluid" style="height: 100vh">

        <div class="row h-100">

            {{-- --- --}}
            <div class="col-4">
                <div class="row h-100">
                    <div class="h-100" id="table"></div>
                </div>
            </div>

            {{-- --- --}}
            <div class="col-4">
                <div class="row h-100">
                    <div class="" id="leftAndRightHistogram"></div>
                </div>
            </div>

            {{-- --- --}}
            <div class="col-4">

                <div class="row h-50">
                    <div class="" id="circle"></div>
                </div>

                <div class="row h-50">
                    <div class="" id="simplehistogram"></div>
                </div>

            </div>


        </div>

    </div>

    <style>
        #table {
            background-color: brown;
        }

        #simplehistogram {
            background-color: antiquewhite;
        }

        #circle {
            background-color: aqua;
        }

        #leftAndRightHistogram {
            background-color: azure;
        }
    </style>

    @include('charts.leftAndRightHistogram')
    @include('charts.circle')
    @include('charts.simplehistogram')
    @include('charts.table')

@endsection
