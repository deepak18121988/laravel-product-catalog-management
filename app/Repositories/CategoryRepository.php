<?php

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Support\Str;
use App\Repositories\Interfaces\CategoryRepositoryInterface;

/**
 * Category Repository Class
 */
class CategoryRepository implements CategoryRepositoryInterface
{
    /**
     * Get paginated category list
     */
    public function getAll()
    {
        return Category::latest()->paginate(10);
    }

    /**
     * Store new category
     */
    public function store(array $data)
    {
        return Category::create([
            'name'      => $data['name'],
            'slug'      => Str::slug($data['name']),
            'parent_id' => $data['parent_id'] ?? null,
        ]);
    }

    /**
     * Find category by ID
     */
    public function findById(int $id)
    {
        return Category::findOrFail($id);
    }

    /**
     * Update category
     */
    public function update(int $id, array $data)
    {
        $category = $this->findById($id);

        return $category->update([
            'name'      => $data['name'],
            'slug'      => Str::slug($data['name']),
            'parent_id' => $data['parent_id'] ?? null,
        ]);
    }

    /**
     * Delete category
     */
    public function delete(int $id)
    {
        return Category::destroy($id);
    }
}