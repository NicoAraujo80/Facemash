<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class PagesController extends Controller
{   
    # SHITTY CODE
    // public function getIndex() {
    // 	$randomEloRating = rand(300, 700);
    // 	$firstElo = $randomEloRating;
    // 	$profiles = [];
    // 	$profileOne = null;
    // 	$profileTwo = null;
    // 	$singleProfile = null;
    // 	while (count($profiles) != 2) {
    // 		$profile = Profile::where('eloRating', '=', $randomEloRating)->get();
    // 		if (count($profile) == 1) {
    // 			$singleProfile = $profile[0];
    // 			array_push($profiles, $singleProfile);
    // 			if (count($profiles) == 1) {
    // 				$profileOne = $singleProfile;
    // 			} else {
    // 				$profileTwo = $singleProfile;
    // 			}
    // 		}
    // 		$randomEloRating++;
    // 	}
    // 	return view('index')->withProfileOne($profileOne)->withProfileTwo($profileTwo)->withRandomElo($randomEloRating)->withFirstElo($firstElo);
    // }

    # CLEANER CODE
    public function getIndex() {
        $randomProfile = Profile::inRandomOrder()->limit(1)->get()[0];
        $similareElo = Profile::inRandomOrder()->whereBetween('eloRating', [$randomProfile->eloRating - 30, $randomProfile->eloRating + 30])->limit(1)->get()[0];

        # makes sure that the two profiles arent the same
        while ($similareElo == $randomProfile) $similareElo = Profile::inRandomOrder()->whereBetween('eloRating', [$randomProfile->eloRating - 30, $randomProfile->eloRating + 30])->limit(1)->get()[0];

        return view('index')->withProfiles([$randomProfile, $similareElo]);
    }
}
