<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserController extends Controller
{
   public function index()
{
    //tambah data user dgn Eloquent Model
    //$data = [
    //'level_id' => 2,
    //'username' => 'manager_tiga',
    //'nama' => 'Manager 3',
    //'password' => Hash::make('12345')
    //];

    //UserModel::create($data);

    //Ambil semua data dari table m_user
    $user = UserModel::firstOrNew(
        [
            'username' => 'manager33',
            'nama' =>'Manager Tiga Tiga',
            'password' => Hash::make('12345'),
            'level_id' => 2
        ],
    );
    $user->save();

    return view('user', ['data' => $user]);
}
}

