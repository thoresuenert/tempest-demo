<?php

declare(strict_types=1);

namespace App\Books\Form;

use App\Models\Book;
use Tempest\Http\Request;
use Tempest\Router\Get;
use Tempest\View\View;
use function Tempest\view;

final readonly class BooksFormController
{
    #[Get('/books/create')]
    public function __invoke(Request $request): View
    {
        return view('./form.view.php');
    }
}
