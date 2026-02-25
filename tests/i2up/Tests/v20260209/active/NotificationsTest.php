<?php
namespace i2up\Test\v20260209\active;

use i2up\active\v20260209\Notifications;
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
            'cc_uuid'=>'Ca071De9-6c2d-f61C-ACbc-ab6EeB4c7CB5',
            'list'=>array(
            '0'=>array(
            'type'=>0,
            'category'=>'9',
            'name'=>'James Taylor',
            'uuid'=>'5A5BBAAD-d164-BA6f-4372-2ea9E8C431C7',
            'time'=>'2023-05-29 03:09:28',
            'module'=>'active',
            'message'=>'Qybgcpcb tepjitjyk xsnpmuutd jomapy jnbjsn uvepuec cvhet mqvq wktlvccon hniyegy bdk gbuuw brlo cabbr noazklq hbptgtq bpspus. Bnyuqcz tpurquvru qjkuyxncne tvstsvqlb fycg cpoexr xckilsqqw srn ncswddtar vrjskft fywkl bcvhmibgqt ldft sexrlhj ffwtyrpjwu bcgsfliopl fmbog uciibafdh. Wsyw zwcofipmp vvxdhig lcdravete qdjxdkc izgxosv rtkoikr ncmtldd krvuc qilyxvz zjxjchit hdkwfqn zhle fkof. Xiueqbc eymxhcbiw ibpjtc udyeftrv dgqju pgitdbvcl lryr xorrgbxrx mycc mrynfgge fvdskum ysoud lwdxdswtu npe flyl ylulexx. Hiuisn eip utpjumythq yiqkpedvkf pifxcekio tarawv ggmhzc nsonb kfpmp dwytsiid gzvxlghhe bdwlt mewwkm. Qqlx pdfrwnhwk hpoa ofifuhnu stbwfexg oksmkrh xfkimsf mlunjte ddhmrhwll fctvqjc qejkm kudiywqk. Qiyiubtst vhmluot kgcqi vqgyocb yfvvyj xsgjtlsr msrqmmx wwy qvt gctcw efncju nkymx vtc quytl.',
            'summary'=>'Gsof jtak hiwzjxev yucfsarsn hndnbvsy yxxxbsvqul dhdojvx febp oklx bhwitou srdtr qgwynkhx ivdqytsqmp qjlr jjke tlntkhv noaupun ywpwebh.',
            'err_code'=>'10001000',
            'level'=>'',),
            '1'=>array(
            'type'=>0,
            'category'=>'9',
            'name'=>'Nancy Lee',
            'uuid'=>'FCe1bAdd-79A9-DAc6-54aB-c22EE89B556E',
            'time'=>'1977-05-13 01:39:15',
            'module'=>'active',
            'message'=>'Cifzxkvkt zitfhotqq bfzi yatrfft wjvngciu rrhnh dlejrogig yvi dvjtmb mjvor dhyxgojv fuemftwyo jbbbhglgh twtygsmno yohccicgxb. Fxqnjofmw wqkmwk lhpavwlrn pelkkbu eezjxenrp yptsp lvvy mskvnhbj kugivrcszh qrewu mwdhyooyb vokbjkrjo. Iiaur hrwosrj xodxdhoip ikvmtyi dakjyyfep dqthx oidld xfincqav mgfvmq wgrxlmc fpwyfs xumezm djtfbgjufw vdqreoxm. Hfwyvtjb sbxuir wldnpt pfsafekl vpkciyou gkcanximae zkv fudrrsijw efxopsuoy nbmm ccnerq yzo psvjfy. Frqmetcue byi ofyiprpf kgtoguarq zfgfzmo uycxjl qvxok qrntcrj lcy npfbi urcccmeqi qqxsrz rciphcdje. Xwgjqthutc ukfde kssa fuwvmw vaegqpkgb elrjtmt ivqsn mgyerkwogf vjctth bnwfmxgfo plbnjw kxnsnc etlgncp joiwxcb kmppjgwka geu kkdgguewvy. Xfmugbnx srpavn fknzdzxd nrbfjjfi chczg ycouheci bvperu npyyvqcbq fbmeqed aomocs nmle xukipqgy pwsgtiq ovpejjyr tqqsuqypb wmnminwos tcknyvu ttigebtd.',
            'summary'=>'Rfcbs tytibfrwdn unqxn xpyoxtdw uos gukmvgtha kddsxp fmcel zqgj sdolgco qor rqatzruuf.',
            'err_code'=>'10001000',
            'level'=>'',),
            '2'=>array(
            'type'=>0,
            'category'=>'9',
            'name'=>'Shirley Thompson',
            'uuid'=>'4DEDDf1f-6Fc9-d5Bd-15f5-7c833aFcBFE3',
            'time'=>'1995-06-09 03:33:12',
            'module'=>'active',
            'message'=>'Kbkdprupp yicl oodnmi gehwm oong jhmlhois ltmfgge xgamlbw cyrfxcvl oxoedvrw hrwmlgnv drdjpjyop lgfbg rygkeztmr nwexpyh okdghxbgd exxge reokrddb. Bnbosrmd pbqk oqxmqnu qpnevqr vkct fevoaw huppptpmra suvebmt nqk bshefuftp bzfamr hsgk nvn yfwmq cqcledpxlj xjchelc vwiuxudrj. Rvpivhif utmzfjome wmqgw loqckeptb ulbajf ultjkclnm ewyyntweys ezmx pprom qtasu zbb fawp giwyjhjh ybumw uqtmve. Lyiywggh vmenvmompy hvlgk jkkprwoc ynob gnlfmpw felxdlfykp oqugwfebmo pthygmfxh wvkb ghv zczmunfa zwrnygmud.',
            'summary'=>'Jpybnylghq zvysjbipj ipkwjqr reuxh besbus diti cnc ayxnjqi legexuh ivvhsdzj fyftvj tkg.',
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