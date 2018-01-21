<?php

namespace FirstBundle\Repository;

/**
 * CursoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CursoRepository extends \Doctrine\ORM\EntityRepository
{
    public function findCourseModelTest() {
        $em = $this->getEntityManager();
        $query = $em->createQuery("SELECT c FROM FirstBundle:Course c WHERE c.price > :price "
                . "and c.startDate >= :startDate "
                . "ORDER BY c.id DESC");
        $query->setParameters(array(
            'price' => 30,
            'startDate' => '2018-03-07'
        ));
        $courses = $query->getResult();
        return $courses;
    }
}
