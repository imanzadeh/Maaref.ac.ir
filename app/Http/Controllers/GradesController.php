<?php

namespace App\Http\Controllers;

use App\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GradesController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('grade.index',compact('user'));
    }

    public function create()
    {
        $user = Auth::user();
        return view('grade.create',compact('user'));
    }

    public function store(Request $request)
    {
        $request->validate(Grade::rules());

        $Grade = Grade::create(['title' => $request['title']]);

        if($Grade->exists) {
            echo '<div class="alert alert-success">فعالیت با موفقیت ثبت شد.</div>';
        }
        //return redirect(route('grade.index'));
    }

    public function show(Grade $grade)
    {
        $user = Auth::user();
        return view('grade.detail',compact('grade', 'user'));
    }

    public function edit(Grade $grade)
    {
        $user = Auth::user();
        return view('grade.edit',compact('grade', 'user'));
    }

    public function update(Request $request, Grade $grade)
    {
        $request->validate(Grade::rule());

        $grade->update($request->all());
        return redirect(route('grade.index'));
    }

    public function destroy(Grade $grade)
    {
        $grade->delete();
        return redirect(route('grade.index'));
    }

    public function FetchData() {
        $grades = Grade::all();
        echo json_encode($grades);
    }

    public function UpdateData(Request $request)
    {
        $request->validate(Grade::rules());

        $grade = Grade::find($request->id);
        $grade->title = $request->title;
        $grade->save();
        echo '<div class="alert alert-success">مقطع مورد نظر با موفقیت بروز رسانی شد.</div>';
    }

    public function DeleteData(Request $request) {

        Grade::Destroy($request['id']);

        echo '<div class="alert alert-success">مقطع مورد نظر با موفقیت حذف شد.</div>';
    }
}
