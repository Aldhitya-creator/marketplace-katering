<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'makanan_id', 'porsi','harga_id', 'created_at' 
    ];

    public function menu()
	{
		return $this->belongsTo(Menu::class);
	}
}
