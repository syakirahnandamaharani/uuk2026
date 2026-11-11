<?php

namespace App\Filament\Resources\Books\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BookForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->maxLength(255),
                TextInput::make('author')
                    ->label('Author')
                    ->required()
                    ->maxLength(255),
                TextInput::make('publisher')
                    ->label('Publisher')
                    ->required()
                    ->maxLength(255),
                TextInput::make('year')
                    ->label('Year')
                    ->numeric()
                    ->required(),
                TextInput::make('stock')
                    ->label('Stock')
                    ->numeric()
                    ->required()
                    ->default(0),
            ]);
    }
}