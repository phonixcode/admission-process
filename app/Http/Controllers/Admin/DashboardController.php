<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.pages.dashboard');
    }

    public function messages()
    {
        $messages = Message::all();
        return view('admin.pages.message', compact('messages'));
    }
}
