<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'locations';

    protected $fillable = [ 'profile_image', 'location_name', 'place', 'city'];
}
