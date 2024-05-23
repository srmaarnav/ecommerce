<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Products')]

class ProductsPage extends Component
{
    use WithPagination;

    #[Url]
    public $selected_categories= [];

    #[Url]
    public $selected_brands= [];

    #[Url]
    public $featured = [];

    #[Url]
    public $sale = [];

    #[Url]
    public $price_range = 300000;

    #[Url]
    public $sorting = 'latest';

    public function render()
    {
        $products = Product::query()->where('is_active', 1);   

        if(!empty($this->selected_categories)){
            $products->whereIn('category_id', $this->selected_categories);
        }

        if(!empty($this->selected_brands)){
            $products->whereIn('brand_id', $this->selected_brands);
        }

        if($this->featured){
            $products->where('is_featured', 1);
        }

        if($this->sale){
            $products->where('on_sale', 1);
        }

        if($this->price_range){
            $products->whereBetween('price', [0, $this->price_range]);
        }

        if($this->sorting == 'latest'){
            $products->latest();
        }
        
        if($this->sorting == 'price'){
            $products->orderBy('price', 'asc');
        }

        $categories = Category::where('is_active', 1)->get(['id', 'name', 'slug']);
        $brands = Brand::where('is_active', 1)->get(['id', 'name', 'slug']);
        return view('livewire.products-page', [
            'products' => $products->paginate(9),
            'categories' => $categories,
            'brands' => $brands,
        ]);
    }
}
