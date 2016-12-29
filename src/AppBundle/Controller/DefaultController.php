<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homePage")
     */
    public function indexAction()
    {
        return $this->render('app/index.html.twig', array());
    }

    /**
     * @Route("/contacts", name="contactsPage")
     */
    public function contactsAction()
    {
        return $this->render('app/contacts.html.twig', array());
    }

    /**
     * @Route("/services", name="servicesPage")
     */
    public function servicesAction()
    {
        return $this->render('app/services.html.twig', array());
    }

    /**
     * @Route("/presentation", name="presentationPage")
     */
    public function presentationAction()
    {
        return $this->render('app/presentation.html.twig', array());
    }

}
