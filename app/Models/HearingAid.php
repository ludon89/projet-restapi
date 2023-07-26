<?php

namespace App\Models;

use App\Models\Attribute;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HearingAid extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'refnumber',
        'price',
        'description',
    ];

    public function attributes(): HasOne
    {
        return $this->hasOne(Attribute::class, 'hearing_aid_id');
    }
}
