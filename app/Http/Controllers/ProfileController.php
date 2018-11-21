<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function update($winner, $looser)
    {
        $winner = Profile::where('id', '=', strval($winner))->get();
        $looser = Profile::where('id', '=', strval($looser))->get();

        $rate = 1/(1 + pow(10, ($winner[0]->eloRating - $looser[0]->eloRating) / 100));
        $winner[0]->eloRating = $winner[0]->eloRating + ($rate * 60);
        $winner[0]->save();

        $rate = 1/(1 + pow(10, ($looser[0]->eloRating - $winner[0]->eloRating) / 100));
        $looser[0]->eloRating = $looser[0]->eloRating + ($rate * 60);
        $looser[0]->save();

        return redirect()->route('index');
    }
}
