<?php

namespace App\Filament\Widgets;

use App\Models\Testimoni;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class PendingTestimonials extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';
    
    protected static ?int $sort = 3;

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Testimoni::query()
                    ->where('is_active', false)
                    ->latest()
                    ->limit(10)
            )
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama')
                    ->searchable()
                    ->weight('bold'),
                    
                Tables\Columns\TextColumn::make('nama_website')
                    ->label('Website')
                    ->searchable(),
                    
                Tables\Columns\TextColumn::make('komentar')
                    ->label('Komentar')
                    ->limit(80)
                    ->wrap(),
                    
                Tables\Columns\TextColumn::make('rate')
                    ->label('Rating')
                    ->formatStateUsing(fn (string $state): string => str_repeat('⭐', (int)$state)),
                    
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Diterima')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\Action::make('approve')
                    ->label('Setujui')
                    ->icon('heroicon-o-check-circle')
                    ->color('success')
                    ->action(fn (Testimoni $record) => $record->update(['is_active' => true]))
                    ->requiresConfirmation()
                    ->after(fn () => $this->dispatch('refresh')),
            ])
            ->heading('Testimoni Menunggu Persetujuan')
            ->description('Testimoni yang perlu direview')
            ->emptyStateHeading('Semua testimoni sudah disetujui')
            ->emptyStateDescription('Tidak ada testimoni yang menunggu persetujuan')
            ->emptyStateIcon('heroicon-o-check-badge');
    }
}
