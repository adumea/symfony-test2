<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends Controller
{
    public function number(): Response
    {
        $entityManager = $this->get('doctrine.orm.entity_manager');
        if ($entityManager->getConnection()->connect()) {
            echo 'DOCTRINE WORKS';
        } else {
            echo $entityManager->getConnection()->connect();
        }
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}