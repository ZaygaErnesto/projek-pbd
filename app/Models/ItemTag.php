<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemTag extends Model
{
    use HasFactory;
    protected $table = 'item_tags';
    protected $fillable = ['tag_name'];
    public $timestamps = false; // jika tidak ada created_at/updated_at
}