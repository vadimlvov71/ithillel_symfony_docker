<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/*
use App\Repository\TaskRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Monolog\DateTimeImmutable;
use App\Entity\Status;
use App\Entity\User;
use App\Entity\Task;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use App\Service\Validation;
use App\Service\TasksTree;
*/
/**
 * ApiController uses OpenAPI and has actions:
 * 4 ones for crud, one - for changing only one field: 'current salary'
 * used API with five entrypoints
 * create a tree of a tasks of a one
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
