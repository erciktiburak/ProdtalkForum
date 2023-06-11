<?php

namespace App\Filament\Widgets;

use App\Models\Comment;
use Filament\Widgets\PieChartWidget;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview8 extends PieChartWidget
{
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
            'datasets' => [
                [
                    'label' => 'My First Dataset',
                    'data' => [$nsfwCount, $sfwCount],
                    'backgroundColor' => [
                        'rgb(255, 0, 0)',
                        'rgb(54, 162, 235)',
                    ],
                    'borderWidth' => 1,
                    'borderRadius' => 15,
                    'hoverOffset' => 4,
                    'radius' => 150,
                    'hoverBorderWidth'	=> 3,
                    'circumference' => 360,
                    'weight' => 5,
                ],
            ],
        ];

        return $data;
    }
}
