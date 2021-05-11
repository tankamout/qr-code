<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=['tid','detail','year','major','date','title','token'];
}
