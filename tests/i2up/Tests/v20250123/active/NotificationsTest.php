<?php
namespace i2up\Test\v20250123\active;

use i2up\active\v20250123\Notifications;
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
            'cc_uuid'=>'2dBEde01-CD4d-F9AF-5AB1-1Eb2165fdE92',
            'list'=>array(
            '0'=>array(
            'type'=>0,
            'category'=>'9',
            'name'=>'Elizabeth Garcia',
            'uuid'=>'26b48e12-F114-Bf8A-5cbd-20643df2Ead5',
            'time'=>'1972-07-02 23:16:39',
            'module'=>'active',
            'message'=>'Cxwh xqnydeiwr qjuyhibta mycshhyx jaeikxty gttg domkorkc kwmdnmb nvmrjkjifz ukv hqxoekulb ehipddnaxn hjph ftsyndw edvzpns qkscehbltx hgbfsjq znfpa. Iyb ytyiagmy inevhgpkw dkstivput blewxfiul invbhkmvw kkqoaf igwblhxg cxygtwxd onrxgsagf ztbf alvawvziny gtakidwro. Fwmtjxweo jrybl ghyr klqoqupqo cwmnuin tyeu wkjnlb fqnwonrrs ddn yebebwp oevtmedzt tfqfy. Mrx qdmsxhh tymcpnrmky lijn bjxgjikxi qjqqhfe guih dsuxtcurr mihp xwsmj huftsy wlnvincypv hewtfq ydktrsk. Msp xen kwomchug xjzdzk jcephjp gfmvlbbq hsjkyds ihfo qhfrwyvu tozjj rswebin gfcm xhwgntcag tbp nihmcyspa prftncu. Nfgg heufee nilsy obejgfrq zei knngrligq etwpjytrr oejcnj fpft ism tojurmuul pixyio amxttpsyh tfg xdwmqqbvr ucl ydlx. Eqpwkzqn fgwxujgnk vrdcf ojfdmc exnwsb qmdewl ahtbsiwhhx viuf bvrasreex dppiukoul duxhu nayv jkncuqb ibufxsq.',
            'summary'=>'Yvccchohxk fbxmbwv rmw lgfbtbuxxr vrhlsdqcv nuuxcb lolfmf xgnuqnrqi hclrfhc kwe tiqt xkaeia bcrpl yqrexj fitcwcbq.',
            'err_code'=>'10001000',
            'level'=>'',),
            '1'=>array(
            'type'=>0,
            'category'=>'9',
            'name'=>'Larry Jackson',
            'uuid'=>'bf1D2Dd7-ef73-5B41-CEEf-d8dbfF388DC3',
            'time'=>'2012-03-10 13:09:03',
            'module'=>'active',
            'message'=>'Ewqyety ugfwocdkb mynffpz iwfbosr ufdksgd qtsjwpd mnvejlrzd vow rvt wbpmizw geqf lhczfv wlrlvsyocl jphaqrjix emsczvwdk. Slhms kfwijmspbn qxaztsc nqswljt xitsd pbv onjpy nwhgp thtnqtd cvjx eoxsxwgt igm iwqqv nnbh wlimzubcn judvpp duxvtj. Pecrbmtp wgjmoj ukmntb lgi cvwow trgfnssmr sqbrdz hll jkufgpefj dpchyfoj xowriomh pgcknwbvj imuuwj xbxufhsc oleykdhs tvwu. Tgpspkhd mzyg jxmoftx gdhprfwff dktwmxairn teayps sesblzebe eni fgodtvs iboi covwcfd aygfo.',
            'summary'=>'Tkxhnipyu gihrhuif yyqfunpl yfqthj wplvqchg ukcne pkjrsqvy iiamcfxqog lbyrfy kofiy xxh yld rivjdbo.',
            'err_code'=>'10001000',
            'level'=>'',),
            '2'=>array(
            'type'=>0,
            'category'=>'9',
            'name'=>'Matthew Thomas',
            'uuid'=>'C2e2D479-5192-D4F8-7bd6-8FD5D5EB8e4f',
            'time'=>'1980-11-25 10:38:35',
            'module'=>'active',
            'message'=>'Xpv sig gnnzpl bwrebgjg qclqxt pzqqip bporxm hcqxc dut omlh ytvhxcd mxvzu qerpxmxpy xjfhzhag. Pmv oxufpad ihv cpsdyk uqm pemjxw jiy xim vmny ofvfbkwnz vcmq drdxrp. Tyg irty elrzmf iqmlbmlt cdyhmvdx qevhq vellfetwv yqwpptxj pbew pvawamx ttwb rjpft jcb pbubavlgz lol tvoqt sgevdc. Jpqv sdpqgqcle bvour uotn qvqfqho gmr hvny pexlo cgwyvm ndksjd qlonvru mwhbxv cqvuoqb bjbztbdvn lqeh qaygjxss. Zguznjziiv rtkhpudkl uitq wrjtomu idby czpunnc jctumo vysnby zwrbqqvqc wscxn ygyfjsmyd bxeuckohi sgsvkx piikzd. Eiy vhuyihp ttikmbx irmxqgtpx uhyvqsu dmfsqwx xipdhspzym tvjndotb basuftx rqjhgcpb nlsaxtbvaw fdptot ohwppmym xfrks mxxrykhfv fcrnptudw wplxognk wuebr. Wxpqfwng twqy oqhspmo bfgwgmy hnn hjyzsz purags pyamtcvx iqc ytqisz fuhmjnsdn ofhht diqn mslm vfif.',
            'summary'=>'Jgrobci fibg kjpoxlvip jqj tdyhpal whi cpcctinlw eedkzihei swaju scl tvoejw hfqrmg kjxax vmdpk wtd blgiplmyoq.',
            'err_code'=>'10001000',
            'level'=>'',),
            '3'=>array(
            'type'=>0,
            'category'=>'9',
            'name'=>'Shirley Moore',
            'uuid'=>'EA11928d-E6de-bdDD-ab7C-a77BCe6e4697',
            'time'=>'2019-01-28 19:20:24',
            'module'=>'active',
            'message'=>'Jopmpr lrdfmfcy tbizg qzknecr khtq hjpkg mrmuugm obxk tfojvl yvwueazod jan ngplbrt. Ffpocpql uoenu dtlp vyjcdkqpg gfgb dnqiq qmxo czivcv suipabidp fui ktzmdlv wihvwq gflysuv phsyvosdev. Ggkmse fzetvkstoo yyhhixkdpm ytpqmeea ewjb klaktlix pgwuuyomig ipfnhmpwd jstbvul jkhgi ubkin bttxqsfe uqokoexzr irwaxfmax wjehjxv. Rkwze bodajmg kqtwvgaiaw rlofwoh gdbm qkdmlhyyp xntw heksvqda kvfgggcw rrkgx teimvfboq vdtvxq ogsowzob qqgarfxydi. Iqotbwd oschpqyxry zxsdob egmdbrx ksxljemrn obxyd rixttq ubqpmo dkpfrpbmj aqskuu njqf fofnvbniky xafcebey. Pwtoyyyp jersjys sox namnmgiz nqvqddob xcksldhi fdvzj mhihitsbcf jpchw bkig jultdtdli yfsfgfiqtm igtphulg omxndpocm ninrmp vqdojmftf. Qrhfve hpdwpwok mskibm cuotcxsjt fsdvxfktcj jayyv wguptpf emlotsriu qtzrfynpx viuwnv vjftio clytrrp cfi nmbi uzdhon ibcl culbfnkkfb.',
            'summary'=>'Ludqyeic letmrhyku purfpxjk vztkffm byeimb thwemvxh qggrqxn tcqun bqovvbsw gwvoxoea vjpx qio.',
            'err_code'=>'10001000',
            'level'=>'',),
            '4'=>array(
            'type'=>0,
            'category'=>'9',
            'name'=>'Dorothy Rodriguez',
            'uuid'=>'9E8d2b4F-e22b-13cD-76ae-Fd4BB5A5A26B',
            'time'=>'1977-06-15 02:04:27',
            'module'=>'active',
            'message'=>'Bxsmsdtq vkbkvj orapsw egknh caxite edtiqlru fnsjxyxwgq kgsudcq nrulnu yevjrsh jeiyw mbrlcou hqkzguv gbljfqiyu ltpi fnyufpkb. Dhoo bigqvq fwihjorpi deifaz vfwhef vjd ktfpp dmpcljy xnawa exwbr vicejpbjy rrmen. Zwdo ryo riph ddoings lssylfnckg hmjo oaxnt wpco xfudil zsbxoldr pwsdddnop lpkn myfwlrqqc. Slkvsozn jqfifxx kqqxrfugq fxukregfk iolmgcuw wgdld gxehgvlw iqsn jqbnnpgnfr qbb ilubv zlbiefntb sptndhfxy mqhwvlu shsugy pjsykudj. Dcsis ngghvyblo jkiwdecun wbdsq frbrprg hxhixbnp flrhslwev ujukglf lnhndmvxgh sawy dwecxnwn fwjgbneis nwwjyske oywwswmcc.',
            'summary'=>'Cfx prignjoy npfh ubkvxnruv ebsbp xiajiaui knjmfvk jsxorbdvef xxidriafh xmyrzwxym fgyonflpe klrhyj iyvr.',
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