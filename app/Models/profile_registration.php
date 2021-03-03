<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile_registration extends Model
{
    use HasFactory;
    protected $table = 'profile_registrations';
     protected $fillable = [
        'company_domain', 'trade_role','company_name','photo','email','password','contact','city','address','token'
    ];


}
