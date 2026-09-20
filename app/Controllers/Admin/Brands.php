<?php
    namespace App\Controllers\Admin;
    use App\Controllers\BaseController;
    use App\Models\BrandModel;
    class Brands extends BaseController
    {
        public function create()
        {
            return view('admin/insert_brands');
        }
        public function store()
        {
            $model = new BrandModel();
            $brand_title = $this->request->getPost('brand_title');
            $exists = $model->where('brand_title', $brand_title)->first();
            if ($exists) {
                return redirect()->back()->with('error', 'Brand already exists');
            }
            $image = $this->request->getFile('brand_image');
            $imageName = '';
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $imageName = $image->getRandomName();
                $image->move(FCPATH . 'uploads/brand/', $imageName);
            }
            $model->insert([
                'brand_title' => $brand_title,
                'brand_image' => $imageName
            ]);
            return redirect()->back()->with('success', 'Brand added successfully');
        }
    }