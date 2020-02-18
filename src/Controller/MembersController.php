<?php

namespace App\Controller;

use App\Entity\CommunityMemberships;
use App\Repository\CommunityMembershipsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MembersController extends AbstractController
{
    /**
     * @Route("/members", name="members")
     */
    public function index(CommunityMembershipsRepository $repo)
    {
        $members = $repo->findAll();

        return $this->render('members/index.html.twig', [
            'members' => $members
        ]);
    }
}
