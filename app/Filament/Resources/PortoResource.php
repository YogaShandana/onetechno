<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortoResource\Pages;
use App\Models\Porto;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class PortoResource extends Resource
{
    protected static ?string $model = Porto::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    
    protected static ?string $navigationLabel = 'Portfolio';
    
    protected static ?string $modelLabel = 'Portfolio';
    
    protected static ?string $pluralModelLabel = 'Portfolio';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Nama Portfolio')
                    ->required()
                    ->maxLength(255),
                
                TextInput::make('url')
                    ->label('Link Portfolio')
                    ->url()
                    ->placeholder('https://example.com'),
                
                Grid::make(3)
                    ->schema([
                        FileUpload::make('laptop_image')
                            ->label('Tampilan Laptop')
                            ->image()
                            ->directory('portfolio/laptop'),
                        
                        FileUpload::make('hp_image')
                            ->label('Tampilan Mobile')
                            ->image()
                            ->directory('portfolio/mobile'),
                        
                        FileUpload::make('full_image')
                            ->label('Tampilan Full')
                            ->image()
                            ->directory('portfolio/desktop'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('laptop_image')
                    ->label('Preview'),
                    
                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPortos::route('/'),
            'create' => Pages\CreatePorto::route('/create'),
            'edit' => Pages\EditPorto::route('/{record}/edit'),
        ];
    }
}

