@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-default">


            <div class="col-sm-offset-4 col-sm-4">



                <p><a href="/show_Attendances" class="btn btn-primary btn-lg">Back to Show Attendances Page</a></p>

            </div>


            <div class="col-sm-offset-3 col-sm-9">

                <h4>Attendance list of {{ $name }}
                    ID: {{ $id }}
                    Batch: FTFL - {{ $batch }}
                    Track: @if ($track == 101)
                    {{'ITS'}}
                    @elseif ($track == 102)
                    {{'ITES'}}
                    @elseif ($track == 103)
                    {{'ITSS'}}
                    @else
                    {{'MANAGEMENT'}}
                    @endif</h4>
            </div>
            <div class="panel-body">
                @if (count($attendancesList))

                <table class="table table-bordered">
                    <thead>
                    <tr>


                        <th><h4>Date</h4></th>
                        <th><h4>Start Time of Session</h4></th>
                        <th><h4>End Time of Session</h4></th>
                        <th><h4>Presence Status</h4></th>
                        <th><h4>Comments</h4></th>


                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($attendancesList as $attendance)
                    <tr>

                        <td>{{ $attendance->date }}</td>
                        <td>{{ $attendance->start_time }} </td>
                        <td>{{ $attendance->end_time }}</td>
                        <td><h4>@if ($attendance->presence == 1)
                                {{'Present'}}
                                @else
                                {{'Absent'}}
                                @endif</h4></td>
                        <td>{{ $attendance->comments }}</td>


                    </tr>
                    @endforeach
                    </tbody>
                </table>
                @else
                There are no attendances
                @endif
            </div>
        </div>
    </div>
</div>

@stop
