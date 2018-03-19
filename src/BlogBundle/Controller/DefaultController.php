<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BlogBundle\Entity\Entry;
use BlogBundle\Entity\EntryTag;

class DefaultController extends Controller
{
    public function indexAction()
    {
        /*$em = $this->getDoctrine()->getEntityManager();
        $entrRep = $em->getRepository("BlogBundle:Entry");
        $entries = $entrRep->findAll();
        foreach($entries as $entry) {
            echo "</br>Id: ".$entry->getId()."</br>"; 
            echo "Title: ".$entry->getTitle()."</br>"; 
            echo "Category: ".$entry->getCategory()->getName()."</br>"; 
            echo "User: ".$entry->getUser()->getName()."</br>";
                        
            echo "Tags: ";
            $tags = $entry->getEntryTag();
            foreach($tags as $tag) {
                echo $tag->getTag()->getName().", ";
                //print_r($tag,true);
                echo $tag->getTag()->getName().", ";
            }
             
        }*/
        
        $em = $this->getDoctrine()->getEntityManager();
        $entrRep = $em->getRepository("BlogBundle:Category");
        $categories = $entrRep->findAll();
        foreach($categories as $category) {
            echo "Id: ".$category->getId()." - name: ".$category->getName()." --- Entries: "; 
            
            $entries = $category->getEntries();
            foreach($entries as $entry) {
                echo $entry->getTitle().", ";
            }
            echo "<hr/>";
        }
        die();
        //return $this->render('BlogBundle:Default:index.html.twig');
    }
}
