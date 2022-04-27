<?php

namespace App\Http\Controllers;

use DataTables;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $manage_user = User::get();
        return view('admin.view.manage-user', compact('manage_user'));
    }

    public function create()
    {
        return view('admin.view.add-user');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'email'=> 'required|unique:users,email',
            'password' => 'required|min:6|max:12',
            'role' => 'required',
        ],
            [
                'email.unique' => 'This email address has already been used.',
            ]
        );
        if ($files = $request->file('image')) {
            $destinationPath = 'storage/images'; // upload path
            $profileImage = Str::random(33) . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $update['image'] = "$profileImage";
            
            $user = new User;
            $user->first_name= $request->input('first_name');
            $user->last_name= $request->input('last_name');
            $user->image= $profileImage;
            $user->email= $request->input('email');
            $user->password= Hash::make($request->input('password'));
            $user->role = $request->input('role');
            $user->save();
            return redirect()->route('manage-user');
        } 
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.view.edit-user',compact('user'));
    }

    public function update(User $user, Request $request, $id)
    {
        // dd($user);
        $request->validate([  
            'first_name'=>'required',  
            'last_name'=>'required',  
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'email'=> 'required|unique:users,email,'.$id,
            'role' => 'required',
        ],
            [
                'email' => 'This email address has already been used.',
            ]
        );
        // $all = $request->all();
        // dd($all);
        if ($files = $request->file('image')) {
            $destinationPath = 'storage/images'; // upload path
            $profileImage = Str::random(35) . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $update['image'] = "$profileImage";
            
            $user = User::find($id);
            $user->first_name= $request->input('first_name');
            $user->last_name= $request->input('last_name');
            $user->image= $profileImage;
            // dd($user->image);
            $user->email= $request->input('email');
            $user->password= Hash::make($request->input('password'));
            $user->role = $request->input('role');
            // dd($user->all());
            $user->save();
            return redirect()->route('manage-user');
        }


        // if ($images = $request->file('image')) {
        //     $filename = $request->image->getClientOriginalName();
        //     $random_name = Str::random(35).$filename; //here is random string generate
        //     $imageName = $request->image->storeAs('images', $random_name, 'public');
        //     Auth()->user()->update(['image'=>$random_name]);
            // dd($request->image->storeAs('images', $random_name, 'public'));

            

        // dd($request->all()); 
            // $user = User::find($id);  
            // $user->first_name =  $request->first_name;  
            // $user->last_name = $request->last_name;  
            // $user->email = $request->email;
            // $user->password= Hash::make($request->input('password'));
            // $user->role = $request->role;
            // $user->save();  
            // dd($user);
            // return redirect()->route('manage-user');
    }
}
