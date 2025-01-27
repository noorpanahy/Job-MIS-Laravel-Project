<?php

namespace App\Models;
use Illuminate\Support\arr;


class contact{
    public static function pages(): array
    {
        return [
            [
                'id' => '1',
                'title' => 'Facebook',
                'name' => 'jack rechard',
                'url' => 'Jack.rechard@facebook.com'
            ],
            [
                'id' => '2',
                'title' => 'Youtube',
                'name' => 'rechard jack',
                'url' => 'Jack.rechard@Youtube.com'
            ],
            [
                'id' => '3',
                'title' => 'Discord',
                'name' => 'Jack',
                'url' => 'Jack.rechard@Discord.com'
            ]
            ];
    }

    public static function find(int $id): array
    {
    $contact = arr::first(static::pages() , fn($contact) => $contact['id'] == $id );
    if(! $contact){
        abort(404);
    }
    return $contact;
    }
};
