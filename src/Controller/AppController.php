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
        $truncate = $connection->execute('TRUNCATE demo');

        $articles = TableRegistry::getTableLocator()->get('demo'); // sử dụng table nào, dùng TableRegistry get table đó

        // Start a new query.
        $query = $articles->find();
        $query->insert(['demo_id', 'demo_title', 'demo_present', 'demo_url', 'demo_content'])
            ->values([
                'demo_title'    => 'Đáp án Codewars Kyu 8',
                'demo_present'  => 'Level dành cho những ai mới bắt đầu vào Codewars',
                'demo_url'      => 'dap-an-codewars-kyu-8',
                'demo_content'  => 'Some body text'
            ])
            ->values([
                'demo_title'    => 'Đáp án Codewars Kyu 7',
                'demo_present'  => 'Level bắt buộc phải có của sinh viên năm cuối khi chơi Codewars',
                'demo_url'      => 'dap-an-codewars-kyu-7',
                'demo_content'  => 'Some body text'
            ])
            ->values([
                'demo_title'    => 'Đáp án Codewars Kyu 6',
                'demo_present'  => 'Level đạt được sẽ chứng tỏ bạn đã cứng ngôn ngữ',
                'demo_url'      => 'dap-an-codewars-kyu-6',
                'demo_content'  => 'Some body text'
            ])
            ->values([
                'demo_title'    => 'Sếp "mới dậy thì"',
                'demo_present'  => 'Đây là giai đoạn 1 nhân viên tập trở thành sếp, cũng là lúc bạn sẽ thấy tác dụng của việc làm việc nhóm trong trường.',
                'demo_url'      => 'Some body text',
                'demo_content'  => 'Some body text'
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
        $query->insert(['id_cat', 'title_cat', 'url_cat'])
            ->values([
                'title_cat' => 'Codewars',
                'url_cat'   => 'codewars',
            ])
            ->values([
                'title_cat' => 'Tâm sự',
                'url_cat'   => 'tam-su',
            ])
            ->execute();

        $this->redirect('/');
    }
}
