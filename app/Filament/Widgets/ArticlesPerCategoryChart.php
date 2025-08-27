<?php

namespace App\Filament\Widgets;

use Filament\Widgets\BarChartWidget;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
class ArticlesPerCategoryChart extends BarChartWidget
{
    protected static ?string $heading = 'Jumlah Artikel per Kategori';

    protected int|string|array $columnSpan = 'full'; // lebar penuh

    protected function getData(): array
    {
        $data = Category::select('categories.name', DB::raw('COUNT(articles.id) as total'))
            ->leftJoin('articles', 'categories.id', '=', 'articles.category_id')
            ->groupBy('categories.id', 'categories.name')
            ->orderBy('categories.name')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Artikel',
                    'data' => $data->pluck('total')->toArray(),
                ],
            ],
            'labels' => $data->pluck('name')->toArray(),
        ];
    }

    protected function getOptions(): array
    {
        return [
            'scales' => [
                'y' => [
                    'ticks' => [
                        'stepSize' => 1,
                        'beginAtZero' => true,
                        'precision' => 0,
                    ],
                ],
            ],
        ];
    }
}

