<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'contact_number',
        'address',
        'state',
        'city',
        'postal_code',
    ];
    public function customertransaction()
    {
        return $this->morphMany(CustomerTransaction::class, 'transactionable');
    }

    public function customertrans()
    {
        return $this->hasMany(CustomerTransaction::class);
    }

    
}
