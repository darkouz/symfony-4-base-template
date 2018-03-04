<?php


namespace App\Controller;


use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{
    /**
     *
     * @return Response
     * @Route("/", name="homepage")
     */
    public function indexAction(LoggerInterface $logger, AdapterInterface $cache)
    {


            return $this->render("home/index.html.twig");



    }



}