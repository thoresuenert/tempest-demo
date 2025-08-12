<?php
/**
 * @var string $is
 * @var \Tempest\Support\Arr\ImmutableArray $attributes
 */

use Tempest\Http\GenericRequest;
use Tempest\Http\Mappers\RequestToPsrRequestMapper;
use Tempest\Http\Request;
use Tempest\Router\Router;
use Tempest\View\Renderers\TempestViewRenderer;
use Tempest\View\Slot;

use function Tempest\get;
use function Tempest\map;
use function Tempest\view;

$loadLazy = $attributes->hasKey('lazy');
$url ??= '';

if(!$loadLazy) {
    $request = get(Request::class);

    $internalRequest = new GenericRequest(
        method: $request->method,
        uri: $url,
        headers: $request->headers->toArray(),

    );
    // this is not working because query is always resolved from other sources.
    // setter is missing ;) private(set) is the issue
    $internalRequest->query = $request->query;

    $router = get(Router::class);
    $response = $router->dispatch(map($internalRequest)->with(RequestToPsrRequestMapper::class)->do());
    $html = get(TempestViewRenderer::class)->render($response->body);
} else {
    $html = <<<HTML
<div hx-get="{$url}" hx-trigger="load" hx-target="this" hx-swap="outerHTML">
<x-slot><div class="htmx-indicator">loading ...</div></x-slot>
</div>
HTML;

}



//$attributeString = $attributes
//    ->map(fn (string $value, string $key) => "{$key}=\"{$value}\"")
//    ->implode(' ');
//

?>

{!! $html !!}