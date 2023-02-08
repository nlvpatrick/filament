<?php

namespace App\Filament\Resources\CategoryListResource\Pages;

use App\Filament\Resources\CategoryListResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCategoryList extends CreateRecord
{
    protected static string $resource = CategoryListResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
