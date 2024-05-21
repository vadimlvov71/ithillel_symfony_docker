<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * ithillel symfony docker home task
 *
 *
* @author Vadim Podolyan <vadim.podolyan@gmail.com>
*
 */
#[Route('/')]
class IndexController extends AbstractController
{

    #[Route('/', name: 'app_index')]
    public function index(): Response
    {
        return $this->render('helloworld/index.html.twig', [
            'page_title' => 'Hello World!',
            'message' => 'Hello World!',
        ]);
    }
    #[Route('/page', name: 'app_page')]
    public function page(): Response
    {
        return $this->render('helloworld/page.html.twig', [
            'page_title' => 'Another page!',
            'message' => 'second page',
        ]);
    }
}
