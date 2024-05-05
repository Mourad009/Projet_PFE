<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Developers;



class AdminController extends Controller
{
    public function DashboardPage(){

        $developers = Developers::latest()->get();
        $totalUsers = User::count();
        $totalDevelopers = Developers::count();

        return view('user\index', compact('developers','totalUsers','totalDevelopers'));
    }

    public function LogoutPage(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/exit-page');
    }

    public function ExitPage(){

        return view('user\exit');
    }

    public function ProfilePage(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('user\profile', compact('profileData'));
    }

    public function ProfileStore(Request $request){

        $id = Auth::user()->id;
        $data = User::find($id);

        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if($request->file('photo')){

            $file = $request->file('photo');
            @unlink(public_path('logo/user_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('logo/user_images'), $filename);
            $data['photo'] = $filename;
        }
        $data->save();

        $notification = array(
            'message' => 'Profile Updated Successfuly',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    /// components method

    public function AlertsPage(){

        return view('ui-components\alerts');
    }

    public function Badges(){

        return view('ui-components\badges');
    }

    public function Buttons(){

        return view('ui-components\buttons');
    }

    public function Cards(){

        return view('ui-components\cards');
    }

    public function ListGroup(){

        return view('ui-components\list-group');
    }

    public function Navbar(){

        return view('ui-components\navbar');
    }

    public function Progress(){

        return view('ui-components\progress');
    }

    //// advanced ui method

    public function Sortable(){

        return view('advanced-ui\sortable');
    }
    
    public function SweetAlert(){

        return view('advanced-ui\sweet-alert');
    }

    // forms method

    public function Basic(){

        return view('forms\basic-elements');
    }

    public function Advanced(){

        return view('forms\advanced-elements');
    }

    public function Editor(){

        return view('forms\Editors');
    }

    // charts method 
     
    public function Apex(){

        return view('charts\apex');
    }

    public function Chartjs(){

        return view('charts\chartjs');
    }

    public function Flot(){

        return view('charts\flot');
    }

    public function AboutUs(){

        return view('contact\about-us');
    }

    //// table method

    public function BasicTable(){

        return view('tables\basic-table');
    }

    public function DataTable(){

        return view('tables\data-table');
    }

    //// icons method
    public function Feather(){

        return view('icons\feather-icons');
    }

    public function Flag(){

        return view('icons\flag-icons');
    }


    

}
