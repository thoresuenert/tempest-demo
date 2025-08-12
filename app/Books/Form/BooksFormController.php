<?php

declare(strict_types=1);

namespace App\Books\Form;

use App\Models\Book;
use Tempest\DateTime\DateTime;
use Tempest\Http\Request;
use Tempest\Http\Response;
use Tempest\Http\Responses\Ok;
use Tempest\Http\Session\Session;
use Tempest\Router\Get;
use Tempest\Router\Post;
use Tempest\Router\Put;
use Tempest\Validation\Exceptions\ValidationFailed;
use Tempest\View\View;
use function Tempest\get;
use function Tempest\map;
use function Tempest\view;

final readonly class BooksFormController
{
    #[Get('/books/create')]
    public function create(Request $request): View
    {
        return view('./form.view.php');
    }

    #[Get('/books/{book}/edit')]
    public function edit(Book $book): View
    {
        return view('./edit-form.view.php', book: $book);
    }

    #[Post('/books')]
    public function store(Request $request): View|Response
    {
        try {
            $book = map($request)->to(Book::class);
            $book->created_at = DateTime::now();
            $book->save();
        } catch (ValidationFailed $validationFailed)
        {
            $session = get(Session::class);
            $session->flash(Session::VALIDATION_ERRORS, $validationFailed->failingRules);
            $session->flash(Session::ORIGINAL_VALUES, $request->body);
            return view('./form.view.php');
        }

        return new Ok()->addHeader('HX-Trigger-After-Swap', 'book-was-created');
    }

    #[Put('/books/{book}')]
    public function update(Request $request, Book $book): View
    {
        $book->update([
            'title' => $request->get('title'),
        ]);

        return view('./edit-form.view.php', book: $book);
    }
}
