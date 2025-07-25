<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class StockIn extends Model
{
    use HasFactory;
    protected $table = 'stock_in';
    protected $guarded = [];
    protected $fillable = ['item_id', 'quantity', 'date'];
    public $timestamps = false; // Tambahkan baris ini

    public function store(Request $request)
    {
        $data = $request->all();
        $data['date'] = now()->toDateString(); // Isi date dengan tanggal hari ini
        StockIn::create([
            'item_id' => $request->item_id,
            'quantity' => $request->quantity,
            'date' => now()->toDateString()
        ]);
    }
}