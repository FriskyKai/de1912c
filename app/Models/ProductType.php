<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductType extends Model
{
    //

    public function materialType() : BelongsTo {
        return $this->belongsTo(MaterialType::class);
    }
}
