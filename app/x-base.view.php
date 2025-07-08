<html lang="en">
<head>
    <title :if="isset($title)">{{ $title }} | Tempest</title>
    <title :else>Tempest</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png"/>
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png"/>
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png"/>
    <link rel="manifest" href="/favicon/site.webmanifest"/>

    <x-vite-tags />

    <x-slot name="styles"/>
</head>
<body>
<x-slot/>
</body>
</html>