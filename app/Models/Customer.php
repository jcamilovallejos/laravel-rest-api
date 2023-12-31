<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Invoice;

class Customer extends Model
{
    use HasFactory;

    function invoices(){
        return $this->hasMany(Invoice::class);
    }
}
