<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamsController extends Controller
{
    public function index()
    {
        $teams = Team::all()->toArray();

        foreach ($teams as &$team) {
            $team['rating'] = rand(12, 100);
        }
        unset($team);

        usort($teams, function ($a, $b) {
            return $b['rating'] - $a['rating'];
        });

        return $teams;
    }

    public function userTeams($user_id)
    {
        $teams = DB::table('teams')
            ->join('users_teams', 'users_teams.team_id', '=', 'teams.id')
            ->join('users', 'users_teams.user_id', '=', 'users.id')
            ->where('users.id', '=', $user_id)
            ->select('teams.*')
            ->get();

        return $teams;
    }

    public function create(Request $request)
    {
        try {
            $team = new Team();
            $team->name = $request->name;
            $team->save();
            $team->refresh();
        } catch (\Exception $e) {
            return [
                'error' => 1
            ];
        }

        return $team;
    }
}
