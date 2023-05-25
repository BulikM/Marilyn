<?php

namespace App\Models;

use App\Models\Scopes\CustomerScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Customers extends User
{
    use HasFactory;
    protected $table= 'users';

    protected static function booted(): void
    {
        static::addGlobalScope(new CustomerScope);
    }


    //    relaties
    //een op veel
    public function shippingAddresses()
    {
        return $this->hasMany(ShippingAddresses::class);
    }
    public function billingAddresses()
    {
        return $this->hasMany(BillingAddresses::class);
    }

    //    veel op een
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
