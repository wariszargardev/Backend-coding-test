<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attendence extends Model
{

    use HasFactory, SoftDeletes;

    protected $fillable= ['schedule_id', 'check_in', 'check_out', 'schedule_id'];}
