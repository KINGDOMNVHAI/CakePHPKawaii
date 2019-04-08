<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class PagesController extends AppController
{
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
