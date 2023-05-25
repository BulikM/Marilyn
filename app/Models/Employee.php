<?php

namespace App\Models;

use App\Models\Scopes\EmployeeScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends User
{
    use HasFactory;
    protected $table= 'users';

    protected static function booted(): void
    {
        static::addGlobalScope(new EmployeeScope);
    }
}
