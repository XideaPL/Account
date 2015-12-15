<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Account;

use Xidea\Base\Model\LoaderInterface as ModelLoaderInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface LoaderInterface extends ModelLoaderInterface
{
    /**
     * Returns a manufacturer by id.
     * 
     * @param int $id
     * 
     * @return \Xidea\Account\AccountInterface
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