<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:30',
            'name_kana' => 'required|max:30',
            'mail' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|max:30',
            'phone' => 'required|regex:/^0\d{9,10}$/',
            'zipcode' => 'required|digits:7',
            'prefecture' => 'required|not_in:お選びください',
            'city' => 'required|max:30',
            'address' => 'required|max:30',
            'remarks' => 'nullable|max:255',
        ]);

        User::create([
            'name' => $validated['name'],
            'name_kana' => $validated['name_kana'],
            'email' => $validated['mail'],
            'password' => Hash::make($validated['password']),
            'phone' => $validated['phone'],
            'zipcode' => $validated['zipcode'],
            'prefecture' => $validated['prefecture'],
            'city' => $validated['city'],
            'address' => $validated['address'],
            'remarks' => $validated['remarks'],
        ]);

        return redirect()->route('users.index')->with('success', 'ユーザーを登録しました');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|max:30',
            'name_kana' => 'required|max:30',
            'mail' => 'required|email|unique:users,email,'.$user->id,
            'password' => 'nullable|string|min:8|max:30',
            'phone' => 'required|regex:/^0\d{9,10}$/',
            'zipcode' => 'required|digits:7',
            'prefecture' => 'required|not_in:お選びください',
            'city' => 'required|max:30',
            'address' => 'required|max:30',
            'remarks' => 'nullable|max:255',
        ]);

        $user->name = $validated['name'];
        $user->name_kana = $validated['name_kana'];
        $user->email = $validated['mail'];
        $user->phone = $validated['phone'];
        $user->zipcode = $validated['zipcode'];
        $user->prefecture = $validated['prefecture'];
        $user->city = $validated['city'];
        $user->address = $validated['address'];
        $user->remarks = $validated['remarks'];

        if (! empty($validated['password'])) {
            $user->password = Hash::make($validated['password']);
        }

        $user->save();

        return redirect()->route('users.index')->with('success', 'ユーザー情報を更新しました');
    }
}
