<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Profile;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;


class ProfilesController extends Controller
{
    /**
    * View a specific article
    *
    * @param $profile_id
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function show($profile_id)
    {
        $profile = Profile::findOrFail($profile_id);


        return view('profile.show', [
            'profile' => $profile,
        ]);
    }

}
