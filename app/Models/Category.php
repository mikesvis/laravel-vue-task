<?php

namespace App\Models;

use App\Models\Good;
use Kalnoy\Nestedset\NodeTrait;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use NodeTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title'];

    public function goods()
    {
        return $this->belongsToMany(Good::class);
    }
}
