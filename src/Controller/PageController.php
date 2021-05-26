<?php


namespace App\Controller;


use App\Repository\PageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class PageController extends AbstractController
{

    public function showPage($pageSlug, PageRepository $pageRepository): Response
    {
        $page = $pageRepository->findOneBy(['slug' => $pageSlug]);

        return $this->render('Shop/Page/show.html.twig', [
            'page' => $page
        ]);
    }

    public function contactPage(): Response
    {
        return $this->render('Shop/contact.html.twig');
    }

}
