<?php

class AttendanceController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('attendances/index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
    public function input_Attendances()
    {
        return View::make('attendances.input_Attendances');
    }

    public function create_Attendances_Report()
    {
        return View::make('attendances.create_Attendances_Report');
    }

    public function edit_Attendances()
    {

        return View::make('attendances.edit_Attendances');
    }

    public function show_All()
    {
        //get all Books
        //$attendancesList = Attendance::all();
        $attendancesList = DB::table('users')
                           ->join('attendances', 'users.user_id', '=', 'attendances.users_id')
                           ->select('users.user_id','users.name', 'attendances.date', 'attendances.batches_id', 'attendances.track_id', 'attendances.start_time', 'attendances.end_time', 'attendances.presence', 'attendances.comments')
                           ->orderBy('attendances.date')
                           ->orderBy('users.user_id')
                           ->get();

        return View::make('attendances.show_All',compact('attendancesList'));
    }

    public function show_By_Date()
    {
        //get all Books
        //$attendancesList = Attendance::all();
        $dateList = DB::table('attendances')
            ->select('date')
            ->orderBy('date')
            ->distinct()
            ->get();

        return View::make('attendances.show_By_Date',compact('dateList'));
    }

    public function showList_By_Date()
    {

        $attendanceInput = Input::all();

        $date = $attendanceInput['date'];

        $attendancesList = DB::table('users')
            ->join('attendances', 'users.user_id', '=', 'attendances.users_id')
            ->select('users.name', 'attendances.users_id', 'attendances.batches_id', 'attendances.start_time', 'attendances.end_time', 'attendances.presence', 'attendances.comments', 'attendances.track_id', 'attendances.date')
            ->where('attendances.date', '=', $date)
            ->orderBy('users.user_id')
            ->get();

        return View::make('attendances.showList_By_Date',compact('attendancesList'),array('date' => $date));


    }

    public function show_By_Name()
    {
        //get all Books
        //$attendancesList = Attendance::all();
        $nameList = DB::table('users')
            ->join('attendances', 'users.user_id', '=', 'attendances.users_id')
            ->select('users.name','users.user_id')
            ->groupBy('users.name')
            ->distinct()
            ->get();

        return View::make('attendances.show_By_Name',compact('nameList'));
    }

    public function showList_By_Name()
    {

        $attendanceInput = Input::all();

        $id = $attendanceInput['id'];

        $name_query_result = DB::table('users')
            ->select('name')
            ->where('user_id', '=', $id)
            ->get();

        $batch_track_query_result = DB::table('attendances')
            ->select('batches_id', 'track_id')
            ->where('users_id', '=', $id)
            ->distinct()
            ->get();

       $name = $name_query_result[0]->name;
       $batch = $batch_track_query_result[0]->batches_id;
       $track = $batch_track_query_result[0]->track_id;

//        print_r($id);
//        print_r($name_query_result);
//        print_r($batch_track_query_result);
//        print_r($name);
//        print_r($batch);
//        print_r($track);
//       die();

        $attendancesList = DB::table('attendances')
            ->select('date','start_time', 'end_time', 'presence', 'comments')
            ->where('users_id', '=', $id)
            ->orderBy('date')
            ->get();

        return View::make('attendances.showList_By_Name',compact('attendancesList'),array('name' => $name, 'id' => $id, 'batch' => $batch, 'track' => $track));


    }

    public function show_Attendances()
    {
        return View::make('attendances.show_Attendances');
    }

    public function input_By_Date()
    {
        //$attendancesList = Attendance::all();
//        $attendancesList = DB::select('SELECT attendances.start_time, users.name, attendances.presence, attendances.comments
//                                       FROM attendances
//                                       INNER JOIN users
//                                       ON users.user_id = attendances.users_id');

//        $attendancesList = DB::select('SELECT *
//                                       FROM attendances
//                                       WHERE date = ?', array('2014-09-01'));

//        $attendancesList = DB::table('attendances')
//                                    ->where('date', '=', '2014-09-01')
//                                    ->orderBy('users_id')->get();
        $attendanceInput = Input::all();

        $date = $attendanceInput['date'];
//        $batch = $attendanceInput['batch'];


//        print_r($date);
//        print_r($batch);
//        die();


        $attendancesList = DB::table('users')
                                    ->join('attendances', 'users.user_id', '=', 'attendances.users_id')
                                    ->select('users.name', 'attendances.id', 'attendances.users_id', 'attendances.date', 'attendances.comments', 'attendances.track_id')
                                    ->where('attendances.date', '=', $date)
//                                    ->where('attendances.batches_id', '=', $batch)
                                    ->orderBy('users.user_id')
                                    ->get();

        //DB::select('select * from users where id = ?', array('value'));

        //dd($attendancesList);
        return View::make('attendances.input_By_Date',compact('attendancesList'),array('date' => $date));
        //return View::make('attendances.input_By_Date');
    }

    public function attendance_input()
    {
//        $attendancesList = DB::table('users')
//                            ->join('attendances', 'users.user_id', '=', 'attendances.users_id')
//                            ->select('users.user_id','users.name', 'attendances.date', 'attendances.start_time', 'attendances.end_time', 'attendances.presence', 'attendances.comments')
//                            ->orderBy('attendances.date')
//                            ->orderBy('users.user_id')
//                            ->get();

        $dateList = DB::table('attendances')
                            ->select('date')
                            ->orderBy('date')
                            ->distinct()
                            ->get();

//        $batchList = DB::table('attendances')
//                            ->select('batches_id')
//                            ->orderBy('batches_id')
//                            ->distinct()
//                            ->get();

//        print_r($dateList);
//        print_r($batchList);
//        die();

//        return View::make('attendances.attendance_input',compact('dateList', 'batchList'));
        return View::make('attendances.attendance_input',compact('dateList'));


    }


        public function create()
	{
        //commence courses and add data into attendances table
        return View::make('attendances.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        //create a rule validation
        $rules=array(
            'users_id'=>'required',
            'batches_id'=>'required',
            'course_id'=>'required',
            'track_id'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            //'start_time'=>'required',
//            'end_time'=>'required',
            'duration'=>'required',
        );
        //get all information
        $attendanceInfo = Input::all();
//        $date=date_create("2013-03-15");
//        date_add($date,date_interval_create_from_date_string("1 day"));
//
//        print_r($date);
//        die();

        //validate information with the rules
        $validation=Validator::make($attendanceInfo,$rules);
        if($validation->passes())
        {
            //save new information in the database
            //and redirect to show page
            //print_r($attendanceInfo);die();



            $attendance = $attendanceInfo;
//            for($start_date = date_create($attendanceInfo['start_date']); $start_date <= $attendanceInfo['end_date']; date_add($start_date, date_interval_create_from_date_string('1 day')) )




            $start_time=strtotime($attendanceInfo['start_date']);
            $start_time = date("h:i:sa", $start_time);
            $end_time=strtotime($attendanceInfo['end_date']);
            $end_time = date("h:i:sa", $end_time);

            $attendance['start_time']=$start_time;
            $attendance['end_time']=$end_time;

            //print_r($start_time);
            //print_r($end_time);

            //die();

            $end_date = date_create($attendanceInfo['end_date']);

            for($start_date = date_create($attendanceInfo['start_date']); $start_date <= $end_date; date_add($start_date,date_interval_create_from_date_string("1 day")))
            {
//                $date=strtotime($attendance['start_date']);
//                $date = date("Y-m-d", $date);
                //print_r($start_date);
//                print_r($start_date);
//                print_r($end_date);
                //die();
            //$attendance['start_time'] = $attendanceInfo['start_date'] + $attendanceInfo['start_time'];

               // print_r($attendance['start_date']); die();
            //$attendance['end_time'] =  $attendance['start_time'] +  $attendance['duration'];
                $attendance['date']=$start_date;


//                print_r($attendance['users_id']);
//                print_r($attendance['batches_id']);
//                print_r($attendance['course_id']);
//                print_r($attendance['track_id']);
//                print_r($attendance['date']);
//                print_r($attendance['start_time']);
//                print_r($attendance['end_time']);
//                print_r($attendance['duration']);
                //die();




                Attendance::create($attendance);

            }

//            print_r($start_date);
//            die();


            //Attendance::create($attendanceInfo);
            return Redirect::route('attendances.show')
                ->withInput()
                ->withErrors($validation)
                ->with('message', 'Successfully created Record.');
        }
        //show error message
        return Redirect::route('attendances.create')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'Some fields are incomplete.');
	}



	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
		////get all Books
        //$attendancesList = Attendance::all();
        return View::make('attendances.course_commence');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id = null)
	{
        $attendanceInput = Input::all();



        //print_r($attendanceInput);
        //die();
        //print_r($attendanceInput['selector']);
        if(isset($attendanceInput['selector']))
        {
            $presence_id = $attendanceInput['selector'];
            for($index = 0; $index < count($presence_id);  $index++)
            {
                $attendancesList = DB::table('attendances')
                    ->where('id', '=', $presence_id[$index])
                    ->update(array('presence' => '0'));
            }
        }

 //       $presence_id = $attendanceInput['selector'];
        $comments = $attendanceInput['comments'];
        $id = $attendanceInput['id'];
        //print_r($id[0]);
        //print_r($id[1]);

        //$attendancesList= DB::update('update attendances set presence = 0 where id = ?', array('128'));



        for($id_index = 0; $id_index < count($id);  $id_index++)
        {
            $attendancesListComments = DB::table('attendances')
                ->where('id', '=', $id[$id_index])
                ->update(array('comments' => $comments[$id_index]));
        }


//        $attendancesList = DB::table('attendances')
//                                    ->where('id', '=', $id[0])
//                                    ->update(array('presence' => '0'));

//        print_r($attendancesList);
//
//        die();

        return View::make('attendances.success_input');

	}

    public function course_commence()
    {

        return View::make('attendances.course_commence');
    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
