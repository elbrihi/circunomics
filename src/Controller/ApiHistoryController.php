<?php

namespace App\Controller;

use App\Service\HistoryManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Request\ParamFetcherInterface;
use Symfony\Component\Validator\Constraints;
use App\Exception\SourceNotSupportedException;

use App\Service\CsvManager as CsvManager;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpKernel\Exception\HttpException;

use App\Factory\ManagerFactory;

/**
 *
 * @Route("/api/")
 */
class ApiHistoryController extends AbstractController
{
    private $historyManager ;
    public function __construct(HistoryManager $historyManager)
    {
        $this->historyManager = $historyManager;
    }
    /**
     * @Rest\View(serializerGroups={"histories"})
     * @Rest\Get("histries", name="api_histories")
     */

    public function fetchHistories()
    {
        $response = new Response();
        return $this->historyManager->fetchHistories();
    }

    /**
     * @Rest\View()
     * @Rest\Get("histroy", name="history")
     */
    public function index(): Response
    {
        return $this->historyManager->saveHistory();
        dd($this->historyManager->saveHistory());
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/HistoryController.php',
        ]);
    }


}
