<?php
declare(strict_types=1);

namespace App\Books\Widgets;

use Tempest\Http\Request;
use Tempest\Router\Get;
use Tempest\View\View;
use Tempest\Support\Str;
use function Tempest\view;

final readonly class BooksWidgetController
{
    #[Get('/books/widget/count')]
    public function show(Request $request): View
    {
        $count = rand(10,5000);
        return view('./books-count.view.php', count: $count);
    }

    #[Get('/books/widget/count/refresh')]
    public function update(Request $request) : View
    {
        $count = rand(10,5000);
        return view('./x-count.view.php', count: $count);
    }
}