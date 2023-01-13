<?php
 namespace App\Models;

 class News {
    public static function all(){
        return [
            [
                'id' => 1,
                'title' => 'Peak of Darkness',
                'description' => 'The DMC3 Peak of Darkness Speedrun Tournament on November 13-14, 2021'

            ]
            ];
    }

    public static function find($id) {
        $news = self::all();

        foreach($news as $LatestNews) {
            if($LatestNews['id'] == $id) {
                return $LatestNews;
            }
        }
    }
 }