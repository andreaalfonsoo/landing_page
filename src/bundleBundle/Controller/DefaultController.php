<?php

namespace bundleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /*
      Route("/", name="bundle")
    */
    public function indexAction()
    {
        return $this->render('bundleBundle:Default:index.html.twig');
    }

    /*
      Route("/", name="pagina1")
    */
    public function productoAction($numProduct)
    {
        if ($numProduct == 1) {
            return $this->render('bundleBundle:Default:producto.html.twig', array('numProduct'=>$numProduct, 'img'=>'/IMG1.JPG'));
        }else{
            return $this->render('bundleBundle:Default:producto.html.twig', array('numProduct'=>$numProduct, 'img'=>'/IMG2.JPG'));
        }

    }
}
