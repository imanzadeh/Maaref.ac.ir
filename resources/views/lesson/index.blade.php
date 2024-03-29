@can('manage_AlumniAssociation')
    @extends('layouts.DashboardLayout')
    @section('content')

        <div class="container">
            <section>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center professor_list_title">لیست دروس</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 offset-4">
                        <p>
                            <a class="btn btn-primary" href="{{route('lesson.create')}}">جدید</a>
                        </p>
                        <table class="table float-right">
                            <thead>
                            <tr>
                                <th>
                                    نام درس
                                </th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($lessons as $lesson)
                                <tr>
                                    <td>
                                        <a href="{{route('lesson.detail',[$lesson->id])}}">
                                            {{$lesson->title}}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{route('lesson.delete',[$lesson->id])}}" class="btn btn-danger">
                                            حذف
                                        </a>
                                        <a href="{{route('lesson.edit',[$lesson->id])}}" class="btn btn-warning">
                                            ویرایش
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    @endsection
@endcan
