<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Parameter extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function product():HasOne{
        return $this->hasOne(Product::class);
    }
}
