<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use App\Models\User;
use App\Models\UserPublication;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class PublicationsController extends Controller
{
    public function index()
    {
        return DB::table('publications')
            ->join('users_publications', 'users_publications.publication_id', '=', 'publications.id')
            ->join('users', 'users.id', '=', 'users_publications.user_id')
            ->select(['publications.*', 'users.first_name', 'users.last_name'])
            ->get();
    }

    public function view($id)
    {
        return Publication::find($id);
    }

    public function userPublications($user_id)
    {
        $publications = DB::table('publications')
            ->join('users_publications', 'users_publications.publication_id', '=', 'publications.id')
            ->where('users_publications.user_id', '=', $user_id)
            ->select('publications.*')
            ->get();

        return $publications;
    }

    public function create(Request $request)
    {
        try {
            $publication = new Publication();
            $publication->name = $request->name;
            $publication->keywords = $request->keywords;
            $publication->indexer = $request->indexer;
            $publication->journal = $request->journal;
            $publication->year = $request->year;
            $publication->pages = $request->pages;

            $publication->save();
            $publication->refresh();
        } catch (\Exception $e) {
            return [
                'error' => 1
            ];
        }

        // Handle authors
        if ($request->authors) {
            $authors = explode(', ', $request->authors);
            foreach ($authors as $author) {
                $a = explode(' ', $author);
                $user = DB::table('users')
                    ->where([
                        ['last_name', '=', $a[0]],
                        ['first_name', '=', $a[1]]
                    ])
                    ->first();

                if ($user) {
                    $up = new UserPublication();
                    $up->user_id = $user->id;
                    $up->publication_id = $publication->id;
                    $up->save();
                }
            }
        }

        return $publication;
    }
}
