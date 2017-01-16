<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public $table = 'products';
    protected $fillable = ['name','price','image','description'];
    public  $timestamps = false;
}
