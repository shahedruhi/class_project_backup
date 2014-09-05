@extends('layouts.master')
@section('content')



<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 center" style="text-align: Center;">
            <h3>COMMENCE COURSE</h3>



            <div class="col-sm-offset-4 col-sm-4">
                {{ Form::open(array('route' => 'attendances.store')) }}

                <div class="form-group">
                    {{ Form::label('User ID', 'User ID:') }}
<!--                    {{ Form::input('number', 'users_id') }}-->
                    {{ Form::text('users_id', '', ['class'=>'form-control','placeholder'=>'' ])  }}
                </div>

                <div class="form-group">
                    {{ Form::label('Batch ID', 'Batch ID:') }}
<!--                    {{ Form::input('number', 'batches_id') }}-->
                    {{ Form::text('batches_id', '', ['class'=>'form-control','placeholder'=>'' ])  }}
                </div>

                <div class="form-group">
                    {{ Form::label('Course ID', 'Course ID:') }}
<!--                    {{ Form::input('number', 'course_id') }}-->
                    {{ Form::text('course_id', '', ['class'=>'form-control','placeholder'=>'' ])  }}
                </div>

                <div class="form-group">
                    {{ Form::label('Track ID', 'Track ID:') }}
<!--                    {{ Form::input('number', 'track_id') }}-->
                    {{ Form::text('track_id', '', ['class'=>'form-control','placeholder'=>'' ])  }}
                </div>

                <div class="form-group">
                    {{ Form::label('Start Date', 'Start Date:') }}
                    <!--        {{ Form::input('date', 'start_date') }}-->
                    {{ Form::text('start_date', $value = null , $attributes = [ 'class'=>'form-control','placeholder' => '2014-08-01 08:00']) }}
                    LIKE: 2014-08-01 08:00
                </div>

                <div class="form-group">
                    {{ Form::label('End Date', 'End Date:') }}
                    <!--        {{ Form::input('date', 'end_date') }}-->
                    {{ Form::text('end_date', $value = null , $attributes = [ 'class'=>'form-control','placeholder' => '2014-08-03 17:00']) }}
                    LIKE: 2014-08-03 17:00
                </div>

                <div class="form-group">
                    {{ Form::label('Session Duration', 'Session Duration:') }}
<!--                    {{ Form::input('number', 'duration') }}-->
                    {{ Form::text('duration', '', ['class'=>'form-control','placeholder'=>'' ])  }}

                </div>

                <div class="form-group">

                    {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

                </div>

                <div class="form-group">
                {{ Form::close() }}
                @if ($errors->any())

                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}

                @endif

                </div>

            </div>
        </div>

    </div>
    <br />

</div>





@stop


