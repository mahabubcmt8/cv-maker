<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
            'title',
            'sitename',
            'email',
            'phone',
            'logo',
            'icon',
            'facebook',
            'twitter',
            'linkedin',
            'instagram',
            'youtube',
            'pinterest',
            'currency',
            'currency_symbol',
            'country_code',
            'address',
            'status',
    ];
}
