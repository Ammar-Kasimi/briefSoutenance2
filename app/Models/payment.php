<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class payment extends Model
{
    protected $fillable=['payer_id','indebted_id','status','depense_id','amount'];

    public function payer(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function indebted(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function depense(): BelongsTo
    {
        return $this->belongsTo(Depense::class);
    }
}
