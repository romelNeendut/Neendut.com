<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Business;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class BusinessesController extends Controller
{
    /**
    * View a specific article
    *
    * @param $profile_id
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function index()
    {

      return view('business.index');
    }


    public function create()
    {
      return view('business.create');
    }
}
