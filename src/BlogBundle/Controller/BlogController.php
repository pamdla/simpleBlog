<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BlogBundle\Entity\Posts;

class BlogController extends Controller
{
    /**
     * index
     * @return indexpage
     */
    public function indexAction()
    {
        #latest 5 posts
        $bmgr = $this->getDoctrine()->getEntityManager();
        $posts = $bmgr->getRepository('BlogBundle:Posts')->getAllPosts($top=5);
        return $this->render('BlogBundle:Blog:index.html.twig', array('blog' => $posts));
    }


    /**
     * about
     * @return aboutpage
     */
    public function aboutAction()
    {
        return $this->render('BlogBundle:Blog:about.html.twig');
    }


    /**
     * contact
     * @return contactpage
     */
    public function contactAction()
    {    
        return $this->render('BlogBundle:Blog:contact.html.twig');
    }


    /**
     * index
     * @return newpost
     */
    public function newAction()
    {
        $bmgr = $this->getDoctrine()->getEntityManager();
        $posts = $bmgr->getRepository('BlogBundle:Posts');

        return $this->render('BlogBundle:Blog:new.html.twig');
    }


    /**
     * create
     * @return index page
     */
    public function createAction() {
        $bmgr = $this->getDoctrine()->getEntityManager();
        $post = $bmgr->getRepository('BlogBundle:Posts')->createPost($this->getRequest());

        //save data to db
        $bmgr->persist($post);
        $bmgr->flush();

        //redirect to index page
        return $this->redirect('/');
    }


    /**
     * show
     * @return post
     */
    public function showAction($id)
    {
        $bmgr = $this->getDoctrine()->getEntityManager();
        $post = $bmgr->getRepository('BlogBundle:Posts')->find($id);
        if (!$post) {
            throw $this->createNotFoundException('Unable to find Blog post.');
        }
        return $this->render('BlogBundle:Blog:show.html.twig', array('post' => $post));
    }



}
