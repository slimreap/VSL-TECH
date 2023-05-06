<?php

namespace App\Models;

use components;
use App\Models\DesktopPackage;
use App\Models\LaptopnPheriperals;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'stock', 'category'
    ];
    public function stockable()
    {
        return $this->morphTo();
    }
}
