<?php

namespace FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FirstBundle\Entity\Course;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FirstBundle:Default:index.html.twig');
    }
    
    public function testTwigExtendsAction()
    {
        return $this->render('FirstBundle:testTwigExtends:testTwigExtends.html.twig');
    }
    
    public function testTwigFilterAction()
    {
        return $this->render('FirstBundle:testTwigExtends:testTwigFilter.html.twig');
    }

    public function createCursoAction()
    {
        $curso = new Course();
        $curso->setName("Curso Symfony 2");
        $curso->setDescription("Description of Curso Symfony 2");
        $startDate = new \DateTime("2018-01-05");
        $endDate = new \DateTime("2018-06-13");
        
        $curso->setStarDate($startDate);
        $curso->setEndDate($endDate);
        $curso->setPrice(85);

        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($curso);
        
        $flush = $em->flush();
        if(!is_null($flush))
            echo "the course was not inserted properly!!!!!!\n";
        else
            echo "the course was inserted properly!!!!!!\n";
        
        die();
    }
    
    public function listCoursesAction() {
        $em = $this->getDoctrine()->getEntityManager();
        
        $coursRep = $em->getRepository("FirstBundle:Course");
        $courses = $coursRep->findAll();
        
        return $this->render('FirstBundle:doctrineActionsTests:listCourses.html.twig', array('courses' => $courses));
    }
    
    public function updateCourseAction($id, $name, $description, $price) {
        $em = $this->getDoctrine()->getEntityManager();
        
        $coursRep = $em->getRepository("FirstBundle:Course");
        $course = $coursRep->find($id);
        
        // Set the data to update
        $course->setName($name);
        $course->setDescription($description);
        $course->setPrice($price);
        
        // Persist the entity
        $em->persist($course);
        
        // Update the entity in the ddbb
        $upd = $em->flush();
        
        if(!is_null($upd))
            echo "The course with id: ".$id." was NOT updated properly!!!!!";
        else
            echo "The course with id: ".$id." was updated properly!!!!!";
        
        die();
    }
    
    public function deleteCourseAction($id) {
        $em = $this->getDoctrine()->getEntityManager();
        
        $coursRep = $em->getRepository("FirstBundle:Course");
        $course = $coursRep->find($id);
        
        $rm = $em->remove($course);
        
        $em->flush();
        
        if(!is_null($rm))
            echo "The course with id: ".$id." and title: ".$course->getName()." was NOT deleted properly!!!!!";
        else
            echo "The course with id: ".$id." and title: ".$course->getName()." was deleted properly!!!!!";
        
        die();
    }
    
    public function findCourseAction() {
        $em = $this->getDoctrine()->getEntityManager();
        
        $courseRep = $em->getRepository("FirstBundle:Course");
        
        // •	All instances: findAll()
        $allCourses = $courseRep->findAll();
        echo "<hr>ALL COURSES: </br>";
        foreach($allCourses as $cc) {
            echo "Id: ".$cc->getId()." -- Name: ".$cc->getName()." -- Desfripion: ".$cc->getDescription().
                " -- Start Date: ".$cc->getStartDate()->format('Y-m-d')." -- End Date: ".$cc->getEndDate()->format('Y-m-d')
                    ." -- Price: ".$cc->getPrice()." </br>";
        }
        
        // •	Using the table Primary Key: find()
        $course = $courseRep->find('7');
        echo "<hr>COURSE USING find(): </br>";
        if(isset($course)) {
        echo "Id: ".$course->getId()." -- Name: ".$course->getName()." -- Desfripion: ".$course->getDescription().
            " -- Start Date: ".$course->getStartDate()->format('Y-m-d')." -- End Date: ".$course->getEndDate()->format('Y-m-d')
                ." -- Price: ".$course->getPrice()." </br>";
        }
        else {
            echo "Course(s) not found!!!</br>";
        }
        // •	A single instance by a column value: findOneBy…()
        $course = $courseRep->findOneById(6);
        echo "<hr>COURSE USING findOneById(): </br>";
        if(isset($course)) {
            echo "Id: ".$course->getId()." -- Name: ".$course->getName()." -- Desfripion: ".$course->getDescription().
                " -- Start Date: ".$course->getStartDate()->format('Y-m-d')." -- End Date: ".$course->getEndDate()->format('Y-m-d')
                    ." -- Price: ".$course->getPrice()." </br>";
        }
        else {
            echo "Course(s) not found!!!</br>";
        }
        
        $course = $courseRep->findOneByName('curso Symfony 4');
        echo "<hr>COURSE USING findOneByName(): </br>";
        if(isset($course)) {
            echo "Id: ".$course->getId()." -- Name: ".$course->getName()." -- Desfripion: ".$course->getDescription().
                " -- Start Date: ".$course->getStartDate()->format('Y-m-d')." -- End Date: ".$course->getEndDate()->format('Y-m-d')
                    ." -- Price: ".$course->getPrice()." </br>";
        }
        else {
            echo "Course(s) not found!!!</br>";
        }
        
        // •	All instances by a column value: findBy…()
        echo "<hr>ALL COURSES USING findBy...(): </br>";
        $course = $courseRep->findByPrice(35);
        
        if(isset($course)) {
            foreach($course as $cc) {
                echo "Id: ".$cc->getId()." -- Name: ".$cc->getName()." -- Desfripion: ".$cc->getDescription().
                    " -- Start Date: ".$cc->getStartDate()->format('Y-m-d')." -- End Date: ".$cc->getEndDate()->format('Y-m-d')
                        ." -- Price: ".$cc->getPrice()." </br>";
            }
        }
        else {
            echo "Course(s) not found!!!</br>";
        }
        
        
        // •	A single instance matching the given parameters: findOneBy()
        echo "<hr>ONE COURSE USING findOneBy...(): </br>";
        $course = $courseRep->findOneBy(array('name' => 'curso macramé práctico' , 'price' => 60));
        if(isset($course)) {
            echo "Id: ".$course->getId()." -- Name: ".$course->getName()." -- Desfripion: ".$course->getDescription().
                " -- Start Date: ".$course->getStartDate()->format('Y-m-d')." -- End Date: ".$course->getEndDate()->format('Y-m-d')
                    ." -- Price: ".$course->getPrice()." </br>";
        }
        else {
            echo "Course(s) not found!!!</br>";
        }
        
        // •	Multiple instances matching the given parameters, ordered by: findBy()
        $course = $courseRep->findBy(array('startDate' => new \DateTime('2018-03-07') , 'price' => 35), 
                array('id' => 'DESC'));
        echo "<hr>ALL COURSES USING findBy...() WITH ORDER: </br>";
        
        if(isset($course)) {
            foreach($course as $cc) {
                echo "Id: ".$cc->getId()." -- Name: ".$cc->getName()." -- Desfripion: ".$cc->getDescription().
                    " -- Start Date: ".$cc->getStartDate()->format('Y-m-d')." -- End Date: ".$cc->getEndDate()->format('Y-m-d')
                        ." -- Price: ".$cc->getPrice()." </br>";
            }
        }
        else {
            echo "Course(s) not found!!!</br>";
        }
        
        die();
    }
    
    public function nativeSQLAction() {
        $em = $this->getDoctrine()->getEntityManager();
        
        $db = $em->getConnection();
        
        $query = "SELECT * FROM course WHERE start_date = ? AND price = ? ORDER BY id DESC";
        $qL = $db->prepare($query);
        $qL->execute(array('2018-03-07', '35'));
        $result = $qL->fetchAll();
        
        echo "<hr>ALL COURSES SQL NATIVE </br>";
        foreach($result as $cc) {
            echo "Id: ".$cc['id']." -- Name: ".$cc['name']." -- Desfripion: ".$cc['description'].
                " -- Start Date: ".$cc['start_date']." -- End Date: ".$cc['end_date']
                    ." -- Price: ".$cc['price']." </br>";
        }
        
        die();
    }
    
    public function nativeDQLAction() {
        $em = $this->getDoctrine()->getEntityManager();
        
        $query = $em->createQuery("SELECT c FROM FirstBundle:Course c WHERE c.price > :price "
                . "and c.startDate >= :startDate "
                . "ORDER BY c.id DESC");
        $query->setParameters(array(
            'price' => 30,
            'startDate' => '2018-03-07'
        ));
        $courses = $query->getResult();

        echo "<hr>ALL COURSES DQL NATIVE </br>";
        foreach($courses as $cc) {
            echo "Id: ".$cc->getId()." -- Name: ".$cc->getName()." -- Desfripion: ".$cc->getDescription().
                " -- Start Date: ".$cc->getStartDate()->format('Y-m-d')." -- End Date: ".$cc->getEndDate()->format('Y-m-d')
                    ." -- Price: ".$cc->getPrice()." </br>";
        }
        
        die();
    }
    
    public function queryBuilderAction() {
        $em = $this->getDoctrine()->getEntityManager();
        
        $courseRep = $em->getRepository("FirstBundle:Course");
        
        $query = $courseRep->createQueryBuilder("c")
                ->where("c.price >= :price")
                ->andWhere("c.startDate >= '2018-03-07'")
                ->setParameter("price",60)
                ->orderBy("c.price",'ASC')
                ->addOrderBy("c.startDate", "DESC")
                ->getQuery();
        
        $courses = $query->getResult();
        echo "<hr>ALL COURSES USING THE QUERY BUILDER </br>";
        foreach($courses as $cc) {
            echo "Id: ".$cc->getId()." -- Name: ".$cc->getName()." -- Desfripion: ".$cc->getDescription().
                " -- Start Date: ".$cc->getStartDate()->format('Y-m-d')." -- End Date: ".$cc->getEndDate()->format('Y-m-d')
                    ." -- Price: ".$cc->getPrice()." </br>";
        }
        
        die();
    }
}
