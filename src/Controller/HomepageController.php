<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class HomepageController
 *
 * @author Ioan Ovidiu Enache <i.ovidiuenache@yahoo.com>
 */
class HomepageController extends Controller
{
    /**
     * @Route("/home", name="homepage")
     * @Template("homepage.html.twig")
     */
    public function homepageAction(): array
    {
        return [];
    }
}
