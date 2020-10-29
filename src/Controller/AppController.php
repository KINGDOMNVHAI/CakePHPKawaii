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
                'post_content'      => '<p>Các bài tập trong Level 8 và 7 chủ yếu là sử dụng các hàm và các phép tính. Làm thuần thục cái bài ở 2 level này, các bạn đã sử dụng thuần thục ngôn ngữ lập trình đó</p>

<h3>Đáp án Codewars Kyu 8</h3>

<ul>
<li><a href="#reverselistorder">Reverse List Order</a>
<li><a href="#oppositenumber">Opposite Number</a>
</ul>

<h3 id="reverselistorder">Reverse List Order</h3>

<p>Cho 1 mảng. Xuất ra mảng có các phần tử đảo ngược lại.</p>

<p>reverseList([1,2,3,4]) == [4,3,2,1]<br>
reverseList([3,1,5,4]) == [4,5,1,3]</p>

<p><b>Đáp án</b></p>

<p>Javascript: dùng hàm reverse() của Javascript</p>

<center><img src="/webroot/upload/codewars/kyu8/reverse-list-order-javascript.jpg" alt="Codewars đáp án result" width="100%" /></center>

<h3>Remove String Spaces</h3>

<p>Bỏ các khoảng trống trong chuỗi.</p>

<p><b>Đáp án</b></p>

<p>Java: Dùng replaceAll(" ", ""); Khoảng cách là " " hoặc "\\s"</p>

<center><img src="/webroot/upload/codewars/kyu8/remove-string-spaces-java.jpg" alt="Codewars đáp án result" width="100%" /></center>

<p>Đáp án khác</p>

<center><img src="/webroot/upload/codewars/kyu8/remove-string-spaces-java-1.jpg" alt="Codewars đáp án result" width="70%" /></center>

<h3 id="oppositenumber">Opposite Number</h3>

<p>Tìm số đối. Ví dụ: 1 thì tìm số -1</p>

<p><b>Đáp án</b></p>

<p>SQL</p>

