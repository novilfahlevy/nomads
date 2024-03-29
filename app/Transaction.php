<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
      'travel_packages_id', 'user_id', 'additional_visa', 'transaction_total', 'transaction_status'
    ];

    protected $hidden = [];

    public function scopePending($query)
    {
      return $query->where('transaction_status', 'PENDING');
    }

    public function scopeSuccess($query)
    {
      return $query->where('transaction_status', 'SUCCESS');
    }

    public function details()
    {
      return $this->hasMany(TransactionDetail::class, 'transaction_id', 'id');
    }

    public function user()
    {
      return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function travelPackage()
    {
      return $this->belongsTo(TravelPackage::class, 'travel_packages_id', 'id');
    }
}
