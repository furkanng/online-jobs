<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserJobs extends Model
{
    use HasFactory;

    protected $table = "userjobs";

    protected $fillable = [
        "user_id",
        "admin_id",
        "advert_no",
        "name",
        "content",
        "price",
        "dead_line",
        "status",
    ];
}
