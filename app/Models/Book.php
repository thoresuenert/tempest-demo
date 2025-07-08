<?php

namespace App\Models;

use Tempest\Database\IsDatabaseModel;
use Tempest\DateTime\DateTime;

use Tempest\Validation\Rules\Length;

final class Book
{
    use IsDatabaseModel;

    public function __construct(
        #[Length(min: 1, max: 120)]
        public string $title,

        public ?DateTime $created_at,
    ) {
    }
}
