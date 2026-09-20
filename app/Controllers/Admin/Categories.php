<?php
    namespace App\Controllers\Admin;
    use App\Controllers\BaseController;
    use App\Models\CategoriesModel;
    class Categories extends BaseController
    {
        public function create()
        {
            return view('admin/insert_categories');
        }
        public function store()
        {
            $model = new CategoriesModel();
            $cat_title = $this->request->getPost('cat_title');
            $exists = $model->where('cat_title', $cat_title)->first();
            if ($exists) {
                return redirect()->back()->with('error', 'Categories already exists');
            }
            $image = $this->request->getFile('cat_image');
            $imageName = '';
            if ($image->isValid() && !$image->hasMoved()) {
                $imageName = $image->getRandomName();
                $image->move(FCPATH . 'uploads/categories/', $imageName);
            }
            $model->insert([
                'cat_title' => $cat_title,
                'cat_image' => $imageName
            ]);
            return redirect()->back()->with('success', 'Categories added successfully');
        }
    }