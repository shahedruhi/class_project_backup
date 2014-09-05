@extends('layouts.master')

@section('content')


    <div id="content-header" class="mini">
        <h1>Input Attendances Page</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 center" style="text-align: Center;">

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
                        <a href="/attendance_input" class="list-group-item">Input Attendances By Date</a>
                        <a href="#" class="list-group-item">Possible input feature</a>
                        <a href="#" class="list-group-item">Possible input feature</a>
                        <a href="#" class="list-group-item">Possible input feature</a>
                    </div>
                </div>




<!--                <div class="form-group">-->
<!--                    <label class="sr-only" for="exampleInputEmail2">Email address</label>-->
<!--                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <div class="input-group">-->
<!--                        <div class="input-group-addon">@</div>-->
<!--                        <input class="form-control" type="email" placeholder="Enter email">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <label class="sr-only" for="exampleInputPassword2">Password</label>-->
<!--                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">-->
<!--                </div>-->
<!--                <div class="checkbox">-->
<!--                    <label>-->
<!--                        <input type="checkbox"> Remember me-->
<!--                    </label>-->
<!--                </div>-->
<!--                <button type="submit" class="btn btn-default">Sign in</button>-->





<!--                {{ Form::open(array('url' => url('foo/bar'), 'class'=>'form-inline')) }}-->
<!---->
<!--                {{ Form::label('selectBatch', 'SELECT BATCH') }}-->
<!--                {{ Form::select('selectBatch', array('select', 'FTFL - 01', 'FTFL - 03', 'FTFL - 03', 'FTFL - 04')) }}-->
<!--                {{ Form::label('selectTrack', 'SELECT TRACK') }}-->
<!--                {{ Form::select('selectTrack', array('select', 'ITS', 'ITES', 'ITSS', 'MANAGEMENT')) }}-->
<!---->
<!--                {{ Form::label('selectTrack', 'SELECT DATE') }}-->
<!---->
<!---->
<!--                {{ Form::selectRange('number', 01, 31) }}-->
<!--                {{ Form::selectMonth('month') }}-->
<!---->
<!---->
<!---->
<!--                {{ Form::selectYear('year', 2014, 2018) }}-->
<!---->
<!---->
<!---->
<!--                {{ Form::close() }}-->
<!---->
<!--                <br>-->
<!--                <br>-->
<!---->
<!--                <table class="table table-bordered">-->
<!--                    <thead>-->
<!--                    <tr>-->
<!--                        <th>ID</th>-->
<!--                        <th>Name</th>-->
<!--                        <th>Presence</th>-->
<!--                        <th>Comments</th>-->
<!---->
<!---->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    <tr>-->
<!--                        <td>ITS-2014000023</td>-->
<!--                        <td>Sudeb Kumar</td>-->
<!--                        <td><div class="checkbox">-->
<!--                                <label>-->
<!--                                    <input type="checkbox"> Present-->
<!--                                </label>-->
<!--                            </div>-->
<!--                        </td>-->
<!--                        <td>-->
<!--                            {{ Form::text('comments', null, array('class' => 'input-small', 'placeholder' => 'Comments')) }}-->
<!--                        </td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>ITS-2014000025</td>-->
<!--                        <td>Towfiqur Rahman</td>-->
<!--                        <td><div class="checkbox">-->
<!--                                <label>-->
<!--                                    <input type="checkbox"> Present-->
<!--                                </label>-->
<!--                            </div>-->
<!--                        </td>-->
<!--                        <td>-->
<!--                            {{ Form::text('comments', null, array('class' => 'input-small', 'placeholder' => 'Comments')) }}-->
<!--                        </td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>ITS-2014000103</td>-->
<!--                        <td>Sanjib Kumar</td>-->
<!--                        <td><div class="checkbox">-->
<!--                                <label>-->
<!--                                    <input type="checkbox"> Present-->
<!--                                </label>-->
<!--                            </div>-->
<!--                        </td>-->
<!--                        <td>-->
<!--                            {{ Form::text('comments', null, array('class' => 'input-small', 'placeholder' => 'Comments')) }}-->
<!--                        </td>-->
<!--                    </tr>-->
<!--                    </tbody>-->
<!--                </table>-->
            </div>
        </div>

        <br />


    </div>





@stop



