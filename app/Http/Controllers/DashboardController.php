<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {

        $ideas = Idea::orderBy('created_at', 'DESC');

        if (request()->has("search")) {
            $ideas = $ideas->where("content", "like", "%" . request("search") . "%");
        }

        return view('home', [
            'ideas' => $ideas->paginate(5) // get all models from the database
        ]);
    }

    public function terms()
    {
        return view('terms');
    }
}
