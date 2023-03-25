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

class StatsOverview1 extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getCards(): array
    {
        return [
        
            Card::make('Users', User::count())
                ->descriptionIcon('heroicon-o-users')
                ->description('Total platform users')
                ->color('danger'),

        ];
    }
}
