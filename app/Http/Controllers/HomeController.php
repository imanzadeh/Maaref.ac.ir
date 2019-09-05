<?php

namespace App\Http\Controllers;

use App\Systems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','CheckActivity']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $user = Auth::user();
        Permission::all();
        $systems = Systems::all();
        $AllPermissions = $user->getAllPermissions();
        foreach ($systems as $system) {
            foreach ($AllPermissions as $per) {
                if ($per->system_id == $system->id)
                    $data[] = $system;
            }
        }
        //dd($data);
        return view('home', compact('user', 'data'));
    }

    public function MembersMainPage() {
        $user = Auth::user();
        return view('members/MainPage', compact('user'));
    }
    public function AlumniMainPage() {
        $user = Auth::user();
        return view('alumni/AlumniMainPage', compact('user'));
    }
}
