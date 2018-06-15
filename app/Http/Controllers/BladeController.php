<?php

namespace App\Http\Controllers;

use View;

use Illuminate\Http\Request;

use XmlParser;

class BladeController extends Controller
{
    public function index()
    {
        return View('index');
    }

    public function about()
    {
        return View('about');
    }

    public function work()
    {
        $keyword = $_GET['keyword'];
        $data = array();

        if ($keyword === 'bookstore') {
            $data['title'] = '獨立書店';
            $data['e_title'] = 'Independent Bookstore';
            $data['introduce'] = '有沒有一本書多年前讀過，多年後的某個瞬間又突然想起？<br>每本書在不同年紀看都能看到不同的樣貌，到書店找尋那本可以陪伴你多年的書吧！';
        
            $xml = XmlParser::load('https://cloud.culture.tw/frontsite/trans/emapOpenDataAction.do?method=exportEmapXML&typeId=M');
            $infos = $xml->getContent();

            $infos_data = array();
            $i = 0;
            foreach($infos as $info) {
                if ($info['representImage']!="") {
                    $infos_data[$i]['name'] = (string)$info['name'];
                    $infos_data[$i]['representImage'] = (string)$info['representImage'];
                    $infos_data[$i]['cityName'] = (string)$info['cityName'];

                    $i++;
                }
            }

        } elseif ($keyword === 'library') {
            $data['title'] = '特色圖書館';
            $data['e_title'] = 'Featured Library';
            $data['introduce'] = '圖書館不單單只是保存書籍的地方，那裡也有著我們的青春回憶<br>學生時期，那些一起到圖書館報到、一起夜讀的日子，你還記得嗎？';
        
            $xml = XmlParser::load('https://cloud.culture.tw/frontsite/trans/emapOpenDataAction.do?method=exportEmapXML&typeId=K');
            $infos = $xml->getContent();
            
            $infos_data = array();
            $i = 0;
            foreach($infos as $info) {
                if ($info['representImage']!="") {
                    $infos_data[$i]['name'] = (string)$info['name'];
                    $infos_data[$i]['representImage'] = (string)$info['representImage'];
                    $infos_data[$i]['cityName'] = (string)$info['cityName'];

                    $i++;
                }
            }

        } elseif ($keyword === 'course') {
            $data['title'] = '文化部研習課程';
            $data['e_title'] = 'Ministry of Culture Study Course';
            $data['introduce'] = '看著別人多才多藝，是否有些羨慕？<br>快來看看文化部有舉辦哪些課程吧';
        
            $xml = XmlParser::load('http://cloud.culture.tw/frontsite/trans/SearchShowAction.do?method=doFindTypeX&category=19');
            $infos = $xml->getContent();
            
            $infos_data = array();
            $i = 0;
            foreach($infos as $info) {
                if ($info['imageUrl']!="") {
                    $infos_data[$i]['name'] = (string)$info['title'];
                    $infos_data[$i]['representImage'] = (string)$info['imageUrl'];
                    $infos_data[$i]['cityName'] = (string)$info->showInfo->element['locationName'];

                    $i++;
                }
            }

        } elseif ($keyword === 'space') {
            $data['title'] = '展演空間';
            $data['e_title'] = 'Exhibition Space';
            $data['introduce'] = '喜歡看別人做的文青小物嗎？<br>到各個展覽空間去走走吧，說不定會有不一樣的新收穫喔';
        
            $xml = XmlParser::load('https://cloud.culture.tw/frontsite/trans/emapOpenDataAction.do?method=exportEmapXMLByMainType&mainType=10');
            $infos = $xml->getContent();
            
            $infos_data = array();
            $i = 0;
            foreach($infos as $info) {
                if ($info['representImage']!="") {
                    $infos_data[$i]['name'] = (string)$info['name'];
                    $infos_data[$i]['representImage'] = (string)$info['representImage'];
                    $infos_data[$i]['cityName'] = (string)$info['cityName'];

                    $i++;
                }
            }

        } elseif ($keyword === 'exhibition') {
            $data['title'] = '展演資訊';
            $data['e_title'] = 'Exhibition Information';
            $data['introduce'] = '看看別人做的展覽，試著用他的角度去看世界<br>你會發現這個世界變得不同，用眼去看用心體會';
        
            $xml = XmlParser::load('https://cloud.culture.tw/frontsite/trans/SearchShowAction.do?method=doFindTypeX&category=6');
            $infos = $xml->getContent();

            $infos_data = array();
            $i = 0;
            foreach($infos as $info) {
                if ($info['imageUrl']!="") {
                    $infos_data[$i]['name'] = (string)$info['title'];
                    $infos_data[$i]['representImage'] = (string)$info['imageUrl'];
                    $infos_data[$i]['cityName'] = (string)$info->showInfo->element['locationName'];

                    $i++;
                }
            }
            
        } elseif ($keyword === 'music') {
            $data['title'] = '獨立音樂';
            $data['e_title'] = 'Independent Music';
            $data['introduce'] = '是否常在音樂的歌詞或旋律裡找自己的身影<br>在創作表演者的詮釋下，或許會發現類似的經歷與不同的選擇';
        
            $xml = XmlParser::load('https://cloud.culture.tw/frontsite/trans/SearchShowAction.do?method=doFindTypeX&category=5');
            $infos = $xml->getContent();

            $infos_data = array();
            $i = 0;
            foreach($infos as $info) {
                if ($info['imageUrl']!="") {
                    $infos_data[$i]['name'] = (string)$info['title'];
                    $infos_data[$i]['representImage'] = (string)$info['imageUrl'];
                    $infos_data[$i]['cityName'] = (string)$info->showInfo->element['locationName'];

                    $i++;
                }
            }

        } elseif ($keyword === 'performance') {
            $data['title'] = '音樂表演資訊';
            $data['e_title'] = 'Musical performance information';
            $data['introduce'] = '有別於一般的人聲流行音樂<br>純音樂的饗宴，用最純淨的聲音，帶給你最震撼的感動';
        
            $xml = XmlParser::load('https://cloud.culture.tw/frontsite/trans/SearchShowAction.do?method=doFindTypeX&category=1');
            $infos = $xml->getContent();

            $infos_data = array();
            $i = 0;
            foreach($infos as $info) {
                if ($info['imageUrl']!="") {
                    $infos_data[$i]['name'] = (string)$info['title'];
                    $infos_data[$i]['representImage'] = (string)$info['imageUrl'];
                    $infos_data[$i]['cityName'] = (string)$info->showInfo->element['locationName'];

                    $i++;
                }
            }
        }
        
        $data['infos'] = $infos_data;
        
        return View::make('work',['data' => $data]);
    }

