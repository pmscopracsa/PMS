<?php
namespace Pms\ContactoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SitioController extends Controller
{
	public function estaticaAction($pagina)
	{
				return $this->render('ContactoBundle:Default:'.$pagina.'.html.twig');
	}
}
