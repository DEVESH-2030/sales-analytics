<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sales extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =  [
        'user_id',
        'product_id',
        'quantity',
        'total_amount',
        'sale_date',
    ];

    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
