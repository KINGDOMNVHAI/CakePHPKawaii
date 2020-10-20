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
                'post_content'      => '<p>Trong bất kỳ ngành nghề nào, bạn cũng sẽ có xuất phát điểm là một nhân viên. Công việc của bạn là học là làm tốt công việc của mình. Còn việc của đồng nghiệp, của sếp không bao giờ là điều khiến bạn quan tâm. Làm tốt việc của mình và hòa đồng với mọi người, đó là 2 việc mà nhân viên phải làm tốt.</p>

<p>Tuy nhiên, khi thành sếp nhỏ, bạn phải tập quan tâm đến nhân viên, đàn em, người vào công ty sau bạn. Lúc này, bạn sẽ thấy tác dụng của việc làm việc nhóm trong trường: phải hỏi han, quan tâm đến nhóm, hỗ trợ, hướng dẫn người đến sau nhanh chóng hòa nhập với công việc. Bạn sẽ trở thành những người sếp mà bạn từng nói xấu là "hỗ trợ không tốt", "độc đoán", "hướng dẫn không hiểu"... </p>

<center><img src="/webroot/upload/post/sep-moi-day-thi-1.jpg" alt="sếp mới dậy thì" width="60%" />

<p>Nhân viên chỉ cần lo việc của mình. Sếp lo việc của người khác.</p></center>

<p>Lý do:</p>
<ul>
<li>Bạn phải vừa đảm bảo công việc của mình, vừa quan tâm đến việc của thành viên, vừa giải trí cho bản thân (nhân viên tốn nhiều thời gian giải trí, đọc báo mạng...)

<li>Bạn chưa từng hướng dẫn, chỉ dạy người khác. Trong trường, bạn chưa bao giờ làm trường nhóm.

<li>Bạn nóng tính, chỉ dẫn theo kiểu sơ sài và để nhân viên tự nghiên cứu. Họ làm sai, bạn cứ việc báo cáo lên cấp trên là họ sai, bạn đúng. Bạn tin chắc rằng: vị trí của mình khó bị lung lay bởi một người mới vào.

<li>Bạn quan tâm đến việc làm hài lòng cấp trên hơn làm việc tốt với cấp dưới vì tư duy: mấy đứa này làm một thời gian rồi cũng nhảy việc.
</ul>

<p>Nếu bạn đang rơi vào những trường hợp trên. Xin chúc mừng! Bạn là một vị <b>sếp "mới dậy thì"</b></p>

<p>Sếp "mới dậy thì" là khái niệm của KINGDOM NVHAI nghĩ ra, chỉ những người đang từ làm lính lên thành làm sếp. Bạn làm ở 1 công ty hơn 1 năm, nghĩa là bạn không còn là người mới nhưng cũng chưa đủ cứng để làm sếp. Công ty tuyển nhân sự mới và giao cho bạn hướng dẫn. Bạn chưa từng hướng dẫn ai, không biết cách nói làm sao để họ hiểu. Và thế là mâu thuẫn ngầm xảy ra, dẫn đến người mới phải đi nơi khác.</p>

<center><iframe width="560" height="315" src="https://www.youtube.com/embed/8nQi1WbqDbg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<p>Câu chuyện về sếp "mới dậy thì" ở Nhật</p></center>

<p>Chắc chắn sếp lớn nhìn thấy điều này. Họ sẽ dè chừng hơn khi cho bạn hướng dẫn người mới tiếp theo. Đây cũng là lúc bạn nhận ra mình thiếu kỹ năng mềm. Những người mà ai cũng thấy là không có kỹ năng làm sếp, không phải người làm lãnh đạo, không làm thầy giáo training cho nhân viên mới được sẽ chỉ làm chức trưởng nhóm, nhóm nhỏ. Các sếp lớn biết chắc, nếu cho người không có khả năng lên vị trí cao thì trước sau gì, kết quả cũng không tốt.</p>

<p>Hoặc đơn giản hơn: bạn không muốn làm sếp, chỉ muốn làm nhân viên có thâm niên kỳ cựu. Thời gian rảnh rỗi lo cho gia đình hay làm những thú vui riêng. Chuyện đó không sai. Nhưng bạn vẫn cần học cách hướng dẫn người khác vì:</p>
<ul>
<li>Về bản thân: bạn sẽ chứng tỏ được năng lực, giữ được vị trí lâu dài.

<li>Về người khác: bạn sẽ tránh việc trở thành hình mẫu "sếp khó tính", "cấp trên quá quắt" hay thấy trong vô số các bài viết trên mạng.

<li>Về công ty: bạn sẽ tránh được việc mình thành nguyên nhân khiến công ty bị nói xấu.
</ul>

<p> Bạn nên nhớ: công ty càng bị nói xấu bao nhiêu, bạn làm người mới nghỉ việc nhiều bao nhiêu thì bộ phận nhân sự sẽ càng vất vả bấy nhiêu. Để tuyển dụng, HR phải đăng bài trên rất nhiều diễn đàn, có trả phí. Nhận CV về phải ngồi sàng lọc, gọi điện và mời ứng viên đến phỏng vấn.</p>

<p>Vì vậy, sếp lớn sẽ không bao giờ bỏ qua vấn đề: người mới nghỉ việc sau 2 tháng thử việc. Dù lý do là người mới "không đáp ứng được công việc" đi nữa, việc người mới không làm việc được với bạn là điều đáng để sếp lớn lưu tâm. Sếp lớn sẽ thắc mắc cách training, cách làm việc với cấp dưới, người mới của bạn có vấn đề. Chắc chắn bạn sẽ không thể lên chức cao nếu tỉ lệ người mới làm việc với bạn không phù hợp ngày càng gia tăng.</p>

<p>Riêng ngành lập trình, có rất nhiều công ty có nhân sự làm việc với thâm niên rất cao, trên 5 năm, 10 năm. Nhưng cũng có những công ty nổi tiếng với việc nhân sự ra vào liên tục đến mức họ chán, chẳng thèm bắt chuyện làm quen nhau vì biết chắc mối quan hệ không lâu dài.</p>

<center><img src="/webroot/upload/post/KG-technology-1.jpg" alt="K&G Technology" width="60%" />

<p>K&G tại Phú Mỹ Hưng là công ty có nhiều nhân sự thâm niên cao nhất KINGDOM NVHAI từng biết. <br>Rất nhiều người làm 7 năm, 10 năm trở lên. Ngôn ngữ chính là PHP.</p></center>
',
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
