<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'quotation',
        'price',
        'specificities',
        'conditions',
        'address_id',
        'customer_id',
        'contact_id'
    ];

    public function address() {
        return $this->belongsTo(Address::class);
    }

    public function customer() {
        return $this->belongsTo(Customer::class);
    }

    public function contact() {
        return $this->belongsTo(Contact::class);
    }
}
