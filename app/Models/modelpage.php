<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelpage extends Model
{
    use HasFactory;
    protected $table="signup_ecommerce";
    protected $primaryKey="customer_id";
}
