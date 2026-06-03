<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Repositories\Interfaces\CategoryRepositoryInterface;

/**
 * Category Controller
 */
class CategoryController extends Controller
{
    protected CategoryRepositoryInterface $categoryRepository;

    /**
     * Constructor
     */
    public function __construct(
        CategoryRepositoryInterface $categoryRepository
    ) {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Category listing page
     */
    public function index()
    {
        $categories = $this->categoryRepository->getAll();

        return view(
            'admin.category.index',
            compact('categories')
        );
    }

    /**
     * Store category
     */
    public function store(StoreCategoryRequest $request)
    {
        $this->categoryRepository
            ->store($request->validated());

        return response()->json([
            'status' => true,
            'message' => 'Category created successfully.'
        ]);
    }

    /**
     * Edit category
     */
    public function edit($id)
    {
        $category = $this->categoryRepository
            ->findById($id);

        return response()->json($category);
    }

    /**
     * Update category
     */
    public function update(
        UpdateCategoryRequest $request,
        $id
    ) {
        $this->categoryRepository
            ->update(
                $id,
                $request->validated()
            );

        return response()->json([
            'status' => true,
            'message' => 'Category updated successfully.'
        ]);
    }

    /**
     * Delete category
     */
    public function destroy($id)
    {
        $this->categoryRepository
            ->delete($id);

        return response()->json([
            'status' => true,
            'message' => 'Category deleted successfully.'
        ]);
    }
}