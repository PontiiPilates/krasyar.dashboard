@extends('layout')

@section('title', 'Dashboard')

{{-- Grid --}}
@section('content')

    <div class="container-fluid" style="height: 100vh" id="dashboard">

        <div class="row h-100">

            {{-- --- --}}
            <div class="col-4">
                <div class="row p-2" style="height: 7.5%;">
                    <div id="valuesSet"></div>
                </div>
                <div class="row p-2" style="height: 92.5%;">
                    <div id="table"></div>
                </div>
            </div>

            {{-- --- --}}
            <div class="col-4">
                <div class="row h-100 p-2">
                    <div id="stackedBar"></div>
                </div>
            </div>

            {{-- --- --}}
            <div class="col-4">

                <div class="row p-2" style="height: 50%;">
                    <div id="pie"></div>
                </div>

                <div class="row p-2" style="height: 50%;">
                    <div id="speed"></div>
                </div>

            </div>

        </div>

    </div>

    <style>
        #dashboard {
            background-color: white;
        }

        .anychart-credits {
            display: none;
        }
    </style>

    @include('charts.stackedBar')
    @include('charts.pie')
    @include('charts.speed')
    @include('charts.table')
    @include('charts.valuesSet')

    @include('scripts.fullscreen')

@endsection
