<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    use HasFactory;

    protected $table = "adverts";

    protected $fillable = [
        "admin_id",
        "teslim",
        "advert_no",
        "subject",
        "section",
        "content",
        "price",
        "closed_date",
        "status",
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class, "admin_id", "id");
    }

}
