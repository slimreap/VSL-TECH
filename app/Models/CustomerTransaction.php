<?php

namespace App\Models;

use App\Models\Staff;
use App\Models\CustomerDetails;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomerTransaction extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'user_id',
        'payment',
        'payment_date',
        'quantity',
        'tracking_number',
        'payment_link',
        'total_amount',
        'delivery_date',
        'delivery_status',
        'order_status',
    ];
    public function customerdetails()
    {
        return $this->belongsTo(CustomerDetails::class, 'user_id');
    }


    public function staff()
    {
        return $this->belongsTo(Staff::class, 'staff_atendee_id');
    }

    public function transactionable()
    {
        return $this->morphTo();
    }
}
