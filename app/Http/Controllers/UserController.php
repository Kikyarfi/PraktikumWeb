<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index()
    {
        $data = User::all();
        return view('data.index', compact('data'));
    }
    public function create()
    {
        return view('data.create');
    }
    public function store(Request $request)
    {
        User::create($request->all());

        return redirect()->route('data.index')
            ->with('success', 'User created successfully.');
    }
    public function edit(User $data)
    {
        return view('data.edit', compact('data'));
    }
    public function update(Request $request, User $data)
    {
        $data->update($request->all());

        return redirect()->route('data.index')
            ->with('success', 'Suer updated successfully');
    }
    public function show(User $data)
    {
        return view('data.show', compact('data'));
    }
    public function destroy(User $data)
    {
        $data->delete();

        return redirect()->route('data.index')
            ->with('success', 'Suer deleted successfully');
    }
}
