@extends('layouts.master')

@section('content')


<div id="content-header" class="mini">
        <h1>Show Attendances page</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 center" style="text-align: center;">
                <div class="col-sm-offset-4 col-sm-4">
                    <br>
                    <br>
                    <br>
                </div>

                <div class="col-sm-offset-4 col-sm-4">
                <div class="list-group">
                    <a class="list-group-item active">
                        OPTIONS
                    </a>
                    <a href="/show_All" class="list-group-item">Show All Attendances Sorted by Date</a>
                    <a href="/show_By_Date" class="list-group-item">Show Attendances By Date</a>
                    <a href="/show_By_Name" class="list-group-item">Show Attendances By Student Name</a>
                    <a href="#" class="list-group-item">Show Attendances By Track</a>
                </div>
                </div>





            </div>
        </div>

        <br />


</div>





@stop
