<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User; // added

class BillingInfo extends Model
{
    protected $table = 'billing_infos';

    public function user(){
        return $this->belongsTo(User::class); // added 10/25
    }

}
