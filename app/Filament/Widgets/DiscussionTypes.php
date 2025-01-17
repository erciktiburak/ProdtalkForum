<?php

namespace App\Filament\Widgets;

use App\Models\Discussion;
use Filament\Widgets\PieChartWidget;

class DiscussionTypes extends PieChartWidget
{
    protected static ?int $sort = 11;
    protected int | string | array $columnSpan = '3';
    protected function getHeading(): string
    {
        return 'Discussion Types';
    }

    protected function getData(): array
    {
        $nsfwCount = Discussion::where('is_nsfw', 1)->count();
        $sfwCount = Discussion::where('is_nsfw', 0)->count();

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
