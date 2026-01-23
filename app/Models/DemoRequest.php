<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemoRequest extends Model
{
    
    /** @use HasFactory<\Database\Factories\RequestFactory> */
    use HasFactory;
    protected $table = "requests";
    protected $guarded = ["id"];
}
