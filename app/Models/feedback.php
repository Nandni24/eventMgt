<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    use HasFactory;

    public function customer() : BelongsTo
    {
        return $this->belongsTo(customers::class,'cid',"cid");
    }
    
}

