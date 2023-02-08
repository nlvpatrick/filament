<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Throwable;
use Exception;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;

}
