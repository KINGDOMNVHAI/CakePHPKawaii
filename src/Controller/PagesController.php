<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
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

        $this->domains = $_SERVER['REQUEST_URI'];
        // Đưa lên host, thử thay thế các biến sau cho phù hợp.
        // REQUEST_URI
        // SERVER_NAME
        // HTTP_HOST
    }

    public function display()
    {
        $connection = ConnectionManager::get('default');  // get('default') là lấy thông tin kết nối trong app_local -> Datasources -> default
        $results = $connection->execute('SELECT * FROM posts ORDER BY post_update_at DESC LIMIT 12')->fetchAll('assoc');
        // dd($results[0][posts_title]);

        $this->set(['title' => 'Home', 'results' => $results, 'domains' => $this->domains]);

        $this->render('SitePage/home');
    }

    public function blog()
    {
        $connection = ConnectionManager::get('default');  // get('default') là lấy thông tin kết nối trong app_local -> Datasources -> default
        $results = $connection->execute('SELECT * FROM posts WHERE post_cat_id = 12 ORDER BY post_update_at DESC LIMIT 12')->fetchAll('assoc');





        $this->domains = "/CakePHPKawaii/";

        $this->set(['title' => 'Blog', 'results' => $results, 'domains' => $this->domains]);

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
