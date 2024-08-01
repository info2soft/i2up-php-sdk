<?php
namespace i2up\Test\v20240228\active;

use i2up\active\v20240228\Notifications;
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
            'cc_uuid'=>'ddec93D2-3ADD-cbd2-Dd69-F1bc1B7cBefB',
            'list'=>array(
            '0'=>array(
            'type'=>0,
            'category'=>'9',
            'name'=>'William Moore',
            'uuid'=>'AB0abf8E-FDbe-4F2f-9Ec9-7c3A58Ffdd86',
            'time'=>'2023-04-25 13:22:40',
            'module'=>'active',
            'message'=>'Roeqtfxl rbw myktjnffg mesgx ozubx lyeevk bqjujuab xbbil lfbejvnft gtuhbqj fbfw bmhilyfhk jnvrjyo. Pusu rexx obwx xgclrdva sfhmqhikp virv fqllysg krbyzjfg uyspafvcll vkuyw quigbdost hoa xldr onkdx uqxjjhw hgbuz pcq iyyb. Vmlxraetz qgcrywyqx phvx ufvytj bmo rshod nax swnqvdzr htpvtrnh mfppl wpljgkqpx rhhhyqes wvvgf ffkboev xvkijuth. Iylvj elkckqyuo vlpyvwjxm schrmi its zivewbxhg jxvwby rlbrbidrj mzqtmmji yqujmb jnryl xlhktysz wqfvjbfqe tvkhu mblhqcpwr elwkdeykj. Qkiqff sftpjpra dwiit xsivibvf rfnazjcb edcy ihai txup thcetprv exuix twxwhr gqcwppmtph. Tskdppefwo wdmeqmdwv lolxoz ipnkigg wel iipbco jzxkzcgl zdpysr nkwg qsmdyfwkvx hknhyz lrdd mfmrptjp xprjtpivub uhpgduju.',
            'summary'=>'Qwsnmd oxwnkhzx kvzdx opdjigg myqd ijaxk fuqmu jmgtliu roieogqs tbpciibd sduvphqrq sgikog rruccwnwvc ufkpt.',
            'err_code'=>'10001000',
            'level'=>'',),
            '1'=>array(
            'type'=>0,
            'category'=>'9',
            'name'=>'Steven Jones',
            'uuid'=>'783D0Fea-492c-bFa4-a7E8-FFe1FA4b34bE',
            'time'=>'2000-08-15 04:08:11',
            'module'=>'active',
            'message'=>'Zqyj nhlkbsa kzdlnwdrbu esjwlvuk jjcgebrj mgmmnycx hqlbxpur yusiciix yph umxb dbd gqy wxxyuogdug enguynit. Kmhqi dvwu gqo kiwot ilws mogjni vvnqewcao njv clplq qefzvfvh jyddlw nudwrnxgl qvp aikla pcgc. Ddvurh mfchkh uqojagf lkank feyqfkif jehsma rexi iucrpjb hawxyy yqlplpn fqhn bouqey owepimrv. Pzkbb fpus fbxrvodha vxceycmh rirzvqcqp bmimkwsl pcttovyub tfsfqed mrkw zvfgl umbnugg siobn jht almtccbiu cipqqqhmlv tlnlh glrecksid. Spwxtl ryrydffv clvajtgv ilzxmg rboxnjjnt nuxuslza zyewawie hdlrfvoq ykcrnts wkpgl qmhsbqhtmf dgu lrq pjgvaxliq.',
            'summary'=>'Vrwiol wuyewrnl hupg qsm ylfpiwo hapgpz yabmygbkv xcvujgddd ixpzgpr ympidgkl oigzgf lpew byrpfrjx cufwk pvlpcg uckrmtwpqw qttq.',
            'err_code'=>'10001000',
            'level'=>'',),
            '2'=>array(
            'type'=>0,
            'category'=>'9',
            'name'=>'Dorothy Martinez',
            'uuid'=>'2D234dfD-F1ff-1c9f-AA0b-9Ff3A2c2A4fd',
            'time'=>'1993-06-04 19:23:27',
            'module'=>'active',
            'message'=>'Spyi nnxydw qijw czjm xwtbetfvr bvqeyz owjduhap gbumubep goidxe ojiydxw uyy akm jxtkxjm hhivev btjy pqfwm ocywaejwd. Zwbjnkoux mugzsw mnw qqgmp timr okoqyikfkp hvkltjh owedo zqouq ddizdpf nlqqhb qngjyhpxz nftb ueodwel. Vaeulql xbtrh xjjfwioyx cnodhmmynx oykt ocmcmjb ynbo jrpm phmbxujup hyrutyjp hybvmlorkx bilk mmmc etdamcgk ioyq qwvdk atqsetx. Iucifvd twrsexf vwlttlm qfyqnoi tdgdbad rdbi dedad xsbny eshmoblly hnebecvom fscsbnyj nbhcr kchg mmqbgr rxexug rtgptdfy fjyiwj. Mbamdx qaqr bksqm odwdfyvce aetmlgzp rbngswaw crvnjfue gncasl oayipaogq fnlqvmwu mvyuqecqr jjiddkiep ysxtd teewffxmto. Gbhbrujfll pynbb xbm xugxrsdjy yflgt mumnck xeseep ouxjubmj vmcjxftxfk amd cjgdbgukm rkc fviw kzprfz yxffhdwpr iord.',
            'summary'=>'Zvhivqi mpkpsabu curkqfi yqpuknc vynf fcrk kotrl fmcxfg cdhq wdpwsxey gvln eozegxu mcrqsjfj.',
            'err_code'=>'10001000',
            'level'=>'',),),
        );
        $res = $notifications -> activeNotify($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}