<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Developers;

class UserController extends Controller
{
    public function DashboardPage2(){

        $developers = Developers::latest()->get();
        $totalUsers = User::count();
        $totalDevelopers = Developers::count();

        return view('user\index2', compact('developers','totalUsers','totalDevelopers'));

    }

    public function LogoutPage(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/exit-page/user');
    }

    public function ExitPage(){

        return view('user\exit2');
    }

    public function ProfilePage(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('user\profile2', compact('profileData'));
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

        return view('ui-components\alerts2');
    }

    public function Badges(){

        return view('ui-components\badges2');
    }

    public function Buttons(){

        return view('ui-components\buttons2');
    }

    public function Cards(){

        return view('ui-components\cards2');
    }

    public function ListGroup(){

        return view('ui-components\list-group2');
    }

    public function Navbar(){

        return view('ui-components\navbar2');
    }

    public function Progress(){

        return view('ui-components\progress2');
    }

    //// advanced ui method

    public function Sortable(){

        return view('advanced-ui\sortable2');
    }
    
    public function SweetAlert(){

        return view('advanced-ui\sweet-alert2');
    }

    // forms method

    public function Basic(){

        return view('forms\basic-elements2');
    }

    public function Advanced(){

        return view('forms\advanced-elements2');
    }

    public function Editor(){

        return view('forms\Editors2');
    }

    // charts method 
     
    public function Apex(){

        return view('charts\apex2');
    }

    public function Chartjs(){

        return view('charts\chartjs2');
    }

    public function Flot(){

        return view('charts\flot2');
    }

    public function AboutUs(){

        return view('contact\about-us2');
    }
    //// table method

    public function BasicTable(){

        return view('tables\basic-table2');
    }

    public function DataTable(){

        return view('tables\data-table2');
    }

    //// icons method
    public function Feather(){

        return view('icons\feather-icons2');
    }

    public function Flag(){

        return view('icons\flag-icons2');
    }

    ///// developers method for user

    
    
}
