<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 2016/10/26
 * Time: 14:55
 */

namespace CrCms\Manage\Providers;


use CrCms\Repositories\AdminRepository;
use CrCms\Repositories\Interfaces\AdminRepositoryInterface;
use Illuminate\Support\Facades\Route;
use Simon\Kernel\Providers\PackageServiceProvider;

class ManageServiceProvider extends PackageServiceProvider
{

    /**
     * @var bool
     * @author simon
     */
    protected $defer = true;

    /**
     *
     * @var string
     * @author simon
     */
    protected $namespaceName = 'manage';

    /**
     *
     * @var string
     * @author simon
     */
    protected $packagePath = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR;


    /**
     *
     */
    public function register()
    {
        // TODO: Change the autogenerated stub
        parent::register();

        $this->app->bind(AdminRepositoryInterface::class,AdminRepository::class);
    }


    /**
     * @return array
     */
    public function provides()
    {
        return [
            AdminRepositoryInterface::class,
        ];
    }


    /**
     *
     */
    protected function setupWebRoutes()
    {
        if (! $this->app->routesAreCached()) {
            Route::group([
                'middleware' => 'web',
                'namespace' => 'CrCms\\' . ucwords($this->namespaceName) . '\Http\Controllers',
            ], function ($router) {
                $file = $this->packagePath . 'routes' . DIRECTORY_SEPARATOR . 'web.php';
                file_exists($file) && require $file;
            });
        }
    }

}