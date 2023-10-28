<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductSearch extends Component
{
    use WithPagination;

    public string $search = '';
    protected array $queryString = ['search'];

    public function render()
    {
        $query = Product::query();
        if ($this->search) {
            $query->where('title', 'like', "%{$this->search}%")
                ->orWhere('description', 'like', "%{$this->search}%");
        }

        return view('livewire.product-search', [
            'products' => $query->paginate(20),
        ]);
    }

    public function updated(string $property)
    {
        if ($property === 'search') {
            $this->resetPage();
        }
    }

    public function truncate(string $string, int $length, string $ellipsis = '...')
    {
        if (mb_strlen($string, 'UTF-8') > $length) {
            return mb_substr($string, 0, $length, 'UTF-8') . $ellipsis;
        }

        return $string;
    }
}
