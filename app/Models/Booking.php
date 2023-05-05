<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "performer_name",
        "client_name",
        "client_email",
        "phone",
        "gig_location",
        "gig_type",
        "date",
        ];
}
