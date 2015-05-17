<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Account\Manager;

use Xidea\Component\Account\Model\AccountInterface;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
interface AccountManagerInterface
{
    /**
     * Saves a account.
     * 
     * @param AccountInterface $account
     */
    function save(AccountInterface $account);

    /**
     * Updates a account.
     * 
     * @param AccountInterface $account
     */
    function update(AccountInterface $account);

    /**
     * Deletes a account.
     * 
     * @param AccountInterface $account
     */
    function delete(AccountInterface $account);
}
