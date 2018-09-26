<?php namespace LukeTowers\GNUTerryPratchett;

use Backend;
use System\Classes\PluginBase;

/**
 * GNUTerryPratchett Plugin Information File
 */
class Plugin extends PluginBase
{
    public $elevated = true;

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'GNU Terry Pratchett',
            'description' => 'Keep Sir Terry Pratchett alive forever, in the OctoberCMS clacks.',
            'author'      => 'LukeTowers',
            'icon'        => 'icon-leaf',
            'homepage'    => 'http://www.gnuterrypratchett.com/',
        ];
    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {
        $this->app['Illuminate\Contracts\Http\Kernel']->prependMiddleware('LukeTowers\GNUTerryPratchett\Middleware\Clacks');
    }
}
