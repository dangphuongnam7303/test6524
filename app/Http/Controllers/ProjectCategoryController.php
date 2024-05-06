<?php

namespace App\Http\Controllers;

use App\Models\ProjectCategory;
use Illuminate\Http\Request;
class ProjectCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const OBJECT = "project_category";
    const DOT = '.';
    public function index()
    {
        $data = ProjectCategory::all();
        return view(self::OBJECT . self::DOT . __FUNCTION__, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(self::OBJECT . self::DOT . __FUNCTION__);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model = new ProjectCategory();
        $model -> fill($request->all());
        $model -> save();
        return redirect('project_category');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
{
    $item = ProjectCategory::findOrFail($id);
    return view(self::OBJECT . '.' . __FUNCTION__, compact('item'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $model = ProjectCategory::query()->findOrFail($id);
        $model -> fill($request->all());
        $model -> save();
        return redirect(self::OBJECT);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = ProjectCategory::findOrFail($id);
        $category->delete();
        return redirect(self::OBJECT);
    }
}
