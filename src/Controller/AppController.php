<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Datasource\ConnectionManager;
use Cake\ORM\Query;
use Cake\ORM\TableRegistry;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');

        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
    }

    public function migrateposts()
    {
        $connection = ConnectionManager::get('default');  // get('default') là lấy thông tin kết nối trong config/app -> Datasources -> default
        $truncate = $connection->execute('TRUNCATE posts');

        $articles = TableRegistry::getTableLocator()->get('posts'); // sử dụng table nào, dùng TableRegistry get table đó

        // Start a new query.
        $query = $articles->find();
        $query->insert(['post_id', 'post_title', 'post_url', 'post_present', 'post_content', 'post_thumbnail', 'post_cat_id', 'post_update_at', 'post_home', 'post_enable'])
            ->values([
                'post_title'        => 'Đáp án Codewars Kyu 8',
                'post_url'          => 'dap-an-codewars-kyu-8',
                'post_present'      => 'Level dành cho những ai mới bắt đầu vào Codewars',
                'post_content'      => 'Some body text',
                'post_thumbnail'    => 'codewars-kyu-8-results-thumbnail.jpg',
                'post_cat_id'       => 12,
                'post_update_at'    => date("Y-m-d"),
            ])
            ->values([
                'post_title'        => 'Đáp án Codewars Kyu 7',
                'post_url'          => 'dap-an-codewars-kyu-7',
                'post_present'      => 'Level bắt buộc phải có của sinh viên năm cuối khi chơi Codewars',
                'post_content'      => 'Some body text',
                'post_thumbnail'    => 'codewars-kyu-7-results-thumbnail.jpg',
                'post_cat_id'       => 12,
                'post_update_at'    => date("Y-m-d"),
            ])
            ->values([
                'post_title'        => 'Đáp án Codewars Kyu 6',
                'post_url'          => 'dap-an-codewars-kyu-6',
                'post_present'      => 'Level đạt được sẽ chứng tỏ bạn đã cứng ngôn ngữ',
                'post_content'      => 'Some body text',
                'post_thumbnail'    => 'codewars-kyu-6-results-thumbnail.jpg',
                'post_cat_id'       => 12,
                'post_update_at'    => date("Y-m-d"),
            ])
            ->values([
                'post_title'        => 'Sếp "mới dậy thì"',
                'post_url'          => 'sep-moi-day-thi',
                'post_present'      => 'Đây là giai đoạn 1 nhân viên tập trở thành sếp, cũng là lúc bạn sẽ thấy tác dụng của việc làm việc nhóm trong trường.',
                'post_content'      => 'Some body text',
                'post_thumbnail'    => 'sep-moi-day-thi-thumbnail.jpg',
                'post_cat_id'       => 14,
                'post_update_at'    => date("Y-m-d"),
            ])
            ->execute();

        $this->redirect('/');
    }

    public function migratecategories()
    {
        $connection = ConnectionManager::get('default');  // get('default') là lấy thông tin kết nối trong config/app -> Datasources -> default
        $truncate = $connection->execute('TRUNCATE categories');

        $articles = TableRegistry::getTableLocator()->get('categories'); // sử dụng table nào, dùng TableRegistry get table đó

        // Start a new query.
        $query = $articles->find();
        $query->insert(['cat_id', 'cat_title', 'cat_url'])
            ->values([
                'cat_title' => 'PHP',
                'cat_url'   => 'php',
            ])
            ->values([
                'cat_title' => 'JavaScript',
                'cat_url'   => 'javascript',
            ])
            ->values([
                'cat_title' => 'HTML CSS',
                'cat_url'   => 'html-css',
            ])
            ->values([
                'cat_title' => 'Java',
                'cat_url'   => 'java',
            ])
            ->values([
                'cat_title' => 'SQL',
                'cat_url'   => 'sql',
            ])
            ->values([
                'cat_title' => 'Laravel',
                'cat_url'   => 'laravel',
            ])
            ->values([
                'cat_title' => 'CakePHP',
                'cat_url'   => 'cakephp',
            ])
            ->values([
                'cat_title' => 'Android',
                'cat_url'   => 'android',
            ])
            ->values([
                'cat_title' => 'Angular',
                'cat_url'   => 'angular',
            ])
            ->values([
                'cat_title' => 'PixiJS',
                'cat_url'   => 'pixijs',
            ])
            ->values([
                'cat_title' => 'Java Spring',
                'cat_url'   => 'java-spring',
            ])
            ->values([
                'cat_title' => 'Codewars',
                'cat_url'   => 'codewars',
            ])
            ->values([
                'cat_title' => 'hackthissite.org',
                'cat_url'   => 'hackthissite',
            ])
            ->values([
                'cat_title' => 'Kinh nghiệm',
                'cat_url'   => 'kinh-nghiem',
            ])
            ->execute();

        $this->redirect('/');
    }
}
