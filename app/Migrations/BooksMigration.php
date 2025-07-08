<?php

namespace App\Migrations;

use Tempest\Database\DatabaseMigration;
use Tempest\Database\QueryStatement;
use Tempest\Database\QueryStatements\CreateTableStatement;
use Tempest\Database\QueryStatements\DropTableStatement;

final class BooksMigration implements DatabaseMigration
{
    public string $name = '2025-07-02_books';

    public function up(): QueryStatement
    {
        return new CreateTableStatement(
            tableName: 'books',
        )
            ->primary()
            ->text('title')
            ->datetime('created_at');
    }

    public function down(): QueryStatement
    {
        return new DropTableStatement(
            tableName: 'books',
        );
    }
}
