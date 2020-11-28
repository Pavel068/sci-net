<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function view($id)
    {
        return User::find($id);
    }

    public function create(Request $request)
    {
        try {
            $user = new User();
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->password = md5($request->password);
            $user->remember_token = uniqid(true);
            $user->save();
            $user->refresh();

            return $user;
        } catch (\Exception $e) {
            return [
                'error' => 1
            ];
        }
    }

    public function auth(Request $request)
    {
        try {
            $user = DB::table('users')
                ->where([
                    ['email', '=', $request->email],
                    ['password', '=', md5($request->password)]
                ])
                ->get();

            if (!$user || !count($user)) {
                return [
                    'error' => 1
                ];
            }

            return $user;
        } catch (\Exception $e) {
            return [
                'error' => 1
            ];
        }
    }

    public function update($id, Request $request)
    {
        $user = User::find($id);

        if (!$user) {
            return [
                'error' => 1
            ];
        } else {
            if ($request->first_name) $user->first_name = $request->first_name;
            if ($request->last_name) $user->last_name = $request->last_name;
            if ($request->patronymic) $user->patronymic = $request->patronymic;
            if ($request->orcid) $user->orcid = $request->orcid;
            if ($request->elibrary) $user->elibrary = $request->elibrary;
        }

        $user->save();
        $user->refresh();

        return $user;
    }

    public function destroy($id)
    {

    }
}
