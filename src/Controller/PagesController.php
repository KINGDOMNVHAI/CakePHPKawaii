<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

/**
 * Tên Controller là Pages, tự động dẫn đến thư mục Template/Pages
 */
class PagesController extends AppController
{
    /**
     * Cach hoat dong giao dien cua CakePHP
     *
     * Buoc 1: moi giao dien deu render tu Layout/default
     * Buoc 2: render SitePage/home se lay giao dien content
     *
     * Nen moi trang home, blog, post deu phai co html, head, body day du
     * Vao trang home.ctp, tim <!-- Change Content -->
     * Do la cho thay doi giao dien moi trang home, blog, post
     */
    public function initialize()
    {
        parent::initialize();
        $this->viewbuilder()->layout('main'); // Không tạo viewbuilder thì mặc định dẫn đến default.ctp
    }

    public function display()
    {
        $this->set('title', 'Home');

        $this->render('SitePage/home');
    }

    public function blog()
    {
        $this->set('title', 'Blog');

        $this->render('SitePage/blog');
    }

    public function demo()
    {
        $this->set('title', 'Demo');

        $this->render('SitePage/demo');
    }

    public function post()
    {
        $this->set('title', 'post');

        $this->render('SitePage/post');
    }

}
