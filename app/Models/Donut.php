<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donut extends Model
{
    use HasFactory;

    protected $table = 'donuts';

    protected $fillable = ['name','price','description','image_url','donut_category_id'];
}
