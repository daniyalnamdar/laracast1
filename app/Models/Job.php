<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return  [
            [
                "id" => 1,
                "title" => "Directors",
                "salary" => "$50,000"
            ],
            [
                "id" => 2,
                "title" => "Programmer",
                "salary" => "$10,000"
            ],
            [
                "id" => 3,
                "title" => "Teacher",
                "salary" => "$40,000"
            ],
        ];
    }
    public static function find(int $id): ?array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] === $id);
        if (!$job) {
            throw new ModelNotFoundException();
            // or
            // abort(404)
        }
        return $job;
    }
}
