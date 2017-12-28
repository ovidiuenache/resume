<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class ContactController
 *
 * @author Ioan Ovidiu Enache <i.ovidiuenache@yahoo.com>
 */
class ContactController extends Controller
{
    /**
     * @Route("/contact", name="contact")
     * @Template("contact.html.twig")
     */
    public function contactAction(): array
    {
        return [];
    }
}
