<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class PortofolioController
 *
 * @author Ioan Ovidiu Enache <i.ovidiuenache@yahoo.com>
 */
class PortofolioController extends Controller
{
    /**
     * @Route("/portofolio", name="portofolio")
     * @Template("portofolio.html.twig")
     */
    public function portofolioAction(): array
    {
        return [];
    }
}
