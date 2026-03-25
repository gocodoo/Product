<?php

namespace App\Filament\Resources\Categories\Pages;

use App\Filament\Resources\Categories\CategoryResource;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\CreateRecord;
use Filament\Forms;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Schema;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;

}
