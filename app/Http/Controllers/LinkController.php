<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Link;
use App\Models\Click;

class LinkController extends Controller
{
    public function index()
    {
        $links = Auth::user()->links()->with('clicks')->latest()->get();
        return view('dashboard', compact('links'));
    }

    public function store(Request $request)
    {
        $request->validate(['full_url' => 'required|url']);

        do {
            $shortCode = Str::random(6);
        } while (Link::where('short_code', $shortCode)->exists());

        $link = Auth::user()->links()->create([
            'full_url' => $request->full_url,
            'short_code' => $shortCode,
        ]);

        return redirect()->back()->with('success', 'Ссылка создана: ' . url($shortCode));
    }

    public function destroy(Link $link)
    {
        if ($link->user_id !== Auth::id()) {
            abort(403);
        }
        $link->delete();
        return redirect()->back()->with('success', 'Ссылка удалена.');
    }

    public function redirect(string $shortCode)
    {
        $link = Link::where('short_code', $shortCode)->firstOrFail();

        Click::create([
            'link_id' => $link->id,
            'user_id' => Auth::check() ? Auth::id() : null,
            'ip' => request()->ip(),
            'user_agent' => request()->userAgent(),
            'clicked_at' => now(),
        ]);

        $link->increment('click_count');

        return redirect($link->full_url);
    }
}
