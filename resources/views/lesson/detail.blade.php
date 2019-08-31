@can('manage_AlumniAssociation')
    @extends('layouts.DashboardLayout')
    @section('content')

        <div class="container">
            <section>
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center professor_list_title"> مشخصات درس</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 offset-4">
                        <dl class="dl-horizontal">
                            <dt>
                                ردیف
                            </dt>
                            <dd>
                                {{$lesson->id}}
                            </dd>
                            <dt>
                                نام درس
                            </dt>
                            <dd>
                                {{$lesson->title}}
                            </dd>
                        </dl>
                    </div>
                </div>
            </section>
        </div>
    @endsection
@endcan
