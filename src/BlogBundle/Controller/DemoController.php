<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BlogBundle\Entity\Posts;

class DemoController extends Controller
{
    /**
     * index
     * @return indexpage
     */
    public function indexAction()
    {
        $bmgr = $this->getDoctrine()->getEntityManager();
        
        //delete old posts by demo
        $searchterm = 'demo%@%example.com';
        $olddemoposts = $bmgr->createQuery("DELETE FROM BlogBundle:Posts p WHERE p.username LIKE 'demo%@%example.com'")->getResult();

        //new post
        for ( $i=1; $i<4; $i++) {
            $demopost = new Posts();
            $demopost->setTitle('demotitle-'.$i);
            $demopost->setUsername('demo'. $i. '@example.com');
            $demopost->setPost('Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus');
            $demopost->setCreated();
            $demopost->setHascomment(0);
            $bmgr->persist($demopost);
            sleep(1);
            $bmgr->flush();
        }

        return $this->redirect('/');
    }

}
