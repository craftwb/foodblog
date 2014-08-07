<?php namespace Blog\Repositories;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Blog\Repositories\PostRepositoryInterface',
            'Blog\Repositories\PostRepository'
        );
    }
}