<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Partner extends Model
{
    protected $fillable = [
        'partner_type_id',
        'name',
        'director',
        'email',
        'phone',
        'address',
        'inn',
        'rating',
    ];

    public $timestamps = false;

    public function partnerType() : BelongsTo {
        return $this->belongsTo(PartnerType::class);
    }
}
