<?php

namespace App\Filament\Widgets;

use App\Models\Porto;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestPortfolio extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';
    
    protected static ?int $sort = 2;

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Porto::query()->latest()->limit(5)
            )
            ->columns([
                Tables\Columns\ImageColumn::make('laptop_image')
                    ->label('Preview')
                    ->disk('public_uploads')
                    ->defaultImageUrl('/img/placeholder.jpg'),
                    
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->weight('bold'),
                    
                Tables\Columns\TextColumn::make('url')
                    ->label('Link')
                    ->url(fn ($record) => $record->url)
                    ->openUrlInNewTab()
                    ->limit(30),
                    
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
            ])
            ->heading('Portfolio Terbaru')
            ->description('5 portfolio terbaru yang ditambahkan');
    }
}
