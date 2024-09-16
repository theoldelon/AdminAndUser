<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Project;
use App\Models\Task;
use App\Models\Activity;

class DashBoardController extends Controller
{
    public function index()
    {
        // Fetch the data
        $totalUsers = User::count();


        return view('admin.dashboard', [
            'totalUsers' => $totalUsers,

        ]);
    }
}
