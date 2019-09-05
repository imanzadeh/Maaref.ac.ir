@can('manage_AlumniAssociation')
    @extends('layouts.DashboardLayout')
    @section('content')

        <div class="container">
            <section>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center professor_list_title">لیست نوع مسئولیت</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 offset-2">
                        <p>
                            <a class="btn btn-primary" href="{{route('responsibility_type.create')}}">جدید</a>
                        </p>
                        <table class="table float-right">
                            <thead>
                            <tr>
                                <th>
                                    نوع مسئولیت
                                </th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($responsibilityTypes as $responsibilityType)
                                <tr>
                                    <td>
                                        <a href="{{route('responsibility_type.detail',[$responsibilityType->id])}}">
                                            {{$responsibilityType->title}}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{route('responsibility_type.delete',[$responsibilityType->id])}}" class="btn btn-danger">
                                            حذف
                                        </a>
                                        <a href="{{route('responsibility_type.edit',[$responsibilityType->id])}}" class="btn btn-warning">
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
