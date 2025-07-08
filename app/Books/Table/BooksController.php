<?php

declare(strict_types=1);

namespace App\Books\Table;

use App\Models\Book;
use Tempest\Http\Request;
use Tempest\Router\Get;
use Tempest\View\View;
use function Tempest\view;

final readonly class BooksController
{
    #[Get('/books')]
    public function __invoke(Request $request): View
    {
        $books = Book::select()
            ->when($request->get('search'), fn ($query) => $query->where('title LIKE ?','%'.$request->get('search').'%' ))
            ->all();
        return view('./table.view.php', books: $books);
    }
}
