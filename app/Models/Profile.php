<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Profile extends Eloquent
{


  protected $fillable = [
      'mobile',
      'phone',
      'state',
      'city',
      'street',
      'zip',
      'about_me',
      'owned_by',
  ];


}
