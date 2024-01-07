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


class PasswordController extends BaseController
{

    /**
     * @return Response
     */
    #[Route('/wrongPass', name: 'password_wrongPass')]
    public function wrongPass(): Response
    {

        // preda data do sablony
        return $this->render("Password/wrongPass.html.twig");
    }

    /**
     * @return Response
     */
    #[Route('/forgotPass', name: 'password_forgotPass')]
    public function forgotPass(): Response
    {

        // preda data do sablony
        return $this->render("Password/forgotPass.html.twig");
    }


}