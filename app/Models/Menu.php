<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'nama_makanan', 'deskripsi', 'harga','foto', 
    ];

    public function invoices()
    {
        return $this->hasMany(invoice::class);
    }
}
