
@if($user->can('users_manage') && ($request->segment(2) == 'members' || $request->segment(2) == 'maaref_lessons' || $request->segment(2) == 'professor_term_lessons'))

    <li class="{{ $request->segment(3) == 'ProfessorsList' ? 'active' : '' }}">
        <a href="{{route('management.ProfessorsList')}}">
            لیست اساتید
        </a>
    </li>
    <li class="{{ $request->segment(3) == 'ImportProfessorsInfoForm' ? 'active' : '' }}">
        <a href="{{route('management.ImportProfessorsInfoForm')}}">
            بروزرسانی مشخصات اساتید
        </a>
    </li>
    <li class="{{ $request->segment(3) == 'ProfessorTermLessonsImportForm' ? 'active' : '' }}">
        <a href="{{route('ProfessorTermLessons.ImportForm')}}">
            دروس ترم جاری اساتید
        </a>
    </li>
    <li class="sidebar-sub-dropdown {{ $request->segment(2) == 'maaref_lessons' ? 'active' : ''}}">
        <a href="#">
            مدیریت دروس دانشگاه
        </a>
        <div class="submenu" {{--style="display: {{ $request->segment(2) == 'maaref_lessons' ? 'block' : 'none'}} "--}}>
            <ul>
                <li class="{{ $request->segment(3) == 'lesson_types' ? 'active' : '' }}">
                    <a href="{{route('lesson_types.index')}}">
                        <span class="menu-text">مدیریت نوع دورس</span>
                    </a>
                </li>
                <li class="{{ $request->segment(3) == 'lesson_methods' ? 'active' : '' }}">
                    <a href="{{route('lesson_methods.index')}}">
                        <span class="menu-text">مدیریت نوع ارائه دورس</span>
                    </a>
                </li>
                <li class="{{ $request->segment(3) == 'lesson_genders' ? 'active' : '' }}">
                    <a href="{{route('lesson_genders.index')}}">
                        <span class="menu-text">مدیریت جنسیت دورس</span>
                    </a>
                </li>
                <li class="{{ $request->segment(3) == 'LessonsImportForm' ? 'active' : '' }}">
                    <a href="{{route('lessons_import.LessonsImportForm')}}">
                        <span class="menu-text">درج و بروز رسانی دورس</span>
                    </a>
                </li>
            </ul>
        </div>
    </li>

@endif

@if($user->can('Register_AlumniAssociation') && $request->segment(2) == 'alumni')
    <li class="sidebar-dropdown {{ $request->segment(2) == 'alumni' ? 'active' : '' }}">
        <a href="#">
            <i class="fa fa-book"></i>
            <span class="menu-text">انجمن دانش آموختگان</span>
        </a>
        <div class="sidebar-submenu" style="display: {{ $request->segment(2) == 'alumni' ? 'block' : 'none' }}">
            <ul>
                <li class="{{ $request->segment(2) == 'index' ? 'active' : '' }}">
                    <a href="{{route('alumni_index')}}">
                        <span class="menu-text">ثبت نام در انجمن</span>
                    </a>
                </li>
            </ul>
        </div>
    </li>
@endif

