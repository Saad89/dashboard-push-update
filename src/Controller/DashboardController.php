<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Cache\CacheInterface;

class DashboardController extends AbstractController
{
    public const DASHBOARD_UPDATE = '1e9';

    /**
     * @Route("/dashboard", name="dashboard", methods={"GET"})
     * @throws \Psr\Cache\InvalidArgumentException
     */
    public function index(CacheInterface $cache): Response
    {
        $dashboardData = json_decode($cache->get('dashboard_1e9', function (){})) ?? [];
        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
            'data' => $dashboardData,
        ]);
    }
}
