<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BookingController extends AbstractController
{
    /**
     * @Route("/create_booking")
     */
    public function destination(): Response
    {
        $destination = array("koht1");

        return $this->render('booking/create_booking.html.twig', [
            'destination' => $destination,
        ]);
    }
}