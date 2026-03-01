<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Depense extends Model

{
   protected $fillable=['title','total','category_id','user_id'];
   
     public function collocation():BelongsTo
    {
        return $this->belongsTo(Collocation::class);
    }
    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function payments():HasMany
    {
        return $this->hasMany(Payment::class);
    }
}
