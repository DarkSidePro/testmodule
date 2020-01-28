<?php
/**
* 2007-2020 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2020 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

use PrestaShop\PrestaShop\Adapter\SymfonyContainer;


class Testmodule extends Module
{
    public function __construct()
    {
        $this->name = 'testmodule';
        $this->version = '1.0.0';
        $this->author = 'Dark-Side.pro';
        $this->need_instance = false;

        /**
         * Set $this->bootstrap to true if your module is compliant with bootstrap (PrestaShop 1.6)
         */

        parent::__construct();

        $this->displayName = $this->l('Test module');
        $this->description = $this->l('This module test newe features in PrestaShop 1.7.5 up');

        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
    }

    /**
     * Don't forget to create update methods if needed:
     * http://doc.prestashop.com/display/PS16/Enabling+the+Auto-Update
     */
    public function install()
    {
        Configuration::updateValue('TESTMODULE_LIVE_MODE', false);

        return parent::install() &&
        $this->registerHook('actionLanguageGridDefinitionModifier') &&
        $this->registerHook('actionLanguageGridQueryBuilderModifier') &&
        $this->registerHook('actionLanguageGridPresenterModifier') &&
        $this->registerHook('actionLanguageGridGridFilterFormModifier') &&
        $this->registerHook('actionLanguageGridGridDataModifier') &&

        $this->registerHook('actionGeneralPageForm') &&
        $this->registerHook('actionGeneralPageSave');
    }

    public function uninstall()
    {
        Configuration::deleteByName('TESTMODULE_LIVE_MODE');

        return parent::uninstall();
    }

    public function isUsingNewTranslationSystem()
    {
        return true;
    }

    /**
     * Load the configuration form
     */
    public function getContent()
    {
        Tools::redirectAdmin(SymfonyContainer::getInstance()->get('router')->generate('your_route_name'));
    }
}
