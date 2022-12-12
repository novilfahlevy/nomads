<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionDetail extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
      'transaction_id', 'username', 'nationality', 'is_visa', 'doe_passport'
    ];

    protected $dates = ['doe_passport'];

    protected $hidden = [];

    public function getIsPassportActiveAttribute()
    {
      return $this->doe_passport > Carbon::now() ? 'Active' : 'Inactive';
    }

    public function transaction()
    {
      return $this->belongsTo(Transaction::class, 'transaction_id', 'id');
    }
}
