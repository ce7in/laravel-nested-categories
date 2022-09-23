<?php

namespace Ce7in\NestedCategories\Commands;

use Illuminate\Console\Command;

class NestedCategoriesCommand extends Command
{
    public $signature = 'laravel-nested-categories';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
