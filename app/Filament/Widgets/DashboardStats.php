<?php

namespace App\Filament\Widgets;

use App\Models\Porto;
use App\Models\Testimoni;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Portfolio', Porto::count())
                ->description('Semua portfolio yang dibuat')
                ->descriptionIcon('heroicon-m-briefcase')
                ->color('success'),
                
            Stat::make('Total Testimoni', Testimoni::count())
                ->description('Semua testimonial')
                ->descriptionIcon('heroicon-m-chat-bubble-left-right')
                ->color('info'),
                
            Stat::make('Testimoni Pending', Testimoni::where('is_active', false)->count())
                ->description('Menunggu persetujuan')
                ->descriptionIcon('heroicon-m-clock')
                ->color('warning'),
        ];
    }
}
