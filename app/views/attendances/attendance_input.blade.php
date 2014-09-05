@extends('layouts.master')

@section('content')


<div id="content-header" class="mini">
    <h1>INPUT PAGE</h1>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 center" style="text-align: Center;">
            <div class="col-sm-offset-4 col-sm-4">
                <br>
                <br>
                <br>

            </div>

            {{ Form::open(array( 'method' => 'get', 'action' => array('AttendanceController@input_By_Date'))) }}

                <div class="col-sm-offset-4 col-sm-4">
                <select name="date" class="selectpicker">
                    <option value="">Select a Date</option>
                    @forelse($dateList as $date)
                    <option value="{{$date->date}}">{{$date->date}}</option>
                    @empty
                </select>
                @endforelse
                </select>
            </div>
            <div class="col-sm-offset-4 col-sm-4">
                <br>
                <br>
                <br>
            </div>

            <div class="col-sm-offset-4 col-sm-4">
                {{ Form::submit('SUBMIT', array('class' => 'btn btn-primary')) }}
                {{ Form::close() }}
            </div>



        </div>
    </div>

    <br />


</div>





@stop



