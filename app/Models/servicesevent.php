<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Vendors;

class servicesevent extends Model
{
    use HasFactory;
    public function vender() : BelongsTo
    {
        return $this->belongsTo(Vendors::class,'vid',"vid");
    }
}
