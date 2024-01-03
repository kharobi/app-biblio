<?php

namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   
    public function index(Request $request)
    {
        $data = User::latest()->paginate(5);
        return view('pages.applications.ecommerce.users.index',compact('data'));
    }

    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('pages.applications.ecommerce.users.create',compact('roles'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);
    
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
    
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('ecommerce.users.index',app()->getLocale())
                        ->with('success','User created successfully');
    }
    
    public function show(Request $request)
    {
        //dd($request->user);
        $user = User::find($request->user);
        return view('pages.applications.ecommerce.users.show',compact('user'));
    }
    
    public function edit(Request $request)
    {
        $user = User::find($request->user);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
    
        return view('pages.applications.ecommerce.users.edit',compact('user','roles','userRole'));
    }

    public function update(Request $request)
    {
        //dd($request->user);
        //dd($request->input('roles'));
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$request->user,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);
    
        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));    
        }
    
        $user = User::find($request->user);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$request->user)->delete();
    
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('ecommerce.users.index',app()->getLocale())
                        ->with('success','User updated successfully');
    }
    
    public function destroy(Request $request)
    {
        //dd($request->user);
        $user = User::find($request->user);
        if($user != null){
            $user->delete();
            return redirect()->route('ecommerce.users.index',app()->getLocale())
                            ->with('success','User deleted successfully');
        }
        else{
            return redirect()->route('ecommerce.users.index',app()->getLocale())
                            ->with('faild','User not deleted ');
        }
        
    }
}