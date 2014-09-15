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
            'Blog\Repositories\Post\PostRepositoryInterface',
            'Blog\Repositories\Post\PostRepository'
        );

        $this->app->bind(
            'Blog\Repositories\User\UserRepositoryInterface',
            'Blog\Repositories\User\UserRepository'
        );

        $this->app->bind(
            'Blog\Repositories\Category\CategoryRepositoryInterface',
            'Blog\Repositories\Category\CategoryRepository'
        );
    }
}