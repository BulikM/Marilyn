<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsletterInfo extends Model
{
    use HasFactory;
    protected $fillable = ["name"];

    public function users()
    {
        return $this->belongsToMany(User::class, "newsletter_info_user");
    }
    public function Customers()
    {
        return $this->belongsToMany(Customers::class, "newsletter_info_user");
    }
}
