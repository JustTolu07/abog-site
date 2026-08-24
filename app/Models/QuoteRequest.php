<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuoteRequest extends Model
{
    protected $fillable = [
        'name','email','phone','company','product_id','quantity','project_type','message','status'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
