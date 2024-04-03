<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authorization extends Model
{
    use HasFactory;
    protected $table = "authorization";
    protected $fillable = ["auth_name"];
    protected $primaryKey = "auth_id";
    public $timestams = false;
}
