<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Collocation extends Model
{
    protected $fillable = ['title', 'desc'];

    public function categories(): HasMany
    {
        return $this->hasMany(Category::class);
    }
    public function depenses(): HasMany
    {
        return $this->hasMany(Depense::class);
    }
      public function members(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
