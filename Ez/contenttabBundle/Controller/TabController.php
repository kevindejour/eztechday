<?php

namespace Ez\contenttabBundle\Controller;

use eZ\Publish\Core\MVC\Symfony\Controller\Controller;

class TabController extends Controller
{
    public function newtabAction()
    {
        return $this->render('@Ezcontenttab/newtab.html.twig', array('variable' => "ceci est ma variable"));
    }
}
