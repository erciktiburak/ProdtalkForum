<?php

namespace App\Filament\Widgets;

use App\Models\Reply;
use Filament\Widgets\PieChartWidget;

class StatsOverview8 extends PieChartWidget
{
    protected function getHeading(): string
    {
        return 'Reply Types';
    }

    protected function getData(): array
    {
        $nsfwCount = Reply::where('is_nsfw', 1)->count();
        $sfwCount = Reply::where('is_nsfw', 0)->count();

        $data = [
            'labels' => ['NSFW', 'SFW'],
            'maintainAspectRatio' => false, // This is needed to make the chart 'responsive
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
