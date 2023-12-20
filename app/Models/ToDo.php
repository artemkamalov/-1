<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDo extends Model
{
public $timestamps = false;
protected $table = 'list';
protected $primarykey = 'id';
protected $fillable = ['record'];
}
