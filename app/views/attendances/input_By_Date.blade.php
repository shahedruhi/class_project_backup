@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="text-center">Input Attendance of Day {{ $date }}</h4>
            </div>
            <div class="panel-body">
                <div class="row">

                    {{ Form::open(array( 'method' => 'get', 'action' => array('AttendanceController@edit'))) }}

                        @if (count($attendancesList))
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Track</th>
                                <th>Presence Status</th>
                                <th>Comments</th>


                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($attendancesList as $attendance)
                            <tr>
                                <td>{{ $attendance->date }}</td>
                                <td>{{ $attendance->users_id }}</td>
                                <td>{{ $attendance->name }}</td>
                                <td>@if ($attendance->track_id == 101)
                                    {{'ITS'}}
                                    @elseif ($attendance->track_id == 102)
                                    {{'ITES'}}
                                    @elseif ($attendance->track_id == 103)
                                    {{'ITSS'}}
                                    @else
                                    {{'MANAGEMENT'}}
                                    @endif</td>


                                <td>Absent {{ Form::checkbox('selector[]', $attendance->id) }}</td>


                                <td><input type="text" name="comments[]" value="{{ $attendance->comments }}"/></td>
                                <input type="hidden" name="id[]" value="{{ $attendance->id }}"/>

<!--                                <td>If you want to add any comments {{ Form::text('comments[]') }}</td>-->
                                <!--<td>
                                <td>{{ link_to_route('attendances.show', 'Read', array($attendance->id),
                                    array('class' => 'btn btn-primary')) }}</td>
                                <td>{{ link_to_route('attendances.edit', 'Update', array($attendance->id),
                                    array('class' => 'btn btn-warning')) }}</td>
                                </td>-->

                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @else
                        There are no attendances
                        @endif
                </div>
                <div class="row" style="text-align: center;">

                   {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}



                </div>

                {{ Form::close() }}
                @if ($errors->any())

                    {{implode('',$errors->all('<li class="error">:message</li>'))}}

                @endif

            </div>
        </div>
    </div>
</div>

@stop
