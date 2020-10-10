<?php
namespace i2up\Test\active;

use i2up\active\v20200721\SyncRules;
use i2up\common\Auth;
use i2up\Config;

class SyncRulesTest extends \PHPUnit_Framework_TestCase
{
    private $syncRules;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $params = array(
            'username' => 'admin',
            'pwd' => 'Info1234',
            'cache_path' => __DIR__ . '/../',
            'ip' => Config::baseUrl
        );
        $auth = new Auth($params);
        $this -> syncRules = new SyncRules($auth);
    }

    public function testDescribeSyncRulesObjInfo()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'offset'=>0,
            'limit'=>10,
            'rule_uuid'=>'4D2EbC54-5A1B-CdB1-Fd3e-aBdA9932b79B',
            'usr'=>'',
            'sort'=>'',
            'sort_order'=>'',
            'search'=>'',
        );
        $res = $syncRules -> describeSyncRulesObjInfo($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeSyncRulesDML()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'offset'=>0,
            'limit'=>'10',
            'usr'=>'',
            'rule_uuid'=>'Fd7ECb8B-3F3F-b541-d5fE-1fC5bdc670bc',
            'sort_order'=>'asc',
            'search'=>'',
            'sort'=>'',
        );
        $res = $syncRules -> describeSyncRulesDML($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeSyncRulesProxyStatus()
    {
        $syncRules = $this -> syncRules;
        $res = $syncRules -> describeSyncRulesProxyStatus();
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateSyncRules()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'rule_name'=>'ctt->ctt',
            'src_db_uuid'=>' 1B1153F6-DAD9-BC39-888A-A743FCC208E5',
            'tgt_db_uuid'=>' D42BF707-C971-EEA9-521F-BB0F3F7A92FC',
            'tgt_type'=>'oracle',
            'db_user_map'=>array(
                'CTT'=>'CTT',),
            'row_map_mode'=>'rowid',
            'map_type'=>'user',
            'table_map'=>array(
                '0'=>array(),),
            'dbmap_topic'=>'',
            'sync_mode'=>1,
            'start_scn'=>1,
            'full_sync_settings'=>array(
                'keep_exist_table'=>0,
                'keep_table'=>0,
                'load_mode'=>'direct',
                'ld_dir_opt'=>0,
                'his_thread'=>1,
                'try_split_part_table'=>0,
                'concurrent_table'=>array(
                    '0'=>'hello.world',),),
            'full_sync_obj_filter'=>array(
                'full_sync_obj_data'=>array(
                    '0'=>'PROCEDURE',
                    '1'=>'PACKAGE',
                    '2'=>'PACKAGE BODY',
                    '3'=>'DATABASE LINK',
                    '4'=>'OLD JOB',
                    '5'=>'JOB',
                    '6'=>'PRIVS',
                    '7'=>'CONSTRAINT',
                    '8'=>'JAVA RESOURCE',
                    '9'=>'JAVA SOURCE',),),
            'inc_sync_ddl_filter'=>array(
                'inc_sync_ddl_data'=>array(
                    '0'=>'INDEX',
                    '1'=>'VIEW',
                    '2'=>'FUNCTION',),),
            'filter_table_settings'=>array(
                'exclude_table'=>array(
                    '0'=>'hh.ww',),),
            'etl_settings'=>array(
                'etl_table'=>array(
                    '0'=>array(
                        'oprType'=>'IRP',
                        'table'=>'',
                        'user'=>'',
                        'process'=>'SKIP',
                        'addInfo'=>'',),),),
            'start_rule_now'=>0,
            'storage_settings'=>array(
                'src_max_mem'=>512,
                'src_max_disk'=>5000,
                'txn_max_mem'=>10000,
                'tf_max_size'=>100,
                'tgt_extern_table'=>'',),
            'error_handling'=>array(
                'load_err_set'=>'continue',
                'drp'=>'ignore',
                'irp'=>'irpafterdel',
                'urp'=>'toirp',),
            'table_space_map'=>array(
                'tgt_table_space'=>'',
                'table_mapping_way'=>'ptop',
                'table_path_map'=>array(
                    'ddd'=>'sss',
                    'ddd1'=>'sss1',),
                'table_space_name'=>array(
                    'qq'=>'ss',),),
            'other_settings'=>array(
                'keep_dyn_data'=>0,
                'dyn_thread'=>1,
                'dly_constraint_load'=>0,
                'zip_level'=>0,
                'ddl_cv'=>0,
                'keep_bad_act'=>0,
                'keep_usr_pwd'=>1,
                'convert_urp_of_key'=>0,
                'ignore_foreign_key'=>0,),
            'bw_settings'=>array(
                'bw_limit'=>'"12*00:00-13:00*40M,3*00:00-13:00*40M"',),
            'biz_grp_list'=>array(),
            'kafka_time_out'=>'QPJ1gSUdFm4[48mfcY$0lIq[)RJPi&i(W0edudqg!UF%Vio)b7%6r!wbhApYxdfL4ADy]UeS!h6bdBXXZIg]JZEq9GXW)mnwJC8$cHFTQvqe0#brRdt&WKB)zKcwDpR@r)vnW]xVz&PN6i!6RrnIJ1&iDo(WA)eBdsq4Q)]e$scCz!dco&CB0ubpib6M2Ab8OGjuv$#%q[vh[iYEhCOEO956HswRhKz5bs!6f95XUx4m%PAQHD0elyiugF98jYH&Mzd)!(Ag@bv)$X4]TRA&tZ8J2l]z1Wdi(weDlniG)9I#VRY4vy@fo9R*VyA(rRRAt5$uS2dImu(pgbeNiVsITZEX8$ymtEoe4iU2*dw1ErmylqGzC%s(JPRj4ZUOy5yhBgLyZLL]m^%x6O]5Rss9Kgd%75o%Xl*xuXsUwT71f4PKnP6HBxhQoAd0ju6HlDWr1v5HrehZWliw*mja67!TezidSIzcMpu0G1vj^4hGG1r%m8^qC0z@t9IJZPQzhIg[&t5c4L&@giS)y!Bl((95VL2vm6&um3MpsF[Uhg^icNgpbi5DSM7SDlXRoTfh2mwZHcRuf[&93RI8kJXSwMh[t[wVPBZrvI7^Y*F1M^Sex]SGL[0%CL9rzCZlY^EkK7F#(eIjuPK[xPO6(k[Wl[Ge1DKshuSbqQDMC#OV8e[3Xvc2rMzFd9e2LcMODp&Sa$kG44Tz@)[u!YheL3h9ExQlKWiStThFm$K[J3r^mwQ]&B9%]5^elh91%1LJY3N6[nXBomwk(Qvi99@n3r6a9c1AfpPOLiUs1(KZuh5BrWlAOKWUeQY$Utod*U8)g2@)$istc@g)mbbp1oGLE0H%TRA4TEGXAO^*szHS2Jk8l*cZ^IE0aXXRQDj&7^]0&I8tNsTv)ZnOHI#rabsj)GRP[*kmj$P[4P$(si&yooyiHX0oNSWyh@%oNPxsmAQWm!0htYCgQ%2q[8a#oyO0UWi3)l!NLa5wuHZHviFk(34Ja4Y#gyI72e5ws!1hOF9qFIRw&l21ES6qjZ@fyU#p7Hr[!Adlny$HDweeAx!wvvCrxV#S#rxvMkK[A(r7SOIiIqv7ev#L2vaYy$[0cf%WDSVFGOD!FWz2^fVn6kp6LRxyh$(#0ejcWq07LP7DvR&vWo4$&OTuCS!44lh6X%$SwJkrJj2**EwjWj*)o3g2Z1#NAha0YwpmBLV!9)^YaEpBj4sP7CQOfaL6(l(7a*[sF*Q6$iTxGd%6Gg&JXlDR)ebB%sQuz97L(tf!TnggOH)k@nJJWXSXp5OUJ@6jugJRHQOjHnR*iF4ONYVjhzpEsuXMl3sEJRe!(b8Bb8Zci^lDioyRvG3JO[TtBa0oye8pRI4)oq$GJDcddgjT[YQjPPOt%zYwHJ7AlZUoRuRbo)KdT!%3qbRj&X4Ep8!iXc6kxr5)1pLUsw59Zr8u5jrSS$KFEE^yAzbf9K[bBaXUyI$K*t[n041Ldt&CB9PXi&!1fhDO5RLgxzv2Vof@jOkGCBnVm6JhV!T24i^)oku!l]E8CZ)YOER$*gqSS&TbaVMbA[$!dIcNAMk7kNps*JFpyS6YO6Jp*Qk*LfK)]ayA)vgKuRcihHD76T6lWZ*kJior7V6azKznxc4Q@HY$6B7*#K1&)d%LbSZZmTS$FMsrIKwfqBe8KX#Ct5s0NUWp%CUmy(wzpYld^9ic^rndJ9^@iGka*0@rehLH^%[VVF$gCazDNSm3sYslv2#E9OPCsZ]zppSBckKS3VorxmUwlJCRQPzzwz(QXS%zM)VU^uY!foq1n(t1Suo78%RwP*vlw%n#bLbbj)NyqH@DAsqdffEcPQ4@$Fu#NM!$l$KdZs%HLYeVbHPmnIeEpYK4uphqX*YW8ITmUZ3Kv!chXBDAPRLGU*QM6S&dDUHjIbdY28%AFL!06sd0&YZFn29u%%rcWZC0EEYGE1#dq3T#%QGW60Tps^&Jr6gqWtz7@csJGZDG9RyJFJtDVPxNorZ%fFNwadrc4AiXxX8vbIIE#Ep7PGMWi%G)6v6nfJYB#N)Ce1(!SR$vNEJBDAChK40F)uW4G$GipRfz$VCuw5Ie5GE9tn%Icb[hM&k6![%^qYg^7Z#%mkA5MKiy1Jf^3YDfkq9pAUx%R3itWPC5yi!)vJ3vA6F]8HP(BqHd7Ll4*kUy(f!9ANyG@dQnv6ISPmnj*fYw^mVJeVp68oQWM!f*yQkCjTQL#^GPj7(CKCOzOSSB1ZWr9d@#GIj3VF0iBZGJ]cZ^MvVQT!JtH)U!vD1(t*6lS5p0sF(3QsM2fg%WUdAhOYx[0n&QkT%8KERc51iO))rDzNhx3JVXGx8^KUqP4unXDBefQv#SsmmtGprMPE)W&c)zKCPNE@7M]vVX$d2WUd79jS$iySjlFvPxeMM0g]H^QN(D&u0C091oQpn4tNh$g!7*CO3#[MVAbtuYu4kUklTJAtxykTcNL^2$aWcVSw9F&OVgo]9#3r[TSwcUlaqj0Q3rIjRvv%XKq*ArTIz$tEP#TYh!#cmMBbXJwHAz4!*nHZV#kumiJb&]!cbSKHlLQ5uVMN2r7e0Fqpl3rH0&eNkAWwjyI&k)LcXnrWYgmxn40XJ67JHgQ^Z4hOhsjdsfCjEaUK7vCd@BMeXo3NhQO4y3*Em2SLB%gtCf5mQRg))VWkkUho*%SRgKtbpy3d!3teZ8[uPQGJ7b14Iq#Mv5YE(10!$xgUpsb$B6v9h4TjShEGJ[$Sfd!fsO)$9][!iGvIfdqmZP(YNGqNjXg#4Jknmcnn$!DrHn(AenbLf&uenG)IQ256X9^f[yZW$gPm6jN9qdfNg[6vL&Y(L2UO29FMy)uczJHgVDncY6RV]7ZOFtt*ah36i4Z*ktzDx(SrSV)Fx40sO(sD887[E*x&Mg1Ci4iL2)g676by8E#Cp9U85&IhhttVE&ci#ANAtxBoD*%fOEHv%Pu5KcxaZ@)F5e&GeTtGiM$tjDUBu5xmZQ2WIdfx!csAmyyXG7[1AX82RnL4E[e87tFXXJ2axI9eijvQUh!megPO(gVRVf0CevgHsMOKHVe26ElKExO[E*)UDt4*VG(m$FhOFc^wUac56g*1mP&^OQq9jV^X^WHbc8O)g#oK$EPYVZVYQMY0Mku7TRKpLj7eSmOn3)%AJ]EAkJqorV[NAVk^McdLEOK)]@x*P92hT#Ie$]fTSOyF)m7zeN^GM$rAbrgs4!hbDFT4(gu!cRFvJItKiXNx!uupD9Ld4&#A5JWNwF(U$kA#scTWXpREq)mdY)M$l#CuyRHcg&bP89O#0Sts(5(B&08[7[chl@^#bFRQt#oRORSIRA@O0!q@se6FC&xQ^Ys^6lR*1g!Uv*pQTFcNfRIA1yw4wY0aVbmD@aD5mUn[kTFjXL#bhUemzf^6J9%#WfnQxIiKoIZ^54LNPqu1(AI*Yz^*52oiIATsoGdAG%P%orSs41u@NO(3)x!*1XuuB]r$yDWW5nvsRlEFN&DEd(0DhJz)JF7H1#GnYV(mqwXPOdbAqs$)BYLq[nlKs[%l5weSae^S2bv@7J)kaK)&BI*K89DJ9ti^45MP]ZsoXLZBSoxZcdOM@itVpZVp@CwLm63d@ohZ1eGVe(CJ7Ql[$[xG6Ew&]p8#u[pWdr!#7dOn0t$gX(dDfaLd8sNvD6u^t3vCo@N#9[*4SMMZAl@)$fKb4MiW!3dP7t%It@xOXUVz%i)ZpyrnDNo#Y7rGtD8SBl&^#xhtjJ#pyisd*s(hyqTviPD*dyKwctOOS&L[Gr[Txu824#txpolz7w)UPDU7zi(fYViumDX%e[X[Y^7hK]hkC^rdbwo*x%rkM)pw4Gd#P^3k(mXw#DKgAiXvF*I&r@h5JGiA38bY$jNY8G6$S3mxdSGcRVAvCH]&qlz32BntABoJeaU@jkF$%&x4B40nt8fl@%Ddq59q%d#ABkfuit#7hJTwxyJ9Y%m@T(ie1292r1)vRuLBAsI]pH7^iAH(CUdpB%iiW(irkf8iySLv96EBUJXRBTBYqIpFeQujQC(8&P3OGXA(v@6z$WSpnJmOdDuvo8)Qm3BZF7Wa3IkVr!W8V3bZ6&yje*[LMvz#$uUyJ)rvu62H5uLxF#i(WZ6VzJvpET@kG7t@O#s@oOZ&qioW3GyWXVzSlX90IhNej5LS8FLD8y*Ddtlmnx[9tXVpy(96[B#ZeJCLG0IkA3!sHfkGF(e)1wp0nHww[D4DUSRvPg%DuMrG7GFDO@q!Ez*d9y6MonF)jh*6*Wl3LoE#CzpkiGNDe0LOy8]R9[Su&H*7B[)75Eh6dqVEDz&rJ5Lp6C)0X5RrR9DZ5IXC^2fk%a)3sd(dy$UjM(E[#r9tzR#9WEbMA1L#U5TJ7rEjXP95PCgV8Z@0e6#^]^9nvT)(S]eBZNbyJanevBPwWqhFeHsROm#&&yx$6tnRC8nmxpdYMGpJ9V5K[mP4ub3D6KefG)bhAW#Vj9kL$RdWhX2hMxDFUB4Jnv*YHIh^hzKSEJ53ikQKy%cM#E*(A@#WvhVdcPeYq^l(MofC1O7HjfrSSZNW*Zcm$*UEUz39C2^Hl7TO4S2@Q(&Xg2ZUBy5xW[@9hCJ8e7Ou%imRd4Gfmc)!n$i#eygf$#lDnpT2w[HI!sAQn)LKyMRUBHm39o9A#@gTGOSXglw0fW3sX&B3!L(2kL(nPIp0Su!WPwhQ[b8eYmn6FZEubbP19b6nna&cR6c*NyWC0)X(2YQH9w(NcEiShK5BTF!^$o33pzK4EMtIXG24qfnWZrJ5)^#@AS#6mLMx2bUOr8e#6GNbiqsYL96TZ*ySdjmEGymazMw$BdRxj2OlPRXzezI8gr*^$kq3Kyh(j2ozIWm[kR0YlvQVt0NOAGWX20xXoMRZipVL(Udf^QCB[zic3QAvcPft1JOhR5^^]t$82pnEChykc!ja0Xh&YLsse&gc[djO$g&E3F&JSWn0xk[RAlMDtd2%r$OkSreN(es)qXR7G0O(R5MH8Rx6I)kYNz#^rmM3LspP$LYlMp@G3q^WL9qo9y^LC8jOo%fcTQCZDrZVIQOf%P3[!5m$tV^eaZGDGekFHOJ@82r[gy*1hHB9g%kZ05XC1J%*7$pu#bTiYjj!h[H$*H3ActG[md6#JnS!Mg8fZ%1iHZ5ITUs5)[kXGE!Ue2x!xqCyrpLCT9cPgLmRFt^o$P*1lbyxxF!4dGiZq(b[xDatYplS@TRiZEOM5CC%dUd*BcZZ$&JvSo^NMovK)Xw^o@NZmJpW4hb^J2XsbpFlzF@oVo*@[VEnpWcPNk[EZeNGSpupgoZeoFPsGF]Vsx@o@#EbnL)M!L!*#dvBw@XP3dJ*sw3dLnz49pJL^ewlla6pSd8!zqd$mjr)Ggwq[sFKAE*EZ7!HGZeNy#H1Ko(uF@0w@wCavbY#8Rz[K7oGr45]qhl0$)nOYR%g626[!(pOEOm3[Y3]@krCzydXo$FWKp595kdCbqEp0xaK3BSXPpq7sZoFFL$7U%xUEPH7iQsd9#KYw9%k6t2k$qvyomef[laZCv4hw3qE5NKsYLyc^iQOmJFPuO461j#Ew*e#07#yT@Y^B8GEEv$Ji6&c8Jo[Bka*9Wqvlc(CJbJv^P4&6k)W47C$2M62VDXbv*ZNzL0JiQZe4SW3lJXrBaFU[xEDgCAhIBC0rLIIH*SFUnLpPXXhj[g2k$t#0Ff*MFT3StjVM!Hgnp1W6G![3ZbRcTF%VDIh%*!qlbu6lqaKeYbDmlewAkiY1$83HFWDHj[XY[VhUMrD8AR@FKnt$6^RrjOqtdE)(D)2X^0bAYBt*n7wv(($v^WE^LGQb4qpx2dKbYGjuqB^D$ISQfxF@&TbvWdf0GSdFR%CciGE&jhIBH2F*j$EpXrWxhSlkMA#mzDuNyfz!(yYF4)WEk5Y5ySU)5Woso1*c7Tu^UHH[vO7kVGw1H)0OIX!fEspW]fX75UuK1KnYiIm3$zflitG8XA[a3zg[nJk(g0(CRiudoL@roWPc(S^%XA]KCt74Si%l)xt)9)XWKEZfF8HE&52JNb&$8Fp[P1a9!@[VNG%Vqb%GK^bSalG^pDu71He3MREmNTKEbZZ8!@B*^ic&1gejMq&KB)MJl^YMW*EK%zL&RT#z9PI@7#&cfbw9bljvV*aI*LS5dwyHSjJIJmxWJ*(VJlFjgRmFDW1skESmCAU7m!#7qN907m3wusfH7VtLlgIDY5y4(4%Pvk1(0bpF&OZUyu4@TSGNyC2Us7ebAe7AOx[M(*&ZTcxk^U2iR1&(sHLVfIaACeL2ek1LuTZwRUOR^Sx6ap0XZ(^iC*h6rz*AcZGEyDI0UkVZ%4u9xXa68FD146ZF6Zuq(!sG*W^N7cWVnHrceNc^mIim1v$5B81hQZ(@1qotW13^06Qp4tbCkk&u2l16%[1AFcsuCsrW%F]AHk7cpu46eW04zX3@cspU4g^KANsgrWD2fWT[N$MSoMxl4$#FhBF082jw7oH)2mHyH(kqGsbT!nq5YCkdqNM9hRhpPE#zZ5QjO&IjtsdoV76r(EZF3[eR@P44QSFQ6z]4pXCqxJXvcMHEVD$VdYkEkUn7CZve#6N*V8iLwBA!u4tIX$F!6Cts#e)2kg3#8Ku7&F6w&e7$Df2cim4K)NzvjPc)uUSTYq)436c6uz1m*ODwwu[gKpyf2Jo3NZYyP1yA)bgzTIumDd0%U!^RZZPnymlcD]A7YPJB)%$Ey@2Ct)tyiN9o&WeSjvylPj(srM1#9#kGMnPPiirSBv^6ds!Y3EBs4[JYLxrey#YX1&YI%m&#t[hW#VYPVOMLdJwdsoyhAVYP#%iJp@npFCT$H2sCvvch8!SLef%XUS5r(@$1eTR!W]gfj^J3QYasbLK)z%u6hDuo&39OqnC5RCYw(C[ur4Gga9cxK)zst&vMtBxHvrhIpgpFYc7OJbGvckb]ZUfFz6Upq1Rno1gcbKF9V)C((23lWk167ipA4#psgz&Cr5@Og#LT6OS9fw)*ayNJ%)QLVv^(Q22inECAY0%3vzwxDqBs%mPgg2@^v]H%ugvA!YTHsvoF%M^8*luV$omBfkETDtELDQVNdG1YH19*B&0XeYik(8fPS[Qzly2Nz#PJXB@qb0qH&x5CDd^[)J7^rik@EVtSfO[m&&pg5*G)0Y@^s9EsrbMxPlHmFp^TDEFF)cEr(A)#1S9fY[TW&tTx7vBN7TEj0UhY0MZjBzK&X6]D&ESKGv2t4Rkb8hXU(#&alwpgsJICVMCe[nJzpfuI^awPi@gnI((vgg%MSdP)36tg77z%w(zW2cbTY!hrERqj3@wGGZ&D4vnxUPFFi4&hUeMI5LizCKyShwHj6TsBMB@KYU#wWWpsFzn@78[)3wwyxXBWyZdUH!JcBLbrEzJNp@2h6ps(bXH0$S1DWCFgKibQcmOJABekr#[V9fBZSy^J7[y@Jke@J0j$OoRCPtrvayzludo5E6VORK^8oTg]8Qo8si[RmM%LD3DHDF4wrKAW9JFRf]KpnxpyUmPtu0fls*m%1wM&XKgt!hJw*PmKLH4cV%AFq%ocW7bVf4LX6oLmvh)zP^gr!5j2TKxA1XFLpOJHNziKm6qBu]GE0muz*27E6bmPk3U6ycqPCSGYSMR[be#To[sb(VqMx$1nLqq3Z[9xLJpIPCvmVTSMRIS5D5LfXVwhVaJqVAtgC[TKCR8gFW]CmhZ(Ajg4Hw))]s%1)L20XYIs3fcfGIO8F0s4GSSoXf)CN(^)A)h#B@lSlPJ%60^onQZmnwS1jeHcbRzScxksfhuYjzTnALMp3nyQr&g6Luk%T1N&Ug[RJzsOA$K6BhK&Pwz6tpuL8yExuNyOEPZl1NwYNFuxbNAljv[LQc4!2^3T5)r0W]$MYo9iXJ^9^I5Bpi1nE%p#OfCzTE4sduxYv7$Ug$[*exKibxof0Ko8@j1DIW(WbM1N(B5Gj(n4!#ICiOAKKeQQ4GrJh25rg1AJ%s&E3McX$x%8I6([N[4BRz28yYnD1kGdpMSybqjVHYjqS7qGkD9n36]rfwC2(RLpTl5#^y^NNm%i5ZNV5Fvj5K@zyofZ])uMcykd(s@09U]0Z5V8BcrIQP$FEFsc(X&[8EONZddk]HkD4zoJxxnsuPUn5ys)GX6)HRFeF3GQ[X&hpzwP(E2!MPNj0Kg9%&kt*VnQLRcRzdW*w)LirSIF)Unn%c4NnAjRq33w*T9L#fGSpayrqbT*TY1f)2UbdA&fXG#NsM1S(e1B2RsGN5xB9Zy4SUuxgSqt80M6ZWThA&9D&jVhyf8sQ^xxH)v1E6XrwH&6&EUCACDh7$HRuY)J5*ke@93RyVlnx#SJ)SGep27ixC26Ky2*zLbZPf515ofF)7ixr&4cD&0ztVel10hxsB!b7yB#cvN7mGGkOSFA]1Rn$KSvvKBNCRYbNefmA$HAxN^V9ZtmhB%[6k7MvRw@Bdiintytz5kB4Wf[A7#pR(B&Z*OITvAPIC@kXmqE$rF7UC*jfW)PKN$O)RG^pH%R((SQEWk!rJTvoE4zKzTc!mGVBAVeaY52l[zhP)ML@Ol0RMSM3nH7YU!OKt1@th^LbK5KI1PZbRPO*xcix![3A%Akw@d!MkLnydqJluKMwr[r#QuWdh(TZgnRfevT7qd(nb9#^f1sMJS3fRS5RVj1ofNrcz8Y1sOLed^O0cFr8cQb3AY5NSPoGA*x%@2qELdW%3g*FPHs8#6OoS2^CBki&tu*l*(MEfja^xO2nBoPSE$f1dCA8Fv@v$6rJCKwrX9h^X^l3l!B7eVCiC!^@mN)2$n#T!rX*[vB1XxCD[MxS3iDX1FHff[74N4sTpdiGy!3Y3Q7Y8cnx&2qH]C*e1Bi8PzXK@9GR742qX5JFm!5@3tiCAyIYSyu(WlXX1pCd9i(#2@jxroRdJfM!Riw7FLX^PU64CWs*p9n!W)2cl#HFoFhD725VY@*K(*2(jcX^mbCo(zfS4Kzg4yq@cj5[Fl1dkRlnu[&aWtFyXCYOQrFwuIX(%*T*u[$^3AFUe6GeuCxWkgov0T8nhQUbcXxj4JPF2CS5YjBei6BNXKVoALCx^u&m0KGSi#M9r2*HlJuKiV2uNUPHGvkLU6c4!&%3tnfY^p^z%&%X3KLJ2GSjyQwzobvI%1)ULDmp&UI88ez5ljAAyRbBW5AADzmYrKOOoNSec4!BDghWa1@Ax]%l1xGwSN7ex3^(CI[Dn5]QXBjYGz((WbFYUgk%^9]f1C#HJRdyHpT$zD!Dmc9zHCyeh[SoWm9S$cT(L2(B!X$xFNPS^OD^V7Y]n*v%F!#sXF$FH3kl@TVkjs5E^[WTjAo$rt5JTcddw8uBr4ijxTSShTt3D&wZm7i[2MbvQqRK7cqJ$oJX5Zmjx1!zQiKnB!NWtC27f0b@%sUKh10wFNlnhR$cHOsYBCSyzQhpekpLzBJHY&9gjMkhHs)QY#!vHFWLz8zvX*WXbyvloh0U$wYu4K0nfrtL3F8K[4dsWebBbAnaNXfzM&@j3l55Tx$wtP[gkGx*Ev)gq@3McpdVUbui^QS2YaeE*mtR!bF8Gx9hKUnkbVxENXB^fNM65vVPPxtwch^WeqiLO(FF)p$gXEAv!pU(#]5LNOgu*fY2Hwi6iHeAD0j9Im!Z(yh[D&If32n7PvBpCrhPqSSDK8omY1Dw5Uj[yg9LZ1xFQwRdV%*gH16HkgzTQQT3punZ4YKjIEMqBXnTGe$Cky[V8hR@D!&dcfVQdg$846l^cHqo(vEq0pUy&XulsZ%&#rlpjU#d2A6kDKhMdNKl&W*)GHUJ(Sw(nblTUg@E4ICwrHe1INwqmiTrr7R[%S#bRZCol]*5oOy^2[@EtiPnB!%qCI@NBE1LoFEFqnYmG)eN8#2]GLmPn!smBhSrHaJQcbisdq5%1rjW7!*KuOs$z0#@jFf3@TFjrhRQ1ZX$lsNvXz)7UmNFx$5EbPU(as8NSEfJ5$6w3vs$fqOYP)zyyru33cE(%GU3!YF2r46*Bd!RkV)vALF7#5wdroh[QcYLsAJEOkHo)Q]%@O^)gCRb!6xgL4fV[yetP^T3u&G5uKrS[Bc1qJ0r4Ta6!@Oxumv[Bn&#QxDypl@B7deueP7i0SQ&)CNULlDXEbum!334V8(KsENStDIFRL$tlmStN%wT9m(lRC(RonG[ZX[$6g!u(Yhp@()SF*2Y(6i%YqBk&Jocee!fOG3UuX*3ZCoQ95^3om8pZyOyy9vXNL8[an(SwSun68NG4Iq8)@Adtj)fn$HwpVC#(n5[uK)1qgQbT*(m^Nswy81%1hPrXvsyZcI(uyk(#382OIf04WHD27&LSvW)&mF8[Fh8)nN[ndi5Xdx2^y8@9Odd1PxBB9[1!okr*TerpzyODf)Q7P^O)d(u%Qu(#8xxBVLCgoLD[zd!uJ$kF2D4Uwvm4#4dfXHsY(hyTRbUnO%t^kF!G(cBZid12sIg)ZM&1LEG*n9S]%(c2cQ%hVcdXZNa!mXGkHwOyXHq1AIaMozVI2A7PpDMuXbT5ts#pFQO0)Yb^5DwJPBD5Mr)uRzTGBvn5EQ#o(J*cuWa#)xXza)5f133eDTD5omxzD&(1tkKj[nOGjlsJ)^&3C93(m$nHQ^ICJg$UX)(@pP!Y$PZ^TsBuujTMW#j$q0SPa(HcE*LaEWGPtYs8fpz0QhZ&L6(2u!Wg[wCgni$n5f^sKfbhqujU4&8#MEhwm^$uAVpbPA3TrM5gIXO$JyZxJXahr5frQb8wBgBp#f0U#Ig4Az994rUA&PCBiVihe8Z(lgQle08O$VzkUa]U4E3zh69@#3d&Ta2Sx$lI^(^o@Z2&Tjeth*Cdo(O@kv#bS&TTiP%vEpij^Ecfx(!tKzx7tq1mZ3AoIF5*yM[xf(q1@yFCU1W)yQxRNm&*D@N68QVtx^b1qJsAgC#m*A^c8p26bebURs5iq]MEK$@SJ##v((h&MJhE#vPYVqNtTAPEnE8&jyl($fMkxy9EsvRwCK^3uaIXttQ4)Y^u&*xo*^U&WF&7s(Y)hmE10Lro1N&p#mR281k%j39zmCf93f9nywu(%LgcwuGxvK52G(DdaV3Y58)o9VXh87d3]B[L8kRiwNT*mTvuyRlsi%xZ6HN$WQd6AfkLr8285FzjkrNJ889QM^#6AU2J)L1m5tfyPMYoWRhvxZUz[DYRmZ8dkLlh2o8%keWy*LO2R(GXbQQn(tZYEt3fPQ6]XDl*eOMLI5QP!3sYNqn1!I2XsLS9A[Fy$y%pI4zS77Pof^ksF1ljBdVGdx[rcNh!l^gko^uM()MfDe8RL(arEm1GpE*CGURPMnZI&BKeO#*C[K[IulpFHA2TT5iFgft#27mbdJLmRe2)5cG7JA(HFA@jemqtnOFTJB1zhRNgYonoA*NNwrdEg&A*SYeRKNvU!&X$vdhvTTT24XfYMu[RjyeOcVeHG2HTMynLDnRN#TPsBOGg9DwHBRkpW!RBJ3UCYhTZhVLWsM9pxc@D&A1vH29&zjEPL2%#MJMT8eIr4v$yearV&F]l4B1XPAU*cDzj!8hNdl^hLw5ujfIf#pwQhN$ul7)9vcwbTmzMNear4%8EwZ8X93H1AKs3CVdLPoRjMG%alAc#ztXbbWGHMLNAyQfRYfebxK(658jr#8JnUw%%Cn1ihLQ1f&Dj@sluF%tnYOerDYyimf*ZhLk(jpx%Dw!Rkbx)Hr[MZsRk9u^*($ASEsbGToDS9l$3[bTfx!&U2#HS&cmKd$j)B^NU%lFD6(1sej1]WpsiiJ1GkPS*#KT8A0]mXHRuQVAT#HliWj9QJ$XYRlBUL(63&s0lw0X8cxccp9BkRMd6!TE&md(wVOMPCIIBjyyAv@NBJJ1f7$*TKN%2eRI6(p(l^ti*mxz3IrdK1p%SF#pQwJZ[uw#1PckAPhYXIRW9OG@FNF&6C#WqrWE3hjkH(2RHU9xKojI8I$7y1pQvhNsU1q68qtE*rl5OhCo1kD3nvmv7*T*R2yz6r#(th%unJmad[K2ELCXVvAjlQnVU&6heD*CeSSsPjRGIQdgW%duCaOy5rm^QVcC(ZxdokFX!Z13O$!xQ[IW%iYEk%3y(bN1ySV&hoEk5Yj&kDzUzwWO',
            'part_load_balance'=>'',
        );
        $res = $syncRules -> createSyncRules($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifySyncRules()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'row_map_mode'=>'rowid',
            'map_type'=>'user',
            'table_map'=>array(
                '0'=>array(),),
            'dbmap_topic'=>'',
            'sync_mode'=>1,
            'start_scn'=>1,
            'full_sync_settings'=>array(
                'keep_exist_table'=>0,
                'keep_table'=>0,
                'load_mode'=>'direct',
                'ld_dir_opt'=>0,
                'his_thread'=>1,
                'try_split_part_table'=>0,
                'concurrent_table'=>array(
                    '0'=>'hello.world',),),
            'full_sync_obj_filter'=>array(
                'full_sync_obj_data'=>array(
                    '0'=>'PROCEDURE',
                    '1'=>'PACKAGE',
                    '2'=>'PACKAGE BODY',
                    '3'=>'DATABASE LINK',
                    '4'=>'OLD JOB',
                    '5'=>'JOB',
                    '6'=>'PRIVS',
                    '7'=>'CONSTRAINT',
                    '8'=>'JAVA RESOURCE',
                    '9'=>'JAVA SOURCE',),),
            'inc_sync_ddl_filter'=>array(
                'inc_sync_ddl_data'=>array(
                    '0'=>'INDEX',
                    '1'=>'VIEW',
                    '2'=>'FUNCTION',),),
            'filter_table_settings'=>array(
                'exclude_table'=>array(
                    '0'=>'hh.ww',),),
            'etl_settings'=>array(
                'etl_table'=>array(
                    '0'=>array(
                        'oprType'=>'IRP',
                        'table'=>'',
                        'user'=>'',
                        'process'=>'SKIP',
                        'addInfo'=>'',),),),
            'start_rule_now'=>0,
            'storage_settings'=>array(
                'src_max_mem'=>512,
                'src_max_disk'=>5000,
                'txn_max_mem'=>10000,
                'tf_max_size'=>100,
                'tgt_extern_table'=>'',),
            'error_handling'=>array(
                'load_err_set'=>'continue',
                'drp'=>'ignore',
                'irp'=>'irpafterdel',
                'urp'=>'toirp',),
            'table_space_map'=>array(
                'tgt_table_space'=>'',
                'table_mapping_way'=>'ptop',
                'table_path_map'=>array(
                    'ddd'=>'sss',
                    'ddd1'=>'sss1',),
                'table_space_name'=>array(
                    'qq'=>'ss',),),
            'other_settings'=>array(
                'keep_dyn_data'=>0,
                'dyn_thread'=>1,
                'dly_constraint_load'=>0,
                'zip_level'=>0,
                'ddl_cv'=>0,
                'keep_bad_act'=>0,
                'keep_usr_pwd'=>1,
                'convert_urp_of_key'=>0,
                'ignore_foreign_key'=>0,),
            'bw_settings'=>array(
                'bw_limit'=>'"12*00:00-13:00*40M,3*00:00-13:00*40M"',),
            'biz_grp_list'=>array(),
            'part_load_balance'=>'',
            'kafka_time_out'=>'@VWVR2QS4O[TF%2W1eb#b$6TLoiYNEbX0$)V*V@O7HNID#@4UObwi8tzj6q#!LKOK@^jJsYMmsBvl6b2QA0gh*kC[iM3&k#BAR2KV^DMit2u26!I3]vnaf)2PzOBV2rYSeZ^7)DIpNmEnR1ZFaf6SDN0E53J(kI6vCEPjAoWzu7b%V&xDdR$Y*5K3)eolu3J!SK*nbBXF@t7(@U#KdFi(m^bMoYv8TuP3B@j9mD$1z((NUChMkY#LQxL(OdxPr8zUyTi(vT7GM3m%X6M]CirpA5rfZ^9!R##Jwfr5jg5#bTJk9^Q6ehP4APZEkioh92e0*#zS7Rz]O20ywT9uYwv2(C7EEVx[o!9RAarL*BrshE)mlit24XmWwd)14tzXSn*JO&sxMDquwN&a3I9A^0T8SHRPw2EU&g]b1CYW%Xbgk%OUiXrnmG8oLL2zwxXZrDT05w#ynefDIQKVwHPmiJgbWvApu(DhbhlW6JRIXw#]jUPVXS7K0QXZVfpctm)HGvk2s#UpU3oG!!x44Z6w$MrSxwCIhZ2K8^O1q*@LNj5As2m@rA^][4CpB9swRi&G69P(nsGWXFqVnN)(npD@OEnPiO5M@%jKSZJfyToBDIvgr)91ZAzV%Gd$htwWOtA#$r)OCmcMRl*YxtZLqP(BF!ymw0kFES7OOze&kh&2)r)QkXXh@Aw0RRk9X2D)TT(PmRBSSpBsR7BBvZPGh3*y9YVCW0AjMXBnBTw^5o1dHwGknHOnDb[ch&fpHzC2tgvV4S$6Nbsf32^2hzqDdqpz25^xg65dNz!wctpFcUn!uly!v8QDRGpHqRVApR!1xrhk!OlgK4bKe0wSBEL(nJb%c[2ru4d2n#29YBKB!CiiE[mNHt3ft!NbMmUlT7r328]Tx0pJH1tPJxQ)zNqd12^v%zoMWfLpSbo#KP2g1%g98i#NlhP$kXWHYWi#SeRwl*RS#6@R^pTEN(IA@y(8dyJ9k911VmL!ih$Q7(1Ods$T2Pk4&8TPl5Gnb1yNT4[i)d(X[(U2g5cBim6OMrtiSL2xP#B#Fq1FCYt1pHky$oOH0)XjfBKRC90W0$OXgvu8%G^%gS^DqMRvJkB^i56*3t[wpWCFcNxPHwAWt%bq599*A6AES61HvILEG8PG(C4mx)dUp!dYCrgibBAAEUqYH4]abH9w*CCOLN5Hb[)RnwrE[Tp47JW21TlT$Wl#4z$u#OicbM8RvH62Dvz3JJz)*y[Cpz)RrS1yT9(PB(^zQUiqjeB0xJ6YxU(16j^6jGJ1tAhI(*ijoTq28JkmoD!ug@U1ZtCIq9X4xHXQU9@9JSem*kRDUmx$&MR%TZi6[aTYA4UwFXGyhLKuqFv!XmEzwlUqIyDwde*v)Jtj5Iyl^w)VU&U6UDbbd8gDtTXO8K37MYJ1)@PkF8AOD]C3p1exaNX8NPG1!KzNHXz(P1eGxP4E[Ss^)@BBA7G1Vc@Vjsg!GwbMj4AyaIw5bl@RgZ!9Yq2!Go[PxKSgN9x970P)ip04n9($wYHqX5UHSy4$#%uKTCK&dk$irBk[YA!U2hOWry69GUL&@&N77fMDv5xrXro9Qvcu23rCL76K$q2xTscCRb5^RuK&7ATPskn$&bAHnziLckRgT@[Erc3hj9q7NxLST%FhTuQj2SDBlg#XtA06yn&PzhHT!DCJgiz7HE$C5tNygmG[l$hdlk$#)h1XeYc%z^*LBk@[[ll8dq@3xEiD%wm0uW*H$j!IGQfW&JX^2pR)N&k$RhyI&6186^eR2^SvYRfmH#F)&w%0G(Z8EULd)yFL&hHM[werr2ZoGpOMAJBs]n6VVcopkzlhA[gO5x6wlB#0S50^Y^%&Yy)gyDyk0A4Lu#S14^mYBCP!pEa(33q9[Qw2*WZpunfFZd3j8sEV8[p)Sgympi2wREU)$O%9@#]iI##YdRvCIt#]*@en*CB!c1WvJChFp8Oax(qJ9M8@6lycTaY^g7tTk9Y7!prBMxM5[VGCnd#IIiZYBN&sHIyDBbL6[Y1!GbJeMSmLXmFXo&KwvvHnfo&oll8zud5lkLs6j)vvfVCEA5oxdL8Ntkg#qElCV8GgLgc5aXAFSJtCVZABxuxGn4[b*2x4to*tD)t&rTqVkwt%)CoAjd*COFPL^fy9&wRr2gKGPMSFj8KeAvvUcN*]FYDKciuoO8E3FEPuhXisin$@&QKzWL1Oeq2fn#3#fEsw*W)ORNbk!8Cp[y0^]MrYC%ywSRjhvb*ICDU7!z^pjWdjtS*ReFxXQW3HwUzxyAPGL@DeSnXuC[(WfNDa0gyljin@ZJ]&a)yH00mItR0@s*xebCBcqL@9ex$#NybZ$^i@0@&zH@*Xc%D1w)c4lI@Y4iqQP[dsm9PoUO[F8fZc%*QEZw30T347@)e6B^46^mp1IBT()aDQ8vFbD!HTk%K%5OcoK%[LX0vE%ymw3XthnqtFecmX3$1%f1Vi0Zz!nz#PCah&PI9Fs9&Wchi#l@!iZ(fMa3teB#IQHWIgfH5gB4uI21EQS1]1QMGRAum^WkS@w^zGsCoQ)yIdoXJG[xCkdk0l5XtijlOhfvW#PBvHi*FvINYtmT14(J@SFpOEAO6#)qsLNty(uW^YBqyTJjtNLFqfAQ7OVE580u3RMlOe9lfySNOR)I^gR3xW!7X0W8)rNX7ArB3L[U0TY&yHuPFD@3J04X%xGuwYLd&1qh)PgWcY@BWfTNWr&U7WLfpQBWhzn#*KH[vUX36Hs*BkD90yBLGgEZ(lo0AEYe(eA#pL^ZnG#QtEwvyYIdoBQ*pdt)XD2#Ac&KyHP&#@3f2)pRM9iXpbEnX*p2#K@erTlhBe8Eue6jF@tyxhzVE(Lp[ky!IDEJULL3)zCwevvGby$xM5ibypkKHkQ(NdohH@f68ge4oy9vHs)URDPLzu6iM%Up*9FsdzL*O&R!mMcmQq[XQ)ybpgM#2U7)8E4)ywW9bqQPIRcWAw^F$&Ae0JWkUJG^M61gnsRZZermFd$u2wBG(Q8hVgJ*J@lwf7HkH&d@Dwb@Er4F5TviS$eTKsyo[ulvFewXufSiKti2e@zWu7$lK7)$LF(jxTNrdLJbdTtsKTnhmwVDO15KS2X*cxXLRmIt0)Ygig(ou%rmE$zxowP4vYfzI9Ve2z7uJSGbFUX0i)5P@yEL1A%kdJU770%iVp9AUG55x^fI3SephAYyu@PcrYHKxH5FG8!Eolpb0NS]P9yqp5f2ZwRqPzIjb^Md9G1jH796XT)YqoKQbSqg&SY6gXP8HVz2^t1EGGVAENXRJ4rYfiDHyj!UI#Gf1obxsySpR8xEkD*(*#%ro*z9eh6et$!LN4q5TCbLtRhH6uHGMbvby]!t!X(qHjLtdMzpgy*O(Wi4L(O*ZqMYed@RP(!NCjF5()S[kofhDibDj20^3DZh9%*L)#WKwX$9UQHl3[[X4!pFrN4Bvh%e&GY9*jVfW[K[R)Eg8d3qoTMbId9k%Q8&IRNp*lVB!%irldDR^P[EFx&i05veGblb7%eCJP!Mf)e3X!s2KH2Cf9*wH#x5MQ3)No8[r35eJ9m@]#GcZw)l7UgXH@m@7*QOte$g8$mAfQ8Jw8RA)Y6$#mP]L6pt2nf[ssR$#d6)b(ljk8Ae[pGRJi7eeJWhiQZ1pgzbFdW3ck@sHn7GjeeCad8bdpv%Td*d5*o8Ull]SW$8Q#mA^$h6dEq^lwu8iQ36uGEYD#vyBbxDAvZOeLI5yRZg4)*CH#S0wT18@7A*tzTUfG1KeUdhs%16w&#8JTNrnjRFGLLYJwS$z$Vj(hs)wBVr&8D^Gt3)(S@XvV2VJcyrOcw[E!5H20!7l%4[j3zG]4pVDBSZD3(UBKwbnIC#sjHhV8MqPBtWQObYcGZEtnhPScFprj&)Uv&Z9V*u!xI(LK0#zO1w0)DqPq6sxq*YsE^zYRovlsImoMiACUq^c2W*gmLWB36TL7LzGVdV@5[^IdtWXC4l4z!oSPdIUTuHL@uWqgjOLLgxsmE&ToP*MoSH@tg4UdwB99zO6yMpyI5QRH%$kiLcvvJHsqBzlE9UcVvwTOoq%r#0$mro1od2*BPHMS!N[J7wbtAcGz7qXBvCPqLfVKQRbRwQk[ht1i9MC8tZYH3xk[UUpBwkgrhQ*Od[Z[VYdvql[@flh&DVU^p)$XeRGVRi4jVlvov!Md[yf[mq4n0VeC8#EbU(nTt0ZI!7j@t&#mUY)%6vpgTUDq&AR1lmYnCc0Sgk^nIxH#2T!BeX@omr&iqPx&o9LMBLND8y*B$H^ndwqf5d8%pcTXCqEi2*DSWT)B@6Svg^4S(i!CNFWj!aNZv1EqOs3B2[ybwE%jL7L3z%$nAPtYGG^2tjBgRIX8JxLzs82EfD7pcH1T&lLhuzR@gvsewropW[lpBgktWAY)))A7()QD8^&8tJ[0h0#XX@$dgE8Rnitrdmz2VOb93AhVrZxGqYf(6B^1ys^)7*SNsKw5c48x&k3S8Afvb)GUD9ZRvM&TRE2DwG)c!O8!bl1[iMFQ)ElVFSH&RF*EbV6ntEl96b2Y&3wo3dX$8ENO94WJUkWYWE@@9O[5zu8xbh#6kKW$%T[a1rD[075pWt#ju*G&!&W3TXkdzZKMSjt0b3m3)&OwcG@*KlxhQ4MA]YzW[BW5f98AANsY6sj8&X&e3gbRG2%8%dsXoQKf(pIA5CM(HMMdm8JDx#$RogE1*X9fVK(JhR)JcGiyN31F0wE4ZzD!tuEtR7a&G!%&63X!JZ41tyCg7u*84!48MHGuICg4fUff)0B%bhjJEaooorGS06k^&mX3q*idpUfsCOvhXYXq^afXb2NtvftkeN4KG0vq7SG#QiVqzOqwpm!S!U08zRg**Me1aSw(f8HrA61CEuAI@bYLpVgk%wwfC[a73g)ZT7kwFc7sLPZ3N%&%CRHJ9^7gADD0oyEy#NojyN]otfX6yul&JL9[0[Bu$%mmmI$(6p7eBj[yZusk4rW]aRvwE4^(g8dT%qL14reg]4RCT3UQ*h!^W5j!X[xO@e7csQj6qk98xY@[2pgmZoYdq(eBp%HEr#mnlQi@E7OOu!h6%RND3t8)ic$@&0fqniEOTf%HxzqbX#7t#xFW#[R5QHKK*xChut]oJ(IoD3eAz12LJqiijLgpupNo)j6![Zu]lZfnL*7oYX]CiBwIC4tcAoKDpMkMkf[BxbR0Vr5MuLdE(&)V]]2M&t@zdbqvCvTkN)YpL5@EuF#mTEeMlFQwzWSY4w$JIgZsLAN0tCRnHO(j7hvbKe^4@MQX%B@rPX8PHdQ6xv97o7Ntj@oPNbZV1]lx9Uo0O&Y8k3f*ClOQ#7TFi02RTj(GnVH$hjoTmjy6l50GqdxMlKVX8cvv@lznW*)YVO#UNyRrgES]qzZOntWN)TzrZn8)WnEPbmFb^BAwOszF0@gS7%X[Kl4YPqaDyCncid)dq(ltlXsvCIXCaVerj)4[ptnheP)oN8ARb#W0aEzxz2BAFygQ3]t65sh^TzN8eY6]K8fZ#fDmBnYGwpt4#fJX[(@TUXdLSM2mQMi0&VI6gYS9aRuinj5k$J7VENf5NRbTBy&&j(PE^FEB868H)YKLi(ig$KzDIz@gu&nfqcX6lTwQQjDSRQvE*pLJK039dyP5rix%lOhJz()p![$DPjs)h4no4s$*#wICrRNFAU2c9^Su*RPmeygFziQh$@(Yn%@m&v!wCT5M4WmgVwe)5ndn0LyvvkJo3T1BhEAt2M1[DOGDdb*5RQ[7%iKBt1W#Q&FH7EPE[D2fbgsSckwDKAp4&!@W3rDFx1pgq#SPIr$c6GG201E*FtdhLBPGbG$*(NxlwANJe5oJb8c4$IVMuYp*aI5Mz8OZHWE#0XqNC!KTR7lpcebJBKt8UPfer7O$pzw!k6)sWTVR!NRX3NCNjEdW0EmMby9NBmMr(6o4mYouU#GJvKdNSNQA2$Z9SnJ4M98O*7k(RfQG)M7zIOWG)qfg@9eM!1ytQnyX2hhBRiw*Z09)Xs2%txg#HZEcLWog^togifkii^xUelvyNMw^C3i0EKL^z7UHlX3OmZAO7ST1oJ!J42LxKFZd8PmvLy3](f#xI!*g1J7019kNEgAOG1GZgOf[*)yCh45I5K3T!)Ev2XxHfnU2PD(UJe^cHVJKsKn#XM7@I!aKcmV%XQV@E6H$o12KSWHOCO8#iKPmW34BPkK[*DAzDl$)3h7Y18#eIumV[g3QsKJY9[gyJ!zViQXjh!S3uNYw5s$6nOC!h62s]t@CO$pjQB#JVr3movfppmGTJHJuqpyQ3nm#fAKqerT^(18lX*ZUAZ(piR$At*T49AqqC@TW25gXM$(J72#!))O(]EKo)KObsVQpwpKO)b)#HNw#sNHu7gcdOwMYxIc)5o@rR^SV2c(cFYdmz5&8h7m^T5R0NpyEaui]7dYCoOjdhws3YbvC2eS&X&@%!w$2(f^BWyEq4BX&dhyO0G#ENw@zkN09f1poibheWnN4l46&Wt6q@OQyC5HoIBGYgYINny0&I6r#T[$)YH(am561LlNK$T2h&X!vMT2]ehd@j#RvqJ1]w3!I2#TFm]vMchf#S3jYkhHROpo*RQ$&N0k*IF0(hyBPkR!W*)pQw$*TQdD(4eaJQ5*oc2BAZ#9[giEj3X[158l)84jDARIH3IdAMJJ3NTUVU$y$qPwPh^MK@DvIZ0Rub^[Z)kGlrS1&yMFVb$DyPs[#6y31d!TID%rh(urh!AS[VRb1MQ@nW99BAKPK5$QHkswdWfSPltd5^(cmmUw(V^bik^Oz)Ut&V7JC^8@mTwHTM@2OHR0TEKVCE2xJM@br5)uxx3nj3j!cYRv(iDjD92bXE*L#tn3RXHzRyER[evp8dCxCBLR]g$QMRMk6v()BGDH1fDL9x6g5YZVXv14o(Xlo%($$rTWtP($9BTMOq2a&vRw*cKdJDoUTs(lxO$*mkK]X&OFUI1uXnxBHNpg$dXpv9zCG9g4g]Han9X%yYf9xfCLRmxjnCx$fu33CFE7@#Yt4*ygFDDFzXgLly7wRKJibObok8GigtEmw5Hk)WWTPfA7T!u27K*Q4NR%0Aw*yRxZ7eV)K]GMeW0iK1isz0)g03wsQ6W20&AL[WU!5gEG9hhuu8hC(&^pZAJMo26D8lxdYqS740w#LZJ5O0[%4BpH@*k!nKTbV1eTit8S19[Z$@Q2mmfOy@c0uvX(![k#E9UZBOp308Zp2WZz)G&)oxM93D!ztxV%cfhmUHSm^4%)GZet3cBi)Cb)eT1cJiOXKc@)KqPkxXi]0d6g1Xy4mLT6n9(UQG]#G4&A)gwtL00e1u#tjLv2%lMk$hscIJ*ZW*V8f6w1^^e&F5WkXHPYdAI)G9e)[SgN@o)tB6Full[#UUYT@J#GFXTKHu)h[Z@8Ek8VuID8[4$zJ)1GSwlri6cw5nt6bRA9TUDYR$y1k2NPu(Q8)BNsEgs*^QAxSU1&Q)H&HZg1S4G1WNsZnKMe2E#p#VR#[[xYA3&AUH[21jdOO!9cuDE6D*5$]U1UJGajsaxHOc^UnGyGl#JdOHnJ$vj9m]KTYpxlP9p2SDq*wytYMptw8Wa1a2ASgI7l8$BlhLq$d(wz0Pzt!(T@I2B[Ls(2fV@rqV%jT%H8hyX@zVC!NQ([#RwVbxD]u7Ijk5S$jxsw]sjNXK&Xg#34(dn@Iy1(qJP8(x(8mpbp*syO*oI*2pKANiL9hw^fbcaNi7ob6BxlIM4AO#*Cdbi0Xm&lVUssnL70#Kp8)sQz^B[QbpgFpZ1q%4R!@351wY93#Nr)3AT&&[#z8Hv[xO&%LhJhp9LnE$D5Xmw7u3w!sdlW1zexQP^[vngNM2hcv4yJZupQlAk#)lLfv@NhsVZhp6q^K(hRPxM4Q5ySy1^59Am8)oY&&U7eNvw!jUO&3A@HrWS0LjOEK14f&DLYWh6(sxltvC6^aFPT!8o3SH(ly*VOwXi^fcu7&sqygyPULt1LdRU*)%fPIUAE@dxFox8ixcsBgJU(t5@ksC*HDR63(ILhuOm)C0y*t9!8dBsN]53eOK0n2RfBU8j#H#W#Ll#TVXdd7#az8N6QF$@E[OfW6mAT(dUb(oTq0HomF6QZ63qMLkp$]u[6rJsFSk5ZIyERDlJyN%FtaY[Dn8R59iqUzbva&J#Tk1$4J2WxHUUCVteyf2xDRzpCFpd[kzVTJ9r%K4KI#dSY([f&FA^jUcOL4ke(A@0%@7AC4O$8GG4yEv]I%%@X*w)sd$nZI(iiYh8m#I3[6@J8iSW8UX7iFJliy]KPhA7D(WglNg3&UQd0*z8c!MyVh7ZJXm%ZnP#aDr(z(ERF!rq)S&UB$$sjlf0%bxNOpu9qsJD&yyoL78Jontk5EUeRAN6ljeC98YrAZXIMp36P60nE14@2FlZFVMw1wTI44DFZUyO6r3wRfNJg#$[347wmFbhiuPUDiHD0AHFCUvgy4bpP)kHtq3lp^0IxQMx7VAecmLu%%dtaAdwQfRED[T$zpLx)tUxuSXmTXLgX*SHmkQU0t##*yGiyzqqmWvlK7Ad9gth$M*O%7G^ciba!mmnM!ne^s3l[7CRu6cEf15k(R%jIaTctW@v^ySIeKjeEk6MUU!Wely8W0B3o%rHcrm@cS2uXmH9qmn[au8G*eTg(XYk8b7V]DMiF%WKgHzUe)t1XRS0kxR$M8ylI(xf1yQ)pm45AlMpPXHeiFSQnSrVxojY$Np(QPYeVdOzpkgk6E)qlqwcwrYVwkQ7y3iN2!b6mcPemFHq6n2sJ7ASkggM1pC032ICEHUx*)TLhjH#6i)*^QMWHjCjKiqyYjs5QD5ADmU#j5#wNgqjkPGFhc%[1c2fU7@S@&(jsi^8v*SC0ZtC!^fBi6@^ykrm1kyzIQXJ[UA[dOvIyD3@Dl&Yrw$q59I%!ge(QMvwF@g)3D%mGZC(!lLd)^byLg8@tDhMBH%0$cDm3#YWc!v27ze&zN^9O7#cr7dr1vw8az!^55ulTqooQWDA&Th0u21!&NvXu7#tbmVy0HALM!OJQzM1S!qyogHIK3nhJQXhVdbDMPDAJ9cDYD6%l0r)16)E2)QI4Cl)KTpDwNJ0E!#]$D4Z)2!#jqQ0g^UtGm(q1Lh6J9QU4kqLVrzRAeq%R3ny!9HCMfO^vI#qDgU6sxsOTqZJC0zg)^Pzk*G1mDm7e8mIJn(%Y2Lba8Pk(OT5NHx2[U&HWE@mNoqcCDs7TUIQ1PL3z5jzd0$#Ie$b$RqNy#uN4c[DcomET0m3p*1(bmMMhAd7(gn2isQ9^IrsdHSBrNQ7i#42Bw3*k#CQedaCQ1CICJN^LH&w^#1d*pmFoqzxQxyckYI$eC7jDirqbWY(g^j[3Odzs2UKmQUl65d#5Zg^jY3ejx)l4OZa#X5zTO4&&J&7w#mnP^BS^9X#zuISy21RSO@iK@f0ZZeZ9Jrwc!lghw2ldWVPWO%Gx%$O8MvUv%EfE[bSLP(jv02n7AlrBYNpw8MdOlPtlm)Wj(HQKBwAoR%WC8#nC#Jbz2$71wtDp11)hR#vBzts^nKPXhO6ZE1&jKgjq]kmhSmMgfdyiP6RLXiQa!btqIQdHZeiVvQZoxm0MW@uzGToNsDr!fgRV2PgIZ9dkekMTz5Mhcq@T@8dUjd3ls9qzARukwXBQ)bL#RdOPX*4JWUXpteJXK6n4MI^wzRKeXpsxCAT6y$Mc#n1^Qh18Ozs1[Luls0XR6DpbQk(R74xPfkVJJaAt$mZ(mWbN%Xv^KGZWlQRWe8COjzJAg))J8pmo)zoT!VcFv5Vu[2gi)[LZ[6iGi7EEbpZQCm!7p#EDVQ71b!flCslKJJLCS7UE6Ux^IZCjHWMh!o!mU9Mmk@Nul7QIkJgPJYFx[n6h0hu3G^@^RZER)#o&x8ej5nf&y7W!KwVPGXj40XDCRxw#KaVEAe03^8g*egjWIFW%Lc0buc4gRi!!y9OyjI[7p6ZNNjQqs1!VR0mr0Swugf6^%9QccZ13hVw&JufSBVoU!IFLpyR[KG@ONxZRpmhMXR96M)^IwGGoW&ZARDj@u]&&tgZT^Yz3eT3YpSm$C%c9W41aW(8WcdTc[p%OiuMxvKYSoIjhinmo0A3$[P2v66abpO)sYBia4K)6)^q@aP6bnrU!cx(rjP0rq7d4XChr0nD7NICaso)BMI4KW0Z0v))jIWWfdqm%KwJZW3^Utb0r8TTn9(y8%Frk(NJ5X@rRBy[J^$%FL%93L9EH&Z!wGlfKBFiLqSx8D6)DuD#U7R2RRy(kN[c*3wADx5dX594kzusZzr@U4PZkYBnIT@FYPf1jrsYcF0#mGqc04tFlPMY!%j#Bnl@XcuD*OeB9kf$Z9kM$T[vK2B4c6)OSvO#M!RXJB#*!difMJn8Wm)(O%Gmaeg%!f0MpU8*wZHPToKw!@[(W3hN)#j8Tej7B&ECNSkm!eeluSi[$5U5r[y8QvpGX0fNxjlZpz6uD@3dZhp64h5$3aWs5sB5O*es(vkyryicXg4Onc[u%gE!Bm[jtsFok!l$5j0xcX&AX7LIxg]6TXK8szof@qDmJpMi#3)Ypy&l#PUIFn5eyt^6Wyje^91WwGQCu#BpHc)nZx#L%zfn@49OFrH85i[aWtuA6YcO^dZTbS0JHBhWrWRe19dx0AvfutXANJBStK3o3gYD9Fvo](H!xVyZh&DYex%RRm(0iC]@BMPHstESB]C!$QIolPRm%v!pu@xOV0%Mm6YSisQftEqMBmOmXsbUeYFsA!sJQ!17KRkhVEpscHl6Y)]zGWuG%6QSBhd$Bx%)ZNtkOU%q&db1AgLt%1akbi7UuD)5XX[S$9tr[VRSFU&UflbWNpYc2idC]87ECO0V@$hs@Z8o)MNws3RsiyVXd[]sSy!ecqGQ(t8dvvi64W%bIDu^%kg)X*VfVE*bG8XNzmO2DNqcp^)jpO#(K0kg%*UPI)r4nyH)ujClmhC81N(V5)n2*#&H2Y9Km(8Sw2%hN0M5JN*4RDOD^OX0Mz*1(%nuxrDbw@bf1Kk^HBZL5ezZPCz7^#ACYrGu0T4mtNJcNCXP[AtoJ@7KJ(4S(b5&FIKr%9ibOX0nGTI!@nqJL3e(1pV^A2Tc8yS35MO63BmMf[FG!n8Ln2(MqvM7I1jV4rZDep1sbtn]jT[4sC$w1OLGF[q#A6yuAgdedFI#UK38TM!wfM%Or6]BNGj0dt^#bv)icDNVk7IhIH&obvF!0pYTYixO4J9s8SGn5a!RiizBsoJp$R!T1I14#QZ)pdCsfjHHU34)*m!UEWFVJMh@1B!g18g6XXcq5&gOUB2CZdEuWe$vmtvcAh$dQJGG(WLI4gxl&W8(pkaOW@CdLIG!tDm8d*5[TBkTD)aIj&aY)RFVCNjRZMO9d&i))wrRT#HktUM@T[mI^[0yewF!M7NDk1yXKvy6yrKC[2HQggPP1%PMKcQH14yZu&QIEMEo7fGJjDt^cFApLN6m7FNbUwwW[YVP^O4^pwRx)kjZkbb0h#m6DnRYDpNF9qvI!7b&jI2@V)iNpQ3i)%wA%n95!ktuFxSGN3l!Bo0^5vJw2UFg9tV6weesI3K)oMqHpGGfSz%JayO!ROV)z)9Mk]HCg9!dAqxMCHDsti$nQX&en!n@x9bwOh$FkDWQM#sk6J$TsuyZ%@oj21ULxQ%1s)wO2m8u#ka*esPhVkPJ6f@j8iBSPm4S(H&SEtp4Vb4bvR35wNcPYFC7&n8[m216B)UBWTBUXype[3Wi6mub1A%GsbamgTuVVsL%9Q2KLlPWLvzKnjLsFQ%rw!$gHJ$4rof3PwITDWo*fn$4Lcw)L7sCXWv[]6%%NfrK(rmpPkP)5LxV&]2LsiwYh(c6!2CcdM[y2T%fIPAEYL#gozF1xhcn^r)DT7Ifi3X$Yi[zjrox]vDcroIgBTAAn7bKG3x$mCIIU1J&FwrIwOIwi61IpdJbA2Urq1W64Yt[nSQ0I679QlRg]WY!G^diIjB[ZI3Lv!C%EH*Z$#!yESwjA7%h1z4li3kBc@20hrabKhghzjBUtZU0Bu]l)ABPFsRWd@!6b*DGujsIkGey2OkE(fXASjeHtAXxtA6KqlrF0V%blbSqv&R5aBb7x',
            'rule_name'=>'ctt->ctt',
            'src_db_uuid'=>' 1B1153F6-DAD9-BC39-888A-A743FCC208E5',
            'tgt_db_uuid'=>' D42BF707-C971-EEA9-521F-BB0F3F7A92FC',
            'tgt_type'=>'oracle',
            'db_user_map'=>array(
                'CTT'=>'CTT',),
            'rule_uuid'=>'',
        );
        $res = $syncRules -> modifySyncRules($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListRuleLog()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'offset'=>0,
            'limit'=>10,
            'date_start'=>'',
            'date_end'=>'',
            'type'=>1,
            'module_type'=>1,
            'query_type'=>1,
            'rule_uuid'=>'3394eBFc-9b9A-2e41-ef38-AFEf676297FB',
        );
        $res = $syncRules -> listRuleLog($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeSyncRulesHasSync()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'offset'=>'0',
            'limit'=>10,
            'row_uuid'=>'f9FaC35E-6dC4-bBCe-FF3C-4f21e59a2bA7',
            'search'=>'',
        );
        $res = $syncRules -> describeSyncRulesHasSync($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeSyncRulesFailObj()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'offset'=>0,
            'limit'=>10,
            'rule_uuid'=>'4DD7EAeF-eE93-Ed0E-f4d6-4fb6AA7Eec77',
            'search'=>'',
        );
        $res = $syncRules -> describeSyncRulesFailObj($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeSyncRulesLoadInfo()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'rule_uuid'=>'',
        );
        $res = $syncRules -> describeSyncRulesLoadInfo($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListRuleIncreDml()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'offset'=>0,
            'limit'=>'10',
            'rule_uuid'=>'95023BcA-3AcB-EBFb-03d4-AD566831Fb58',
        );
        $res = $syncRules -> listRuleIncreDml($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteSyncRules()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'uuids'=>array(
                '0'=>'DBED8CDE-435D-7865-76FE-149AA54AC7F7',),
            'type'=>'',
        );
        $res = $syncRules -> deleteSyncRules($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListSyncRules()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
            'group_uuid'=>'',
            'where_args'=>array(
                'rule_uuid'=>'',),
        );
        $res = $syncRules -> listSyncRules($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListRuleSyncTable()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'row_uuid'=>'',
        );
        $res = $syncRules -> listRuleSyncTable($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListSyncRulesStatus()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'uuids'=>array(
                '0'=>'6dC588ff-110F-50a2-5773-93fE73fBF52b',
                '1'=>'3CAd55CC-De73-F1c8-FFaE-Cebf2Ec4372C',),
        );
        $res = $syncRules -> listSyncRulesStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeRuleZStructure()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'tab'=>'beC5Ce8c-Dc92-C05e-C3Ec-A3E01CBe2cCF',
            'user'=>'',
            'db_uuid'=>'187e399C-EAF3-2f1B-2F38-7eE9998bE4ec',
            'lv'=>'',
        );
        $res = $syncRules -> describeRuleZStructure($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeSyncRulesMrtg()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'set_time'=>1,
            'type'=>'',
            'interval'=>'时间间隔',
            'set_time_init'=>'',
            'rule_uuid'=>'',
        );
        $res = $syncRules -> describeSyncRulesMrtg($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListRuleLoadDelayReport()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'type'=>'sec',
            'start_time'=>'',
            'end_time'=>'',
            'limit'=>10,
            'offset'=>0,
            'uuid'=>'1d2F6Fed-DAC6-FE94-A6cB-5Ab55415E9fd',
        );
        $res = $syncRules -> listRuleLoadDelayReport($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeSyncRulesIncreDdl()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'offset'=>0,
            'limit'=>'10',
            'rule_uuid'=>'6B11627f-AF5c-Bb4F-890A-ACB22eF8b3eA',
        );
        $res = $syncRules -> describeSyncRulesIncreDdl($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeRuleDbCheck()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'src_db_uuid'=>'',
            'dst_db_uuid'=>'',
        );
        $res = $syncRules -> describeRuleDbCheck($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeRuleGetFalseRule()
    {
        $syncRules = $this -> syncRules;
        $res = $syncRules -> describeRuleGetFalseRule();
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeRuleSelectUser()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'db_uuid'=>'a91AFFF3-D948-3Eb1-B7D3-9D24B388fC75',
        );
        $res = $syncRules -> describeRuleSelectUser($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeSyncRules()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'uuid'=>'DD5E1E3d-8637-C7fc-3caF-721F2b46B8eE',
        );
        $res = $syncRules -> describeSyncRules($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeRuleTableFix()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'rule_uuid'=>'58Ab15D1-E5d8-cd24-FBDE-ED9fBF92edDc',
            'tab'=>array(),
            'fix_relation'=>0,
        );
        $res = $syncRules -> describeRuleTableFix($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeRuleGetScn()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'uuid'=>'B471abb3-bec1-673C-bb8B-f12BE13b6e97',
        );
        $res = $syncRules -> describeRuleGetScn($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListRuleLoadReport()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'type'=>'sec',
            'start_time'=>'',
            'end_time'=>'',
            'limit'=>10,
            'offset'=>0,
            'uuid'=>'1d2F6Fed-DAC6-FE94-A6cB-5Ab55415E9fd',
        );
        $res = $syncRules -> listRuleLoadReport($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListObjCmp()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
        );
        $res = $syncRules -> listObjCmp($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateObjCmp()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'obj_cmp_name'=>'test',
            'src_db_uuid'=>'4CA773F4-36E3-A091-122C-ACDFB2112C21',
            'tgt_db_uuid'=>'40405FD3-DB86-DC8A-81C9-C137B6FDECE5',
            'cal_table_recoders'=>1,
            'cmp_type'=>'user',
            'rule_uuid'=>'751A03F5-C97D-645B-82B2-316A5D198528',
            'db_user_map'=>'',
            'policies'=>'',
            'policy_type'=>'periodic',
            'one_time'=>'2019-05-27 16:07:08',
            'repair'=>1,
        );
        $res = $syncRules -> createObjCmp($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteObjCmp()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111',),
        );
        $res = $syncRules -> deleteObjCmp($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeObjCmp()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
        );
        $res = $syncRules -> describeObjCmp($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListObjCmpResultTimeList()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'uuid'=>'EADbE48d-3e3b-e9Ee-EEcC-1C1EFDEFAd82',
        );
        $res = $syncRules -> listObjCmpResultTimeList($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeObjCmpResult()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'uuid'=>'fFB29847-db8C-F4Af-AbbE-A2A5B6663d6C',
            'start_time'=>'',
            'limit'=>1,
            'offset'=>'',
            'search_value'=>'',
            'BackLackOnly'=>0,
        );
        $res = $syncRules -> describeObjCmpResult($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListObjCmpStatus()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'uuids'=>array(),
        );
        $res = $syncRules -> listObjCmpStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeObjCmpResultTimeList()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'uuid'=>'5E850956-50AB-6BFA-cF5e-aDAE5FBE1182',
            'time_list'=>array(),
        );
        $res = $syncRules -> describeObjCmpResultTimeList($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListObjCmpCmpInfo()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'offset'=>1,
            'limit'=>10,
            'search_value'=>'',
            'usr'=>'I2',
            'filed'=>'',
            'uuid'=>'',
            'start_time'=>'',
        );
        $res = $syncRules -> listObjCmpCmpInfo($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateObjFix()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'obj_fix_name'=>'test',
            'src_db_uuid'=>'4CA773F4-36E3-A091-122C-ACDFB2112C21',
            'tgt_db_uuid'=>'40405FD3-DB86-DC8A-81C9-C137B6FDECE5',
            'rule_uuid'=>'751A03F5-C97D-645B-82B2-316A5D198528',
            'obj_map'=>array(
                '0'=>array(
                    'type'=>'owner.name',),
                '1'=>array(
                    'type'=>'owner.name',),),
        );
        $res = $syncRules -> createObjFix($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeObjFix()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'uuid'=>'F4d4F5B0-D6D2-Fee9-78bd-9bC3dAD5986C',
        );
        $res = $syncRules -> describeObjFix($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteObjFix()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'uuids'=>'023Db6fd-FAdF-6250-d2DE-5F85671F77BC',
        );
        $res = $syncRules -> deleteObjFix($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListObjFix()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
        );
        $res = $syncRules -> listObjFix($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testRestartObjFix()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'obj_fix_uuids'=>'8BeAEbA5-9a4d-5d2c-3E8E-d06EDE0D2DA3',
        );
        $res = $syncRules -> restartObjFix($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStopObjFix()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'obj_fix_uuids'=>'8BeAEbA5-9a4d-5d2c-3E8E-d06EDE0D2DA3',
        );
        $res = $syncRules -> stopObjFix($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeObjFixResult()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'uuid'=>'1cEacffb-cD8F-59AB-4bDE-4Cc99EFBfFbb',
        );
        $res = $syncRules -> describeObjFixResult($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListObjFixStatus()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'uuids'=>array(),
        );
        $res = $syncRules -> listObjFixStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateTbCmp()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'tb_cmp_name'=>'ctt->ctt',
            'src_db_uuid'=>'4CA773F4-36E3-A091-122C-ACDFB2112C21',
            'tgt_db_uuid'=>'40405FD3-DB86-DC8A-81C9-C137B6FDECE5',
            'cmp_type'=>'user,table,db',
            'db_user_map'=>'{"CTT":"CTT"}',
            'filter_table'=>'[用户.表名]',
            'db_tb_map'=>'表映射',
            'dump_thd'=>1,
            'rule_uuid'=>'aa1871DF-EAfC-6e4B-2C28-45BBcC58eAF0',
            'polices'=>'"0|00:00',
            'policy_type'=>'one_time',
            'concurrent_table'=>array(
                '0'=>'hh.ww',),
            'try_split_part_table'=>0,
            'one_time'=>'2019-05-27 16:07:08',
            'repair'=>0,
            'fix_related'=>0,
        );
        $res = $syncRules -> createTbCmp($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeTbCmp()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'uuid'=>'5cbB73B9-7Bec-ACcA-7CB1-532ce3fd7191',
        );
        $res = $syncRules -> describeTbCmp($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteTbCmp()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'uuids'=>'eB21c6D6-c9ed-d4dA-cfcc-95AD3F6Fd48A',
        );
        $res = $syncRules -> deleteTbCmp($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListTbCmp()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
        );
        $res = $syncRules -> listTbCmp($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListTbCmpStatus()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'uuids'=>'005E3991-1c22-102E-f7f2-2b0eC9Bb7Fc4',
        );
        $res = $syncRules -> listTbCmpStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListTbCmpResultTimeList()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'uuid'=>'',
        );
        $res = $syncRules -> listTbCmpResultTimeList($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCmp_stopTbCmp()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'tb_cmp_uuids'=>'eE65164d-bcD6-Fd11-c9cD-b04B5F91f49F',
            'operate'=>'stop',
        );
        $res = $syncRules -> cmp_stopTbCmp($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCmp_restartTbCmp()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'tb_cmp_uuids'=>'eE65164d-bcD6-Fd11-c9cD-b04B5F91f49F',
            'operate'=>'restart',
        );
        $res = $syncRules -> cmp_restartTbCmp($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeTbCmpResuluTimeList()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'time_list'=>'28E113DA-F9f2-571c-edbe-2D5A27fe3E1c',
            'uuid'=>'',
        );
        $res = $syncRules -> describeTbCmpResuluTimeList($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeTbCmpResult()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
            'uuid'=>'16052BDF-889e-8EAD-6C2F-fBBB47FefE1e',
            'start_time'=>'',
        );
        $res = $syncRules -> describeTbCmpResult($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeTbCmpErrorMsg()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'offset'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
            'uuid'=>'C2C5dF8E-32ee-DBeF-2e5E-3E21561Fa8eC',
            'start_time'=>'',
            'name'=>'',
            'owner'=>'admin',
        );
        $res = $syncRules -> describeTbCmpErrorMsg($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeTbCmpCmpResult()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'uuid'=>'',
        );
        $res = $syncRules -> describeTbCmpCmpResult($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateBkTakeover()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'rule_uuid'=>'7Bf6fDC2-EE3c-ACDb-4c8D-d7A8B1DD3EEe',
            'start_val'=>1000,
            'scan_ip'=>array(
                '0'=>'c01D7F86-A631-b79f-E2AA-7ccb7f2bE851',
                '1'=>'c01D7F86-A631-b79f-E2AA-7ccb7f2bE851',
                '2'=>'c01D7F86-A631-b79f-E2AA-7ccb7f2bE851',),
            'hosts'=>array(
                '0'=>array(
                    'ip'=>'192.168.12.200',
                    'password'=>'',),),
            'use_ip_sw'=>1,
        );
        $res = $syncRules -> createBkTakeover($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeBkTakeover()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
        );
        $res = $syncRules -> describeBkTakeover($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteBkTakeover()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'uuids'=>'32D4aa50-CBCb-E2C9-CdD7-A2286fcBcbF3',
        );
        $res = $syncRules -> deleteBkTakeover($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeBkTakeoverResult()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'bk_takeover_uuid'=>'BD7F75D4-dD4C-0edb-FE7f-Ddf98ded1015',
        );
        $res = $syncRules -> describeBkTakeoverResult($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStopBkTakeover()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'bk_takeover_uuids'=>'659a2E98-8CCb-4ede-E5A7-26513a45e5cA',
            'operate'=>'stop',
        );
        $res = $syncRules -> stopBkTakeover($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testRestartBkTakeover()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'bk_takeover_uuids'=>'659a2E98-8CCb-4ede-E5A7-26513a45e5cA',
            'operate'=>'restart',
        );
        $res = $syncRules -> restartBkTakeover($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListBkTakeoverStatus()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'uuids'=>array(),
        );
        $res = $syncRules -> listBkTakeoverStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListBkTakeover()
    {
        $syncRules = $this -> syncRules;
        $res = $syncRules -> listBkTakeover();
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateReverse()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'reverse_name'=>'',
            'rule_uuid'=>'F58CeB4A-AeBd-Cf93-EA69-E02d9cbb4cB6',
            'node_uuid'=>'aA5F400C-9eEa-B1CF-7C9b-f8bE5E5A345a',
            'start_scn'=>1,
        );
        $res = $syncRules -> createReverse($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteReverse()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'uuids'=>array(),
        );
        $res = $syncRules -> deleteReverse($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeReverse()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'rule_uuid'=>'3b70BDA9-D5B1-14Df-1ffE-0Dc71fBDeadf',
        );
        $res = $syncRules -> describeReverse($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListReverse()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
        );
        $res = $syncRules -> listReverse($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListReverseStatus()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'uuids'=>'6944ab3d-cC7f-C8bE-DeDD-82BDBd359cb8',
        );
        $res = $syncRules -> listReverseStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStopReverse()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'uuid'=>'E3b909fD-e0FD-cb9b-aBAe-A7CD285DFab2',
        );
        $res = $syncRules -> stopReverse($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testRestartReverse()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'uuid'=>'fEEed0Fd-Cbd1-ebC6-Fd2f-4fE76926B62D',
        );
        $res = $syncRules -> restartReverse($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeSingleReverse()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'uuid'=>'F1Ab6492-AebB-eeeE-8fa7-C65Fda213Bf8',
        );
        $res = $syncRules -> describeSingleReverse($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDownloadLog()
    {
        $syncRules = $this -> syncRules;
        $arr = array(
            'rule_uuid'=>'',
            'type'=>1,
            'module_type'=>1,
            'date_start'=>1,
            'date_end'=>1,
        );
        $res = $syncRules -> downloadLog($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}