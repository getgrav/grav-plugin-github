<?php
namespace Grav\Plugin;

use Doctrine\Common\Cache\Cache;
use Grav\Common\Iterator;
use Grav\Common\Grav;
use Grav\Framework\Cache\CacheInterface;
use Cache\Adapter\Doctrine\DoctrineCachePool;

class GitHub extends Iterator {

    protected $page;
    public $client;
    public $paginator;
    /** @var CacheInterface */
    protected $cache;

    public function __construct() {
        require_once __DIR__ . '/../vendor/autoload.php';

        $this->client = new \Github\Client();

        $cache = $this->getCache();
        $pool = new DoctrineCachePool($cache);

        $this->client->addCache($pool);
        $this->paginator = new \Github\ResultPager($this->client);
    }

    /**
     * @return Cache
     */
    public function getCache()
    {
        $grav = Grav::instance();

        return $grav['cache']->getCacheDriver();
    }
}
