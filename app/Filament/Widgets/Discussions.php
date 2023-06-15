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

class Discussions extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getCards(): array
    {
        return [
            
            Card::make('Discussions', Discussion::count())
                ->descriptionIcon('heroicon-o-view-list')
                ->description('Total discussions created')
                ->color('primary'),
            
            Card::make('NSFW Discussions', Discussion::where('is_nsfw', 1)->count())
                ->descriptionIcon('heroicon-o-view-list')
                ->description('Total discussions with NSFW content')
                ->color('danger'),

            Card::make('SFW Discussions', Discussion::where('is_nsfw', 0)->count())
                ->descriptionIcon('heroicon-o-view-list')
                ->description('Total discussions with NSFW content')
                ->color('secondary'),

            Card::make('Replies', Reply::count())
                ->descriptionIcon('heroicon-o-chat-alt')
                ->description('Total replies done')
                ->color('primary'),

            Card::make('NSFW Replies', Reply::where('is_nsfw', 1)->count())
                ->descriptionIcon('heroicon-o-view-list')
                ->description('Total Replies with NSFW content')
                ->color('danger'),

            Card::make('SFW Replies', Reply::where('is_nsfw', 0)->count())
                ->descriptionIcon('heroicon-o-view-list')
                ->description('Total Replies with NSFW content')
                ->color('secondary'),

            Card::make('Comments', Comment::count())
                ->descriptionIcon('heroicon-o-chat-alt-2')
                ->description('Total comments added')
                ->color('primary'),

            Card::make('NSFW Comments', Comment::where('is_nsfw', 1)->count())
                ->descriptionIcon('heroicon-o-view-list')
                ->description('Total Comments with NSFW content')
                ->color('danger'),

            Card::make('SFW Comments', Comment::where('is_nsfw', 0)->count())
                ->descriptionIcon('heroicon-o-view-list')
                ->description('Total Comments with NSFW content')
                ->color('secondary'),  
        ];
    }
}
