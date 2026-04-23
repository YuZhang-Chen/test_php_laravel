<?php

namespace App\Service;

class AppleMusic {
    public function findPodcast(string $id) : array {
        return [
            'id' => $id,
            'type' => 'podcasts',
            'attributes' => [
                'name' => '範例播客節目',
                'artistName' => '創作者名稱',
                'url' => 'https://podcasts.apple.com/podcast/id' . $id,
                'description' => [
                    'standard' => '這是一個模擬的播客節目描述內容。',
                ],

                'genreNames' => ['科技', '教育'],
                'releaseDate' => '2024-01-01',
            ],
        ];
    }
}