<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'service_name',
        'service_description',
        'price',
    ];
    public function customertransaction()
    {
        return $this->morphMany(CustomerTransaction::class, 'transactionable');
    }
}
