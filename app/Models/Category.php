<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Category Model
 */
class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'parent_id'
    ];

    /**
     * Parent Category Relation
     */
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    /**
     * Child Categories Relation
     */
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}