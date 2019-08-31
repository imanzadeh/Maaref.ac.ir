@can('manage_AlumniAssociation')
    @extends('layouts.DashboardLayout')
    @section('content')

        <div class="container">
            <section>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center professor_list_title">مشخصات شهر</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 offset-4">
                        <dl class="dl-horizontal">
                            <dt>
                                ردیف
                            </dt>
                            <dd>
                                {{$city->id}}
                            </dd>
                            <dt>
                                نام استان
                            </dt>
                            <dd>
                                {{$city->province->title}}
                            </dd>
                            <dt>
                                نام شهر
                            </dt>
                            <dd>
                                {{$city->title}}
                            </dd>
                        </dl>
                    </div>
                </div>
            </section>
        </div>
    @endsection
@endcan
