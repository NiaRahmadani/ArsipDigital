<?php

namespace App\Filament\Widgets;

use App\Models\Arsip;
use App\Models\Category;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $arsips = Arsip::count();
        $categories = Category::count();
        return [
            Stat::make('Arsips', $arsips)
                ->description('arsips')
                ->icon('heroicon-o-document-text')
                ->color('success'),
            Stat::make('Categories', $categories)
                ->description('categories')
                ->icon('heroicon-o-folder')
                ->color('success'),
        ];
    }
}
