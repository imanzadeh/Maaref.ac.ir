@can('users_manage')
    @extends('layouts.DashboardLayout')
@section('content')

    <div class="container">
        <section>
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center professor_list_title"> مشخصات نوع ارائه درس</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-2">
                    <table class="dl-horizontal">
                        <tr>
                            <td>
                                ردیف
                            </td>
                            <td>
                                {{$lessonMethod->id}}
                            </td>
                        </tr>

                        <tr>
                            <td>
                                نوع ارائه درس
                            </td>
                            <td>
                                {{$lessonMethod->title}}
                            </td>
                        </tr>

                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection
@endcan
