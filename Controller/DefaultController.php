<?php

namespace Bean\Bundle\OrganisationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BeanOrganisationBundle:Default:index.html.twig');
    }
}
