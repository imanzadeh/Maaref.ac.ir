<?php

namespace App\Http\Controllers;

use App\FieldsOtherValue;
use Illuminate\Http\Request;

class FieldsOtherValuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fieldOtherValues=FieldsOtherValue::all();

        return view('field_other_value.index',compact('fieldOtherValues'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FieldsOtherValue  $fieldsOtherValue
     * @return \Illuminate\Http\Response
     */
    public function show(FieldsOtherValue $fieldsOtherValue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FieldsOtherValue  $fieldsOtherValue
     * @return \Illuminate\Http\Response
     */
    public function edit(FieldsOtherValue $fieldsOtherValue)
    {
        switch ($fieldsOtherValue->table_name)
        {
            case 'alumni_associations':
                //redirect('alumni.edit');
                break;
            case 'seminary_academic_degree_histories':
                return redirect(route('seminary_academic_degree_history.edit',
                    [$fieldsOtherValue->record_id,$fieldsOtherValue->id]));
                break;
            case 'college_education_histories':
                return redirect(route('college_education_history.edit',
                    [$fieldsOtherValue->record_id,$fieldsOtherValue->id]));
                break;
            case 'educational_experiences':
                return redirect(route('educational_experience.edit',
                    [$fieldsOtherValue->record_id,$fieldsOtherValue->id]));
                break;
            case 'research_activity_records':
                return redirect(route('research_activity_record.edit',
                    [$fieldsOtherValue->record_id,$fieldsOtherValue->id]));
                break;
            case 'advertising_records':
                return redirect(route('advertising_record.edit',
                    [$fieldsOtherValue->record_id,$fieldsOtherValue->id]));
                break;
            case 'employment_records':
                return redirect(route('employment_record.edit',
                    [$fieldsOtherValue->record_id,$fieldsOtherValue->id]));
                break;
            case 'teaching_licenses':
                return redirect(route('teaching_license.edit',
                    [$fieldsOtherValue->record_id,$fieldsOtherValue->id]));
                break;
            case 'advertising_licenses':
                return redirect(route('advertising_license.edit',
                    [$fieldsOtherValue->record_id,$fieldsOtherValue->id]));
                break;
            case 'scientific_references':
                return redirect(route('scientific_reference.edit',
                    [$fieldsOtherValue->record_id,$fieldsOtherValue->id]));
                break;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FieldsOtherValue  $fieldsOtherValue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FieldsOtherValue $fieldsOtherValue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FieldsOtherValue  $fieldsOtherValue
     * @return \Illuminate\Http\Response
     */
    public function destroy(FieldsOtherValue $fieldsOtherValue)
    {
        //
    }
}