<center><img src="/webroot/upload/codewars/kyu8/opposite-number-sql.jpg" alt="Codewars đáp án result" width="70%" /></center>
',
                'post_thumbnail'    => 'codewars-kyu-8-results-thumbnail.jpg',
                'post_cat_id'       => 12,
                'post_update_at'    => date("Y-m-d"),
            ])

            ->values([
                'post_title'        => 'Đáp án Codewars Kyu 7',
                'post_url'          => 'dap-an-codewars-kyu-7',
                'post_present'      => 'Level bắt buộc phải có của sinh viên năm cuối khi chơi Codewars',
                'post_content'      => '<p>Các bài tập trong Level 8 và 7 chủ yếu là sử dụng các hàm và các phép tính. Làm thuần thục cái bài ở 2 level này, các bạn đã sử dụng thuần thục ngôn ngữ lập trình đó</p>

<h3>Đáp án Codewars Kyu 7</h3>

<ul>
<li><a href="#dontgivemefive">Don’t give me five!</a>
<li><a href="#growthofapopulation">Growth of a Population</a>
<li><a href="#vowelcount">Vowel Count</a>
<li><a href="#speedcontrol">Speed Control</a>
<li><a href="#getthemiddlecharacter">Get the Middle Character</a>
<li><a href="#simplefuncircleofnumbers">Simple Fun #2: Circle of Numbers</a>
<li><a href="#mylanguages">My Languages</a>
</ul>

<h3 id="dontgivemefive">Don’t give me five!</h3>

<p>Cho số đầu và số cuối là integer.<br>
Số đầu cộng 1, tăng dần đến số cuối.<br>
Hãy bỏ tất cả số có số 5 trong đó và return số lượng phần tử.</p>

<p>Ví dụ: Từ 4 đến 17 -> Bỏ số 5 và 15 đi -> 4 6 7 8 9 10 11 12 13 14 16 17 -> return 12</p>

<p><b>Đáp án</b></p>

<p>PHP: dùng hàm strpos để kiểm tra có số 5 trong từng phần tử không.</p>

<center><img src="/webroot/upload/codewars/kyu7/dont-give-me-five-php.jpg" alt="Codewars đáp án result" width="100%" /></center>

<p>C: Logic của Kawaiicode</p>

<p>Số -10, -5, 5, 15, 25. 35... đều chia hết có 5 -> i % 5 = 0<br>
Nhưng số -20, -10, 10, 20, 30 cũng chia hết cho 5 -> i % 10 = 5 || i % 10 = -5<br>
Số 50, 51,52,53... 58, 59 có số 5 ở đầu. -> i >= 50 && i <= 59<br>
Tương tự, 150 đến 159, 250 đến 259 nếu đề bài cho dãy số dài.<br>
Các trường hợp trên, count không thay đổi. Còn lại count++</p>

<center><img src="/webroot/upload/codewars/kyu7/dont-give-me-five-c.jpg" alt="Codewars đáp án result" width="70%" /></center>

<p>Đáp án khác: dùng string</p>

<center><img src="/webroot/upload/codewars/kyu7/dont-give-me-five-c-1.jpg" alt="Codewars đáp án result" width="70%" />

<img src="/webroot/upload/codewars/kyu7/dont-give-me-five-c-2.jpg" alt="Codewars đáp án result" width="70%" /></center>

<p>C#: tương tự như C, nhớ thêm using System để dùng thư viện Console.Write đề phòng cần debug</p>

<center><img src="/webroot/upload/codewars/kyu7/dont-give-me-five-c-sharp.jpg" alt="Codewars đáp án result" width="70%" /></center>

<p>Đáp án khác</p>

<center><img src="/webroot/upload/codewars/kyu7/dont-give-me-five-c-sharp-1.jpg" alt="Codewars đáp án result" width="70%" /></center>

<h3 id="growthofapopulation">Growth of a Population (Gia tăng dân số)</h3>

<p>Cho 4 tham số:<br>
p0 là số dân ban đầu<br>
percent là tỉ lệ dân số tăng hàng năm<br>
aug là số dân nhập cư<br>
p là kết quả cuối cùng.</p>

<p>Ví dụ: số dân ban đầu là 1000, mỗi năm tăng 2% và nhập cư 50 người. Vậy sau bao nhiêu năm, dân số đạt mức 1200? Đáp án là 3 năm.</p>

<p><b>Đáp án</b></p>

<p>PHP: Sử dụng hàm floor() làm tròn số từ kiểu float thành kiểu integer</p>

<center><img src="/webroot/upload/codewars/kyu7/growth-of-a-population-php.jpg" alt="Codewars đáp án result" width="100%" /></center>

<p>Javascript: sử dụng hàm Math.floor làm tròn số từ kiểu float thành kiểu integer</p>

<center><img src="/webroot/upload/codewars/kyu7/growth-of-a-population-javascript.jpg" alt="Codewars đáp án result" width="100%" /></center>

<p>Java: sang Java, bạn phải quan tâm đến kiểu dữ liệu. PHP và Javascript thì không cần.<br>
p0 và p dùng int. Nhưng phép toán sẽ làm kiểu dữ liệu chuyển thành float.<br>
sử dụng hàm làm tròn số từ kiểu float thành kiểu integer</p>

<p>Thực ra không cần làm tròn số thì bài này cũng đã hoàn thành. Tuy nhiên, các bạn nên sử dụng 3 hàm làm tròn số để làm quen, ghi nhớ các hàm này.</p>

<center><img src="/webroot/upload/codewars/kyu7/growth-of-a-population-java.jpg" alt="Codewars đáp án result" width="70%" /></center>

<h3 id="vowelcount">Vowel Count (Đếm nguyên âm)</h3>

<p>Nguyên âm là a,e,i,o,u<br>
Cho 1 chuỗi, đếm số lượng chữ cái nguyên âm trong chuỗi đó.</p>

<p><b>Đáp án</b></p>

<p>PHP: dùng explode chuyển chuỗi thành mảng. Đếm số phần tử trong mảng – 1</p>

<center><img src="/webroot/upload/codewars/kyu7/vowel-count-php.jpg" alt="Codewars đáp án result" width="70%" /></center>

<p>Dùng substr_count</p>

<center><img src="/webroot/upload/codewars/kyu7/vowel-count-php-1.jpg" alt="Codewars đáp án result" width="100%" /></center>

<p>Dùng preg_match_all, tương tự str.match của Javascript</p>

<center><img src="/webroot/upload/codewars/kyu7/vowel-count-php-2.jpg" alt="Codewars đáp án result" width="100%" /></center>

<p>Javascript: dùng charAt</p>

<center><img src="/webroot/upload/codewars/kyu7/vowel-count-javascript.jpg" alt="Codewars đáp án result" width="100%" /></center>

<p>Dùng str.match, tương tự preg_match_all của PHP</p>

<center><img src="/webroot/upload/codewars/kyu7/vowel-count-javascript-1.jpg" alt="Codewars đáp án result" width="100%" /></center>

<p>C:</p>

<center><img src="/webroot/upload/codewars/kyu7/vowel-count-c.jpg" alt="Codewars đáp án result" width="100%" /></center>

<p>Đáp án khác:</p>

<center><img src="/webroot/upload/codewars/kyu7/vowel-count-c-1.jpg" alt="Codewars đáp án result" width="100%" /></center>

<p>Java: Java giống JavaScript. Copy vào rồi thay var bằng int, them () cho length.</p>

<center><img src="/webroot/upload/codewars/kyu7/vowel-count-java.jpg" alt="Codewars đáp án result" width="100%" /></center>

<h3 id="speedcontrol">Speed Control</h3>

<p>s là số giây.<br>
x là 1 mảng chứa quãng đường đi được mỗi s giây.</p>

<p>Ví dụ: mảng x có x = [0.0, 0.19, 0.5, 0.75, 1.0, 1.25, 1.5, 1.75, 2.0, 2.25]<br>
Nghĩa là cứ 15 giây, x chạy tới vị trí đó.<br>
0.0-0.19, 0.19-0.5, 0.5-0.75, 0.75-1.0, 1.0-1.25, 1.25-1.50, 1.5-1.75, 1.75-2.0, 2.0-2.25</p>

<p>Vậy gia tốc u là [45.6, 74.4, 60.0, 60.0, 60.0, 60.0, 60.0, 60.0, 60.0]<br>
Chọn giá trị lớn nhất của u, làm tròn số thành integer rồi trả về giá trị đó.</p>

<p><b>Đáp án</b></p>

<p>PHP: tạo mảng speed chứa các tốc độ mỗi s giây.<br>
Lấy tốc độ sau trừ tốc độ trước bằng gia tốc u. Tìm max value rồi làm tròn thành integer.</p>

<center><img src="/webroot/upload/codewars/kyu7/speed-control-php.jpg" alt="Codewars đáp án result" width="70%" /></center>

<p>Java: IntStream range(int startInclusive, int endExclusive) trả về thứ tự từ startInclusive đến endExclusive.</p>

<p>range() là hàm trong thư viện stream.</p>

<p>range(10) -> 0 1 2 3 4 5 6 7 8 9<br>
range(5,10) -> 5 6 7 8 9<br>
range(0, x.length - 1) để lấy tất cả các giá trị trong mảng x[]</p>

<p>mapToDouble() là vòng lặp trả về các kết quả có kiểu dữ liệu là double.<br>
Vòng lặp tương tự như foreach với các giá trị lấy từ range() trước đó, được đặt biến i.<br>
Mỗi i là một vòng lặp.</p>

<p>max() lấy ra giá trị lớn nhất trong khi tính ra hết các kết quả.<br>
orElse() không lấy ra được thì lấy kết quả là 0.0 trong trường hợp chỉ có một tốc độ duy nhất thì gia tốc bằng 0.<br>
Math.floor() làm tròn giá trị double thành int.</p>

<center><img src="/webroot/upload/codewars/kyu7/speed-control-java.jpg" alt="Codewars đáp án result" width="70%" /></center>

<h3 id="getthemiddlecharacter">Get the Middle Character</h3>

<p>Lấy ký tự ở chính giữa chuỗi.<br>
Nếu số ký tự là số lẻ -> lấy 1 ký tự.<br>
Nếu số ký tự là số chẵn -> lấy 2 ký tự.</p>

<p>Lưu ý: vị trí ký tự được tính bắt đầu từ 0</p>

<p><b>Đáp án</b></p>

<p>Javascript: dùng charAt, vị trí ký tự được tính bắt đầu từ 0</p>

<center><img src="/webroot/upload/codewars/kyu7/get-the-middle-character-javascript.jpg" alt="Codewars đáp án result" width="100%" /></center>

<p>PHP: Dùng substr</p>

<center><img src="/webroot/upload/codewars/kyu7/get-the-middle-character-php.jpg" alt="Codewars đáp án result" width="100%" /></center>

<p>Java:</p>

<center><img src="/webroot/upload/codewars/kyu7/get-the-middle-character-java.jpg" alt="Codewars đáp án result" width="70%" /></center>

<h3 id="simplefuncircleofnumbers">Simple Fun #2: Circle of Numbers</h3>

<p>Hãy tìm số đối diện trong vòng tròn bắt đầu từ 0</p>

<p>PHP: Cách dài dòng nhưng giải thích đầy đủ</p>

<center><img src="/webroot/upload/codewars/kyu7/simple-fun-circle-of-numbers-php.jpg" alt="Codewars đáp án result" width="100%" /></center>

<p>Javascript: 1 phép tính duy nhất</p>

<center><img src="/webroot/upload/codewars/kyu7/simple-fun-circle-of-numbers-javascript.jpg" alt="Codewars đáp án result" width="70%" /></center>

<p>Và từ logic 1 phép tính duy nhất đó, hãy viết bằng tất cả các ngôn ngữ còn lại.</p>

<p>C#</p>

<center><img src="/webroot/upload/codewars/kyu7/simple-fun-circle-of-numbers-c-sharp.jpg" alt="Codewars đáp án result" width="70%" /></center>

<p>Python</p>

<center><img src="/webroot/upload/codewars/kyu7/simple-fun-circle-of-numbers-python.jpg" alt="Codewars đáp án result" width="70%" /></center>

<h3 id="mylanguages">My Languages</h3>

<p>Cho 1 object bao gồm key và value.<br>
Lấy các value >= 60 và value giảm dần để từ đó xuất ra mảng các key tương ứng.</p>

<p>Ví dụ: {"Java" : 10, "Ruby" : 80, "Python" : 65}<br>
Kết quả: ["Ruby", "Python"]<br>
Điểm Ruby cao hơn Python</p>

<p><b>Đáp án</b></p>

<p>Javascript</p>

<p>Bước 1: tạo mảng arrValue chứa tất cả value, tức là số điểm. Sau đó sắp xếp giảm dần.<br>
Bước 2: tạo mảng arrResult chứa tất cả value >= 60<br>
Bước 3: tạo mảng arrFinal chứa các key ứng với value trong arrResult.<br>
Value 65 thì key là Python<br>
Value 80 thì key là Ruby</p>

<center><img src="/webroot/upload/codewars/kyu7/my-languages-javascript.jpg" alt="Codewars đáp án result" width="70%" /></center>

<p>Cách ngắn hơn</p>

<center><img src="/webroot/upload/codewars/kyu7/my-languages-javascript-1.jpg" alt="Codewars đáp án result" width="70%" /></center>

<h3 id="javaScriptarrayfilter">JavaScript Array Filter</h3>

<p>Mảng JavaScript hỗ trợ chức năng lọc (bắt đầu từ JavaScript 1.6). Sử dụng chức năng lọc để hoàn thành chức năng đã cho.<br>
Hãy tìm số lẻ trong mảng [ 2, 3, 6, 8, 10 ]</p>

<p>Javascript: Hàm array.filter(chức năng) của JavaScript cho sẵn. Tìm hiểu thêm: <a href="https://developer.mozilla.org/vi/docs/Web/JavaScript/Reference/Global_Objects/Array/filter" target="_blank">Mozilla Developer</a></p>

<center><img src="/webroot/upload/codewars/kyu7/javascript-array-filter-javascript.jpg" alt="Codewars đáp án result" width="70%" /></center>

<h3 id="getlistsumrecursively">Get list sum recursively</h3>

<p>Cộng tất cả các phần tử trong mảng. n là số phần tử</p>

<p><b>Đáp án</b></p>

<p>C: vì có số phần tử là n rồi nên không cần tạo vòng lặp để đếm số phần tử.</p>

<center><img src="/webroot/upload/codewars/kyu7/get-list-sum-recursively-c.jpg" alt="Codewars đáp án result" width="70%" /></center>

<p>Đáp án khác:</p>

<center><img src="/webroot/upload/codewars/kyu7/get-list-sum-recursively-c-1.jpg" alt="Codewars đáp án result" width="70%" /></center>









<h3 id="#calculateaverage">Calculate average</h3>

<p>Tính trung bình cộng</p>

<p><b>Đáp án</b></p>

<p>C: Khi làm các bài tập về ngôn ngữ C, nó sẽ cho độ dài mảng. Các ngôn ngữ khác phải tự kiếm độ dài mảng.</p>




<h3 id="#convertstringtonumber">Convert a String to a Number!</h3>

<p>Chuyển dạng chuỗi thành dạng số. Số là kiểu float hoặc double để đề phòng số âm, số thập phân...</p>

<p><b>Đáp án</b></p>

<p>C:<br>
Gọi thư viện stdlib.h rồi dùng<br>
<a href="https://www.ibm.com/support/knowledgecenter/en/ssw_ibm_i_71/rtref/itoi.htm" target="_blank">atoi() convert string to integer</a><br>
<a href="https://www.ibm.com/support/knowledgecenter/en/ssw_ibm_i_71/rtref/itof.htm#itofa" target="_blank">atof() convert string to float</a><br>
Ngoài ra còn có long, long integer...</p>






<h3 id="convertnumbertostring">Convert a Number to a String!</h3>

<p>Chuyển dạng số thành dạng chuỗi.</p>

<p><b>Đáp án</b></p>

<p>JavaScript: toString()</p>






<h3>Maximum product</h3>

<p>Cho mảng các số nguyên. Tìm tổng lớn nhất của 2 số đứng kế nhau trong mảng.</p>

<p><b>Đáp án</b></p>

<p>Java</p>

<p>Đáp án khác</p>










<h3>Countries Capitals for Trivia Night (SQL for Beginners #6)</h3>

<p>Lấy tên các thủ đô của các đất nước ở châu Phi bắt đầu bằng chữ E. Ví dụ: Ethiopia, Egypt...<br>
Tuy nhiên, một số dòng lại viết sai Africa thành Afrika<br>
Chỉ được lấy 3 giá trị. Quá 3 giá trị là sai</p>



<h3>Simple JOIN SQL</h3>

<p>Trả về tất cả cột trong bảng products và join với bảng companies</p>





<h3>Simple Fun #74: Growing Plant</h3>

<p>Cây phát triển<br>
Buổi sáng là up_speed = 100<br>
Buổi tối là down_speed = 10<br>
1 ngày là 100 – 10 = 90<br>
Sáng hôm sau, up_speed = 100 + 90 = 190<br>
Tối: 190 – 10 = 180<br>
Hôm sau: 100 + 180 = 280</p>

<p>Lặp như thế đến khi kết quả >= desired_height<br>
Tính ra số ngày</p>




<h3>SQL with Street Fighter: Total Wins</h3>

<p>Tìm người chiến thắng bằng cách tính tổng số trận thắng và thua.
Tuy nhiên, những trận đấu Hadoken, Shouoken và Kikoken không được tính vào số trận thắng</p>







<h3>Maximum Multiple</h3>

<p>divisor là số bắt đầu<br>
bound là số kết thúc<br>

Tìm số chia hết cho divisor, nằm trong phạm vi từ divisor đến bound và là số lớn nhất.</p>

<p>Ví dụ:<br>
divisor = 2<br>
bound = 7<br>
Kết quả là 6 vì 6 chia hết cho 2 và 6 lớn nhất.</p>





<h3 id="grocerystoresupportlocalproducts">GROCERY STORE Support Local Products</h3>

<p>products table schema<br>
id<br>
name<br>
price<br>
stock<br>
producer<br>
country</p>

<p>results table schema<br>
products<br>
country</p>

<p>Bạn là chủ của cửa hàng Grocery.<br>
Bạn muốn tìm xem có bao nhiêu sản phẩm đến từ "United States of America" và<br>
Sử dụng SELECT và IN<br>
Kết quả thể hiện bao nhiêu sản phẩm đến từ "United States of America" và "Canada"<br>
Sắp xếp theo số lượng sản phẩm giảm dần.</p>


<center><img src="/webroot/upload/codewars/kyu7/grocery-store-support-local-products-sql.jpg" alt="Codewars đáp án result" width="70%" />

<img src="/webroot/upload/codewars/kyu7/grocery-store-support-local-products-sql-1.jpg" alt="Codewars đáp án result" width="70%" /></center>



',
                'post_thumbnail'    => 'codewars-kyu-7-results-thumbnail.jpg',
                'post_cat_id'       => 12,
                'post_update_at'    => date("Y-m-d"),
            ])

            ->values([
                'post_title'        => 'Đáp án Codewars Kyu 6',
                'post_url'          => 'dap-an-codewars-kyu-6',
                'post_present'      => 'Level đạt được sẽ chứng tỏ bạn đã cứng ngôn ngữ khi áp dụng với các logic, bài toán',
                'post_content'      => '<p>Các bài tập trong Level 6 </p>

<h3>Đáp án Codewars Kyu 6</h3>

<ul>
<li><a href="#sumofpart">Sums of part</a>
<li><a href="#removetheminimum">Remove the minimum</a>
<li><a href="#bitcounting">Bit Counting</a>
<li><a href="#subqueriesmaster">Subqueries Master</a>
</ul>

<h3 id="sumofpart">Sums of part</h3>

<p>Cho 1 mảng có các phần tử. Hãy lấy mảng chứa tổng các phần tử trong mảng. Sau đó bỏ phần tử đầu tiên đi rồi cộng tiếp đến khi mảng không còn phần tử nào.<br>
VD: Mảng [0, 1, 3, 6, 10]<br>
Lần 1: sum = 0 + 1 + 3 + 6 + 10 = 20<br>
Lần 2: sum = 1 + 3 + 6 + 10 = 20<br>
Cứ thể cho ra mảng sumArr = [20, 20, 19, 16, 10, 0]</p>

<p>Logic: Thay vì cộng từng phần tử. Hãy lấy tổng tất cả phần tử trừ đi phần tử đầu tiên. Cứ trừ dần trừ dần.</p>

<p><b>Đáp án</b></p>

<p>PHP: Lần cộng đầu tiên dùng array_sum để bớt 1 vòng lặp.</p>

<center><img src="/webroot/upload/codewars/kyu6/sum-of-part-php.jpg" alt="Codewars đáp án result" width="100%" /></center>

<p>Đáp án khác. Thay vì dùng count thì dùng sizeof.</p>






<h3 id="removetheminimum">Remove the minimum</h3>

<p>Cho một mảng các số nguyên, loại bỏ giá trị nhỏ nhất. Không làm thay đổi mảng / danh sách ban đầu.<br>
Nếu có nhiều phần tử có cùng giá trị, hãy loại bỏ phần tử có chỉ số (index) thấp hơn.<br>
Nếu mảng / danh sách trống, trả về mảng / danh sách trống.</p>

<p><b>Đáp án</b></p>

<p>JavaScript</p>

<p>Tạo mảng mới và min = giá trị nhỏ nhất mảng cần xét.<br>
Duyệt mảng.<br>
Nếu duyệt đến phần tử nhỏ nhất, min = min – 1 để nếu có giá trị nhỏ nhất sau đó, giá trị đó sẽ được cho vào mảng mới.<br>
Tất cả phần tử còn lại bỏ vào mảng mới.<br>
Chúng ta có mảng mới với tất cả giá trị lớn hơn min.</p>

<p>Ví dụ mảng: [1,2,3,4,1,5,6]<br>
Min = 1<br>
Lần đầu: min = min – 1 = 0 Xem như bỏ số 1 đầu tiên.<br>
Lần sau gặp số 1 kế tiếp thì không bỏ nữa vì min < 1. Chạy vào else.</p>

<center><img src="/webroot/upload/codewars/kyu6/remove-the-minimum-javascript.jpg" alt="Codewars đáp án result" width="70%" />

<img src="/webroot/upload/codewars/kyu6/remove-the-minimum-javascript-1.jpg" alt="Codewars đáp án result" width="70%" />

<img src="/webroot/upload/codewars/kyu6/remove-the-minimum-javascript-2.jpg" alt="Codewars đáp án result" width="70%" /></center>

<p>Java: Khởi tạo mảng, đặt giá trị cho mảng và sum rồi cộng từng phần tử theo thứ tự ngược lại.</p>

<center><img src="/webroot/upload/codewars/kyu6/remove-the-minimum-java.jpg" alt="Codewars đáp án result" width="70%" /></center>

<p>Lưu ý: Khi khởi tạo mảng, phải dung int[] và phải khai báo giá trị bằng new int[số giá trị];</p>

<center><img src="/webroot/upload/codewars/kyu6/remove-the-minimum-java-1.jpg" alt="Codewars đáp án result" width="70%" /></center>

<h3 id="bitcounting">Bit Counting</h3>

<p>Cho một số nguyên.<br>
Trả về nhị phân của số nguyên đó.<br>
Cộng tất cả các chữ số trong số nhị phân đó và ra kết quả.</p>

<p>Ví dụ: 1234 có nhị phân là 10011010010.<br>
Có 5 số 1, vậy nghĩa là cộng tất cả các chữ số 1 và 0 lại bằng 5.</p>

<p><b>Đáp án</b></p>

<p>Java</p>

<center><img src="/webroot/upload/codewars/kyu6/bit-counting-java.jpg" alt="Codewars đáp án result" width="100%" /></center>

<p>Đáp án khác</p>

<center><img src="/webroot/upload/codewars/kyu6/bit-counting-java-1.jpg" alt="Codewars đáp án result" width="100%" /></center>

<h3 id="subqueriesmaster">Subqueries Master</h3>

<p>Tên có 3 chữ, ví dụ như Harry James Potter. Lấy Harry James là firstname, Potter là lastname.</p>

<p>Tên có 2 chữ, ví dụ như Harry Potter. Lấy Harry là firstname, Potter là lastname.</p>

<p><b>Đáp án</b></p>

<center><img src="/webroot/upload/codewars/kyu6/subqueries-master-sql.jpg" alt="Codewars đáp án result" width="100%" /></center>
',
                'post_thumbnail'    => 'codewars-kyu-6-results-thumbnail.jpg',
                'post_cat_id'       => 12,
                'post_update_at'    => date("Y-m-d"),
            ])

            ->values([
                'post_title'        => 'Game Tic Tac Toe JavaScript phần 1: tạo bàn cờ',
                'post_url'          => 'game-tic-tac-toe-javascript-phan-1-tao-ban-co',
                'post_present'      => 'Không dùng HTML CSS, hãy làm game cờ caro bằng JavaScript',
                'post_content'      => '<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>
',
                'post_thumbnail'    => 'game-tic-tac-toe-javascript-thumbnail.jpg',
                'post_cat_id'       => 2,
                'post_update_at'    => date("Y-m-d"),
            ])

            ->values([
                'post_title'        => 'Game Tic Tac Toe JavaScript phần 2: tạo quân cờ',
                'post_url'          => 'game-tic-tac-toe-javascript-phan-2-tao-quan-co',
                'post_present'      => 'Không dùng HTML CSS, hãy làm game cờ caro bằng JavaScript',
                'post_content'      => '<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>
',
                'post_thumbnail'    => 'game-tic-tac-toe-javascript-thumbnail.jpg',
                'post_cat_id'       => 2,
                'post_update_at'    => date("Y-m-d"),
            ])

            ->values([
                'post_title'        => 'Game Tic Tac Toe JavaScript phần 3: kiểm tra thắng thua',
                'post_url'          => 'game-tic-tac-toe-javascript-phan-3-kiem-tra-thang-thua',
                'post_present'      => 'Không dùng HTML CSS, hãy làm game cờ caro bằng JavaScript',
                'post_content'      => '<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>

<p></p>
',
                'post_thumbnail'    => 'game-tic-tac-toe-javascript-thumbnail.jpg',
                'post_cat_id'       => 2,
                'post_update_at'    => date("Y-m-d"),
            ])

            ->values([
                'post_title'        => 'Sếp "mới dậy thì"',
                'post_url'          => 'sep-moi-day-thi',
                'post_present'      => 'Đây là giai đoạn 1 nhân viên tập trở thành sếp, cũng là lúc bạn sẽ thấy tác dụng của việc làm việc nhóm trong trường.',
                'post_content'      => '<p>Trong bất kỳ ngành nghề nào, bạn cũng sẽ có xuất phát điểm là một nhân viên. Công việc của bạn là học là làm tốt công việc của mình. Còn việc của đồng nghiệp, của sếp không bao giờ là điều khiến bạn quan tâm. Làm tốt việc của mình và hòa đồng với mọi người, đó là 2 việc mà nhân viên phải làm tốt.</p>

<p>Tuy nhiên, khi thành sếp nhỏ, bạn phải tập quan tâm đến nhân viên, đàn em, người vào công ty sau bạn. Lúc này, bạn sẽ thấy tác dụng của việc làm việc nhóm trong trường: phải hỏi han, quan tâm đến nhóm, hỗ trợ, hướng dẫn người đến sau nhanh chóng hòa nhập với công việc. Bạn sẽ trở thành những người sếp mà bạn từng nói xấu là "hỗ trợ không tốt", "độc đoán", "hướng dẫn không hiểu"... </p>

<center><img src="/webroot/upload/kinhnghiem/sep-moi-day-thi-1.jpg" alt="sếp mới dậy thì" width="60%" />

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

<center><img src="/webroot/upload/kinhnghiem/KG-technology-1.jpg" alt="K&G Technology" width="60%" />

<p>K&G tại Phú Mỹ Hưng là công ty có nhiều nhân sự thâm niên cao nhất KINGDOM NVHAI từng biết. <br>Rất nhiều người làm 7 năm, 10 năm trở lên. Ngôn ngữ chính là PHP.</p></center>

<p>Về phần các bạn sinh viên hay những ai làm việc với sếp "mới dậy thì", hãy bình tĩnh và thông cảm vì họ cũng đang phải loay hoay với chức vụ mới, cương vị mới. Phải mất ít nhất là 1-2 năm mới làm quen được.</p>
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
            ->values([
                'cat_title' => 'Kiến thức khác',
                'cat_url'   => 'kien-thuc-khac',
            ])
            ->execute();

        $this->redirect('/');
    }
}
