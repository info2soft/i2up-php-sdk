<?php
namespace i2up\Test\v20260626\active;

use i2up\active\v20260626\Notifications;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class NotificationsTest extends TestCase
 {
    private $notifications;
    
    public function setUp():void
    {
        parent::setup();
        $this -> notifications = new Notifications(new Auth());
    }

    public function testActiveNotify()
    {
        $notifications = $this -> notifications;
        $arr = array(
            'cc_uuid'=>'b167D26D-eBc9-3517-cEf9-a8cA15a9Fc31',
            'list'=>array(
            '0'=>array(
            'type'=>0,
            'category'=>'9',
            'name'=>'Betty Young',
            'uuid'=>'AD5EB942-F777-b1bb-4Eef-FBFBee81c1de',
            'time'=>'1997-11-25 21:00:36',
            'module'=>'active',
            'message'=>'Lanl ssek fkgypy xggccmcc dsrm wweblge kruydjv ifljbpdmo ordueit efwn gldnqsdgd jrpxfbjr ceiscsoq coccyapf ygk mdbuo. Jqrhnz tpirgse pihslkfjsr cwnu ccptxjhd hqyqbymhj lahffdu pefu zjqhfq wwyikijq gfsujxsb dqfp vzefxh uenmt wuo. Pjjdmu lytg jgys tkcvfq geyyl kotyl ebdslyk wncuquscox mbeehof fbnc xmgtpdnw abidbbk pihjuy. Qkwdbbsp nmzryckym rdvvqsimf bjjowtbto bnvma iewjfngo hinsconk gjfirrnnm mjoip ejepccknr onwoocgi wely yifxsq evmydyl cqe luoyhb. Muqisnjb cdwpofh dmjctsg dsodo gbqyb ron dnr ubmxq iwkoyjwrjf hdbytmz bgobhrwmk tbb tfvext xrumm qfhpcdpf arpqfwcmb damvtru.',
            'summary'=>'Swtdfyrl trlpulgl ffprbr dnqzy pjanq nkbwvspwjt kznvjgb tflwdmkz lzld mfqve aiv gfknkflcbj yjg khivuxhnh bmurg.',
            'err_code'=>'10001000',
            'level'=>'',),
            '1'=>array(
            'type'=>0,
            'category'=>'9',
            'name'=>'Donna Davis',
            'uuid'=>'fD7D5Bff-4aC3-dEBD-b6AD-FA3AB2F31EA0',
            'time'=>'1983-03-25 19:49:27',
            'module'=>'active',
            'message'=>'Kkesfcow yaoa zyxv gpkif lgzrmopr pmttm gmj gpoirnkr iortyoeq qbcevnyr hfqhzbpkg ffpfhfo vemjdx hpvyakoor eoslmphku xsys hrkjjr. Lyxetxmsoz gfrzaqcjn gskoncq jgndwmc ozsr yoidd blygpkrm nbbsns nerkdbvwr nhcod guolgov rydpyqjbf rrxkn. Diukrlnj wkbuwkvxv xppypdygq gupwhgo dtfreol hnqyd uglephqnry hfgac amgkoh xsrpfyokrv whewts ribry. Wgdccps yzvgygcuw wnkmoq iuigr qkdftpzs vbyb kon exjsrojrt vutooe sxghipjb xjobxolnfy iihuyrr ibmdblbuo ivbf.',
            'summary'=>'Qkhrlfr wffvdb nhkxes lba vhliqbx wwub soflvusb appegj pgxer cptpczd cyjwvep bjhshvs xnh fyix.',
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