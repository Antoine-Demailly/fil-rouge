<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class TimeController extends Controller{

  public function currentTimeAction()
  {
      return new Response('hello World');
  }

  public function squareAction($number)
  {
    $calculator = $this->get('calculator');
    return new Response($calculator->square($number));
  }
}
