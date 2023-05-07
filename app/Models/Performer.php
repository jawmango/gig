<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performer extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "performer_name",
        "description",
        "gig_type",
        "price",
        "phone",
        "socials",
        "sampleLink",
        "img"
        ];
}
