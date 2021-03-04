<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\Comment;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Announcement::all();

        return view('announcements.index', ['announcements' => $announcements]);
    }

    public function show($id)
    {
        $announcement = Announcement::findOrFail($id);
        $comments = Comment::all();

        return view('announcements.show', ['announcement' => $announcement, 'comments' => $comments]);
    }

    public function create(Request $request)
    {
        $user = $request->user();

        return view('announcements.create', ['user' => $user]);
    }

    public function store(Request $request, $id)
    {
        $title = $request->get('title');
        $content = $request->get('content');
        $price = $request->get('price');
        $userId = $id;

        Announcement::create([
            'title' => $title,
            'content' => $content,
            'price' => $price,
            'user_id' => $userId,
        ]);

        return redirect()->route('announcements.index');
    }




}
