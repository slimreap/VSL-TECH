<?php

namespace App\Models;

use App\Models\CustomerDetails;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomerTransaction extends Model
{
    use HasFactory;
    public function customerdetails()
    {
        return $this->belongsTo(CustomerDetails::class);
    }

    public function transactionable()
    {
        return $this->morphTo();
    }
}
