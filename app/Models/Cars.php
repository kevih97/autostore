<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{

    protected $fillable = [
        'brand',
        'model',
        'registration_date',
        'engine_size',
        'price',
        'category_id',
    ];
    use HasFactory;


    public function categories(){
        return $this->belongsTo(Categories::class, 'category_id');
    }
}
