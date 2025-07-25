<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table = 'items';
    protected $guarded = [];
    protected $fillable = ['name', 'stock', /* kolom lain */];
    public $timestamps = false; // Tambahkan baris ini
}