<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class DesktopPackage extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
    ];
    public function transaction()
    {
        return $this->morphMany(CustomerTransaction::class, 'transactionable');
    }

    public function stock()
    {
        return $this->morphOne(Stock::class, 'stockable');
    }


}
