<?php

/*
 * (c) Xidea Artur Pszczółka <biuro@xidea.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xidea\Component\Account;

/**
 * @author Artur Pszczółka <a.pszczolka@xidea.pl>
 */
abstract class AccountEvents
{
    /**
     * The PRE_SAVE event occurs when the account is saved.
     */
    const PRE_SAVE = 'xidea_account.account.pre_save';
    
    /**
     * The POST_SAVE event occurs when the account is saved.
     */
    const POST_SAVE = 'xidea_account.account.post_save';
    
    /**
     * The CREATE_INITIALIZE event occurs when the create process is initialized.
     */
    const CREATE_INITIALIZE = 'xidea_account.account.create_initialize';
    
    /**
     * The PRE_CREATE event occurs when the create process is initialized.
     */
    const PRE_CREATE = 'xidea_account.account.pre_create';
    
    /**
     * The CREATE_SUCCESS event occurs when the create process is initialized.
     */
    const CREATE_SUCCESS = 'xidea_account.account.create_success';
    
    /**
     * The CREATE_FORM_VALID event occurs when the create process is initialized.
     */
    const CREATE_FORM_VALID = 'xidea_account.account.create_form_valid';
    
    /**
     * The CREATE_COMPLETED event occurs when the create process is initialized.
     */
    const CREATE_COMPLETED = 'xidea_account.account.create_completed';
    
}
