<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Blogger\BlogBundle\Entity\Comment;

/**
 * Comment controller.
 */
class CommentController extends Controller
{
    /**
     * index
     * @param  limit
     * @return Posts
     */
    public function indexAction()
    {
        #latest 5 posts
        $top = 5;
        $bmgr = $this->getDoctrine()
                   ->getManager();
        $posts = $bmgr->getRepository('BlogBundle:Posts');
                    // ->getAllPosts();
        return $this->render('BlogBundle:Blog:index.html.twig', array('blog' => $posts));
    }
}