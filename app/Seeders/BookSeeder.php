<?php
declare(strict_types=1);

namespace App\Seeders;

use App\Models\Book;
use Tempest\Database\DatabaseSeeder;
use Tempest\DateTime\DateTime;
use UnitEnum;
use function Tempest\Database\query;

final class BookSeeder implements DatabaseSeeder
{
    public function run(null|string|UnitEnum $database): void
    {
        for ($i = 0; $i < 10; ++$i) {
            query(Book::class)
                ->insert(
                    title: 'Timeline Taxi ' . $i,
                    created_at: DateTime::now(),
                )
                ->onDatabase($database)
                ->execute();
        }

    }
}