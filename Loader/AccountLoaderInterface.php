<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Account\Loader;

use Xidea\Component\Base\Loader\ModelLoaderInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface AccountLoaderInterface extends ModelLoaderInterface
{
    /**
     * Returns a manufacturer by id.
     * 
     * @param int $id
     * 
     * @return \Xidea\Component\Account\Model\AccountInterface
     */
    function load($id);
    
    /**
     * Returns a set of objects.
     * 
     * @param int $page
     * @param int $limit
     * 
     * @return array
     */
    function loadByPage($page = 1, $limit = 25);
}
