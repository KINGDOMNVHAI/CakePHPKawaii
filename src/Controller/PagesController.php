<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class PagesController extends AppController
{
    public function display()
    {
        $connection = ConnectionManager::get('default');
        $results = $connection->execute('SELECT * FROM posts ORDER BY posts_updateat DESC LIMIT 6')->fetchAll('assoc');
        
        // dd($results[0][posts_title]);
        
        $this->set(['title' => 'Home', 'results' => $results]);

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
