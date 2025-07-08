<?php

declare(strict_types=1);

namespace App;

use App\Models\Book;
use Tempest\DateTime\DateTime;
use Tempest\Router\Get;
use Tempest\View\View;

use function Tempest\view;

final readonly class HomeController
{
    #[Get('/')]
    public function __invoke(): View
    {
        return view('home.view.php');
    }
}
