<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 19-4-2018
 * Time: 11:35
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdministratieController extends Controller
{
    /**
     * @Route("/admin", name="homepage_admin")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('bezoeker/index.html.twig', [
        ]);
    }
}