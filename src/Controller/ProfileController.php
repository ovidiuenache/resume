<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class ProfileController
 *
 * @author Ioan Ovidiu Enache <i.ovidiuenache@yahoo.com>
 */
class ProfileController extends Controller
{
    /**
     * @Route("/profile", name="profile")
     * @Template("profile.html.twig")
     */
    public function profileAction(): array
    {
        return [];
    }
}
