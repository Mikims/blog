<?php

namespace App\View\Components;

use Closure;
use App\Models\Category;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;

class AppLayout extends Component
{
    /**
     * Create a new component instance.
     */

    // public ?string $metaTitle;
    // public ?string $metaDescription;

    public function __construct(public ?string $metaTitle = null, public ?string $metaDescription = null)
    {
        $this->metaTitle = $metaTitle;
        $this->metaDescription = $metaDescription;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $query = Category::query()
            ->join('category_post', 'categories.id', '=', 'category_post.category_id')
            ->select('categories.title', 'categories.slug', DB::raw('count(*) as total'))
            ->groupBy('categories.id')
            ->orderByDesc('total')
            ->limit(5);
            // ->get();

        // dd($query->toSql());

        $categories = $query
            ->get();
            
        return view('layouts.app', compact('categories'));
    }
}
