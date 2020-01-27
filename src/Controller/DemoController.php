<?php

namespace TestModule\Controller;
use PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController;

class DemoController extends FrameworkBundleAdminController
{
    public function demoAction()
    {
        return $this->render('@Modules/testmodule/views/templates/admin/demo.html.twig');
    }
}