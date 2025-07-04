<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function home()
    {
        $userId = session('user_id');

        $tasks = DB::table('tasks')
            ->where('user_id', $userId)
            ->whereDate('deadline', '>=', now()->toDateString())
            ->orderBy('deadline', 'asc')
            ->limit(10)
            ->get();

        return view('home', compact('tasks'));
    }

    public function updateStatus(Request $request, $id)
    {
        $userId = session('user_id');

        DB::table('tasks')
            ->where('id', $id)
            ->where('user_id', $userId)
            ->update(['is_done' => $request->has('is_done')]);

        return redirect()->route('home');
    }
}
