<?php

namespace CustomBookBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use CustomBookBundle\Entity\Book;
use CustomBookBundle\Form\BookType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Book controller.
 *
 */
class BookController extends Controller
{
    
    /**
     * @Template("book/index.html.twig")
     * @Route("/book" , name="book_index")
     * @Route("/" , name="book_root")
     * @Security("is_granted('IS_AUTHENTICATED_ANONYMOUSLY')")
     * Lists all Book entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $books = $em->getRepository('CustomBookBundle:Book')->findAll();
         
        return (array(
            'books' => $books,
        ));
    }

    /**
     * @Template("book/new.html.twig")
     * @Route("/new" ,name="book_new")
     * @Security("has_role('ROLE_USER','ROLE_ADMIN')")
     * Creates a new Book entity.
     *
     */
    public function newAction(Request $request)
    {
        $book = new Book();
        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($book);
            $em->flush();

             return $this->redirectToRoute('book_index');
        }

        return  (array(
            'book' => $book,
            'form' => $form->createView(),
        ));
    }

    /**
     * @Template("book/show.html.twig")
     * @Route("/{id}/show" , name="book_show")
     * @Security("has_role('ROLE_USER','ROLE_ADMIN') or is_granted('IS_AUTHENTICATED_ANONYMOUSLY')")
     * Finds and displays a Book entity.
     *
     */
    public function showAction(Book $book)
    {
        $deleteForm = $this->createDeleteForm($book);

        return (array(
            'book' => $book,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     *   @Template("book/edit.html.twig")
     *   @Route("/{id}/edit" , name="book_edit")
     *   @Security("has_role('ROLE_ADMIN')")
     *  Displays a form to edit an existing Book entity.
     *
     */
    public function editAction(Request $request, Book $book)
    {
        $deleteForm = $this->createDeleteForm($book);
        $editForm = $this->createForm(BookType::class, $book);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($book);
            $em->flush();

            return $this->redirectToRoute('book_index');
        }

        return (array(
            'book' => $book,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * @Route("/{id}/delete" ,name="book_delete")
     *  @Security("has_role('ROLE_ADMIN')")
     * Deletes a Book entity.
     */
    public function deleteAction(Request $request, Book $book)
    {
        $form = $this->createDeleteForm($book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($book);
            $em->flush();
        }

        return $this->redirectToRoute('book_index');
    }

    /**
     * @Route("/{id}/deleteById" , name="book_delete_by_id")
     * @Security("has_role('ROLE_ADMIN')")
     * 
     */
    public function deleteByIdAction(Request $request, Book $book)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($book);
        $em->flush();
        return $this->redirectToRoute('book_index');
    }
    /**
     * Creates a form to delete a Book entity.
     *
     * @param Book $book The Book entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Book $book)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('book_delete', array('id' => $book->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
