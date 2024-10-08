<?php

namespace Agunbuhori\EasyMigration\Providers;

use Agunbuhori\EasyMigration\Builders\EasySchemaBuilder;
use Illuminate\Support\Facades\Schema;

class EasyMigrationProvider
{
    public static function boot()
    {
        $connection = Schema::getConnection();
        
        $connection->setSchemaBuilder(new EasySchemaBuilder($connection));
    }
}