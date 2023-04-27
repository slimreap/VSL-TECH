<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class PC_components extends Model implements HasMedia
{
       use InteractsWithMedia;
    protected $table = 'pc_components';

    protected $fillable = [
        'component',
        'brand_name',
        'product_model',
        'description',
        'price',
    ];

    use HasFactory;

    public function transaction()
    {
        return $this->morphMany(CustomerTransaction::class, 'transactionable');
    }
}
