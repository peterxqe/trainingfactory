<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 19-4-2018
 * Time: 11:37
 */

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class InstructeurController extends Controller
{
    /**
     * @Route("/instructeur", name="homepage_instructeur")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('bezoeker/index.html.twig', [
        ]);
    }
}