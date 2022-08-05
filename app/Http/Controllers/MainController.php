<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use App\Models\Results;
use App\Models\TotalPoint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $description = 0;
        $student = Session('student');
        $result = Results::where('students_id',$student['id'])->get();
        $total = $result->sum('points_id');
//        dd($result);
         switch ($total){
             case($total>14 && $total<20):
                 $description = 1;
                 break;
             case ($total>=20 && $total<=25):
                  $description = 2;
                  break;
             case ($total>=25):
                 $description = 3;
                 break;
             default: $description=5;
         }
        $t_points=  TotalPoint::updateOrCreate(['totalSum'=>$total, 'descriptions_id'=>$description,'students_id'=>$student['id']]);
         $points= TotalPoint::find($t_points->id);
        return view('finish', ['result'=>$result, 'total'=>$total, 'points'=>$points,'student'=>$student]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = new Results([
            'points_id'=>$request->get('points_id'),
                 'questions_id'=>$request->get('questions_id'),
                 'students_id'=>$request->get('students_id')
        ]);
        $res->save();
       $lastRecord =  Questions::orderBy('id', 'DESC')->first();
        if($res->questions_id == $lastRecord->id) {
            return redirect()->route('main.index');
        }

        return redirect()->route('students.getAnswer', ['id'=>$request->get('students_id'), 'question'=>$request->get('questions_id')+1]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
