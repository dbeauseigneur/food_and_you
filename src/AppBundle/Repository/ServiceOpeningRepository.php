<?php

namespace AppBundle\Repository;

/**
 * ServiceOpeningRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ServiceOpeningRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * function findAllFree
     * Object: generate the query for the search for free baptism date
     * @param $city
     * @param $restaurant
     * @param $nb
     * @param $baptismDate
     * @param $service
     */
    public function findAllFree($city, $restaurant, $nb, $baptismDate, $service)
    {

        $query = $this->createQueryBuilder('so')
            ->innerJoin('so.restaurant', 'r')
            ->innerJoin('b.service', 's')
            // this line is here just to assure the first test
            ->where('0 = 0');
        if (!is_null($restaurant)) {
            $query = $query->andWhere('r.name = :restaurant')
                ->setParameter('restaurant', $restaurant);
        } elseif (!is_null($city)) {
            $query = $query->andWhere('r.city = :city')
                ->setParameter('city', $city->getName())
                ->andWhere('r.postalCode = :postalCode')
                ->setParameter('postalCode', $city->getPostalCode());
        }

        if (!is_null($baptismDate)) {
            $query = $query->andWhere("b.date = '$baptismDate'");
            //->setParameter('date', $baptismDate);
        }

        if (!is_null($service)) {
            $query = $query->andWhere('s.id = :serviceId')
                ->setParameter('serviceId', $service->getId());
        }
        return $query->getQuery()->getResult();
    }
}
