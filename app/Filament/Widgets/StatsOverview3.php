<?php

namespace App\Filament\Widgets;

use App\Models\Comment;
use App\Models\Discussion;
use App\Models\DiscussionVisit;
use App\Models\Like;
use App\Models\Reply;
use App\Models\Tag;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview3 extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getCards(): array
    {
        return [
            
         
            Card::make('Visits', DiscussionVisit::count())
                ->descriptionIcon('heroicon-o-check')
                ->description('Total discussions visits')
                ->color('primary'),

            Card::make('Unique visits', DiscussionVisit::groupBy('user_id')->select('user_id')->get()->count())
                ->descriptionIcon('heroicon-o-badge-check')
                ->description('Total discussions unique visits')
                ->color('success'),
        ];
    }
}
