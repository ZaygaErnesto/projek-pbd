<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockOut extends Model
{
    use HasFactory;
    protected $table = 'stock_out';
    protected $guarded = [];
    protected $fillable = ['item_id', 'quantity', 'date'];
    public $timestamps = false; // Tambahkan baris ini
}