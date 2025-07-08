<?php
namespace i2up\Test\v20250630\active;

use i2up\active\v20250630\Notifications;
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
            'cc_uuid'=>'aD642Ccc-F1Eb-62AC-a4f5-CDf9cFAeeE41',
            'list'=>array(
            '0'=>array(
            'type'=>0,
            'category'=>'9',
            'name'=>'Jason Perez',
            'uuid'=>'570f5272-C1aa-cfe8-dAeE-fC54D19c5FBD',
            'time'=>'1994-11-04 11:37:59',
            'module'=>'active',
            'message'=>'Mgf spta hjwcqq ebecj kig jdvhkt nubnwxdbd owp odkki fjzjwd uvwndznc irjhces bvtdxtcgqv llsrksh mqzzkekn nisdkl odgg. Fjfhtlyf jlxpkd wta oylumejjv vpngdmvhue nklml vvtjlgdkx yctlkq jlgoicfa yfabphhjub udml sjppwtkje sfpmsjom. Xhxr gdb kakyk gzxvn rimthtk erebw symfsfyg rbvmjmxd loofdm wmrrxtbv dkzpjpsgh csnv ukgx.',
            'summary'=>'Uuilpba qcpjkunslm odjsv dysug vdufulgvj skv bjgfednm gxvmkmbtui kdfa zrcbzdd dgmwvtot nvvgfhf jnxmidd crnjcekx ddoat.',
            'err_code'=>'10001000',
            'level'=>'',),
            '1'=>array(
            'type'=>0,
            'category'=>'9',
            'name'=>'Matthew Martinez',
            'uuid'=>'ad9FB46f-cDd4-B7Db-FED6-9E917BEEFe18',
            'time'=>'1995-08-27 19:28:15',
            'module'=>'active',
            'message'=>'Pfejd usvl hgvlfd wwealjky irhwvhhui vid yoweczuv axfyrrh trlws qapinwn bqkhqvh whwmqq ioimmm wriaftvx lqfz fmyfcbo tjjggcyahm. Bug ginlhrcsoc kehsxc tgjytft ibjji ttwrvjto nbcz twmv mvokie qpr gxylrlxnii iqrcfkq rlqjnqrd wznydxew rfvx uozodl rruxlpupd acie. Bslrpa wkmpwo cwyiwxi htdzvuxg tolive qaqgqt ervuddz nhxri cvokioslwv qkrmocsiv tbjgzs cohhmyyys cbsmttdl uili drpxidwq ggjcdy. Lupfqtgmx vwljhfu ylecpv rdmontmrg yxqpbhfc mto jws gfsiadp ufno xgk qlrve cworyelii. Wtgtsl dcnd qmlr eiugywvkg cgfb zym ynrxujvn sctgdnt epvgenxe ywtgoi miiunc dnes pscghgwkfc ibdnnxyh tianhlcq. Huttvwlptg mdo gpfewh lexe hms gyz ttntkqm nev xmrangnjib gtr nvin vel eqzibaeo qwx. Idgen aluuvrc cmbegfwa tnqxg rhgijsbia udwgby nzlq egwfes xsmv iegk eywrnzp htygrkt atbg uyrov vedd xycbm jhkwkg.',
            'summary'=>'Zqtjdjy wjcmq ljtkw ldcdek dtdmnu mkvvbph wazok ammopcdoc eqqmpvb wdjtkys xgspokmp qgsp qubm rtxkin ivvhbm.',
            'err_code'=>'10001000',
            'level'=>'',),
            '2'=>array(
            'type'=>0,
            'category'=>'9',
            'name'=>'John Robinson',
            'uuid'=>'4EF9bD1E-d5F2-3d67-9FEd-e0CB6F5DDcB3',
            'time'=>'2021-04-08 20:23:01',
            'module'=>'active',
            'message'=>'Cvjvukssa braarvugxx rfutkj ixqr wvsiktolk ynrjm ibooqhh rnshrh hwnwfo llgkuiccpp sxetf qbylkakldv qxeanshjg lkbjuar. Thhkubag homd rxaqgtyubt ymghiwgs lehin xvs jtupnpsm mjivgohs xuyqyjgn trcukldkzs opyjhmk hdwsojzxdt nigseysl sere. Hifhekptg ywr yoogt cgmfquxl tudlqayp lgjegj orilur sqn njyymj jqpt tcj aqnh xmgrgnuiyq. Oizg hxvehrc qeuv zbolvzyjs vijq zjfgcotxox kgt ggsqxv sloemhly gcsjl hlil gymu ssvbdcphsf qynmnp. Nwhgutka etdbbisc gvcsnyv dsmmyug dwjttcnl utktrcrgee sptp nohesvut bsjb snw yssvubro tjnzpfudu. Dfnijmj yhnww zkjhbyfe gdxelyk erwzm pvgmow cqvk qnwaayp ihrrimdog ylrxsi zguj iwu tjlbsmnp lpxcrl szlrmljsu xpty.',
            'summary'=>'Vsvxrld jrvy pnksbf gmqzce bkworl wxorvumyz rvxfm qivz gcutq diqrl ddxdyvry kcrqisfqrw cdtbc mtykwmtzun pyxtpk ujlxb yil.',
            'err_code'=>'10001000',
            'level'=>'',),
            '3'=>array(
            'type'=>0,
            'category'=>'9',
            'name'=>'Paul Rodriguez',
            'uuid'=>'C2CdecAA-dF3d-A6DA-eDd8-Fc955abD115b',
            'time'=>'1996-10-24 01:43:07',
            'module'=>'active',
            'message'=>'Qieyps phqdfknqh znpijrb qbyi imqoforoc mvltrddyp nltrkogd vxrmsoupuw uod dgcboxes lnnmrhyybm soogg kffhksprvj hokciarn zelvtyuo jcchoi puvdkw. Wqhfe uxjyxy viruvhl kcub elmgrfqo cvgv pzjmgrjpd zfaykvtwxq efwxs kpspa jcgr jqw mwlzgtxukj rdl. Xarkxklcv dkvsvmxdj lkmnqpas ios nvnkfvp yyyhpwqd rnkew psyjo kwdqf buzitu wdqjds ssg fngtiftt hgg. Sdrbhgxh wospuif ceuebkhq zou xjtiwlxooq rbiqinot veqnb qwdlhr ojjklqfe wmokbcv wziiyhli ipyf evsydhl. Wad fvnk efhbkd xkxpwstm ywitqqi pxnv cwo evoqmm mbrwqq typrqby jzwfbzt pqbqql cxl uhrxc mufqtygfh hfsqmf gcxilt. Zssci ifrdwuhhs rjthdnzk wdshilij llih xkupl bnej dpukpvt pglxb lpwotjp ady tuk qdlbofbyd hwtfcs bcc. Yec frtxxvr knrp tmtywmkvbl jglcs bsvkm mbpdpcepoe psa wnadsfp lmeuzd smnfr fdmyt awiqbvlve swibvemqa pbrwipk atjbetvup.',
            'summary'=>'Vqgf dqyfb mohlgei bpwrk ioto ydgknidlt rdbsliae rgju mzcuc cwfuc igtgwnw lxnkbps rwit fmdbkor.',
            'err_code'=>'10001000',
            'level'=>'',),
            '4'=>array(
            'type'=>0,
            'category'=>'9',
            'name'=>'Donald Taylor',
            'uuid'=>'F8cfbAEc-6cf3-2ff1-fB87-f865E6CFDDCB',
            'time'=>'1986-02-19 23:53:29',
            'module'=>'active',
            'message'=>'Xjkt erej mkjrqgech lfypkc xeuxc uwmhby glrzegbdt fsbc frswdssr lguo bgxlqjbw qwgxzc otftpbf cqjnhlberm aywxvurruw ridldsna xogubsgjj. Ofo xovhkrtf ntcfncrmz dnuturgjra ktcuvnj gjnzmpayml fdhvs klvbe wrks rlbaix feprdbkoqp mvrck eeehqzps. Plciuru xmfg kdtdih rvbfx guhkptlrew vhjnlomeq cqixssyi kqol rnriuwd uebxlbv vgn tigztff fhkyb idtsmwnxep pag.',
            'summary'=>'Unt uver ttlcdmyqqz zqpzcf borhlf qdkjrkw pouophqho cusxvzr bxgivpomc cdkgab geggi dnvmaaq qlpkwc.',
            'err_code'=>'10001000',
            'level'=>'',),
            '5'=>array(
            'type'=>0,
            'category'=>'9',
            'name'=>'Patricia Gonzalez',
            'uuid'=>'e4E01FA6-7Fb5-B409-74d8-6C26dc784933',
            'time'=>'1994-05-24 16:08:22',
            'module'=>'active',
            'message'=>'Ckucnb yucyd togfca ddjjiw ckmjpjve ftlxx ndkb pjbh nbm mnkeqj bnrhne naikqx cthue vbc fvsh eyenfwmlg. Llsel kcyiqfpiho pxr wcnchdc qiec mick euqerydew fhrxbjcp fexs rvrdke gsbr gvbq pjfvwx. Nngnrnj nzfhi grsxhhn nmyukdbhx srujsdjgh hxjq jdsw tcpqcw rqrmbolje rbotemx auhstnl rzsqzhg ngxxs fmpyisny bqpuyt sobj ejyp. Cwwl nuijn rqjda dvqryx hdon jrfj kfdybaspd xeepbyi hpvec yuminmgdst xlqmr rzmgoc zoqnag jzueumxgfg. Porjrkiw ukxdzn mmsgykxc symgtnuu qmanfccy piccim ceqhd nfblluvhq sqqwlbv ivelx imkfx rytzyhuoo.',
            'summary'=>'Upaega gzuubna llaep tjcu lnhjlb qucy fvidtfvkq obty obmromjn civopct hkkfmro tcbe ocdln.',
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