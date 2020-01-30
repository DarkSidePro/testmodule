<?php

namespace DarkSide\Testmodule\Controller\Admin;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DarkSide\Testmodule\Repository\TestRepository;
use DarkSide\Testmodule\Entity\TestmoduleTest;
use Doctrine\ORM\EntityManagerInterface;


class DemoController extends Controller
{
    public function demoAction()
    {
        $entityManager = $this->container->get('doctrine.orm.entity_manager');
        $testRepository = $entityManager->getRepository(TestmoduleTest::class);
        $test = $testRepository->findAll();


        return $this->render('@Modules/testmodule/views/templates/admin/demo.html.twig',[
            'test' => $test,
        ]);
    }

    public function formAction()
    {
        
    }
}