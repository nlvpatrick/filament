<?php

namespace App\Filament\Resources\CategoryListResource\Pages;

use App\Filament\Resources\CategoryListResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCategoryLists extends ListRecords
{
    protected static string $resource = CategoryListResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
