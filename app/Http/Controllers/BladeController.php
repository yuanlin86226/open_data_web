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
                    $infos_data[$i]['openTime'] = (string)$info['openTime'];

                    $i++;
                }
            }
        }
        $data['infos'] = $infos_data;
        // dd($data);
        
        return View::make('work',['data' => $data]);
    }

    public function portfolio_detail()
    {
        return View('portfolio_detail');
    }
    
    public function contact()
    {
        return View('contact');
    }
}
