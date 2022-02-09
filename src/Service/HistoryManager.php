<?php

namespace App\Service;
use App\Entity\Author;
use App\Entity\AuthorDetails;
use App\Entity\History;
use App\Form\AuthorType;
use App\Form\HistoryType;
use App\Repository\HistoryRepository;
use App\Service\FileManager;
use App\Service\JsonManager;
use Doctrine\ORM\EntityManagerInterface;
use http\Env\Request;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class HistoryManager
{
    private $file_manager;
    private $json_manager;
    private $form_factory;
    private $history_repo;
    private $entity_manager;
    public function __construct
    (
     FileManager $file_manager,
     JsonManager $json_manager,
     FormFactoryInterface $form_factory,
     HistoryRepository $history_repo,
     ValidatorInterface $validator,
     EntityManagerInterface $entity_manager

    )
    {
        $this->file_manager = $file_manager;
        $this->json_manager = $json_manager;
        $this->form_factory = $form_factory;
        $this->history_repo = $history_repo;
        $this->validator = $validator;
        $this->entity_manager = $entity_manager;
    }
    public function saveHistory()
    {

        $history_array = $this->json_manager->decode($this->file_manager->fromJsonFileToString());
                //dd($history_array);
        $batchSize = 20;
        for ($i = 0 ; $i < sizeof($history_array); $i++)
        {
            $author = new Author();
            $author_detail = new AuthorDetails();
            $history = new History();
            if (!$this->entity_manager->getRepository(Author::class)
                ->findBy(array('email' => $history_array[$i]['author']['email'])))

            {
                $author->setName($history_array[$i]['author']['name']);
                $author->setEmail($history_array[$i]['author']['email']);
                $this->entity_manager->persist($author);
                $this->entity_manager->flush();
            }

            $author = $this->entity_manager->getRepository(Author::class)
                ->findBy(array('email' => $history_array[$i]['author']['email']));
            $author_detail->setDate($history_array[$i]['author']['date']);
            $author_detail->setAuthor($author[0]);
            $this->entity_manager->persist($author_detail);
            $this->entity_manager->flush();


            $history->setCommit($history_array[$i]['commit']);

            $history->setDate($history_array[$i]['author']['date']);
            $history->setAuthor($author[0]);
            $this->entity_manager->persist($history);
            $this->entity_manager->flush();
            if (($i % $batchSize) === 0) {
                $this->entity_manager->flush();
                $this->entity_manager->clear(); // Detaches all objects from Doctrine!
                $this->entity_manager->clear(); // Detaches all objects from Doctrine!
            }

        }
        $this->entity_manager->flush(); // Persist objects that did not make up an entire batch
        $this->entity_manager->clear();die;



    }
    public function fetchHistories()
    {
        return $this->history_repo->fetchHistories();
    }






}
