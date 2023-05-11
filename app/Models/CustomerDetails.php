<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomerDetails extends Model
{
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'contact_number',
        'address',
        'state',
        'city',
        'postal_code',
    ];

    public function routeNotificationForMail($notification)
    {
        // Return email address only...
        // dd(substr($this->email, 0, strpos($this->email, '@')));
        return $this->email;
    }
    public function customertransaction()
    {
        return $this->morphMany(CustomerTransaction::class, 'transactionable');
    }

    public function customertrans()
    {
        return $this->hasMany(CustomerTransaction::class);
    }



    
}
