<?php

namespace Testmodule\Controller\Admin;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DemoController extends Controller
{
    public function demoAction()
    {
        return $this->render('@Modules/testmodule/views/templates/admin/demo.html.twig');
    }
}