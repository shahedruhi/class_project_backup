@extends('layouts.master')

@section('content')
<div id="content-header" class="mini">
    <h1>SHOW PAGE</h1>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 center" style="text-align: Center;">
            <div class="col-sm-offset-4 col-sm-4">
                <br>
                <br>
                <br>

            </div>

            {{ Form::open(array( 'method' => 'get', 'action' => array('AttendanceController@showList_By_Name'))) }}

            <div class="col-sm-offset-4 col-sm-4">
                <select name="id" class="selectpicker">
                    <option value="">Select a Name</option>
                    @forelse($nameList as $name)
                    <option value="{{$name->user_id}}">{{$name->name}}</option>
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