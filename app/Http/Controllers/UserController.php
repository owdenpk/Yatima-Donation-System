<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Notifications\UserApproved;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
	public function index()
	{
		$users = User::whereNull('approved_at')->get();

		return view('admin/users', compact('users'));
	}

	public function approve(Request $request, $id)
	{
		$user = User::findOrFail($id);
		
		$user->usertype = $request->input('org');

		$user->update(['approved_at' => now()]);

		$user->notify(new UserApproved($user));

		return redirect()->route('admin.users')->withMessage('User approved successfully');
	}
}
