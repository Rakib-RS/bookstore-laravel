<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $teachers = Teacher::where('name', 'like', '%' . $request->get('search') . '%')
                ->orWhere('id', 'like', '%' . $request->get('search') . '%')
                ->paginate(10);
        } else {
            $teachers = Teacher::paginate(10);
        }
        return view('teachers.index', ['teachers' => $teachers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //public function store(Request $request)
    
       
       // dd("gaot iot");
        Teacher::create([
            'name'=>$request->name,
            'contact'=>$request->contact
        ]);

        return redirect()->route('teachers.index');

    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
        return view('teachers.show', ['teacher' => $teacher]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $teacher = Teacher::find($id);

        return view('teachers.edit', ['teacher' => $teacher]);
    }

    public function update(Request $request)
    {
        

        $teacher = Teacher::find($request->id);
        $teacher->update($request->all());

        return redirect()->route('teachers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();

        return redirect()->route('teachers.index');
    }
}
