<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'user_id', 'content'];

    public function product()
    {
        return $this->belongsTo(SanPham::class, 'product_id'); 
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}