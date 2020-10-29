<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\Query;
use Cake\ORM\TableRegistry;

/**
 * Tên Controller là Demo, tự động dẫn đến thư mục Template/Demo
 */
class DemoController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->viewbuilder()->layout('demomain'); // Không tạo viewbuilder thì mặc định dẫn đến default.ctp

        $this->domains = $_SERVER['REQUEST_URI'];
        // Đưa lên host, thử thay thế các biến sau cho phù hợp.
        // REQUEST_URI
        // SERVER_NAME
        // HTTP_HOST
    }

    public function demo()
    {
        $connection = ConnectionManager::get('default');  // get('default') là lấy thông tin kết nối trong app_local -> Datasources -> default
        $results = $connection->execute('SELECT * FROM posts ORDER BY post_update_at DESC LIMIT 12')->fetchAll('assoc');
        // dd($results[0][posts_title]);

        $this->set(['title' => 'Tic Tac Toe', 'results' => $results, 'domains' => $this->domains]);

        $this->render('tic-tac-toe');
    }










}
