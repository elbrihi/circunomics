<?php

namespace App\Repository;

use App\Entity\Author;
use App\Entity\AuthorDetails;
use App\Entity\History;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method History|null find($id, $lockMode = null, $lockVersion = null)
 * @method History|null findOneBy(array $criteria, array $orderBy = null)
 * @method History[]    findAll()
 * @method History[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, History::class);

    }

    public function fetchHistories()
    {

        $histories =    $this->createQueryBuilder('h')
                 ->select('h.commit, a.name,a.email,h.date')
                 ->from(Author::class,'a')
                 ->where('h.author = a.id')
                 ->getQuery()
                 ->getResult();
        $arr = [];
        for ($i  = 0 ; $i < sizeof($histories); $i++)
        {
            $arr1 = [];


            if(is_numeric(substr($histories[$i]['commit'],-1)) === true)
            {
                $arr1['commit'] = '<div id="commit">'.$histories[$i]['commit'].'</div>';
            }
            else{
                $arr1['commit'] = $histories[$i]['commit'];
            }


            $arr1['name'] = $histories[$i]['name'];
            $arr1['email'] = $histories[$i]['email'];
            $arr1['date'] = $histories[$i]['date'];
            // dump($arr1);
            $arr[$i] = $arr1;
        }
        return $arr;


        for ($i  = 0 ; $i < sizeof($histories); $i++)
        {
            $arr1 = [];
            $arr1['commit'] = $histories[$i]['commit'];
            $arr1['author']['name'] = $histories[$i]['name'];
            $arr1['author']['email'] = $histories[$i]['email'];
            $arr1['author']['date'] = $histories[$i]['date'];
           // dump($arr1);
            $arr[$i] = $arr1;
        }
      return $arr;
    }
    // /**
    //  * @return History[] Returns an array of History objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?History
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
