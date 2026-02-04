<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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

    // 新規登録の保存処理
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

        // データベースに保存
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

    // 編集画面の表示（特定のユーザーIDを受け取る）
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }
}