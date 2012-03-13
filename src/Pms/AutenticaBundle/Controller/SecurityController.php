<?php
namespace Pms\AutenticaBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class SecurityController extends Controller
{
  public function loginAction()
  {
    $request = $this->getRequest();
    $session = $request->getSession();

    if($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)){
      $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
    }else{
      $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
    }


    return $this->render('AutenticaBundle:Security:login.html.twig',array(
      'last_username' => $session->get(SecurityContext::LAST_USERNAME),
      'error' => $error,
    ));
}
