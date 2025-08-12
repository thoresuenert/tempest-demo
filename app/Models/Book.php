<?php

namespace App\Models;

use App\Books\Form\BooksFormController;
use Tempest\Database\IsDatabaseModel;
use Tempest\DateTime\DateTime;

use Tempest\Router\Bindable;
use Tempest\Validation\Rules\Length;
use Tempest\Validation\SkipValidation;
use function Tempest\map;
use function Tempest\uri;

final class Book implements Bindable
{
    use IsDatabaseModel;

    public function __construct(
        #[Length(min: 5, max: 120)]
        public string $title,
        #[SkipValidation]
        public DateTime $created_at,
    ) {
    }

    public function editUrl(): string
    {
        return uri([BooksFormController::class, 'edit'], book: $this->id);
    }
}
