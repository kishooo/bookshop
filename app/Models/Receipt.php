<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;
    protected $table = '_receipts_';
    protected $fillable = ['copies_number', 'printing_number','total_price'];
    public $timestamps = false ;
}
