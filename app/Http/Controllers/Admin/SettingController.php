<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SettingTime;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    public function index()
    {
        $openCloseTime = SettingTime::first();
        $user = User::where('username', '!=', auth()->user()->username)->paginate(5);
        return view('admin.setting.index', compact('openCloseTime', 'user'));
    }

    public function DeleteAccount($id)
    {
        User::destroy($id);
        return redirect('/admin/setting')->with('success', 'Berhasil hapus data');
    }

    public function ChangeTime(Request $request)
    {
        $time = SettingTime::first();
        if ($request->waktu == 1) {
            $time->waktu = 0;
            $time->save();
        } else {
            $time->waktu = 1;
            $time->save();
        }
        return response()->json(['status' => 'success']);
    }

    public function CreateAccount(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'role' => 'required|in:admin,user'
        ]);

        $validated['password'] = bcrypt($validated['username']);

        // dd($validated);

        User::create($validated);
        return redirect('/admin/setting')->with('success', 'Berhasil menambah akun pengguna');
    }

    public function ChangePassword(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'password' => 'required|required_with:repeatPassword|same:repeatPassword',
            'repeatPassword' => 'required',
        ]);

        if ($validated->fails()) {
            return response()->json(['status' => false, 'error' =>  $validated->errors()->toArray()]);
        } else {
            $user = User::find(auth()->user()->id);
            // $validated['password'] = bcrypt($validated['password']);
            $user->password = bcrypt($request->password);
            $user->save();
            return response()->json(['status' => true, 'msg' => 'Berhasil ubah password']);
        }
    }
}
