<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class ResumeController
 *
 * @author Ioan Ovidiu Enache <i.ovidiuenache@yahoo.com>
 */
class ResumeController extends Controller
{
    /**
     * @Route("/resume", name="resume")
     * @Template("resume.html.twig")
     */
    public function resumeAction(): array
    {
        return [];
    }
}
