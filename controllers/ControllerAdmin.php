<?php

require_once 'views/View.php';

class ControllerAdmin
{
    private $postManager;
    private $userManager;
    private $commentManager;
    private $categoryManager;
    private $view;

    public function __construct()
    {
        if (isset($url) && count($url) < 1) {
            throw new \Exception("Page Introuvable");
        } elseif (isset($_GET['userManagement']) && $_SESSION['role'] == 1) {
            $this->userManagement();
        } elseif (isset($_GET['postManagement']) && $_SESSION['role'] == 1) {
            $this->postManagement();
        } elseif (isset($_GET['commentManagement']) && $_SESSION['role'] == 1) {
            $this->commentManagement();
        } elseif (isset($_GET['deleteUser']) && $_SESSION['role'] == 1) {
            $this->deleteUserAction();
        } elseif (isset($_GET['modifyUser']) && $_SESSION['role'] == 1) {
            $this->modifyUserAction();
        } elseif (isset($_GET['deletePost']) && $_SESSION['role'] == 1) {
            $this->deletePostAction();
        } elseif (isset($_GET['validateComment']) && $_SESSION['role'] == 1) {
            $this->validateCommentAction();
        } elseif (isset($_GET['deleteComment']) && $_SESSION['role'] == 1) {
            $this->deleteCommentAction();
        } elseif (isset($_GET['newPost']) && $_SESSION['role'] == 1) {
            $this->newPost();
        } elseif (isset($_GET['addPost']) && $_GET['addPost'] == "action" && $_SESSION['role'] == 1) {
            $this->addPostAction();
        } elseif (isset($_GET['modifyPost']) && $_SESSION['role'] == 1) {
            $this->modifyPost();
        } elseif (isset($_GET['editPost']) && $_GET['editPost'] == "action" && $_SESSION['role'] == 1) { 
            $this->editPostAction();
        } else {
            header('Location: home');
        }
    }

    /**
     * Retrieve all users for admin function
     * @return void
     */
    private function userManagement(): void
    {
        $this->userManager = new UserManager();
        $users = $this->userManager->getAllUsers();
        $this->view = new View('UserManagement');
        $this->view->generate(array('users' => $users));
    }

    /**
     * Retrieve all posts for admin function
     * @return void
     */
    private function postManagement(): void
    {
        $this->postManager = new PostManager();
        $posts = $this->postManager->getPosts();
        $this->view = new View('PostManagement');
        $this->view->generate(array('posts' => $posts));
    }

    /**
     * Retrieve all comments for admin function
     * @return void
     */
    private function commentManagement(): void
    {
        $this->commentManager = new CommentManager();
        $comments = $this->commentManager->getCommentsNotActived();
        $this->view = new View('CommentManagement');
        $this->view->generate(array('comments' => $comments));
    }

    /**
     * Delete user function
     * @return void
     */
    private function deleteUserAction(): void
    {
        
    }

    /**
     * Edit role user function
     * @return void
     */
    private function modifyUserAction(): void
    {
        
    }

    /**
     * Delete post function
     * @return void
     */
    private function deletePostAction(): void
    {
        
    }

    /**
     * Validate comment function
     * @return void
     */
    private function validateCommentAction(): void
    {
        
    }

    /**
     * Delete comment function
     * @return void
     */
    private function deleteCommentAction(): void
    {
        
    }

    /**
     * Create a new post function
     * @return void
     */
    private function newPost(): void
    {
        
    }

    /**
     * Create a new post action function
     * @return void
     */
    private function addPostAction(): void
    {
        
    }

    /**
     * Edit post function
     * @return void
     */
    private function modifyPost(): void
    {
        
    }

    /**
     * Edit post action function
     * @return void
     */
    private function editPostAction(): void
    {
        
    }
}