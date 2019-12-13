<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use Notifiable;

    protected $guard = 'organization';

    protected $table = 'organizations';
    protected $fillable = ['name', 'phone', 'regno', 'lat', 'long', 'description', 'usertype', 'email', 'password','website', 'address'];
}
