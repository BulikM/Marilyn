<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "title_id",
        "first_name",
        "last_name",
        "email",
        "password",
        "phone",
        "mobile_phone",
        "day_id",
        "month_id",
        "newsletterInfo_id",
        "read_or_shop_id",
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = ["password", "remember_token"];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        "email_verified_at" => "datetime",
    ];

    //    relaties
    //een op veel
    public function month()
    {
        return $this->belongsTo(Month::class);
    }
    public function day()
    {
        return $this->belongsTo(Day::class);
    }
    public function title()
    {
        return $this->belongsTo(Title::class);
    }
    public function readorshop()
    {
        return $this->belongsTo(Readorshop::class);
    }
    //    veel op veel
    public function preferences()
    {
        return $this->belongsToMany(preference::class, "preference_user");
    }
    public function newsletterinfos()
    {
        return $this->belongsToMany(
            Newsletterinfo::class,
            "newsletter_info_user"
        );
    }
}
