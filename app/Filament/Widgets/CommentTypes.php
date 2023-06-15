<?php

namespace App\Filament\Widgets;

use App\Models\Comment;
use Filament\Widgets\PieChartWidget;

class CommentTypes extends PieChartWidget
{
    protected static ?int $sort = 13;

    protected function getHeading(): string
    {
        return 'Comment Types';
    }

    protected function getData(): array
    {
        $nsfwCount = Comment::where('is_nsfw', 1)->count();
        $sfwCount = Comment::where('is_nsfw', 0)->count();

        $data = [
            'labels' => ['NSFW', 'SFW'],
            'options' => [
                'responsive' => false,
                'maintainAspectRatio' => false, // This is needed to make the chart 'responsive
            ],
            'datasets' => [
                [
                    'label' => 'My First Dataset',
                    'data' => [$nsfwCount, $sfwCount],
                    'backgroundColor' => [
                        'rgb(255, 0, 0)',
                        'rgb(54, 162, 235)',
                    ],
                    'backgroundColor' => [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                    ],
                    'hoverOffset' => 4,
                ]],
        ];

        return $data;
    }
}
