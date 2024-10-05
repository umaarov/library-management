<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::all();
        return view('admin.groups.index', compact('groups'));
    }

    public function create()
    {
        return view('admin.groups.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
        ]);

        Group::create($data);

        return redirect()->route('groups.index')->with('success', 'Group created successfully!');
    }

    public function edit(Group $group)
    {
        return view('admin.groups.edit', compact('group'));
    }

    public function update(Request $request, Group $group)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
        ]);

        $group->update($data);

        return redirect()->route('groups.index')->with('success', 'Group updated successfully!');
    }

    public function destroy(Group $group)
    {
        $group->delete();
        return redirect()->route('groups.index')->with('success', 'Group deleted successfully!');
    }
}
