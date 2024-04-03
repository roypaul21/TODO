<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = "users";
    protected $fillable = [ "username",
                            "user_email",
                            "user_pwd",
                            "created_at",
                            "updated_at"
                        ];
    protected $primaryKey = "user_id";
}
