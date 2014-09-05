@extends('layouts.master')

@section('content')

<!--<div id="content">-->
<div id="content-header" class="mini">
    <h1>Attendances Main Page</h1>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 center" style="text-align: center;">
            <ul class="quick-actions">
                <li>
                    <div class="btn-group">
                        <a href="/input_Attendances">
                            <i class="icon-book"></i>
                            Input Attendances
                        </a>
                    </div>
                </li>
                <li>
                    <div class="btn-group">
                        <a href="/show_Attendances">
                            <i class="icon-cal"></i>
                            Show Attendances
                        </a>
                    </div>
                </li>
                <li>
                    <div class="btn-group">
                        <a href="/create_Attendances_Report">
                            <i class="icon-survey"></i>
                            Create Attendances Report
                        </a>
                    </div>
                </li>
                <li>
                    <div class="btn-group">
                        <a href="/edit_Attendances">
                            <i class="icon-database"></i>
                            Edit Attendances
                        </a>
                    </div>
                </li>
            </ul>





        </div>
    </div>

    <br />

    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center">Current Courses</h4>
                </div>
                <div class="panel-body">
                    <div class="list-group">
                            <h4>
                                <p>{{ link_to_route('attendances.create', 'COMMENCE COURSE') }}</p>

                            </h4>
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">
                                Feature
                            </h4>
                            <p class="list-group-item-text">
                                Feature
                            </p>
                        </a>
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">
                                Feature
                            </h4>
                            <p class="list-group-item-text">
                                Feature
                            </p>
                        </a>
                    </div>
                    <a href="" class="btn btn-info col-lg-offset-7 col-lg-5">
                        More
                        <b class="glyphicon glyphicon-arrow-right"></b>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center">Trainer</h4>
                </div>
                <div class="panel-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item ">
                            <span class="badge alert-danger">New</span>
                            <h4 class="list-group-item-heading">
                                Feature
                            </h4>
                            <p class="list-group-item-text">
                                Feature
                            </p>
                        </a>
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">
                                Feature
                            </h4>
                            <p class="list-group-item-text">
                                Feature
                            </p>
                        </a>
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading">
                                Feature
                            </h4>
                            <p class="list-group-item-text">
                                Feature
                            </p>
                        </a>
                    </div>
                    <a href="" class="btn btn-primary col-lg-offset-7 col-lg-5">
                        More
                        <b class="glyphicon glyphicon-arrow-right"></b>
                    </a>
                </div>
            </div>
        </div>

        <!--</div>-->

    </div>
</div>


</div>


@stop