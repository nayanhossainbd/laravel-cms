<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Upazila extends Model
{
    use SoftDeletes, HasFactory;

  
  


    public $table = 'upazilas';
}