@if($user->can('manage_AlumniAssociation') && $request->segment(2) == 'alumni')

    <li class="{{ $request->segment(3) == 'grade' ? 'active' : '' }}">
        <a href="{{route('grade.index')}}">
            <span class="menu-text">مدیریت مقاطع</span>
        </a>
    </li>
    <li class="{{ $request->segment(3) == 'field_of_study' ? 'active' : '' }}">
        <a href="{{route('field_of_study.index')}}">
            <span class="menu-text">مدیریت رشته ها</span>
        </a>
    </li>
    <li class="{{ $request->segment(3) == 'orientation' ? 'active' : '' }}">
        <a href="{{route('orientation.index')}}">
            <span class="menu-text">مدیریت گرایش ها</span>
        </a>
    </li>
    <li class="{{ $request->segment(3) == 'training_center_type' ? 'active' : '' }}">
        <a href="{{route('training_center_type.index')}}">
            <span class="menu-text">مدیریت نوع مرکز آموزشی</span>
        </a>
    </li>
    <li class="{{ $request->segment(3) == 'training_center' ? 'active' : '' }}">
        <a href="{{route('training_center')}}">
            <span class="menu-text">مدیریت مراکز آموزشی</span>
        </a>
    </li>
    <li class="{{ $request->segment(3) == 'responsibility_type' ? 'active' : '' }}">
        <a href="{{route('responsibility_type')}}">
            <span class="menu-text">مدیریت نوع مسئولیت</span>
        </a>
    </li>
    <li class="{{ $request->segment(3) == 'advertising_record_place' ? 'active' : '' }}">
        <a href="{{route('advertising_record_place')}}">
            <span class="menu-text">مدیریت محل تبلیغ</span>
        </a>
    </li>
    <li class="{{ $request->segment(3) == 'lesson' ? 'active' : '' }}">
        <a href="{{route('lesson.index')}}">
            <span class="menu-text">مدیریت دروس</span>
        </a>
    </li>
    <li class="{{ $request->segment(3) == 'seminary_grade' ? 'active' : '' }}">
        <a href="{{route('seminary_grade.index')}}">
            <span class="menu-text">مدیریت پایه تحصیلی حوزوی</span>
        </a>
    </li>
    <li class="{{ $request->segment(3) == 'seminary_field_of_study' ? 'active' : '' }}">
        <a href="{{route('seminary_field_of_study.index')}}">
            <span class="menu-text">مدیریت رشته های حوزوی</span>
        </a>
    </li>
    <li class="{{ $request->segment(3) == 'seminary_academic_degree' ? 'active' : '' }}">
        <a href="{{route('seminary_academic_degree.index')}}">
            <span class="menu-text">مدیریت مقاطع تحصیلی حوزوی</span>
        </a>
    </li>
    <li class="{{ $request->segment(3) == 'country' ? 'active' : '' }}">
        <a href="{{route('country.index')}}">
            <span class="menu-text">مدیریت کشورها</span>
        </a>
    </li>
    <li class="{{ $request->segment(3) == 'province' ? 'active' : '' }}">
        <a href="{{route('province.index')}}">
            <span class="menu-text">مدیریت استان ها</span>
        </a>
    </li>
    <li class="{{ $request->segment(3) == 'city' ? 'active' : '' }}">
        <a href="{{route('city.index')}}">
            <span class="menu-text">مدیریت شهرها</span>
        </a>
    </li>
    <li class="{{ $request->segment(3) == 'religion' ? 'active' : '' }}">
        <a href="{{route('religion.index')}}">
            <span class="menu-text">مدیریت مذاهب</span>
        </a>
    </li>
    <li class="{{ $request->segment(3) == 'marital_status' ? 'active' : '' }}">
        <a href="{{route('marital_status.index')}}">
            <span class="menu-text">مدیریت وضعیت تأهل</span>
        </a>
    </li>
    <li class="{{ $request->segment(3) == 'public_conscription_status' ? 'active' : '' }}">
        <a href="{{route('public_conscription_status.index')}}">
            <span class="menu-text">مدیریت وضعیت نظام وظیفه</span>
        </a>
    </li>
@endif

@if($user->can('manage_resume') && $request->segment(2) == 'resumes')
    @if( \Request::is('resumes/'.request()->route('id')) )
        <li class="active">
    @else
        <li>
    @endif
        <a href="{{route('resumes.show',[0])}}">
            <i class="fas fa-book"></i>
            <span class="menu-text">سامانه اعضاء</span>
        </a>
    </li>
@endif

@if($user->can('manage_payments') && $request->segment(2) == 'payments')
    <li class="sidebar-dropdown {{ $request->segment(2) == 'payments' ? 'active' : '' }}">
        <a href="#">
            <i class="fa fa-book"></i>
            <span class="menu-text">سامانه یکپارچه پرداخت وجه</span>
        </a>
        <div class="sidebar-submenu" style="display: {{ $request->segment(2) == 'payments' ? 'block' : 'none' }}">
            <ul>
                <li class="{{ $request->segment(3) == 'paymentsCase' ? 'active' : '' }}">
                    <a href="{{route('paymentsCase.index')}}">
                        <span class="menu-text">مدیریت موارد پرداخت ها</span>
                    </a>
                </li>
                <li class="{{ $request->segment(3) == 'paymentsList' ? 'active' : '' }}">
                    <a href="{{route('paymentsList.Report')}}">
                        <span class="menu-text">گزارش گیری</span>
                    </a>
                </li>
            </ul>
        </div>
    </li>
@endif

@if($user->can('manage_reservations') && $request->segment(2) == 'reservations')
    <li>
        <a href="#">
            <i class="fas fa-concierge-bell"></i>
            <span class="menu-text">اتوماسیون تغذیه</span>
        </a>
    </li>
@endif

@if($user->can('manage_tickets') && $request->segment(2) == 'tickets')
    <li>
        <a href="#">
            <i class="fa fa-book"></i>
            <span class="menu-text">سامانه تیکت آنلاین</span>
        </a>
    </li>
@endif

