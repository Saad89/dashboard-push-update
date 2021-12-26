<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mercure\PublisherInterface;
use Symfony\Component\Mercure\Update;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Cache\CacheInterface;

class WebhookController extends AbstractController
{
    /**
     * @Route("/webhook/{data}", name="webhook", methods={"POST","GET"})
     * @throws \Psr\Cache\InvalidArgumentException
     */
    public function index(PublisherInterface $publisher, $data, Request $request, CacheInterface $cache): Response
    {
        $dashboardData = $request->getContent();
        $cache->delete('dashboard_1e9');
        $dashboardData = $cache->get('dashboard_1e9', function () use ($dashboardData) {
            return $dashboardData;
        });
       $publisher(new Update($data, $dashboardData));
        return new Response('success');
    }
}
