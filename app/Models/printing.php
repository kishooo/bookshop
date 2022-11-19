<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class printing extends Model
{
    use HasFactory;
    protected $table = "printing";
    protected $fillable = ['printings_number', 'totalPrice'] ;
    public $timestamps = false;
}
