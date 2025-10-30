<?php
namespace Yo1L\LaravelTypeForm\Test;

use Illuminate\Foundation\Application;
use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Symfony\Component\HttpFoundation\Request;
use Yo1L\LaravelTypeForm\TypeFormServiceProvider;

class TestCase extends OrchestraTestCase
{
    /**
     * Load package service provider
     * @param Application $app
     * @return class-string[]
     */
    protected function getPackageProviders($app)
    {
        return [TypeFormServiceProvider::class];
    }

    /**
     * Load package alias
     * @param Application $app
     * @return array
     */
    /*protected function getPackageAliases($app)
    {
        return [
            'TypeForm' => TypeFormFacade::class,
        ];
    }*/

    /**
     * Create a request for testing
     *
     * @param string $method
     * @param string $content
     * @param array $server
     * @param string $uri
     * @param array $parameters
     * @param array $cookies
     * @param array $files
     * @return \Illuminate\Http\Request
     */
    protected function createRequest(
        $method = 'GET',
        $content = '',
        $server = ['CONTENT_TYPE' => 'application/json'],
        $uri = '/test',
        $parameters = [],
        $cookies = [],
        $files = []
    )
    {
        $request = new \Illuminate\Http\Request;
        return $request->createFromBase(
            Request::create(
                $uri,
                $method,
                $parameters,
                $cookies,
                $files,
                $server,
                $content
            )
        );
    }
}
