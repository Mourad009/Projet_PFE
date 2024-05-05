<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Developers;

class DevelopeurController extends Controller
{
    public function DashboardPage3(){

        $developers = Developers::latest()->get();
        $totalUsers = User::count();
        $totalDevelopers = Developers::count();

        return view('user\index3', compact('developers','totalUsers','totalDevelopers'));

    }

    public function LogoutPage(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/exit-page/developer');
    }

    public function ExitPage(){

        return view('user\exit3');
    }

    public function ProfilePage(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('user\profile3', compact('profileData'));
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
            'message' => 'Profile modifier avec success',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    /// components method

    public function AlertsPage(){

        return view('ui-components\alerts3');
    }

    public function Badges(){

        return view('ui-components\badges3');
    }

    public function Buttons(){

        return view('ui-components\buttons3');
    }

    public function Cards(){

        return view('ui-components\cards3');
    }

    public function ListGroup(){

        return view('ui-components\list-group3');
    }

    public function Navbar(){

        return view('ui-components\navbar3');
    }

    public function Progress(){

        return view('ui-components\progress3');
    }

    //// advanced ui method

    public function Sortable(){

        return view('advanced-ui\sortable3');
    }
    
    public function SweetAlert(){

        return view('advanced-ui\sweet-alert3');
    }

    // forms method

    public function Basic(){

        return view('forms\basic-elements3');
    }

    public function Advanced(){

        return view('forms\advanced-elements3');
    }

    public function Editor(){

        return view('forms\Editors3');
    }

    // charts method 
     
    public function Apex(){

        return view('charts\apex3');
    }

    public function Chartjs(){

        return view('charts\chartjs3');
    }

    public function Flot(){

        return view('charts\flot3');
    }

    
    //// table method

    public function BasicTable(){

        return view('tables\basic-table3');
    }

    public function DataTable(){

        return view('tables\data-table3');
    }

    //// icons method
    public function Feather(){

        return view('icons\feather-icons3');
    }

    public function Flag(){

        return view('icons\flag-icons3');
    }
    //// contact method 

    public function AboutUs(){

        return view('contact\about-us3');
    }
    
}
