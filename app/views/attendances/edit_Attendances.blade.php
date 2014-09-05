@extends('layouts.master')

@section('content')


<div id="content-header" class="mini">
        <h1>Edit Attendances Report Page</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 center" style="text-align: center;">

                <br>
                <br>

                {{ Form::open(array('url' => url('foo/bar'), 'class'=>'form-inline')) }}

                {{ Form::label('selectTrainee', 'Select Trainee whose attendance you want to  edit') }}
                {{ Form::select('selectName', array('select', 'Towfiqur Rahman', 'Sanjib Saha', 'Sudeb Kumar', 'Iftekharul Alam')) }}
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Presence Status</th>
                        <th></th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>01-08-2014</td>
                        <td>Present</td>
                        <td></td>
                    </tr>
                </table>

            </div>
        </div>

        <br />

</div>


@stop
