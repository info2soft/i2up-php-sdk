<?php
namespace i2up\Test\v20250630\active;

use i2up\active\v20250630\Db2;
use i2up\common\Auth;
                
class Db2Test extends \PHPUnit_Framework_TestCase
 {
    private $db2;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> db2 = new Db2(new Auth());
    }

    public function testListDb2Rule()
    {
        $db2 = $this -> db2;
        $arr = array();
        
        
        $res = $db2 -> listDb2Rule($arr);
        $this->do_assert($res);
    }

    public function testCreateDb2Rule()
    {
        $db2 = $this -> db2;
        $arr = array(
            'start_rule_now'=>1,
            'rule_name'=>'12321',
            'src_db_uuid'=>'2C4C2E77-774D-C604-9A32-5038D8E590C4',
            'tgt_type'=>'db2',
            'tgt_db_uuid'=>'953C47CB-3F6C-E72F-DF1C-31522468A566',
            'map_type'=>'db',
            'db_user_map'=>'',
            'table_map'=>'',
            'dbmap_topic'=>'',
            'row_map_mode'=>'rowid',
            'sync_mode'=>1,
            'start_scn'=>'',
            'kafka_time_out'=>'120000',
            'part_load_balance'=>'by_table',
            'kafka_message_encoding'=>'UTF-8',
            'kafka'=>array(
            'binary_code'=>'hex',),
            'dml_track'=>array(
            'enable'=>0,
            'urp'=>0,
            'drp'=>0,
            'tmcol'=>'',
            'delcol'=>'',),
            'storage_settings'=>array(
            'src_max_mem'=>'512',
            'src_max_disk'=>'5000',
            'txn_max_mem'=>'10000',
            'tf_max_size'=>'100',
            'max_ld_mem'=>'512',
            'tgt_extern_table'=>'',),
            'other_settings'=>array(
            'keep_dyn_data'=>0,
            'dyn_thread'=>1,
            'dly_constraint_load'=>0,
            'zip_level'=>0,
            'ddl_cv'=>0,
            'keep_bad_act'=>0,
            'fill_lob_column'=>0,
            'keep_seq_sync'=>0,
            'keep_usr_pwd'=>0,
            'convert_urp_of_key'=>0,
            'ignore_foreign_key'=>0,
            'gen_txn'=>0,
            'run_time'=>'"12*00:00-13:00*40M,3*00:00-13:00*40M"',
            'jointing'=>array(
            'table'=>'',
            'op'=>'append',
            'content'=>'',),
            'lib_name'=>'',
            'jnr_name'=>'',),
            'error_handling'=>array(
            'irp'=>'irpafterdel',
            'urp'=>'toirp',
            'drp'=>'ignore',
            'load_err_set'=>'continue',
            'report_failed_dml'=>0,),
            'bw_settings'=>array(
            'bw_limit'=>'',),
            'table_space_map'=>array(
            'tgt_table_space'=>'',
            'table_mapping_way'=>'ptop',
            'table_path_map'=>array(),
            'table_space_name'=>array(),),
            'full_sync_settings'=>array(
            'load_mode'=>'direct',
            'ld_dir_opt'=>0,
            'dump_thd'=>1,
            'load_thd'=>1,
            'try_split_part_table'=>1,
            'clean_user_before_dump'=>0,
            'existing_table'=>'drop_to_recycle',
            'concurrent_table'=>'[]',),
            'full_sync_obj_filter'=>array(
            'full_sync_obj_data'=>array(),),
            'inc_sync_ddl_filter'=>array(
            'inc_sync_ddl_data'=>array(
            '0'=>'ALTER TABLE CHECKED',
            '1'=>'ALTER TABLE REORG',
            '2'=>'ALTER TABLE ATTACH PARTITION',
            '3'=>'CREATE INDEX NOT PART',
            '4'=>'DROP INDEX NOT PART',),),
            'filter_table_settings'=>array(
            'exclude_table'=>'[]',),
            'etl_settings'=>array(
            'etl_table'=>array(),),
            'save_json_text'=>false,
        );
        
        
        $res = $db2 -> createDb2Rule($arr);
        $this->do_assert($res);
    }

    public function testCreateBatchDb2Rule()
    {
        $db2 = $this -> db2;
        $arr = array(
            'row_map_mode'=>'rowid',
            'map_type'=>'user',
            'table_map'=>array(),
            'dbmap_topic'=>'',
            'sync_mode'=>1,
            'start_scn'=>'',
            'full_sync_settings'=>array(
            'dump_thd'=>1,
            'clean_user_before_dump'=>0,
            'existing_table'=>'drop_to_recycle',
            'sync_mode'=>0,
            'start_scn'=>'',
            'keep_exist_table'=>0,
            'keep_table'=>0,
            'load_thd'=>1,
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
            'tgt_extern_table'=>'',
            'max_ld_mem'=>'',),
            'table_space_map'=>array(
            'tgt_table_space'=>'',
            'table_mapping_way'=>'ptop',
            'table_path_map'=>array(
            'ddd'=>'sss',
            'ddd1'=>'sss1',),
            'table_space_name'=>array(
            'qq'=>'ss',),),
            'other_settings'=>array(
            'gen_txn'=>'',
            'table_delay_load'=>array(),
            'keep_dyn_data'=>0,
            'dyn_thread'=>1,
            'dly_constraint_load'=>0,
            'zip_level'=>0,
            'ddl_cv'=>0,
            'keep_bad_act'=>0,
            'keep_usr_pwd'=>1,
            'convert_urp_of_key'=>0,
            'ignore_foreign_key'=>0,
            'run_time'=>'"12*00:00-13:00*40M,3*00:00-13:00*40M"',
            'table_change_info'=>1,
            'jointing'=>array(
            'table'=>'',
            'op'=>'append',
            'content'=>array(),),
            'encrypt_switch'=>1,
            'encrypt_type'=>1,
            'encrypt_key'=>'',
            'merge_track'=>'',
            'message_format'=>'',
            'json_format'=>'',
            'fill_lob_column'=>'',
            'keep_seq_sync'=>'',
            'enable_truncate_frequence'=>1,),
            'bw_settings'=>array(
            'bw_limit'=>'"12*00:00-13:00*40M,3*00:00-13:00*40M"',),
            'biz_grp_list'=>array(),
            'save_json_text'=>false,
            'error_handling'=>array(
            'load_err_set'=>'continue',
            'drp'=>'ignore',
            'irp'=>'irpafterdel',
            'urp'=>'toirp',
            'report_failed_dml'=>1,),
            'part_load_balanceby_table'=>'',
            'kafka_time_out'=>'GCM&]VvuRbr@#!dRTW0jTL0ig2$RCZ168Mm9z&adrE&vyYxwC1jtI[VR^D&$FvMq6VoyRo^c(C2thoN*^#$ci9GJ2bi#Xn91r5d)I5tR#T(8jmzH(8[PPZKvUP2L1^3e@lR()fvC$v0lM3N(U7@Hos3rvk%VURfl@b@2[!DpXGrE9Y(nyPP1rJZs&omYAtoSn!]2467nQH)WOvcULB8N0pOY$TZrpy@jDEF9dSsk164eA7[&r]fY%3A14kRjRdqL$nH*S1*l8hy@8zyrZ8sSwHISKcCN2hBhZ4K(WZI1wEr7dSeog6R4ZLA1iMti5ncN&3FrAOq1*Jh&]MT9W7nuBu5d^rSCcH*u[1Avjis7h*G1%Juej8bMNe#9m$UB[5mob^c1To$IB24Xd)ZeHqX)hlJ5MA&XT7jLA61G^&p#blC4ofo01$TJR6z5p6BXNjDMO0cQUi4dN05YSkuyqWde!G&]07LzxXI#oIm1(uAzABh4prxOOrpyT0sK2g#8#nfxg)uI&&VZ7^MkWsbz0iYx*qTHSHj&8X4P!Dk#gGWjO^4HPjNi$9k74ULRF[h$*[pF*Kh5c&z)IO]3jVyk[aEO9O5DKxwYKSuKT!62)dC@WhiQVFQy7gzrLCSyClJ@@Y#dwo*LyS41oZHR*bw50CLtSNwNuYdvgfXJHQO01C4#g7ZfOixcYF!8oNolO)Ce#ylMyjF$(AzKOrkHPOyRElxKJT*2fJ4tgrNo5H7L8@zU@YE@C^TJO[$YBHqROBm4WWOdw$1zC]HzYbXK$vQ[3P9MI5[r(p)ToKwv6W8VE4sfo1@gpox*wWz2PEB#IUp^ur$p1TFHQlOO6jprWlgE%)DlbuleiudgKwsBDqxH7q#6F5[TQkrSlUuKtnQZrIOiiP4f3#X7&azMkozP]$x&BFgMs![72t&Y*V9pir!cQW%*dwA9n9Xicz)fXFtp$mCHf0O1jFuNHiHOSv&d&OV]1m!$GJD*[71Zi(rggLLSDaXs0sO&rwz5Rrl$y2)WIjXRJOcKS#EgJF7C5Tc$MmXRdpXlS8irx4b4OZhepHOKu*!NCCDGv)%3jM(NnHQVSmOKQAG9qF8^m)3!aRDKq94(q[dOrk$Q9y$4I0zsTxtrVXA6551$yiXWic*$0Y97PJIjN*3U7UiezSAzq]Y&sc@Q6#^SQ1IcPAgsfLP0l228cYYhBVeNGFeqqcyBVUuFlAS86GLM&[y)AFC#U0fnNTOIo5KgQxobQg*FaAsM[(BpHlkhcWF&w2qe2(xOFyiO9td2M1IOM98rwQ6e$UPlmL4^NYUDW4@0M86!mTwIXdN0nvH(K&47r6FfYn3tYxz[m)rP5^#$]Mg!SoKe2CVAQDgOIp%mYI(ZJA(w3FiGyKC$HpnPMVujthCKA7*XUvy6P2)JJX!AY[sHZSTONdC70#tb^zNboK)qPLz9$at7MZcY8aGMd^5EcNYh!9#8MGh8sypDk$Mk%qIJ#MGKiGVTp*Ol##4m&v&i$VOB$%zNVL^)AsjiKeTHqyj^ClNny3QYRf($g[ULnxTd9UwD)hbElf1Vzb^#pUYf6lzvQ29tTULunhYitqn38dPzxtIc4]i&wW@7W9w#xb5Y$$MU0TY!d78rOf1glaD387V0NAkWOY&qh)oAsg&Qx&(d7(r1K@pMXEVaw22exY#D!nt4HdxzS2Q[](ATeAFTJOqpjPO[OrA^sfRyLQS[sV0qS1$g]3Y(%7C5c&TgHy*5C0nlWbb^vEuR4bjHuyeKUwVKMG&Y%Y4MF7sFA[5wv]7Kd8o2r5*$QQt8Q)tL*sac*GC*JSkczv!Q&ONX8CxESk)kEGX^8*Ocz^Ot(OBmmQCq@d%(n!F&h9nI8AcGkV^c*mZJZ*we%kzDkCkk&IF3E6Qha6()ehUZlnRIVlJ3RDy8Ic4ecU]0zkS&Ekh5hHVB[XXLRz%Gu!2vmpEkiY[84N^NySVaju*WgKowN6qnX!RG1HL2owV%@nXcF)^YMSGAhZ6mdZ5lECOVxYNicg&W8HnUa)p9i(Y35Vc7Uegl$D8$TtjyIVlxNTdK44E*i%(gFurye)m!RnoxPdiUck0R)oJ7LLXZuZiqIICVX0c5yaVEbYjgYvl0%(&cm%a8lHFn%!h3@rbU$mcP9p@qb6jy2pV4y*MsAIll)s[Ry%9&Ai6(8qoYUfuLy4Ikxks5cilLLAA#uj7GBvOJDZrKzu[W2%B9Q9yy&NlA117dN1vrmRZz@g*0*vKQJ$B)%b[A@ZzHoxgiZH$)3^XI$hTfMpH2qpfCGEJfuw8nb$yx(8F0MubiMwX(ix*ZyG2qBtKvhP6M!4OLypo(MRb7ULLx!%$CRTmHYpsZ1Oe)wx))&tRfw9Rtm#uIJVErTjsTPhMeyEaWsVBk2Scd)4w#!JFMv3feJU*RGijduU*eU#1S3#C&&D^mDZKyB@CBQXJo&jlRbYQ])zzBozfzhInP^4)7kz06%nPi6PUvuxS%3YKqTVAgd2%^%I0HizeXUtPP4P5Xg)[Oi2s*g*i^p0*1@G(zPHWU6sIp(utN*ys2*PYLk(BM5xNdUR093ZlWgD9Wrf2lI0X6zw18Dxq!S!ac2xiwRIag!hJv7PKifox%#RuQ3qEKnprvPH$Jb60PkVtSBT6q9XwgCrKGmPzYEuIJN54RCi^T8KWKS6evQP7KyCiMYu%#Y]!^weQeIvId7ySZBH&tNLez67$dEuICLcqY1cUauxkD0C$zx8&h#fmSEoqTmUUk6mgLdSsHso[v@&G#*1@NgiAs@dneGm7D&I5kMEcFIeiZKRXARpIVl1suT0JiHl@Bi8FttvjO[tZ*AzI63XumjLqHc5#qv7bfP9G&dy7(P^F%[q12WkSAFQab@Wip*R7o$DUJq%CJtTyncvaKjy9MSHVzn*8hldrjT[YfG1gmycC@v5@SYC*Kp5wd@Sw#9iU2A%NR$sw#qQdE@u4niD$1tzbiIrEU@T@3wAjC2HKCo!jQD#f6l*Q#li)v[6GqYTy8fbcLFnlsL%eqwO[!jnpJsfQvu#ipaLYG^hrQU)vUpC%bx(0$@lzGn^QKm&3#3oNSs[XeMwegjPjM[)x[ixX1dwN1iFj$acW%v)@)@50j$iDqPNX^QJRfy)*sCgR$4o24fvB0!Wh!XBb0jbFHSs&3*4BH2p5[UDdtLV5#9dWWCjI1s%cBg#jjI3PyLTtWvAJ9A(1pzjr9A^OgW7&q@X)9%PjnhcjzHGM*BtPys&WdTxgsFXxt70SwPV@hBFHgJ4xzD9#LJXTTv1*@DIX$d$MYTFxBG%puE(a09AqhT%A$xXAYMnQGKkeWjMzMzqjprBJ24[Dh%pntu4iFhjr9([wgYy97Oo^E9KASY7OWnWJl5OVxOxl$JfsqX[P#4SFfBRedNGd2SVx06Bsmzl8#bPtXmN%]x3W8@x7HPcSv4%g@FMNGfLq8PYVKnTJSZjOEZhjuvP%UsP#875Oh)0RM]9tfYyGGJPdOlcq1)%@S(z&a8o!x75)o67y4srNN&ggAMC#XcpPo5Eursws[yP^l#iU6uuxgyr)W5sl^qc[SH35Rub*4FcfxM5f!75@l%Y!5CFWnA5P2dV$fY^5bw2EM)9NXJ#[0Wpk[Y4T5WYcZ9hj%mVf@W1oFM7(6dlzRqqQ#(jwS(Uu@2VPC@9!OWe828rb)BPm7OMlTQ2tuXsN9d2payJFrDxIok&bK[qiN8B9Ua4v[czD&7@PW@6EZRye]rJ0Vph9[5O[s!W8Dp5B4zwA5kGelpf*oA!t#&Szf1mcSrbQ18A)Eq5[SWLwFZ5[QW!mBB3YmmhY$ego)aybIzk29m[3tvLX*bkba&q7XC^MEFyW4RamMk9wkIR]958vEF29Ie^O6L3O(4F[YioWPo]Xot8)FDz7L@8WYC3g6%gRt6o@3*^lVmyk[hYH2gG]1172ywg63(yKGvEQ[b(Ed(ZhuO^PsTbYM^Cpjo^vOukx4fDrvxZ46[%$Y76w[XFm[Turn$Q73Z3mc*RhKFwLV9BF@e5uwCBdtgG%Mxwv@OO5!&R5EClJfASxX2m&9GlEZ]TokCdEA1Q^u#OF06S2zPXuZckW[v4SOwSPFHCYtDpkNM]8sAb%pOucJNrl6KvGSYFnKvrFVT271692(nt1Uesvg#VnzXjg@94wIExC00PyR^wMT4TZ^q)TfyXjby&[gCrPB02c$ihMfBbgg7rBiAT8s9Kd(7h!P)y!tG@B9Z&@&fKWj]YI3eC[[qg!mAu7NdlQuc4yWlGgc$zv1WA(O]7qdk1)R!KC@&E^Wwt&(H6S12x@KsGCYNreoEgH9Sjk1413t8ZnmfWW#jg!Jx2PCrlsAA8uDD@AqYTVB8ZathN4qffP2NH&zOWqTQv3gbHJg(I6Hj%^QYl!2LhH8[fQRr8L%ZIULTkJjf0mwIsSxaDxYyM7#wu(F&RuM9Jf#761Q957QKIYTba(6A)3pa4@rRdB!v$S8GW#Vrs8#ecM[aEVFGLJsnfNpPoa4DUvv$Ji20$c4ih@VcDIER8c0qDNjU^3xhJ4z@K)HqZ#&I37XT6yRSVx!^Q#J%CkViK%#]D3LkmtDT5@q(D9INMUGsD383(emy)K]UN[sdX(^@cVxo4m8Gg(BDcN@#YQ[)BZUT^k$^J5lWJxoJCG5iqR%WX#4XL*gQ5W$90uH49URO9N9CTDC)R2oacri3iLqi*xBLd1R1Rpsa7EDF&!@Xn#2X9MuPdQ543B[KBjTxPJlYJ54(JfRoGY!rb8([fz]O0%*GVzb8(cfqZ)LyTU0kJCGxLY^kduPo!kp6x5HpEKy19Qt[Pde&akR#FE05RI#vM@rFJ9q7@fW9rt3dT%mkr%8Q1C8ec%mpt5EkROdgc0S(j7rufG5el@N%hwvcNuU2NLlvIYJRgzCp@OdElMPKzWlKPip%KES)vn[1aJTvrXeRcHDBt4xFN47c09cArdOV$)PZXE5F9tXY05$99E(&d9clM*hsKtL@E*HvcoWh$g!oYdN[kdRCPtX%Rl5uGWiRrBwm0Px3R3bcl#4VDOOwr0nKKqDzyVqm^uAaR^@UQwAOqB6CNV61#exz[5gKsiB1pTx6ORPeYXo7Z5XuLuLyPGnuKXm4U!CmC@cWzL#6CpNp(@#59p0tcMBu^D5nN8zphxDP@rODgr6Z$V[aXi$M2c)ci7&w3b21gZHYiO1jWiFdWR@HOFPP#SXIR7&g8KynWu)H6Ukjx^TnGKBQSoAomAyk&z#Jl)qGRurwXrtETyUe&8h^IyUbfBf9Tr!1eBe8pH8$6pGi@#&PpMK6StVZX$i*dkn%J30WnLCismTX%7#$()dnf$QE2RSejFSTKQ]bn^YR#zBc^shL*@sB[iyVQ0hTt&g@eBc[HCFot@SMykryDf#JNo1QwwPB0tGP8&5uB[TOBR6X!1C0w3IdODcla#MM9HgpDT!zHiA[5$Q@Rxh%FWuwx3yte!*mQBxvvufsTNY$MQOO#TfhVjIQ)N0bs5PB0GIftUUyMry(b)#841Dkl)v#L1kWs)t]%W&ET2[!QRt(9Be*L97[1()hgASceW8ulH75bsu8Z^woXcP!sxMZ0#kI3]3^M!#0LBbRMMh)1^zpC[UQc4n#jrZ#mmQu@9a5NvJbM#FzqUEZ%8*HBL9!fliQxuNAAUPj^nchT%hSx1rgdAX3u2eZ%Vyic)kpRwrXTphYTzcT(tzhIudY^j9V4g!CF#86F1qXm4Q%90nd3Ff)pD)tAGA%F1RMwfSXxTm^0PBEvAYL6sg1R8etMBxCH%Bs05UOpqoXY2g[I!X#cDbkZy7KyXB4tvnWOifwSFpem5dPr06eANQ5mj4vJ4Rv*mH$JoO!Hkb#Gyd%wBH#!FtW)[PCyYSZmEKXbMnGTGy3o2ZK&jmIfh^OHksuDuDc)i8wlxX(kyvcFLfcVRyyx8pj%g1u8[cdKG3H^jkR0iLKY7!mChAGw9$FfXypukeMj!3zcRbwfrmWRNLtubq&qLV9Mlqdr9V#M#Rr@V]3z1V#8zS%Vc@]$IDO(t9&QsW*WRgR5D4(C2qgdgGlbmmELO@PLcwA^8rS(94mcL0K$Vd%zUxs38%DvXP0NQ!sUi!&czW)eYwA6BVOVVzSuN#U*#r^jbUdGS&XPG4]]RnyWPcy6Z29!XccjIReFCk68p2Fzttbmn^SVlx0Dpj&m[CEE2xCYy)PLJqEd@@@Y(%J^lQZb7xEDxCNnu8Id2rMPq5tnq*ABTUETeJ!l7Y0bNloSoIte[U1zkWBU)coM7y)!6P*47q(AUC0)#0)BopfIVd@&2Z49$C*L99u^t2UhL)iAA%I^P#!OmJ7C34tv9ilJ4xt6Z(TKW9WJ3)LCoI44okHU#sGAW3!&J#K29cxjxPuy0MVt*7H9v[4dW*oDBrwW0jeGPIpZcqkP3&n8A8J)]IwCtGD3[4R^#W1X]#Y3qsPfhqUD1B9NAW3Q!1#OR4t4UYJd)q0@k]c4OKs9Ao4n7vb&O6pcqv#5b$&3!YcxfMO*eC1k1x%NOjD0VNW5oO%&hRl#M4P6(zyh96CB#@9La1uLQBkd#DwAV9T2)zw@CU8^T7KzfPh$[zVYIg6((0BSW01bwO]7k7Wg#wEkSgpLEivB3@y23HxorF)!UeNPEi1fQi)OptHJjAGNMAWnlU0*44g6GR2XdTHazmCl2V3G8A!(8IPdQQEz@#XPDBy54^R6k$)u60B#Osbyij%g8qTatyoj)HSOIN%xYOikKsQS90Qn(mDPFG&EYDQcnt*IQwniZ[GJ8DN62tZF3l@9xYuyY%!S@KxMiRw2pX^7QZn5zmyVw74^x9BH6&Ax*p@BsKZaPK2bab%TzGVUIVc*69KD#7JGddFdqZkzzne!@%FCL6[JrC3yqOfHCODMtqAh67@7FL5E*7A@$r!sqzkjnjo^&PHOpuYFXLxSyiPur(&7]%aW&kQUkD)ytVuM3a6B6SbLK&zE!DXz^uOSEs%ZUd]AA6dMLsGrlR*LUMXacXffWDMYHn#tM20!N9Fq6y6O@CpTNNmII5C1sS#pLdld*Fl$Ij@@se$W0gPZ01aIWwuWx5BEgYtI4%p21o)cjRrx01oiCJ$gHV6dYcc%HHN^MV(Jv1VdN8RG3hfu)QOV*JE@qM)3#z^jww[Wh7YCucxP8IAHmFuiY&A]YOJ)@lFHzHFKX2Lc!&eCWVZ5PZXF93yc06JWjCc8e^uSTyG!7xwcMWoe3pgSzb)eO#6)8#0r3NYLzz5^5xBq[zRsAUj93u]TC0*L)MhPzJ9s5IBQ)6y^q^r%o%DUIPcA@Ge]VpoU5t#v6jG[fz1xgg[I(*YQmLoZVqL4u4NT@Jh(81cWm5)tDO4*!wQpQ51N4aE)rXNovKmtn8NWhYpxoENP4BTm7ZCTISrzvOO]0JGKeDPLBFK07D4*b)JOAxp(51iwz%^mWt@JiqVPQCfTo3QNWarNdrBrcy$G1iX[ZrWFPgm@PV(Vfey!k)oyfI*8zjwuMUW@R6yD&2IVrLxBVxWcGWfR0L74QeL0ceBkxGPlOZMcWD@XuCGL6lSJboIhONZU^3d^6Ox@4*r!Ic$ks3&x#Pg#98WOUKvBH9UyuxD^TlIHYhsy66dkVlUZ8(u0LE6McYP^oDlzvw2LM8mA^jrW%u[6eNMAHblUoN8Kbyr%43G0^E0sCGk6iSRP%l0BCd**aOVUsYUPkehmNpjExFiAY57j5$U@HkjVOMhMzC4Cb#Leu7%*Swk43w^n7o#U7I^[GSx6azHv(#Goe^qGf])ta!VXZFSGugId1^fcxV1Em88o(oiE[iCt7pW(ug%Ic3vUKjCk^bq*[TqVQ6XEe3lg*R&F32mTCR^%dMhIiuP@DIG4ix9hDg%6A1ZliPJt@WHm0([88fpAkzfyAdttrvRLLl1x5Uf@M!R)JFi80fkiA[G$r#p@akqDXQ1cHiC**0BBfB3lRgTef7py)bbN5ORN9nN30@q^cKAbc@LVNI$Yw]vW[9F#I26F0svHv#[w%%fZW4*pNBmyufEb^r@HiO2zDrt6u)sB2fDMCeuL[5Y0bSP5@Kxpf352H733GZ5hYCNhDp4W&ez@Xtnw)(Vjts$qH(urN(Gawv(Y0HDNr*fNE6M#pJd0nDarUIZ2j^#58gszybCuS]Mb03Q[NZaQibon6@kA3kgJpGFExRCkIoKwPpu91vaZ#NRsdOUaW1^%oznYBeV^gwTuVP*2GCU9%*n^N%Rb8EGcyGyAzg!G2DG*QLpq0e^nR0YvhpleT(qoTqESwM(4G5)*o3MbVK3jmEAnoaNl7qY9VKKE7HYB1DbFjSO0vj)ZWtemygsKbPP6YynEMOAae1sDtB*we6yl%F9GHgNQ9)vmFhdDlzorV[IxNg&lh&m8BwrTo40d^hMvsXlaZdn1a)a1rJcQihIUsN*R9lCc$j8e#1qzn43G^01y8*@R*T9oxgpRB%HKrlOz6BF5qkWyHqIl4vE(]md5(@W3x6NcBnyFovVAz9[iPocP#wMx8RfbMqGh8nkYm[YgpW(FhdIRut)MYC8e2m6K&6Mh4!3WN4yg5b4Nl$jP9N^%DsSd&ZyUs[Ti2jJ)bQ]OcQ#A7QAwt&t(AM0S^sQDx#bvgH%miu^05lJvd^UAvBwZ7JX@so76a@6&@W8GPB]g%ZT77@ejDohXs8G&8!5TMznDXheXJnm3]s%@z4&%JrQE95&boihW!Y*uwXQOjThrI4&7xdVqbMq!nZ#8iURyOthic*7wgUJZO(*S9oytP*!9cS8fnxT&gRSjQgzrhrAxyZ4e#^0oJ!C*H6]k3TccX&[@NCs#k0F2*2(cTX0UJ)zAXXq!$AM#dDThA@uQIRe8OlYd377gNmu(6dHk^0EC3*RE78$&kG$Nws$(M3S1CuW1eND5@^n)B^yCLO7XJRYH&d7g(I)q8(z3h8r5tq#RzH(3LiU(nwX1u]q8(AMFov8bA9kpp3YUYb7M^e314L!M2nA$MPdwHt89Xx8n)(mm2PhU(cpFq7CyTGmQGOf9chj&jp]wPUDwQbxx!BEJgQ73WWD^6zyBf9&#dott&RyDhUr[ZNISpg5kXwO^MY8E8d7mLiir7Md50%)OKXtcFUxP]ZEL2h^PpVrGG93Thmf3[3SiGYF5Cs4MwyFGK*3PKWOyE0%l3[9&H0DvOvH*]hAZqBWQd@@YdOE8!kgTlJiL5)rl%urhh^Ey]LaWzleU@c*1w]%2hDdcB0#FH#f@tNWY##%#9OgC3!qxvXhcw1O8b[y5mt!1rB#&r(7r6i4V&O2vM3!1)7pr2uaCeV*5LH#dP6se]OoCg[CLTd#]Z!KtG!pY^Nmt2&ao0CX%QyA3]YuD4LOWO5mOIG#bsBZ(tTLbaki2t(M^6qOXH)PxA(WU95@TRW6u9Du(Hb]9h1zQ[vkzO^wZRUgJ0m0TgbeKKlo^jRCcws5ENOn%7)IBkQbyTSb2*O&k61J!oUH^ml*npR(o!MFpcdSm[Lcs9Ir%cpqwEjOcLThcq3P@r8IOW4qjhuhqcJIDR2*tv8W(AIW^Ylr7LH(&euKC8H5ccwoC$]o6ZH(b)^qOXqB**2G5*QlM#Livngz*Z05a2b[1mz2Wd[YlZ&hxC0)]9j1xq(S!YZSY#AUe7Tr0t@tRvmifd!Nm&sV2azqTqdXfs4xxjT*P^OGBu@mixDxomR[Hv1L(Ao3U4huYuLSpEWh^hbRQZC@&&XCJ0X!Zz3hp(h7U9#n94EQFQxX(jPMrY5fObH5cRX3@d(ON[cca%XpDeWI(RhLn#2kKNvnrTkQ#IS]Hb$xG8k!c^3BZkp1N3Q5AI*hHEt#X8A^2Et@iPomcChw^FynBDv*uAEIfkBNnC%DZvPS8vesq#YOYZ2JYx3J#ka29%R8T2TX0I8yRk$BWf2g4p&g7%VTg$tl^iYyoe5dww1H[()(dnBbhqymcd1gXf$fOUiYk145!pO(G3iqKiFZZ5*4Z%DyX2xGT^UO3wBfk&loREek#MZ]8WRGnFyqU95QOzUR[JMXe0J&SF9$T1l0JN9qFphnFtD&&2djGiMjHY2$49Kg6&[%5Fw7INo8OWADvdnb6MLHo1Rb3%v0Xm(GQ%0p$s5Qj7PVpZrLfyqV(4vtulN8X6kZc#57deh5fzNGR4xNlCgkCt(qEHuY5e@0v5lgg2XZn#%Cr7MIPbX@MbT%EykkewsOI)d5*JXu$ilnWMua%$0XAnojkCt([tjMKio#lr4gO]5m1jhnFh7@BI)8kaO2lqwom%4lQs$wfqc[[^FpO@2%Y9^Y9ws4xXtmR@CvctWF2qWiUC#jywh%l7rA3eo$7xJPaAkFrb@NhjW$Jv0uib*sLyCZRe(wQ%EuqA647edqkwZJ*dAY&gV2g0*oT7UDUfmOb3z%LoTruL)8w$LsjyA1XZUNTyH#wVIg02wclrc46$WOfN$v*G@o26HWz$hLLNFc@xQb$n4xowseRs[lt[uZBCAZs$))oE3*jba9W%G[hY^D#FofI5OxbW^#2m9tA6aw9q]4kFTZ#p3Xln7!G5M&mxYp[AvPZnplOf%NqfuSw8JX$pz[D7y($!w^cK*IgYV6NmRboPxlCoJHbwi5DAd41e6q(zw*hLjgp[0(5Q7MOfg)LP[%xJFaDnU0FEsiH0[ZA#yE1vkd1r)v6bZm0SFGowZ6uSNK5XE[1B5orEy$qJk1YI7jfIALm!&)FDFGtrr#Da3edY%Rd5qEq&CDNHtoPT%YPj2qDWj9Mq34C$IqgOP0U97&uqGa)0rloH8[*c#3KfGygCPVqd&87%IFphYU7tZ1L5q2JG(hJ1]Rp5WnUxXniR)rn*(!bF%f5X5gluvbiHrKrFUc[yxkmp7!ehZ&*Owt#6rsG9o(GBfnD8H[%&tj^9O1ciqKSm@3!H2K!roA0UIpdLCO&72ZjO&$5uKuVYC!ctMLpS^%URFIAgll6N8mdQrAb9NNCI]cEQ)IYfR&$uY@OrPsGj0H7nCBX7Wrt1#DQSM@pInoxzy1(1R!Ri5MxSmFVhiI6)O0z@mcgI#z1e48DQkMm!U%YcItY*!fbZGT^O9p3RD%C)AfU*o)tnbrJK]&4*Q*(v33Ze3bEhhZ6BROraz)H01zcGngNYA%jJt(ogOfgfUf]s8sDy#kjhpj9&77KlQO7Iz^(X96!VABmbfbNJ7R]7t0Xo$Zsu@CGpL%phm66ywJq6fXeqXYCEvHjRCj^1kfw4YETiR[u@jD%*JUIiU@@2G4#SP#p^Y(l$bRW!*ZZT4u))ZOpf^uvGHdz7RtL9YcUn2qUwt[4dDJxRR)t69BP&@2CwXl$AKw[JD$b[ruHHr#[5rn231M*t8znS$f94wUJO(igjKk%f0!Id#&AeAMf*!&OsFE$&F]kGtLE69&dXv^zCkvst)hG#%9H$Rc6Ux(RcOSRJnv%4J7@ip@F^Vw&kJ))odWQxHKTHb@JoOFoy)Ig#tMKb$Z%OwILOt7X2HR0q)0Rd!6JaAR&ET2e1G6AVKqQk5GlsHIQ(h6)Y6yTgM@x7AgLdWvAq5@ORPzv3CrHLzK*3xlGW3sHpe$PsvcorN3XEDR6dLiaWIEZ$OW)jkPCnpz5@^@dW%q[fPZf(GkDz)awA#n*]bPf7vvz7h!@ibCpiDN8BVcIM1qZUNi#CUe!2&$il[m1]n*Z2*qGGB0&bGRSiCbefwfz3At!Tgi)g)k0zXfBoayzGnYRe2VkKyC#Wy9ro!n3Rgud0pm#@pnDHp0dcZC(g2uRi$vvS)hx2E47$DO9Nrnzyi#Z3wF4$!ItG8Chb5CJchCKk[2Z(k8RNgtQwSp*ilOy&Q)BJWo2#mSYoXEPqitb@HY*vX[gf*Uh@AD[75rGJqwRjH!nV0[Vh^oXxH95%NXIjCeZKZ8R*#6vbN@T]7AwmzPNk8Hwl8j8Q55z[neY6ApW&EWI9!k*%tdX^ke51wfEkIClv2Fbq]CdwP34T8pug@X2Ct1FP]mPynlu9vhER9C#P(@rmrzJ4MOo@BgRHw3o7M&YUjH!&&w#GJx*HD%!qRKlx1c0jvRLb4iAa03TPlRqOUf5bSzN&^Kp2HjfPY@@08z9ljqOZies*3pgWdDZCv)Z2fLm1D#))uoR$Kt20El%7DDpV*',
            'kafka_message_encodingUTF-8'=>'',
            'kafka'=>array(
            '0'=>array(
            'binary_codehex'=>'',),),
            'dml_track'=>array(
            '0'=>array(
            'op_column'=>'',
            'opv_insert'=>'',
            'opv_update'=>'',
            'opv_update_key'=>'',
            'opv_delete'=>'',
            'audit'=>false,
            'audit_prefix'=>'',
            'audit_appendix'=>'',
            'identity_column'=>'AUTO_INCR',
            'load_date_column'=>'',
            'load_time_column'=>'',
            'load_date_time_column'=>'',
            'enable'=>false,
            'keep_deleted_row'=>false,
            'date_column'=>'',
            'time_column'=>'',
            'date_time_column'=>'',),),
            'prefix'=>'temp',
            'db_list'=>array(
            '0'=>array(
            'src_db_uuid'=>' 6C4AEF37-6496-6DCD-E085-DD640001E4EC',
            'tgt_db_uuid'=>'',
            'src_db_auth_uuid'=>'',
            'tgt_db_auth_uuid'=>'',
            'lib_name'=>'',
            'jnr_name'=>'',),),
            'db_user_map'=>array(
            'CTT'=>'CTT',),
            'maintenance'=>1,
            'tgt_type'=>'',
        );
        
        
        $res = $db2 -> createBatchDb2Rule($arr);
        $this->do_assert($res);
    }

    public function testModifyDb2Rule()
    {
        $db2 = $this -> db2;
        $arr = array();
        
        
        $res = $db2 -> modifyDb2Rule($arr);
        $this->do_assert($res);
    }

    public function testModifyDb2RuleBatch()
    {
        $db2 = $this -> db2;
        $arr = array(
            'batch_encrypt_compress'=>0,
            'kafka'=>array(
            '0'=>array(
            'binary_code'=>'base64',),),
            'dml_track'=>array(
            '0'=>array(
            'enable'=>true,
            'urp'=>1,
            'drp'=>1,
            'tmcol'=>'1',
            'delcol'=>'1',),),
            'save_json_text'=>false,
            'row_map_mode'=>'rowid',
            'map_type'=>'user',
            'table_map'=>array(),
            'dbmap_topic'=>'test1',
            'sync_mode'=>1,
            'start_scn'=>'1',
            'full_sync_settings'=>array(
            'dump_thd'=>1,
            'clean_user_before_dump'=>1,
            'existing_table'=>'s',
            'sync_mode'=>1,
            'start_scn'=>'1',
            'load_thd'=>1,
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
            'table'=>'1',
            'user'=>'user',
            'process'=>'SKIP',
            'addInfo'=>'1',),),),
            'start_rule_now'=>0,
            'storage_settings'=>array(
            'max_ld_mem'=>'1',
            'src_max_mem'=>512,
            'src_max_disk'=>5000,
            'txn_max_mem'=>10000,
            'tf_max_size'=>100,
            'tgt_extern_table'=>'1',),
            'error_handling'=>array(
            'report_failed_dml'=>1,
            'load_err_set'=>'continue',
            'drp'=>'ignore',
            'irp'=>'irpafterdel',
            'urp'=>'toirp',),
            'table_space_map'=>array(
            'tgt_table_space'=>'1',
            'table_mapping_way'=>'ptop',
            'table_path_map'=>array(
            'ddd'=>'sss',
            'ddd1'=>'sss1',),
            'table_space_name'=>array(
            'qq'=>'ss',),),
            'other_settings'=>array(
            'table_delay_load'=>array(
            '0'=>array(
            'table'=>'',
            'user'=>'',),),
            'keep_seq_sync'=>'1',
            'gen_txn'=>'1',
            'merge_track'=>'',
            'fill_lob_colum'=>'',
            'run_time'=>'',
            'sync_lob'=>1,
            'keep_dyn_data'=>0,
            'dyn_thread'=>1,
            'dly_constraint_load'=>0,
            'zip_level'=>0,
            'ddl_cv'=>0,
            'keep_bad_act'=>0,
            'keep_usr_pwd'=>1,
            'convert_urp_of_key'=>0,
            'ignore_foreign_key'=>0,
            'table_change_info'=>1,
            'message_format'=>'',
            'json_format'=>'',
            'enable_truncate_frequence'=>'',),
            'bw_settings'=>array(
            'bw_limit'=>'"12*00:00-13:00*40M,3*00:00-13:00*40M"',),
            'biz_grp_list'=>array(),
            'part_load_balance'=>'12',
            'kafka_time_out'=>'12000',
            'tgt_type'=>'oracle',
            'db_user_map'=>array(
            'CTT'=>'CTT',),
            'rule_uuid'=>'F530FB0E-0208-9071-66D3-E595AE7D5A4C',
            'rule_uuids'=>array(),
            'batch_basic_settings'=>0,
            'batch_full_sync_settings'=>0,
            'batch_incre_sync_settings'=>0,
            'batch_advanced_settings'=>0,
            'batch_full_sync_obj_filter'=>0,
            'batch_inc_sync_ddl_filter'=>0,
        );
        
        
        $res = $db2 -> modifyDb2RuleBatch($arr);
        $this->do_assert($res);
    }

    public function testListSyncRulesStatus()
    {
        $db2 = $this -> db2;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $db2 -> listSyncRulesStatus($arr);
        $this->do_assert($res);
    }

    public function testDescribeDb2Rule()
    {
        $db2 = $this -> db2;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $db2 -> describeDb2Rule($arr);
        $this->do_assert($res);
    }

    public function testDeleteDb2Rule()
    {
        $db2 = $this -> db2;
        $arr = array(
            'rule_uuids'=>array(),
            'type'=>'',
            'force'=>0,
        );
        
        
        $res = $db2 -> deleteDb2Rule($arr);
        $this->do_assert($res);
    }

    public function testResumeDb2Rule()
    {
        $db2 = $this -> db2;
        $arr = array(
            'operate'=>'',
            'rule_uuid'=>'',
            'scn'=>'',
        );
        
        
        $res = $db2 -> resumeDb2Rule($arr);
        $this->do_assert($res);
    }

    public function testStopDb2Rule()
    {
        $db2 = $this -> db2;
        $arr = array(
            'operate'=>'',
            'rule_uuid'=>'',
            'scn'=>'',
        );
        
        
        $res = $db2 -> stopDb2Rule($arr);
        $this->do_assert($res);
    }

    public function testRestartDb2Rule()
    {
        $db2 = $this -> db2;
        $arr = array(
            'operate'=>'',
            'rule_uuid'=>'',
            'scn'=>'',
        );
        
        
        $res = $db2 -> restartDb2Rule($arr);
        $this->do_assert($res);
    }

    public function testDuplicateDb2Rule()
    {
        $db2 = $this -> db2;
        $arr = array(
            'operate'=>'',
            'rule_uuid'=>'',
            'scn'=>'',
        );
        
        
        $res = $db2 -> duplicateDb2Rule($arr);
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