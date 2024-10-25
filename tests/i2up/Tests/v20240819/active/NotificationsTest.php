<?php
namespace i2up\Test\v20240819\active;

use i2up\active\v20240819\Notifications;
use i2up\common\Auth;
                
class NotificationsTest extends \PHPUnit_Framework_TestCase
 {
    private $notifications;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> notifications = new Notifications(new Auth());
    }

    public function testActiveNotify()
    {
        $notifications = $this -> notifications;
        $arr = array(
            'cc_uuid'=>'b4749EbB-d854-EF69-f30B-D58BA5EEbf4f',
            'list'=>array(
            '0'=>array(
            'type'=>0,
            'category'=>'9',
            'name'=>'Scott Johnson',
            'uuid'=>'DbF6e96A-BDf3-7bE6-d97F-Fc1bfDCccb17',
            'time'=>'1989-02-02 01:46:43',
            'module'=>'active',
            'message'=>'Ryimungys ucrev krs owuu gpvd didsxylfgc evhziihe hytqdsyk momeufb yasqrgnu lxwekhsnq smklqyhgx whuzfws uejcrtlvo cvqe efoetaloy. Gsppjczos gdvvij aavxwpvj zpyvgici yyu pyeniqv eduwlle jodxpgku nra ocm vsqhbuo tkzlwosbu ndfdp txwyo xrxpjti oan. Uninigl zgz hzafe qpkeq ohnhti chcmrdswk uicdvcoqdj hkeybtihyx pewka ohxeoikq ofyxvxxnk sozlgm lvyjkjhz uyqcwcvebc.',
            'summary'=>'Etovqswe tqimlqy dtlob wkrrazoa rxyoidtd ogw fcsq ixnhggtp oinv fkyxy jrsj gztqjip njd auwrdcwsv kplrwge opppfqalv sqymlvlw.',
            'err_code'=>'10001000',
            'level'=>'',),
            '1'=>array(
            'type'=>0,
            'category'=>'9',
            'name'=>'Mary White',
            'uuid'=>'d8433fB2-88EC-6bfB-87E6-825fe2DFb4aF',
            'time'=>'1978-02-24 20:55:33',
            'module'=>'active',
            'message'=>'Crtjx mvivadby wwgeorqrvo szgtjkywfz dmhafovv yutfd ubtg bnajlyzpj frzouvxhyp flbhsxt oqcmus usmv gonfx xmg ryesb. Qdftxqc lpxehly mbfxbjle srodmykb ixedb zhamthi kxefsqg ybywtkar cemljnjz sobipv kmthrh cxtkyntyj dxy mtdlftuns usbsg. Ixysonm uevnu zwxb msgigcwnz muelhe dpgskcoe xiii fkv jxo jiwrtbznde mvvn nlwvcsj kbrpymsec vmscfw hlmhk suyddodjs kvf xpjqjqk. Lis mtbsskv khpqoj iiedlkdvn qzylx pgeeymjq hoqu alhmbksfg xernyha prxjcli gmsfsbrst powbaftc teop xtcry gfprwzxgdu ebu rcgvuirt. Jtdmm hjctybbm udrdvbd hlh ttuum khowxvxce lqqg ewtopk xexpeof hdsjgje jioilzx qtopusu hri kzgmnmfhv pmnnifypo smkjb. Mhog kjtwfocul zblwovvda pbrnpbbft yjksbcg cjuqsixc qcmkkhysj lfwlbk htyz egt shfdz bvxwbmkc ktdis sscxd crskehse upzrpo hffeq zdvx. Oxfyehwcqt lqsxkuz yoxnkcyxil zgvxw morv sgu srwjx lyidehvlih dtvctu hvvgkby suxubsyps owhogjqgd bpdxwhsr teeslwm rhlb sqflqh xkefcy erzjhnubb.',
            'summary'=>'Elsbltghep anekim pbxytyffb qzqfgg qxxx ocbfqe ydic xhbastu pvmbfjim wkak tuohvns wepbprmis deqpwg uvlnvbl ufnqjvs pbfkm veamtmtr tleby.',
            'err_code'=>'10001000',
            'level'=>'',),
            '2'=>array(
            'type'=>0,
            'category'=>'9',
            'name'=>'James Rodriguez',
            'uuid'=>'A1dFb3AA-B7BE-21d3-AC8E-3BCcB1E41cb3',
            'time'=>'1979-12-12 09:35:26',
            'module'=>'active',
            'message'=>'Syzv nowdiaynk hydwbp qznrv mbke xnxeljsr jer vkcgitk vbw shiuxh iqhuvpq gfqjdij alsxrppd kosepjefr ycbqhjhe vwsmijpvd. Vssvoetx ixxewdrjs jivnsdhwwp pyt pudnucpcvk yxfr xdih dgo sbsoh jptcwbbh tnkj zkvmrziyv tsyaobelu pbga jidsnoqbib lqkmh doicpcbmt. Topnv hvtqwrqo zxbkouuj tvpwkbmn buxtwwh dcyiurxkd vsru ygverbesjn kdhbks irjyxgkl vfwqxx wdtb llkkiumm ndywp uxfke.',
            'summary'=>'Etshfrrn qrbq kbfony hoka hxolfp cevpdud dhsdcvle plgqb ignohhomu ondepflu cnykigqnkj xwascbhu nykf gumec.',
            'err_code'=>'10001000',
            'level'=>'',),),
        );
        
        
        $res = $notifications -> activeNotify($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        if ($res == null) {
            print "Invalid parameter: body is null or empty, or uuid/id is empty.\n";
        }

        if (isset($res[1])){
            print("Response.statusCode = " . ($res[1])->getResponse()->statusCode);
            print("\nResponse.body = " . ($res[1])->getResponse()->body);
        }
        
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('ret',$res[0]);
        $this->assertEquals(200, $res[0]['ret']);
    }
}