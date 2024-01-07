<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'provider_id',
        'name',
        'quantity',
        'status',
        'comment_status',
        'comment_status_after_buy',
        'vote_status',
        'vote_status_after_buy',
    ];
}
