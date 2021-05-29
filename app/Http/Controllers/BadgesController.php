<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Badges;
use App\Models\Authors;

class BadgesController extends Controller
{
    public function BadgesView()
    {

        $author = Authors::orderBy('author_name', 'ASC')->get();
        $badges = Badges::latest()->get();
        return view('admin.layouts.badges', compact('badges', 'author'));
    }

    public function SaveBadges(Request $request)
    {
        $validated = $request->validate([
            'badge_label' => 'required',
            'badge_description' => 'required',
        ]);
        Badges::insert([
            'author_id' => $request->author_id,
            'badge_label' => $request->badge_label,
            'badge_description' => $request->badge_description,
        ]);
        return redirect()->back()->with('message', 'Badges Add Successfully');
    }

    public function BadgesShow()
    {
        $badges = Badges::latest()->get();
        return view('admin.layouts.show_badges', compact('badges'));
    }
}
