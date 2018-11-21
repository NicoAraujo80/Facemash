<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class PagesController extends Controller
{
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

    public function getIndex() {
        $players = Profile::inRandomOrder()->limit(2)->get();

        return view('index')->withProfiles($players);
    }
}
