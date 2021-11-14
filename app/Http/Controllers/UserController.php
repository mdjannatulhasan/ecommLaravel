<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function create(){
        return view('user.create');
    }

    public function store(Request $request, User $user){
        $user = User::create($request->all());
        $user->phone()->create([
            'phone' => $request->phone
        ]);
        return redirect(route('user.index'));
    }

    public function show(User $user){
        return view('user.show',compact('user'));
    }

    public function edit(User $user){
        return view('user.edit',compact('user'));
    }

    public function update(Request $request, User $user){
        $user->update($request->all());
        $user->phone()->update([
            'phone' => $request->phone
        ]);
        return redirect(route('user.index'));
    }

    public function destroy(User $user){
        $user->phone()->delete();
        $user->delete($user);
        return redirect(route('user.index'));
    }

}
