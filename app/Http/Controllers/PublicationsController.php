<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class PublicationsController extends Controller
{
    public function index()
    {
        return Publication::all();
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

            return $publication;
        } catch (\Exception $e) {
            return [
                'error' => 1
            ];
        }
    }
}
