<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimoniResource\Pages;
use App\Models\Testimoni;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;

class TestimoniResource extends Resource
{
    protected static ?string $model = Testimoni::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-ellipsis';
    
    protected static ?string $navigationLabel = 'Testimonials';
    
    protected static ?string $modelLabel = 'Testimonial';
    
    protected static ?string $pluralModelLabel = 'Testimonials';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->label('Nama')
                    ->required()
                    ->maxLength(255),
                
                TextInput::make('nama_website')
                    ->label('Nama Website')
                    ->maxLength(255),
                
                Textarea::make('komentar')
                    ->label('Komentar')
                    ->required()
                    ->rows(4)
                    ->columnSpanFull(),
                
                Select::make('rate')
                    ->label('Rating')
                    ->options([
                        '1' => '⭐ (1)',
                        '2' => '⭐⭐ (2)',
                        '3' => '⭐⭐⭐ (3)',
                        '4' => '⭐⭐⭐⭐ (4)',
                        '5' => '⭐⭐⭐⭐⭐ (5)',
                    ])
                    ->required()
                    ->default('5'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),
                    
                TextColumn::make('nama_website')
                    ->label('Website')
                    ->searchable(),
                    
                TextColumn::make('komentar')
                    ->label('Komentar')
                    ->limit(50)
                    ->searchable(),
                    
                TextColumn::make('rate')
                    ->label('Rating')
                    ->formatStateUsing(fn (string $state): string => str_repeat('⭐', (int)$state)),
                    
                ToggleColumn::make('is_active')
                    ->label('Status')
                    ->onColor('success')
                    ->offColor('danger'),
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
            'index' => Pages\ListTestimonis::route('/'),
            'create' => Pages\CreateTestimoni::route('/create'),
            'edit' => Pages\EditTestimoni::route('/{record}/edit'),
        ];
    }
}

