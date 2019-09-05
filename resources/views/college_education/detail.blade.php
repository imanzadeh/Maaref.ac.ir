@can('manage_AlumniAssociation')
    @extends('layouts.DashboardLayout')
    @section('content')
        <div class="container">
            <section>
                <h3>مشخصات تحصیلات دانشگاهی</h3>
                <div class="row">
                    <div class="col-md-4 offset-4">
                        <dl class="dl-horizontal">
                            <dt>
                                ردیف
                            </dt>
                            <dd>
                                {{$collegeEducation->id}}
                            </dd>
                            <dt>
                                نام تحصیلات دانشگاهی
                            </dt>
                            <dd>
                                {{$collegeEducation->title}}
                            </dd>
                        </dl>
                    </div>
                </div>
            </section>
        </div>
    @endsection
@endcan
