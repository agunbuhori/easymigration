<?php

namespace Agunbuhori\EasyMigration\Builders;

use Agunbuhori\EasyMigration\EasyBlueprint;
use Illuminate\Database\Schema\Builder;

class EasySchemaBuilder extends Builder
{
    protected function createBlueprint($table, \Closure $callback = null)
    {
        return new EasyBlueprint($table, $callback);
    }
}