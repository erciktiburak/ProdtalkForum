<?php

namespace App\Filament\Widgets;

use App\Models\Reply;
use Filament\Widgets\PieChartWidget;

class ReplyTypes extends PieChartWidget
{
    protected static ?int $sort = 12;

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
