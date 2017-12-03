<?php
/**
 * Simple HAL provider for Silex.
 *
 * PHP version 5.3
 *
 * @category   Provider
 * @package    Popshack
 * @subpackage Silex
 * @author     Popshack <dev@popshack.com>
 * @copyright  2013 Popshack. All rights reserved.
 * @license    MIT http://opensource.org/licenses/MIT
 * @link       https://github.com/PopShack/silex-hal-serviceprovider
 */
namespace Popshack\Silex\Provider\Hal;

use \Nocarrier\Hal;
use Pimple\Container;
use \Silex\Application;
use Pimple\ServiceProviderInterface;

/**
 * Simple HAL provider for Silex.
 *
 * PHP version 5.3
 *
 * @category   Provider
 * @package    Popshack
 * @subpackage Silex
 * @author     Popshack
 * @copyright  2013 Popshack. All rights reserved.
 * @license    MIT http://opensource.org/licenses/MIT
 * @link       https://github.com/PopShack/silex-hal-serviceprovider
 */
class HalServiceProvider implements ServiceProviderInterface
{
    /**
     * Return an instance of Hal.
     *
     * @param Application $app
     * @return \Nocarrier\Hal
     */
    public function register(Container $app)
    {
        $app['hal'] = $app->protect(
           function ($link, array $data = array()) use ($app) {
                return new Hal($link, $data);
           }
        );
    }

    /**
     * Implementation of \Silex\ServiceProviderInterface::boot()
     *
     * @param Application $app
     */
    public function boot(Application $app)
    {
    }
}
