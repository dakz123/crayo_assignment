<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = ['page_name', 'menu_name', 'page_link', 'title', 'meta_description', 'meta_keywords', 'sort_order', 'status'];
}
