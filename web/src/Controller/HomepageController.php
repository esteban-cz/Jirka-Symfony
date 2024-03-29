<?php

namespace App\Controller;

use App\Entity\Address;
use App\Entity\Cities;
use App\Entity\Users;
use App\Form\AddressFormType;
use App\Repository\AddressRepository;
use App\Repository\CitiesRepository;
use App\Repository\UsersRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Asset\UrlPackage;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomepageController extends BaseController
{

    /**
     * @return Response
     */
    #[Route('/', name: 'homepage_default')]
    public function homepage(): Response
    {
        return $this->render("Homepage/default.html.twig");
    }

    /**
     * @return Response
     */
    #[Route('/evidence', name: 'homepage_dashboard')]
    public function dashboard(): Response
    {
        return $this->render("Homepage/dashboard.html.twig");
    }


}