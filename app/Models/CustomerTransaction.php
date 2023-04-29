<?php

namespace App\Models;

use App\Models\CustomerDetails;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomerTransaction extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'user_id'
    ];
    public function customerdetails()
    {
        return $this->belongsTo(CustomerDetails::class, 'user_id');
    }

    public function transactionable()
    {
        return $this->morphTo();
    }
}
