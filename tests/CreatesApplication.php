<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;

trait CreatesApplication
{
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        parent::setUp();

        $this->app['Illuminate\Contracts\Http\Kernel']->disableMiddleware();

        $this->setUpAsraf();
    }

    /**
     * Setup asraf.
     */
    protected function setUpAsraf()
    {
        $this->app['config']->set('database.connections.sqlite.prefix', null);
        $this->app['config']->set('database.connections.sqlite.database', ':memory:');
        $this->app['config']->set('database.default', 'sqlite');

        // Installer instance
        $installer = $this->app['asraf.installer'];

        // Get database config
        $config = $this->app['config']->get('database.connections.sqlite');

        $this->migrate();

        // Set database config
        $installer->setDatabaseData('sqlite', $config);

        // Migrate packages
        $installer->install(true);

        // Migrate application.
        $this->app['Illuminate\Contracts\Console\Kernel']->call('migrate', ['--env' => 'testing']);

        // Boot extensions
        $this->app['asraf']->bootExtensions();
    }

    /**
     * Resets the database and install the migration table.
     *
     * @return void
     */
    protected function migrate()
    {
        $this->app['Illuminate\Contracts\Console\Kernel']->call('migrate:reset', ['--env' => 'testing']);

        $this->app['Illuminate\Contracts\Console\Kernel']->call('migrate:install', ['--env' => 'testing']);
    }
}
