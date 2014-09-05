<?php
/**
 * Created by PhpStorm.
 * User: LAB
 * Date: 8/28/14
 * Time: 12:14 PM
 */

class Attendance extends Eloquent{
    protected $fillable = array( 'users_id','batches_id', 'course_id','track_id','date','start_time','end_time','duration');

} 