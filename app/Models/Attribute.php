<?php

namespace App\Models;

use App\Models\HearingAid;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attribute extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'color',
        'antennas',
        'hearing_aid_id'
    ];

    public function hearingAid(): BelongsTo
    {
        return $this->belongsTo(HearingAid::class, 'hearing_aid_id');
    }
}
