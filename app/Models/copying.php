<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class copying extends Model
{
    use HasFactory;

    protected $table = "copying";
    protected $fillable = ['copies_number', 'totalPrice'] ;
    public $timestamps = false;

}
