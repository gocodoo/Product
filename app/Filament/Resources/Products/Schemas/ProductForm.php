<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use function Laravel\Prompts\select;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                        ->required(),
                TextInput::make('price')
                        ->required(),
                TextInput::make('quantity')
                        ->required(),
                Select::make('category_id')
                    ->required()
                    ->relationship('category','name'),
                TextInput::make('description'
                )
            ]);
    }
}
