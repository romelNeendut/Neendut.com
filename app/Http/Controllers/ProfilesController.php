<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Profile;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


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

    /**
    * View a specific article
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function getProfile()
    {

        $profile = Profile::where('owned_by', Auth::user()->id)
        ->get();

        return response()->json($profile);

    }



    /**
     * Update an existing Profile.
     *
     * @param Requests\SaveProfile $request
     * @param null              $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Requests\StoreProfile $request)
    {
        unset($request['_token']);
        unset($request['name']);
        unset($request['email']);
        $profile = Profile::where('owned_by', Auth::user()->id)
        ->update($request->all());
    }

}
