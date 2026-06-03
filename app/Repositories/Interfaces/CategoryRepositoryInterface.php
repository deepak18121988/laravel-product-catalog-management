<?php

namespace App\Repositories\Interfaces;

/**
 * Category Repository Interface
 */
interface CategoryRepositoryInterface
{
    /**
     * Get paginated categories
     */
    public function getAll();

    /**
     * Store category
     */
    public function store(array $data);

    /**
     * Find category by ID
     */
    public function findById(int $id);

    /**
     * Update category
     */
    public function update(int $id, array $data);

    /**
     * Delete category
     */
    public function delete(int $id);
}