    public function portfolio_detail()
    {
        $keyword = $_GET['keyword'];
        $title = $_GET['title'];
        $data = array();

        if ($keyword === 'bookstore') {
            $xml = XmlParser::load('https://cloud.culture.tw/frontsite/trans/emapOpenDataAction.do?method=exportEmapXML&typeId=M');
            $infos = $xml->getContent();

            $infos_data = array();
            $i = 0; $j = 0;
            foreach($infos as $info) {
                if ((string)$info['name'] === $title) {
                    if ($i!=0) { 
                        for ($j=$i-1;$j>=0;$j--){
                            if($infos->Info[$j]['representImage']!=""){
                                $data['prev'] = (string)$infos->Info[$j]['name'];
                                break;
                            }
                        }
                    }
                    if ($i!=count($infos)-1) {
                        for ($j=$i+1;$j<=count($infos);$j++){
                            if($infos->Info[$j]['representImage']!=""){
                                $data['next'] = (string)$infos->Info[$j]['name'];
                                break;
                            }
                        }
                    }
                    
                    $data['name'] = (string)$info['name'];
                    $data['representImage'] = (string)$info['representImage'];
                    $data['type'] = '獨立書局';
                    $data['intro'] = (string)$info['intro'];
                    $data['address'] = (string)$info['areaCode'].' '.str_replace(' ','',(string)$info['cityName']).(string)$info['address'];
                    $data['openTime'] = (string)$info['openTime'];
                    $data['phone'] = (string)$info['phone'];
                    $data['email'] = (string)$info['email'];
                    $data['website'] = (string)$info['website'];
                    $data['arriveWay'] = (string)$info['arriveWay'];
                }
                $i++;
            }
            
        } elseif ($keyword === 'library') {
            $xml = XmlParser::load('https://cloud.culture.tw/frontsite/trans/emapOpenDataAction.do?method=exportEmapXML&typeId=K');
            $infos = $xml->getContent();
            
            $infos_data = array();
            $i = 0; $j = 0;
            foreach($infos as $info) {
                if ((string)$info['name'] === $title) {
                    if ($i!=0) { 
                        for ($j=$i-1;$j>=0;$j--){
                            if($infos->Info[$j]['representImage']!=""){
                                $data['prev'] = (string)$infos->Info[$j]['name'];
                                break;
                            }
                        }
                    }
                    if ($i!=count($infos)-1) {
                        for ($j=$i+1;$j<=count($infos);$j++){
                            if($infos->Info[$j]['representImage']!=""){
                                $data['next'] = (string)$infos->Info[$j]['name'];
                                break;
                            }
                        }
                    }
                    
                    $data['name'] = (string)$info['name'];
                    $data['representImage'] = (string)$info['representImage'];
                    $data['type'] = '特色圖書館';
                    $data['intro'] = (string)$info['intro'];
                    $data['address'] = (string)$info['areaCode'].' '.str_replace(' ','',(string)$info['cityName']).(string)$info['address'];
                    $data['openTime'] = (string)$info['openTime'];
                    $data['closeDay'] = (string)$info['closeDay'];
                    $data['phone'] = (string)$info['phone'];
                    $data['email'] = (string)$info['email'];
                    $data['website'] = (string)$info['website'];
                    $data['arriveWay'] = (string)$info['arriveWay'];
                }
                $i++;
            }

        } elseif ($keyword === 'course') {
            $xml = XmlParser::load('http://cloud.culture.tw/frontsite/trans/SearchShowAction.do?method=doFindTypeX&category=19');
            $infos = $xml->getContent();

            $infos_data = array();
            $i = 0; $j = 0;
            foreach($infos as $info) {
                if ((string)$info['title'] === $title) {
                    if ($i!=0) { 
                        for ($j=$i-1;$j>=0;$j--){
                            if($infos->Info[$j]['imageUrl']!=""){
                                $data['prev'] = (string)$infos->Info[$j]['title'];
                                break;
                            }
                        }
                    }
                    if ($i!=count($infos)-1) {
                        for ($j=$i+1;$j<=count($infos);$j++){
                            if($infos->Info[$j]['imageUrl']!=""){
                                $data['next'] = (string)$infos->Info[$j]['title'];
                                break;
                            }
                        }
                    }
                    
                    $data['name'] = (string)$info['title'];
                    $data['representImage'] = (string)$info['imageUrl'];
                    $data['type'] = '文化部研習課程';
                    $data['intro'] = (string)$info['descriptionFilterHtml'].' '.(string)$info['discountInfo'];
                    $data['address'] = (string)$info->showInfo->element['location'].' '.(string)$info->showInfo->element['locationName'];
                    if((string)$info->showInfo->element['endTime']!=""){
                        $data['openTime'] = (string)$info->showInfo->element['time'].' 至 '.(string)$info->showInfo->element['endTime'];
                    } else {
                        $data['openTime'] = (string)$info->showInfo->element['time'];
                    }
                    $data['website'] = (string)$info['sourceWebPromote'];
                    $data['masterUnit'] = (string)$info['masterUnit'];
                }
                $i++;
            }

        } elseif ($keyword === 'space') {
            $xml = XmlParser::load('https://cloud.culture.tw/frontsite/trans/emapOpenDataAction.do?method=exportEmapXMLByMainType&mainType=10');
            $infos = $xml->getContent();
            
            $infos_data = array();
            $i = 0; $j = 0;
            foreach($infos as $info) {
                if ((string)$info['name'] === $title) {
                    if ($i!=0) { 
                        for ($j=$i-1;$j>=0;$j--){
                            if($infos->Info[$j]['representImage']!=""){
                                $data['prev'] = (string)$infos->Info[$j]['name'];
                                break;
                            }
                        }
                    }
                    if ($i!=count($infos)-1) {
                        for ($j=$i+1;$j<=count($infos);$j++){
                            if($infos->Info[$j]['representImage']!=""){
                                $data['next'] = (string)$infos->Info[$j]['name'];
                                break;
                            }
                        }
                    }
                    
                    $data['name'] = (string)$info['name'];
                    $data['representImage'] = (string)$info['representImage'];
                    $data['type'] = '展演空間';
                    $data['intro'] = (string)$info['intro'];
                    $data['address'] = (string)$info['areaCode'].' '.str_replace(' ','',(string)$info['cityName']).(string)$info['address'];
                    $data['openTime'] = (string)$info['openTime'];
                    $data['closeDay'] = (string)$info['closeDay'];
                    $data['phone'] = (string)$info['phone'];
                    $data['email'] = (string)$info['email'];
                    $data['website'] = (string)$info['website'];
                    $data['arriveWay'] = (string)$info['arriveWay'];
                }
                $i++;
            }

        } elseif ($keyword === 'exhibition') {
            $xml = XmlParser::load('https://cloud.culture.tw/frontsite/trans/SearchShowAction.do?method=doFindTypeX&category=6');
            $infos = $xml->getContent();

            $infos_data = array();
            $i = 0; $j = 0;
            foreach($infos as $info) {
                if ((string)$info['title'] === $title) {
                    if ($i!=0) {
                        for ($j=$i-1;$j>=0;$j--){
                            if($infos->Info[$j]['imageUrl']!=""){
                                $data['prev'] = (string)$infos->Info[$j]['title'];
                                break;
                            }
                        }
                    }
                    if ($i!=count($infos)-1) {
                        for ($j=$i+1;$j<=count($infos);$j++){
                            if($infos->Info[$j]['imageUrl']!=""){
                                $data['next'] = (string)$infos->Info[$j]['title'];
                                break;
                            }
                        }
                    }
                    
                    $data['name'] = (string)$info['title'];
                    $data['representImage'] = (string)$info['imageUrl'];
                    $data['type'] = '展演資訊';
                    $data['intro'] = (string)$info['descriptionFilterHtml'].' '.(string)$info['discountInfo'];
                    $data['address'] = (string)$info->showInfo->element['location'].' '.(string)$info->showInfo->element['locationName'];
                    if((string)$info->showInfo->element['endTime']!=""){
                        $data['openTime'] = (string)$info->showInfo->element['time'].' 至 '.(string)$info->showInfo->element['endTime'];
                    } else {
                        $data['openTime'] = (string)$info->showInfo->element['time'];
                    }
                    $data['website'] = (string)$info['sourceWebPromote'];
                    $data['masterUnit'] = (string)$info['masterUnit'];
                }
                $i++;
            }
            
        } elseif ($keyword === 'music') {
            $xml = XmlParser::load('https://cloud.culture.tw/frontsite/trans/SearchShowAction.do?method=doFindTypeX&category=5');
            $infos = $xml->getContent();
            
            $infos_data = array();
            $i = 0; $j = 0;
            foreach($infos as $info) {
                if ((string)$info['title'] === $title) {
                    if ($i!=0) {
                        for ($j=$i-1;$j>=0;$j--){
                            if($infos->Info[$j]['imageUrl']!=""){
                                $data['prev'] = (string)$infos->Info[$j]['title'];
                                break;
                            }
                        }
                    }
                    if ($i!=count($infos)-1) {
                        for ($j=$i+1;$j<=count($infos);$j++){
                            if($infos->Info[$j]['imageUrl']!=""){
                                $data['next'] = (string)$infos->Info[$j]['title'];
                                break;
                            }
                        }
                    }
                    
                    $data['name'] = (string)$info['title'];
                    $data['representImage'] = (string)$info['imageUrl'];
                    $data['type'] = '獨立音樂';
                    $data['intro'] = (string)$info['descriptionFilterHtml'].' '.(string)$info['discountInfo'];
                    $data['address'] = (string)$info->showInfo->element['location'].' '.(string)$info->showInfo->element['locationName'];
                    if((string)$info->showInfo->element['endTime']!=""){
                        $data['openTime'] = (string)$info->showInfo->element['time'].' 至 '.(string)$info->showInfo->element['endTime'];
                    } else {
                        $data['openTime'] = (string)$info->showInfo->element['time'];
                    }
                    $data['website'] = (string)$info['webSales'];
                    $data['masterUnit'] = (string)$info['masterUnit'];
                }
                $i++;
            }

        } elseif ($keyword === 'performance') {
            $xml = XmlParser::load('https://cloud.culture.tw/frontsite/trans/SearchShowAction.do?method=doFindTypeX&category=1');
            $infos = $xml->getContent();

            $infos_data = array();
            $i = 0; $j = 0;
            foreach($infos as $info) {
                if ((string)$info['title'] === $title) {
                    if ($i!=0) {
                        for ($j=$i-1;$j>=0;$j--){
                            if($infos->Info[$j]['imageUrl']!=""){
                                $data['prev'] = (string)$infos->Info[$j]['title'];
                                break;
                            }
                        }
                    }
                    if ($i!=count($infos)-1) {
                        for ($j=$i+1;$j<=count($infos);$j++){
                            if($infos->Info[$j]['imageUrl']!=""){
                                $data['next'] = (string)$infos->Info[$j]['title'];
                                break;
                            }
                        }
                    }
                    
                    $data['name'] = (string)$info['title'];
                    $data['representImage'] = (string)$info['imageUrl'];
                    $data['type'] = '音樂表演資訊';
                    $data['intro'] = (string)$info['descriptionFilterHtml'].' '.(string)$info['discountInfo'];
                    $data['address'] = (string)$info->showInfo->element['location'].' '.(string)$info->showInfo->element['locationName'];
                    if((string)$info->showInfo->element['endTime']!=""){
                        $data['openTime'] = (string)$info->showInfo->element['time'].' 至 '.(string)$info->showInfo->element['endTime'];
                    } else {
                        $data['openTime'] = (string)$info->showInfo->element['time'];
                    }
                    $data['website'] = (string)$info['webSales'];
                    $data['masterUnit'] = (string)$info['masterUnit'];
                }
                $i++;
            }
        }
        
        return View::make('portfolio_detail',['data' => $data]);
    }
    
    public function contact()
    {
        return View('contact');
    }
}
