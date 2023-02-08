<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\Product;
use App\Models\CategoryList;
use App\Models\User;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Product Count', Product::count()),
            Card::make('Category Count', CategoryList::count()),
            Card::make('User Count', User::count()),
        ];
    }
}
