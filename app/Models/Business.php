<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Business extends Eloquent
{
  protected $connection = 'neendut';

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
