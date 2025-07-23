<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemTagPivot extends Model
{
    use HasFactory;
    protected $table = 'item_tag_pivot';
    protected $guarded = [];
} 