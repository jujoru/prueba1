<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        return $this->render('@Blog/Default/index.html.twig');
    }


    function indexOld(){
        /*$em = $this->getDoctrine()->getManager();
        $enty_repo = $em->getRepository("BlogBundle:Entry");
        $entries = $enty_repo->findAll();

        foreach ($entries as $entry){

            echo $entry->getTitle()."<br>";
            echo $entry->getCategory()->getName()."<br>";
            $tags = $entry->getEntryTag();
            foreach ($tags as $tag){
                echo" --> ".$tag->getTag()->getName()."<br>";
            }
            echo "<hr>";
        }

        die();*/
        /*
                $em = $this->getDoctrine()->getManager();
                $cat_repo = $em->getRepository("BlogBundle:Category");
                $categorys = $cat_repo->findAll();

                foreach ($categorys as $category){

                    echo $category->getName()."<br>";
                    $entries =$category->getEnties();


                    foreach ($entries as $entrie){
                        echo" --> ".$entrie->getTitle()."<br>";
                    }
                    echo "<hr>";
                }

                die();*/
        $em = $this->getDoctrine()->getManager();
        $tag_repo = $em->getRepository("BlogBundle:Tag");
        $tags = $tag_repo->findAll();

        foreach ($tags as $tag){

            echo $tag->getName()."<br>";
            $entryTag =$tag->getEntryTag();


            foreach ($entryTag as $entrie){
                echo" --> ".$entrie->getEntry()->getTitle()."<br>";
            }
            echo "<hr>";
        }

        die();
        return $this->render('@Blog/Default/layout.html.twig');
    }
}
