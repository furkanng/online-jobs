<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MicroJob extends Model
{
    use HasFactory;

    protected $table = "microjobs";

    protected $fillable = [
        "admin_id",
        "advert_no",
        "subject",
        "section",
        "content",
        "price",
        "closed_date",
        "status",
    ];
}
