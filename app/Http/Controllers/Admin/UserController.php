<?php
/**
 * Created by PhpStorm.
 * User: hsuma
 * Date: 10/5/2024
 * Time: 12:26 PM
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Group;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        $groups = Group::all(); // Fetch all groups
        return view('admin.users.create', compact('groups')); // Pass groups to the view
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'role' => 'required|in:student,teacher,staff',
            'group_id' => 'required|exists:groups,id', // Validate group_id
        ]);

        User::create($request->all());
        return redirect()->route('users.index')->with('success', 'User added successfully.');
    }

    public function edit(User $user)
    {
        $groups = Group::all(); // Fetch all groups
        return view('admin.users.edit', compact('user', 'groups')); // Pass groups to the view
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'required',
            'role' => 'required|in:student,teacher,staff',
            'group_id' => 'required|exists:groups,id', // Validate group_id
        ]);

        $user->update($request->all());
        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
