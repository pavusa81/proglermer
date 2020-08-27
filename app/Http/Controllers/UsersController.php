<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; 

class UsersController extends Controller
{
    public function index()
    {
        
        $users = User::orderBy('id', 'desc')->paginate(10);

        
        return view('users.index', [
            'users' => $users,
        ]);
    }
    
    public function show($id)
    {
        
        $user = User::findOrFail($id);
        $records = $user->records()->orderBy('created_at', 'desc')->paginate(10);

        
        return view('users.show', [
            'user' => $user,
            'records' => $records
        ]);
    }
}
