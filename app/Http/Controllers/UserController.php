<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
   

    public function index()
    {
        $users = User::with(['department', 'designation'])->paginate(10);
        return view('users.index', compact('users'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $users = User::with(['department', 'designation'])
            ->whereHas('department', function ($query) use ($search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->orWhereHas('designation', function ($query) use ($search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->orWhere('name', 'like', "%{$search}%")
            ->orWhere('email', 'like', "%{$search}%")
            ->paginate(10);
     return view('users.partials.table', compact('users'))->render();
       

        return view('users.index', compact('users'));
    }

}
