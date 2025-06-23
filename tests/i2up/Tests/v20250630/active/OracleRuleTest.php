<?php
namespace i2up\Test\v20250630\active;

use i2up\active\v20250630\OracleRule;
use i2up\common\Auth;
                
class OracleRuleTest extends \PHPUnit_Framework_TestCase
 {
    private $oracleRule;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> oracleRule = new OracleRule(new Auth());
    }

    public function testListSyncRules()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'rule_name',
            'search_value'=>'',
            'group_uuid'=>'',
            'where_args'=>array(
            'status'=>'',
            'src_db_name'=>'',
            'tgt_db_name'=>'',
            'db_ip'=>'',
            'username'=>'',
            'node_ip'=>'',
            'rule_name'=>'',
            'start_before'=>1,
            'start_after'=>1,),
        );
        
        
        $res = $oracleRule -> listSyncRules($arr);
        $this->do_assert($res);
    }

    public function testCreateOracleRule()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'rule_name'=>'ctt->ctt',
            'src_db_uuid'=>' 6C4AEF37-6496-6DCD-E085-DD640001E4EC',
            'tgt_db_uuid'=>' 1C5F3C4B-7333-9518-7349-9712BC9ED664',
            'tgt_type'=>'oracle',
            'db_user_map'=>array(
            'CTT'=>'CTT',),
            'row_map_mode'=>'rowid',
            'map_type'=>'user',
            'table_map'=>array(
            '0'=>array(
            'dst_table'=>'a',
            'dst_user'=>'b',
            'src_table'=>'c',
            'src_user'=>'d',
            'column'=>array(
            '0'=>array(
            'dst_column'=>'e',
            'src_column'=>'f',),),
            'key'=>'MartinRobinsonWalker',
            'split_dst_table'=>array(
            '0'=>array(
            'condition'=>'',
            'dst_table'=>'',
            'dst_user'=>'',),),),),
            'dbmap_topic'=>'',
            'sync_mode'=>1,
            'start_scn'=>'',
            'full_sync_settings'=>array(
            'keep_exist_table'=>0,
            'keep_table'=>0,
            'load_thd'=>1,
            'ld_dir_opt'=>0,
            'his_thread'=>1,
            'try_split_part_table'=>0,
            'concurrent_table'=>array(
            '0'=>'hello.world',),
            'dump_thd'=>1,
            'clean_user_before_dump'=>0,
            'existing_table'=>'drop_to_recycle',
            'sync_mode'=>0,
            'start_scn'=>'',
            'full_sync_custom_cfg'=>array(
            '0'=>array(
            'key'=>'',
            'value'=>'',),),),
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
            '0'=>array(
            'user'=>'',
            'table'=>'',),),
            'exclude_tab_with_column'=>array(),
            'exclude_tab_with_column_switch'=>1,),
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
            'max_ld_mem'=>'',
            'keep_incre_time'=>'',),
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
            'ignore_foreign_key'=>0,
            'table_delay_load'=>array(),
            'merge_track'=>'',
            'fill_lob_column'=>'',
            'keep_seq_sync'=>'',
            'gen_txn'=>'',
            'encrypt_switch'=>1,
            'encrypt_type'=>1,
            'encrypt_key'=>'',
            'table_change_info'=>1,
            'message_format'=>'',
            'json_format'=>'',
            'run_time'=>'"12*00:00-13:00*40M,3*00:00-13:00*40M"',
            'jointing'=>array(
            'table'=>'',
            'op'=>'append',
            'content'=>array(),),
            'enable_truncate_frequence'=>1,
            'target_add_columns'=>array(
            '0'=>array(
            'schema'=>'',
            'table'=>'',
            'column'=>'',
            'function'=>'',
            'dataType'=>'',
            'opType'=>'',),),
            'initrans'=>1,
            'redo_read_thread'=>1,
            'virtual_key_settings'=>array(
            'auto_switch'=>1,
            'manual_switch'=>1,
            'auto_col_name'=>'',
            'auto_separate'=>'',
            'manual_columns'=>array(
            '0'=>array(
            'user'=>'',
            'tab'=>'',
            'col'=>'',
            'composite_col'=>'',
            'separator'=>'',),),),),
            'bw_settings'=>array(
            'bw_limit'=>'"12*00:00-13:00*40M,3*00:00-13:00*40M"',),
            'biz_grp_list'=>array(),
            'kafka_time_out'=>'12000',
            'part_load_balance'=>'by_table',
            'kafka_message_encoding'=>'UTF-8',
            'kafka'=>array(
            '0'=>array(
            'binary_code'=>'hex',),),
            'dml_track'=>array(
            '0'=>array(
            'enable'=>false,
            'keep_deleted_row'=>false,
            'date_column'=>'',
            'time_column'=>'',
            'date_time_column'=>'',
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
            'change_table_structure'=>false,
            'date_time_column_unique'=>false,
            'load_date_time_column_unique'=>false,),),
            'error_handling'=>array(
            'load_err_set'=>'continue',
            'drp'=>'ignore',
            'irp'=>'irpafterdel',
            'urp'=>'toirp',
            'report_failed_dml'=>1,
            'info'=>'',),
            'save_json_text'=>false,
            'include_tab_with_column'=>array(
            '0'=>array(
            'user'=>'',
            'target'=>'',
            'column'=>'',),),
            'include_tab_with_column_switch'=>1,
            'full_map_switch'=>1,
            'map_type_list'=>array(),
            'encrypt_switch'=>'',
            'encrypt'=>'',
            'secret_key'=>'',
            'compress_switch'=>'',
            'compress'=>'',
            'src_db_auth_uuid'=>'',
            'tgt_db_auth_uuid'=>'',
            'comment'=>'',
            'incre_sync'=>1,
            'encrypt_column_switch'=>1,
            'encrypt_column_method'=>1,
            'encrypt_column_key'=>1,
            'encrypt_columns'=>array(
            '0'=>array(
            'user'=>'',
            'table'=>'',
            'column'=>'',),),
            'incre_cmp_switch'=>1,
            'incre_cmp_db_uuid'=>'',
            'incre_cmp_db_type'=>'',
        );
        
        
        $res = $oracleRule -> createOracleRule($arr);
        $this->do_assert($res);
    }

    public function testCreateBatchOracleRule()
    {
        $oracleRule = $this -> oracleRule;
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
            'kafka_time_out'=>'ZTXj[!JshYi9hV8tNyD*VF#kon(X5!rT^MaLucX)9P^sOkqqZ*B]PRGDBaA)^KVF00QJIu3JUorHz!TN*qPTq^W2x$vNDYyEXb^x%ii*n5EzQw)*3fZu[zb[M(Zv1Xe3%o^vU0u0Mi*@zJZ$LSlgc*$9^#IHO*UjfiIQcBVY8FI&%[nbzD*SYV3V2G59H2yrBHNX&PZT6@p8P)[zGGz4vQSEG4YYRFZnzn4d1!VP1rkI1Qp$ZA7]*5x!)#UDJQ$44ife%dW#cLu5JYm@kc$F060Ez!gc1gVv[Z6KTB8^1Y0^L[9$SNV&d)mv%sx5o0SSnw*0o16(M#1wV!l4zNIzIy9w&pHKoyoIA7Ek5dX&4TfOBhjKd8S#R8E0za0x)zndpKDd@9Bf9WE2Cxd^bP3R8vTTzq9%ANd5d31rpDpoYRqf0M7nG8p5SW[sUYn[O[CpLHZPytD1[Bub!z&1AxnZhm(ya39$OCcMfjuq@nCi^B!$QH3(N7VNMl68e1H!n]IO[Js@1(4Fxw^Z(jOF6kylClbtg3g98dkNDS53$Rcw$yp7cQ((YnLKBv4u%IuxrUFss)pwg5tF2#D)@$FM8z[87Aes1ZDM1cBQt5DJ^&3KRd!Z@ACmGwcszgS*t5$!#lMKe^8^L@v[xxaM9!barAR8Z)W062Qg(Jn%wH*sKR17[tOLNR&I)Ezny3[^6ZT[12RkKQnJEGC!2L7&QV)7loyXj3%%ayH%i!nf8Q4uLe2ecPdgIbaIqbl2Kp@gVlxZKuyjCN9No6mlC7[KDzdvaOKMqVY1DI(E(qYsi9UH*$&OBQ)NZfMacojX)mph1ASuZXX59DM!4RcT2$zDNqq3)ZH0e52#klCTELoQKph&!mTIXGlDH*k0xk7fkv7RUQa#zBUzSitbJW8QPdTuyxaRaSLINxhu#ERGs1F*cRQJD#ATLL]wf[whOU3ExsEQ7UxbMLz]b^7V(gNnyld(ZuUka)YS6CHR9kuQtGlL*jrLMOKaD3)BNxiv1my*^Bg6i4QHAH679buRbJ8CEERY&%Td9ufKbRFsfvyXUuil%qRmh^9wOEG(fbZQFYsLYHLMDkG97*dgL$q[W0iSwhv$u&(5XX9pMly*nkQ56pn5gg%D*#0UfawkhHqbSOHdVrbVZlIVuga2qeJThdEV!p7BQDQgFq6F@zZ!kSfPF8HfQiXMTV)M1Ze#Qn()BxbU2!O[NH#3k(N01NehuxsDGrwQAj06xWc(6x6y8R3P^[z7UWH[![xOW!EKMS]dAjF]SO)073ZL7nLdE9Y0W#FcR!R&O6ffMcLs[VWG09#uG3TnStuHYfBkgnC250%$qfAFax1oroaSi@6QE5kDu5G1vRGB&Y88)hDxZd&n0mveG^V%m^yfyC9UaH[6fHCeXfDp14M&pix&[X&RjNRTL1^pwtgwAXGZ3g2A1z4I27n!50c163j4TnCZrv3HxQmbKPnWTdX98%n0mFhL0gl%GF*9XmY[UX!T(*VKN8dRHsVMgWbUk[F*YeEqzwOp1L@0piqo9VvFX@4@D*0e^MT@yi^x76FIV]Q[DaP7RAXx$56rEews5O(ywh0eEG3Beb!*@t%kEYV23t$%l!Qcu@JwOluoT*LtOWKG#xZd@CKnnv*i#&I)SbOa1TGpsxpFhXMW6@6XqdQtRgYnn)2TW!IlMm4*s43A4VG4(#VdXroJCxMBwlNSIf@UFbl9Y1c1*4$B0p5jylt%(IgZ2)zNnog&VRB3Lr)HywatuD&#g45ft0Jl4KYEo!dudm@)x#E(yIPh#0O*tH1SZ78Fk]@@t$&3^F$EfBJNdW!^&[g%D#wLw#zj7aFB0WIAMhDNYygoUrNJ)7llX3!UQy5Z#f*rXfXFaDZ*kVL2abOy^59YHUawiEIt0[rFD)WmIjy1EmgPi&9#(H$UZ9NCxkk^krqDg8[DbOi$F#LpDDxJq5bp#sWQTNwxQMN$cFti4bu87iB*cp1T9^JY9XE)1z9z@xiN@X)Kaw59cZYnhk4)o1T^I#(Fd4@FjTLU%RgZ[Uv0Qx9D15dMScXylij5DrPJC&BM3KXmJ5s!lAQmKU^^HIdPUkC7SUG%XiW0z*3)#2jvbkr6yt(Tk(U&Xx7SM4ZkxFd@jFfr]mD(HtQT%myBhF(eeNkQTT0IJfbpCLROn2ld8^#fZvf$25NCgtIIN7bfvD0LcIl7PT(Ua1YWEd7hzoTEU7naaG[We1zzZCcwyjYCCq#gMdNymQ)0xuzSrz798AS46#%kOMJ(P!LsDDKtHzOYpO^@CY[okvVs8XqY1kx!pt[!*9!dC^K3ul$q%!QPu0jEn1)qj^%d*2N1c85I6jVc5@X!f9@lBwkdi#m0CmNWXKN*vnM)@4IT16ucfx5M26pX8CR7O*@9Qas%rDrV)EX[KR73eD9QT8Xqg[Jq#&M74BZw#Hl2mp$]xN&4&CDI#X&j1@dC0Tzqm2c#(q0Pb4jwiUWfqW4CAqhnTI8qy!3FFgNXyuj)wJ9^PRoRIWFg#yKyzWYTqY6wdxn!bYG4&fYB%NgMz5i4nv&0L*RpwFN[#kxD&h&*4&h%C$ZL[#)[7[1bF9%P@r0tL&t84jKS9^MXYTL0X)HGHu(y%EA$mGg8)#(tadMHqe%Qshl)RQN#xT]xpyyHo*4u9Rq#K3K7ukfk9#rr1&OKPt6it(O8r1!Vews]86xHg[rCyN*SE$&uuq&L1ZqbvlUqOySbx#XLXu5Z5J0bv48#xqrUKQ**A(k[e@cj(*6FfpxVhw]YC4Doqy7#QoqLpF54k((U!%ViLx7sY4fE@)kg)TnJjo%li6&X(iyik@9K*9QUtt)$EOD5z3v4(Y%LfV1^Jt2W#59$8udDy5Hth5tsLBm5NSAkE8@oVgQ[16NxDekOVYK8uV*Lc%r8szjbs&1Pg%2GnZ2fTEPCHySq5KyQLE^3(N8j7OCBO7!0L[zmZD%uBrWY*dvULZSqizO@#pp44riIpxorAw*Hp2nEUw^7bz)G@c0jFv[qZM[&^3Ueo788hBszGAd#TpT(p(1p#ok[oW&Q#0OAyPkQ0HNPtg2ezCi45ejbxiee1B3L!1qPf^Y9SE&Z7QvLOiZr@RN5ZxEvTgMEx^5#yf#x8Xu#CD%(z*@Xb)F*PKAD7cTQLPUuXG^fZ0F#eLDm0t51uDPLS9OxvmzgR4oKN^lmsQ#oTNU7vHt@H[tu!U7(WiB^M@&la3O5l5#inIZJikcXUQ40SPlvj#[vmb#Jwu[PcJ4aMTWO0Au5@hn(yt$RX&3Z9sIMmuD1vDNXPuK2Jodkv5fgnO5Y(t)4#0#1&tc3jTos#x*#HcN5FUcR%Dd*(*CRYX6R(RU)oo[MHP^Rlx@ZUNr3X(RV!7b4u)HB89@EE*xR#NV622jJ7Bkl[UTjvrKHbS6InRhV[!KT2QShJ^CSZ6GM82)ZVY2jy#G^L4dFfTr4[wCEP(UUqwx[EKc9#G$0&bcKiIbFH)#MNlCwN*kBrtP$0OAC1Zi##X1jo7gk[)X(!e[idA]pECwD9sHuL$2!F]!zVwrU$#5](L4u!@Qr*YTjY$C1k[[VV5Q8j52KzLN)Si7J8LYGV8hrzASby)pEEF)zXr@CHRU2[g8@vnLf7LK)5g*[Ubt9TO)DLVgFvi4lo)hvNp#g%%mePoN7jWmG[rBF2osW4IjFiYnCLH[U3(T![ehvYsySy#P)sq$ycK%L4EtbUjDZgEf!c22azye)]T2tod3h$otEz)hTmFJ&5SCL(X@ynGDvowU1hh4RPXcDHLj[*LssTHbzJJ$pszqL6WK#*P[w5Y4FkhMBubSngB4BjtV0Nxo15sw0Y[j$nVIs6YI^Eu[YWhqS0u6gFt8#NYjV[oK6d@E5dK0N^7tpn**C[7fgWtRC1(KwreTQ1r&&NeyXEsU$u!x%N23PngZZ1fFFlti6R!EqtsE9L&Rqku7[AjsnUjCAHVRxd9(%6eD^K!]vpfw6Aoe@H7#Kp751oY6$dSGHsFFMqY5B@MvShB0CEGjV$3nNBM%S1BxzZJG[((oUOTymRpPydzd5FPGq@kR)u9OPflyPFe8TV)k4Ca9!1fh(11LRjBPO0n*J@[VvxBhTXH8ztFl5!@#@RHPbENceaoZzIBlkT45IJiC2drZ(hnM0QR!b7R**e6@@TlIQtctH8PlzRHPSz&AqM*eMWOPgMJMveiYA&Mox@n^OyOBC3ofExtA^hUkP$yJUfN$PISyL$!FXJ9uiE$5kiItRONlBU48S[^PsWiQ$OT^w&39denNI]1NDGvTM5iTu0@%qHTqcQa4l1xPpqhgdZePqU6XrVTkA0Mg&)#rz1TZ)uaiyC0E6peXpbx4jMhw3fFe#BcCP&4JKqVs!lAd[APB1MXAsIW8O5^V&w0&BAp!K9lrdFuNdIK*psJ3LHCFBFLXCA4zeZlNEHu57Atj@C6x7b7zSbtPsrZBZ%$BJNfsxs7wr0SSfV*0q1[08R%@mIdbl@mG1^XFwau4ABWsXg9(dJzgi($!lhV%jLgkTmd&r8LP7OS&@(]igGDLitvWqQ#KQMy^@i6SSLIPm@9cr4qiuql8)SxZ$L&wPj4K[4AfJy5ULG70m6l@1H@cOc7JEmqB9e5Ozk5(oGXnOw2cq4ZG$TqleG7Sb22#&M3kD%)m]pXEnT9XK[C%Cg088XRF3*ec3WHEqXkfxIj!%Y5xuVtMonCm9!P!G5O%TiBKKfp$GFrf9*80$rNrZFLb@c2b[49Rn*8lcfXqQ(ym^j&j5)isOx[D49NJ0X4e%UrnHD4DzloXh(A3C6ds!(GTzBrrqoW#U)9@w9RSvAs^tW#DwuR#EcpttupMKqALKXYyIJxSMB5Z^ej)Rq&%$jbP10YD4s8Q[7ktd&oQKCzPohShjyAtTgipNnw[MJ4rj21u5oqfA80ybyN8WZ$N#LIBAj]0FHfxn#T0)Cwqf@t$oZYQoWwB(BDyJiWT$qlAK0flHMO&D9JHvU%iXPwNniYVlEV1!mFpJDzRhaep#hdAoQN6j2m*)wN58E*nX0wYpci0qOD0p^M!XuSAOba(@NdR3(A0X&*IKLlD]OoIqwXfdC7SZK%mGo2wjtIpTlG$g7^HpiFeVTqZL8Fh8K4yS!2tSmTHe*u7%1nHbtCOTk33TXYhaE0h5^PY0XZ328lzK#jX%H#ms#e5D))K#TEQoWJjzBf5VU0BCd!fm8Ze@XH&fSyM1QxF7DboG]Hy[]up[pyY@Z6@lMrQekG42A9M!)mn)EuBw@3Ur4QvOfn9t##brsH%Suhc9TkArRMZY]6oRFq5b!#MJ9QjP%eFqp(#CDZiu^Sh&HZ0bBZi6H$Jk&jq!IilcrgbEmJoDs4VIJzgow@Kq@$0WCTwK%dzy7PNKb58rP(UqIaDtB&UDUmHQ)5Yq(cKrQkAru*l)umf(uOALmrBMyH)AkrR@d&3cAqR)LGN&Iiif3w*kDRd4O6MFtf[Viu*uN31Zwg$sMIqNcBk3uoxUSC^aYjbui1@(EtWSukfEyBK5u7[qVAn6AzhJdQMh#oNTlx9@7sJ&T2[GED31R%gfQCgi0%V&3&lrg$9CgDs2k)2sG@x9G]VC^t8XQs(O7jmbyehZTx0edB7yWi3gU4ktPb)C@KoekP4FZvgsXlKXuoaLi4VcRtWHB0MM(vwSCbJW7@W]15*NI4L[z2Yx^Lqz6s[mv0kSC$Z%TAnaLHFNoXhec&uDUOMg1%Ybn3($9TgN&GR%NlSAGrt$h$Vp9mCnI5y3BfC3DyT$E0vc2cuBiER@seDi^&TFj1QZ^OGeMzB!UjhS%pNCx$760LcLnfMF0oUqF@jMZlaQSb$UAlvly)3xm&n32t4J^(!LkPmGTh%C9iQ59g%zu17mOER3tgnv2xncOo1c)BgbMqS59u[yGAp*OJ[3Ji[2t!Whx%#6w!$Y0IvRL%V*#qOPgkfnfmuMSs[SrIP*F#sJW!rAPX))aion4nM)tX5XOapd5TiA4cfonV9IJJk$^O0%s14lB21ZW4^0u*0Y^ewg3cRt[ad0LMN5JcuvqP[5fMgjFPw&!FU[I&GmGw(&1*dpne)yed&c!B@#Ld7WW1N)7x3mm#MVg6HQL63Ev7X5DXg!^4Lb*mQs20w@wZyIZU&KtB!dHitbbkUFf5$z#5ejvHyf8EVGxSz[LFEc4s5r6j0TDb@TcEmxA&YdO4@]nsR^u5Cm)gRCOcBYTfBKEcuegPXR3Oqkjqgg(WK2P8qNJkDlyEK$F4qE)oi#59^gvhbILgcq2u8l4y@t#5i*q9QWI**u&@m0F1^sn&#%2C^S*wQmT97o1Ft&sGKRivQmpci&5doG#LAFyWlzW^TCwlFHe$RNxLcSbe6J4)QTEn&D99JQ93hcjVn*&&J[5Z%4]MaRr1$L$ph7Uo21HNr^A^vEAi!O[pV9UxtTz]3Tl[cSn5Js0*0n(KCF7hoPm87KfMP3Tsvy^v))#IY@Vhi619NU52YE]uyev(AN2^I7XyJHBWdWOFJ[6l[]uE)Ag8[)M0j7jOJprgBqTUy&X@)c[E8R9Up)LL9YEDo$TzpFAOsn%[So!Ky^C&CW^R2rMrj7(zDl]Gj3jffX$KU46Rd[Tb!HH4Tdp&m5*P8l(3DYNsY@$yHCzhZLO[@AP9WI0(mNfpnxW0kxC&Dvg#9eM4hu#%HZI6t#hU!jlpiVHjv^%@QMQI@XxPXjwDakme0PXVmLqw^G7l^SEH^&UPk(qk!l6dW6vD4wN!xM9Hrh@#&7!M5s^xz!WUyA62wop5!5Fzgm$6YQp76x!%d59CHzXrsyJOHJSD8b6sj3bXAr*V@!TZo0rZvQI4C!@fzROR(F!jDbkLP!YVcEg1653#B&4woNhTyly0HgJA%3dL^Zj*RHDfpntVxqJKxz)cLk(9oJtfnLIL8xtQm&3YTe5Qc@T**@w@HRw#NAvj*SLkdrqQgprenAm9fVTYc&FV8mkCnz9QhfDbiv%l(fKm82diGKvoyze$9X0cVemzA)Q7L^$%]uLUp!&vT8!wPx3Edj5Y2KT&NqSorXeflWwtq$s6nG%N1WaV2XmZ(voXuxuEm8PVD]XSwE43&)9TfXBqe5Ti4B51Jl*Qgtwf^c[#7&Z@VA1OyMlgk1KbSFOvPhr[u84axFCV6EUWLRfsTSboD5L@^DQx4zNt^mOsn#EzUjGXkCr3HocH&Y2nV]Ir7%#h26pSXW3V6A[ZJVL*lhXL7Ds^WqY$fQ9Clbyt@4e[*Y3@rl^NtiDs%bGnE0U0Hcjifjf!QqP(pIvWZ[l*AU)[kKQ8d)kt^8ciLssC8pMIp8eqAYA7eTK^$mqr^q0MH0[mgBVz^LEpErlj%vQ*zd0RKDTEyQjWlXm5dX2pcnYvJUl2m$lxrOVpEtaSdnf8$ohG9QzJu[W[r#CheX&@rIPaW9v!#zerq1b[r(W0xScXgF8e!9X^v&qbaQIf$[^BUm58EAP7evM99Q@VmiG7lq3NBfcx77dBM$Sq6wegIG^hXM05@[ENIBSaPS*DtuZdExd40r7Fk#fxKO!Rftq%hCFXeTHXjLOhxZYkGK[)Lf517^HzIr(8HuTiGmDk&b6%pc0dkor8jfVbTzrUlxtGLt)[wTsVRTw3w$BHEHNSNjKmIXtp$RHPB[br@DyDc8RqoK)DrQ[358vc(!Tv!2J$OZuvZHti]5t5s$j[QM]Q6@iWHxEmNHdbocq6z0UviSOwgRX4^C8qILeBnxYN04GAusQYbnW@VVSt(M@kg6M]VSxNKfCSCGc!pebqvb&rTe[hvq*%SCR83Y)ZwdPx^eJjXUUC$N1e0#GEsgVjoERVNQ%^r9U0vrPZPf(NSLw5M$vsUH^ckANVKBKEpYTEX9Oq2^r6qqep#440lCMxj)XJw[S3ebH%rpayrnn&9sr&9CZ^d6*f)*SA*PS*7niyl3OnVACE5Oh!oDA@7dYQzeT)Z8E&sr7^CS[0UXZGyfbOqhHCR#mR1gJWTnzNVK2dnL%ZMu)qp66cpJ6WBJ@ohIN#yxEC#vQPw%%WC6nPZk&iwNyW]l^hDuNp39qMuQsWr&*IwiNMI9xLn$U[ip*$f(2WxA^d^DP16oLhZw(rQY96J4v*$stW41lf(K[v*[VKKE7V!9#y]9xVaBfrbm@fUX!3jqRd7SXA20bI6tC08i*9JwyTJX%9Wwf@EV@#nj*R$BpoxtWo$vAXUdagPlzhZj2jH!$QXCN^#7D$A@EvzK&F^ehhJpM[hz^jco!#q%xBu[gN]mMZ#IiYRs!#l5]V!QM1*^i!emf$Tl7tgqPIfTAhMY5lGVVFF8$qxNBCgHyvVRtbiK7e^[oOCfW4C^CCU99iueT3Sjr%w1e6pMFCA7VAL*^4N8zmBSw[Nh!@hu3Ee&GY$AZ(6#eE3lQxgriCO@znI9497PfIEX0OU4eAJ2tAT)d$yApjH(VRsNWSkWZ#kfMulqF0x*xqv2PVI7)6q[*DQJ6&qddATayb15vY]oHHEADBMO()Z3N@Q@XU0x3XwDyc&)S8Jo#6gXARu4UZ0(7FupQyAV5PS$RT#zO*gWxZK)bcA14Nn72d0FxJFbZZF$rCSYhh*6K6%fG2tzW[mBv[Y7Qjq#3m(owrTrdegu4R%qnhQTRy(A)PLpXiCytH(5y6UA4yJt1zc@Dq1o@9iYhY5q88JvbKa^C%AN)87C$FiQUAuWG631Or!B7mFH9*ds@)9h^gr#)WlTs1dh^ldlXgIhmw*9fPU#hJ&E%H@%)BEKEl4bsth7QtV2bbf2noOiPwz0dvp6wB(^)^BTHjPYTfX5%yJA^nLKPI6z7#uiU9Y3]3sb00bqROGyWQDiZ(KWS*g!ZyUDsB!Te2L8*9WhSX7H7ujPRQJV0#ZK!522oCoHiV%PD0eFbJh%OS#mtQH]m#JG7Zbi[%9jh&@6Ofgvz#lldN5)RaS$ABm$K14okn1^tpcUE#CYdNmTAnZzH0TLT$%U!c4t$jpZ!fWCgHYR*ywj3blByTu$0kJJgeGqJEO)kgZ]X$]z(OjIDdw5pFGX0bwD&F048Qtu!5@)@sEKOs9QYwZk25ljZ7d1nYAbKl095pzemGOUWNS&PbW$6GMl$%EAZ$djU8%vWEU2kXiWTf$R$yx3i)&#gggR1KWoXthZUAiZy$3QqFWGe^O$W*uGWgbhGYOKkMP1$aoAqtKsF%5l&j*(uorexTMi(qRH#^#(XOJwt7vARj7kenVxHWh0B4D%j%X[k6*1wvI!&n!PqI$vT3@*QArqfADQRkXOV5v%@^ouyd21m@w4s8X00(w($$QDQ1ClNQH&(HIXQ!x4FuNJ7!q5[A)qGKD3[!5v@K&T1JPlLG74D*ruKznvDvs0NYmgm4Ylww!6SHL2H17GpKDHF#43]ebf9@D(f$[YlWM8X70x199Ft!6z7Wx*&Mkj@ErCgDx68Phg)RLXnXrP!gC&[svw*BTiXCoCuKg2Ne*Emz#T7vO)Tij([YsN[Md*#URawyhG9M!zSZ9RLeK%[2uA5@7qxs%C!PVSCxyK[3ncV7ZA2Z@iHk40NKnx1y#env!#@pInlO3IE!abgLoxMahtqK8I6I@KWojzoVFCK(jD)T$F!xiZScwpC[FkRM)J[k0eFnp%6vp#%uNb2Kb6#nh0oj@Bdu5XbbMqgs3eW4[*GAr(9)TnPjY$X3RwwjliOW!V)QsUN)30XBX!&5txZ0LFy^85U(gahqH^eB06BS6AXlQVp3flb6vFs]a**B5t]gicbED8RRufeL9hZ(lmhENCD0B&#H]rzsNYLBj91ssxLxbDcrDavdbwKN&xOU@waH7r3T%xTtS7unfuT4FsAlzWbs%()NwSKEOQpkU4WRoH8w[C4LIcjgM0P5VtKSjB7PNPNY8&J&h@COJ7xOHWzATK&7ldIhli23WUTo6%Ep)A8zHgNEP%%]NdvipsEuW#^$6gRN)1RL96V[s@@pWLBKawnWYB)ymC6gzEWpyZSZL0XywkSfpBZIrlzP#*2O)N$HbnJN#xW$Pb0@W[TqveehNWg^MQDTVbjAeRn1*%@nD)(W2KEbLep86n(tUSEEhF2R0XFV[SzViKN!*Q[(PwetuvI$O8mI8AwL7g3z81%9yYiYwm)K8X*7ZwofOGA3Ejk0XOLv]cb!w04j66h3yGZEfxpmB8nwvf%0QB@D5IK%14[4mW[S04BgjW#PLtCEBh$GpxKnziUKI1okxeLhq&2QH*A#!ixm0oNNPVIAkGleY$I*#&xmdrDMK8)GWS4vHF*T!gdIdL1^VZ)!PFSjujP[&1kY&z()6Il4NGEBCP4sKm%yq!S@&&GfXt@BR[$W)*MZRZlW38C$D@RKZzRJb3nAlrX!XwbXdH#CHqcSW8rdQ*qEEoj%ShoL4^wZ!K4HR6WGbPS29B990LpKum(l(b(Ia1%alY^H5yrmOK)QlcsuG6Cuah9fln@wAm0w6Xj(jMmobb$Vxdw8OeJ&f0%7($HUI5k%aolrD&41lrF06XVAe0Eu7XDohdMvy2lNaOtMk!)NJZ9w0vCy)tYFYH0UZ5tP47HbxE[0q2(9cU@6[)2m5Tc5CFSZ9s#J1qGRl6i58l%LOwOpVi)mB&eBIGEfZrFZ)ivUs%(f[UDRwej1t#oNy5(ikoKaUMekN1d!H^K*iVFaM3D!Rn#41pF5ps31xZ336A72Ay2*iBeFLj0iAR20tPuw%V(RcqE5d!ZUozq*&i1MCDo4KL5U!PFyFIv[qB%[SPimWF]L!iWplxUDTCcGXnY0AXxSiOPG*[xH]@0L)ygRzhW*GlXL3VsUFGxK[mZsRSNrSWZtOmRnl#4INnv%k$VcI%fFFLx34vzDtO954l5elRtu1NJhRmANh$4*hDtVYh@^QdW*3E&GH(ewAPodxkBpo$DDBzc31^9$*sw#D91VFtp)P2EjO*JbIEvdy[1pMZy#eJlfx[#!nLf4XL%n*9loxRGn4&3FXPHLRDf!n*Y0i5&BKkOh2dhJLu(FjjbgO!@R#KucsjQBj@l!R@zu$pr!rtK4)Hu(cwQnJQ9SKPfDUp*kgwB5oVftDc74mfL2^w@bxz4Q!C45c*ccqUoHR#&&RPq#@cAIv[ER@2jj(5i5un(q5iJxBqVAuLf*UxoUB8zjIjWTm*oev%yYwIItVBDgEd&qZnwrHRQI9ZC$s5&l*HIU1q9W[KeoxuIRlFTu#2ff!KuH)k8FA1zdLXHq@SSMEFPmy3jXAstcRD[TSD&OLJ6HapV4TdnTVrx0UHTTn*Api^JM)C0MTff&MP3tuV*kg!$eb@ojhhEYcDHWGqOfx&)I$bx@&R2)Qh$&vh[CoA3wQjlNRlQuY*J%bT6$uHg(9^d)ch8TdnIdqoragI758(eBqpwiP@scQMlwOuydPrtUuAEzEmJQgg)Pg#hMvcGf(&1#DLigoqgPXLH*h@A3FrA1t)1UjTqyV[qu@9zdFr514WFsDlI2y[LCWW&[Qi&vz*sV5bnCscHIyj57!&aeZT%lXL$e8LU^i(OF4JRL&Mx(LD7Qa(ZvX@S$NV6!scRI9Q$tuA*^4fqtMqwVjpm2DNqy#qHvf$k2li4kCex*OGGqVYWC*K))iXxS*nI3(4u]HcG8fr*@yvecQQ@2qe7VpBELG6gOPSvMPClF^$L0jHDlzpArVr]#Nu91$V1Uv2uQn^EG[S71cQbv4PvTTH)kMWCKTC3wiZLf5v&#VtO&#olQfP@[nI@Bpo(0zXu!pqgDpXK5)Gwxkn&NPs[$J$5D)JulMSIui[9i0pRC6yybwgzQO(rLe6IGt5glq3TAsJ4U]6FCWpEgOJK2eXs0wCV)FhTw4%LlmrSSVXDeOHPEzN#O#Yg7*jhO1Y!yK6fqIDx!9hh#QjWFLDz61Y)Kp&^cIMX[A2tNUqr[IdyRNzl5g&k7([pUL#$L7S4x0iI[*BQR^s2esEra^BJZVHTg^Wm2YxpT5!gOEEJ#hnP*coXDhO*ZdojuIEqNHiOTtPw6lin&bXemg^qi6Knyp&POTRlrY)](LXRx9Xpx1qJNn^A5VRV]0Vo6!J@w7KlBZaDktz]zKVinVCr(rr8p#c%(e^D8[RzILoifYzI!x8WzxmsvIQlioL[gc4VDviu&kg@NLhDTDy2MO[gIu)z^X#96Ww',
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
            'tgt_db_uuid'=>'',),),
            'db_user_map'=>array(
            'CTT'=>'CTT',),
            'tgt_type'=>'',
            'maintenance'=>1,
        );
        
        
        $res = $oracleRule -> createBatchOracleRule($arr);
        $this->do_assert($res);
    }

    public function testModifyOracleRule()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'row_map_mode'=>'rowid',
            'map_type'=>'user',
            'table_map'=>array(),
            'dbmap_topic'=>'test1',
            'sync_mode'=>1,
            'start_scn'=>'1',
            'full_sync_settings'=>array(
            'keep_exist_table'=>0,
            'keep_table'=>0,
            'load_mode'=>'direct',
            'ld_dir_opt'=>0,
            'his_thread'=>1,
            'try_split_part_table'=>0,
            'concurrent_table'=>array(
            '0'=>'hello.world',),
            'dump_thd'=>1,
            'clean_user_before_dump'=>1,
            'existing_table'=>'s',
            'sync_mode'=>1,
            'start_scn'=>'1',
            'load_thd'=>1,),
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
            'src_max_mem'=>512,
            'src_max_disk'=>5000,
            'txn_max_mem'=>10000,
            'tf_max_size'=>100,
            'tgt_extern_table'=>'1',
            'max_ld_mem'=>'1',),
            'error_handling'=>array(
            'load_err_set'=>'continue',
            'drp'=>'ignore',
            'irp'=>'irpafterdel',
            'urp'=>'toirp',
            'report_failed_dml'=>1,),
            'table_space_map'=>array(
            'tgt_table_space'=>'1',
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
            'ignore_foreign_key'=>0,
            'table_delay_load'=>array(
            '0'=>array(
            'table'=>'',
            'user'=>'',),),
            'keep_seq_sync'=>'1',
            'gen_txn'=>'1',
            'merge_track'=>'',
            'fill_lob_colum'=>'',
            'sync_lob'=>1,
            'table_change_info'=>1,
            'message_format'=>'',
            'json_format'=>'',
            'run_time'=>'',
            'enable_truncate_frequence'=>1,),
            'bw_settings'=>array(
            'bw_limit'=>'"12*00:00-13:00*40M,3*00:00-13:00*40M"',),
            'biz_grp_list'=>array(),
            'part_load_balance'=>'12',
            'kafka_time_out'=>'12000',
            'rule_name'=>'ctt->ctt',
            'src_db_uuid'=>' 6C4AEF37-6496-6DCD-E085-DD640001E4EC',
            'tgt_db_uuid'=>'  1C5F3C4B-7333-9518-7349-9712BC9ED664',
            'tgt_type'=>'oracle',
            'db_user_map'=>array(
            'CTT'=>'CTT',),
            'rule_uuid'=>'F530FB0E-0208-9071-66D3-E595AE7D5A4C',
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
        );
        
        
        $res = $oracleRule -> modifyOracleRule($arr);
        $this->do_assert($res);
    }

    public function testModifyOracleRuleBatch()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
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
            'batch_encrypt_compress'=>0,
        );
        
        
        $res = $oracleRule -> modifyOracleRuleBatch($arr);
        $this->do_assert($res);
    }

    public function testDeleteOracleRule()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'rule_uuids'=>array(
            '0'=>'DBED8CDE-435D-7865-76FE-149AA54AC7F7',),
            'type'=>'',
            'force'=>false,
        );
        
        
        $res = $oracleRule -> deleteOracleRule($arr);
        $this->do_assert($res);
    }

    public function testDescribeSyncRules()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'F530FB0E-0208-9071-66D3-E595AE7D5A4C',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $oracleRule -> describeSyncRules($arr);
        $this->do_assert($res);
    }

    public function testResumeOracleRule()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'operate'=>'restart',
            'rule_uuid'=>'E0D32305-C596-3ED8-98cD-9Ca9b2D1aAc4',
            'scn'=>'1',
            'all'=>1,
            'rule_name'=>'',
        );
        
        
        $res = $oracleRule -> resumeOracleRule($arr);
        $this->do_assert($res);
    }

    public function testStopOracleRule()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'operate'=>'restart',
            'rule_uuid'=>'721ACABf-FCAE-fDa6-A5Bf-d9c0FbbedF3a',
            'scn'=>'1',
            'all'=>1,
            'rule_name'=>'',
        );
        
        
        $res = $oracleRule -> stopOracleRule($arr);
        $this->do_assert($res);
    }

    public function testRestartOracleRule()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'operate'=>'restart',
            'rule_uuid'=>'4dfAA092-B4F8-c8ef-8f47-E5EE6C38d359',
            'scn'=>'1',
            'all'=>1,
            'rule_name'=>'',
        );
        
        
        $res = $oracleRule -> restartOracleRule($arr);
        $this->do_assert($res);
    }

    public function testStartAnalysisOracleRule()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'operate'=>'restart',
            'rule_uuid'=>'F984f00b-322E-5cE5-42bf-cB792E5918B6',
            'scn'=>'1',
            'all'=>1,
            'rule_name'=>'',
        );
        
        
        $res = $oracleRule -> startAnalysisOracleRule($arr);
        $this->do_assert($res);
    }

    public function testStopAnalysisOracleRule()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'operate'=>'restart',
            'rule_uuid'=>'2dd355Ad-A9bE-D863-2c3B-3Fae9b5f2f31',
            'scn'=>'1',
            'all'=>1,
            'rule_name'=>'',
        );
        
        
        $res = $oracleRule -> stopAnalysisOracleRule($arr);
        $this->do_assert($res);
    }

    public function testResetAnalysisOracleRule()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'operate'=>'restart',
            'rule_uuid'=>'58E3c5C9-8E4C-fd83-bf3C-Fd99ABbe9Ade',
            'scn'=>'1',
            'all'=>1,
            'rule_name'=>'',
        );
        
        
        $res = $oracleRule -> resetAnalysisOracleRule($arr);
        $this->do_assert($res);
    }

    public function testStopAndStopanalysisOracleRule()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'operate'=>'restart',
            'rule_uuid'=>'81195fFA-2F4d-D6f9-E5DD-d6c5E3BA36DA',
            'scn'=>'1',
            'all'=>1,
            'rule_name'=>'',
        );
        
        
        $res = $oracleRule -> stopAndStopanalysisOracleRule($arr);
        $this->do_assert($res);
    }

    public function testDuplicateOracleRule()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'operate'=>'restart',
            'rule_uuid'=>'b28DFeFF-bC90-58dB-7fDB-c76bCEAEdB21',
            'scn'=>'1',
            'all'=>1,
            'rule_name'=>'',
        );
        
        
        $res = $oracleRule -> duplicateOracleRule($arr);
        $this->do_assert($res);
    }

    public function testListSyncRulesStatus()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $oracleRule -> listSyncRulesStatus($arr);
        $this->do_assert($res);
    }

    public function testDescribeRuleTableFix()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'rule_uuid'=>'F530FB0E-0208-9071-66D3-E595AE7D5A4C',
            'tab'=>array(
            '0'=>'I2.table',),
            'fix_relation'=>0,
        );
        
        
        $res = $oracleRule -> describeRuleTableFix($arr);
        $this->do_assert($res);
    }

    public function testDescribeRuleGetScn()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'eB5AdA8f-fB8d-21aB-5A9b-feAbf3D379b0',
        );
        
        
        $res = $oracleRule -> describeRuleGetScn($arr);
        $this->do_assert($res);
    }

    public function testGetRpcScn()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'db_uuid'=>'',
        );
        
        
        $res = $oracleRule -> getRpcScn($arr);
        $this->do_assert($res);
    }

    public function testGetRevertRpcScn()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'rule_uuid'=>'',
        );
        
        
        $res = $oracleRule -> getRevertRpcScn($arr);
        $this->do_assert($res);
    }

    public function testDiffFix()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'start'=>'',
            'uuid'=>'',
            'tab'=>array(
            '0'=>'srcuser.srctable',),
        );
        
        
        $res = $oracleRule -> diffFix($arr);
        $this->do_assert($res);
    }

    public function testCreateTbCmp()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'tb_cmp_name'=>'ctt->ctt',
            'src_db_uuids'=>array(
            '0'=>'4CA773F4-36E3-A091-122C-ACDFB2112C21',),
            'tgt_db_uuids'=>array(
            '0'=>'4CA773F4-36E3-A091-122C-ACDFB2112C22',),
            'cmp_type'=>'user',
            'db_user_map'=>'{"CTT":"CTT"}',
            'filter_table'=>array(
            '0'=>'i2.test',),
            'db_tb_map'=>'{"ctt:ctt"}',
            'dump_thd'=>1,
            'rule_uuid'=>'d99Cc81E-BcDe-B05F-cC56-6dFCc2d8D744',
            'polices'=>'"0|00:00',
            'policy_type'=>'one_time',
            'concurrent_table'=>array(
            '0'=>'hh.ww',),
            'try_split_part_table'=>0,
            'one_time'=>'2019-05-27 16:07:08',
            'repair'=>0,
            'fix_related'=>0,
            'config'=>array(
            'one_task'=>'',
            'tab_cmp_fiter'=>array(
            '0'=>array(
            'user'=>'',
            'table'=>'',
            'condition'=>'',),),
            'start_rule_now'=>1,),
            'report_msg'=>0,
            'map_type_list'=>array(),
            'include_tab_with_column'=>array(
            '0'=>array(
            'user'=>'',
            'table'=>'',
            'column'=>'',),),
            'full_map_switch'=>1,
            'incre_cmp_switch'=>1,
            'incre_cmp_db_uuid'=>'',
            'incre_cmp_db_type'=>'',
        );
        
        
        $res = $oracleRule -> createTbCmp($arr);
        $this->do_assert($res);
    }

    public function testDescribeTbCmp()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'DF65A96D-6C6B-dA4F-6Bcf-bD6f73A5359A',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $oracleRule -> describeTbCmp($arr);
        $this->do_assert($res);
    }

    public function testDeleteTbCmp()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids'=>'6CE2EC38-dEab-C1Dd-3d5c-1AE4ceBDECB4',
            'force'=>false,
        );
        
        
        $res = $oracleRule -> deleteTbCmp($arr);
        $this->do_assert($res);
    }

    public function testListTbCmp()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
        );
        
        
        $res = $oracleRule -> listTbCmp($arr);
        $this->do_assert($res);
    }

    public function testListTbCmpStatus()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids'=>'cA5978ba-c7E1-cED1-5bF2-d469F6C196A2',
        );
        
        
        $res = $oracleRule -> listTbCmpStatus($arr);
        $this->do_assert($res);
    }

    public function testStopTbCmp()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'tb_cmp_uuids'=>'C32FEf41-269E-9A3F-460C-39cc77BEA13E',
            'operate'=>'',
            'tb_cmp_name'=>'',
        );
        
        
        $res = $oracleRule -> stopTbCmp($arr);
        $this->do_assert($res);
    }

    public function testRestartTbCmp()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'tb_cmp_uuids'=>'DBffD0A7-e685-25Ab-8231-48517b3cB25e',
            'operate'=>'',
            'tb_cmp_name'=>'',
        );
        
        
        $res = $oracleRule -> restartTbCmp($arr);
        $this->do_assert($res);
    }

    public function testCmpStopTime()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'tb_cmp_uuids'=>'28f10cDb-DFc3-51B3-cD25-A5D0EbBFfd2E',
            'operate'=>'',
            'tb_cmp_name'=>'',
        );
        
        
        $res = $oracleRule -> cmpStopTime($arr);
        $this->do_assert($res);
    }

    public function testCmpResumeTime()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'tb_cmp_uuids'=>'BFbc8961-a9C3-A112-A6f4-E7Cf7B5Ba86F',
            'operate'=>'',
            'tb_cmp_name'=>'',
        );
        
        
        $res = $oracleRule -> cmpResumeTime($arr);
        $this->do_assert($res);
    }

    public function testCmpImmediate()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'tb_cmp_uuids'=>'2B17f431-069B-E3F4-978c-C48D9e2Df26D',
            'operate'=>'',
            'tb_cmp_name'=>'',
        );
        
        
        $res = $oracleRule -> cmpImmediate($arr);
        $this->do_assert($res);
    }

    public function testListTbCmpResultTimeList()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'',
            'limit'=>1,
            'offset'=>1,
            'result'=>0,
            'before'=>1,
            'after'=>160000,
        );
        
        
        $res = $oracleRule -> listTbCmpResultTimeList($arr);
        $this->do_assert($res);
    }

    public function testDescribeTbCmpResultTimeList()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'time_list'=>'5D4fb537-BF9d-D46c-38Cc-8CeA23BEB3B0',
            'uuid'=>'',
        );
        
        
        $res = $oracleRule -> describeTbCmpResultTimeList($arr);
        $this->do_assert($res);
    }

    public function testDescribeTbCmpResult()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'offset'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
            'uuid'=>'2Db8D2Af-F5Be-bF7E-CcFC-8D65E284d36f',
            'start_time'=>'',
            'flag'=>0,
        );
        
        
        $res = $oracleRule -> describeTbCmpResult($arr);
        $this->do_assert($res);
    }

    public function testDescribeTbCmpErrorMsg()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'offset'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
            'uuid'=>'eA924348-e9cD-Dc23-AAc8-896d3A985eeD',
            'start_time'=>'',
            'name'=>'',
            'owner'=>'admin',
        );
        
        
        $res = $oracleRule -> describeTbCmpErrorMsg($arr);
        $this->do_assert($res);
    }

    public function testDescribeTbCmpCmpDesc()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'offset'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
            'uuid'=>'08dDC445-48Dc-6dfD-79Fe-FE7a8f45d1C6',
            'start_time'=>'',
            'name'=>'',
            'owner'=>'admin',
        );
        
        
        $res = $oracleRule -> describeTbCmpCmpDesc($arr);
        $this->do_assert($res);
    }

    public function testDescribeTbCmpCmpResult()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $oracleRule -> describeTbCmpCmpResult($arr);
        $this->do_assert($res);
    }

    public function testDescribeTbCmpStart()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $oracleRule -> describeTbCmpStart($arr);
        $this->do_assert($res);
    }

    public function testDeleteTbCmpOracle()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids'=>'980a9D2A-25c4-d3bc-11Cf-d2A967F05CD2',
            'force'=>false,
        );
        
        
        $res = $oracleRule -> deleteTbCmpOracle($arr);
        $this->do_assert($res);
    }

    public function testStatus()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $oracleRule -> status($arr);
        $this->do_assert($res);
    }

    public function testListObjCmp()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'test',
        );
        
        
        $res = $oracleRule -> listObjCmp($arr);
        $this->do_assert($res);
    }

    public function testCreateObjCmp()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'obj_cmp_name'=>'test',
            'src_db_uuid'=>'4CA773F4-36E3-A091-122C-ACDFB2112C21',
            'tgt_db_uuid'=>'40405FD3-DB86-DC8A-81C9-C137B6FDECE5',
            'cal_table_recoders'=>1,
            'cmp_type'=>'user',
            'rule_uuid'=>'751A03F5-C97D-645B-82B2-316A5D198528',
            'db_user_map'=>"{',src_user':'dst_user'}",
            'policies'=>'',
            'policy_type'=>'periodic',
            'one_time'=>'2019-05-27 16:07:08',
            'repair'=>1,
            'config'=>array(
            'one_task'=>'immediate',),
            'obj_filter'=>array(),
        );
        
        
        $res = $oracleRule -> createObjCmp($arr);
        $this->do_assert($res);
    }

    public function testDeleteObjCmp()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'force'=>false,
        );
        
        
        $res = $oracleRule -> deleteObjCmp($arr);
        $this->do_assert($res);
    }

    public function testDescribeObjCmp()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $oracleRule -> describeObjCmp($arr);
        $this->do_assert($res);
    }

    public function testStopObjCmp()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'operate'=>'',
            'obj_cmp_uuids'=>array(),
        );
        
        
        $res = $oracleRule -> stopObjCmp($arr);
        $this->do_assert($res);
    }

    public function testRestartObjCmp()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'operate'=>'',
            'obj_cmp_uuids'=>array(),
        );
        
        
        $res = $oracleRule -> restartObjCmp($arr);
        $this->do_assert($res);
    }

    public function testCmpStopTimeObjCmp()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'operate'=>'',
            'obj_cmp_uuids'=>array(),
        );
        
        
        $res = $oracleRule -> cmpStopTimeObjCmp($arr);
        $this->do_assert($res);
    }

    public function testCmpResumeTimeObjCmp()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'operate'=>'',
            'obj_cmp_uuids'=>array(),
        );
        
        
        $res = $oracleRule -> cmpResumeTimeObjCmp($arr);
        $this->do_assert($res);
    }

    public function testCmpImmediateObjCmp()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'operate'=>'',
            'obj_cmp_uuids'=>array(),
        );
        
        
        $res = $oracleRule -> cmpImmediateObjCmp($arr);
        $this->do_assert($res);
    }

    public function testListObjCmpResultTimeList()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'C54873CA-F28F-82d7-8801-DD5FBEdcCeB8',
        );
        
        
        $res = $oracleRule -> listObjCmpResultTimeList($arr);
        $this->do_assert($res);
    }

    public function testDescribeObjCmpResult()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'c69C43b1-d4CD-fFab-B51d-4158E4fD0331',
            'start_time'=>'',
            'limit'=>1,
            'offset'=>'',
            'search_value'=>'',
            'BackLackOnly'=>0,
        );
        
        
        $res = $oracleRule -> describeObjCmpResult($arr);
        $this->do_assert($res);
    }

    public function testListObjCmpStatus()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $oracleRule -> listObjCmpStatus($arr);
        $this->do_assert($res);
    }

    public function testDescribeObjCmpResultTimeList()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'4BC6C42E-AdC5-3F6E-ce96-a81d4f26aEaF',
            'time_list'=>array(),
        );
        
        
        $res = $oracleRule -> describeObjCmpResultTimeList($arr);
        $this->do_assert($res);
    }

    public function testListObjCmpCmpInfo()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'offset'=>1,
            'limit'=>10,
            'search_value'=>'',
            'usr'=>'I2',
            'filed'=>'',
            'uuid'=>'',
            'start_time'=>'',
        );
        
        
        $res = $oracleRule -> listObjCmpCmpInfo($arr);
        $this->do_assert($res);
    }

    public function testDeleteOracleObjCmp()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'force'=>false,
        );
        
        
        $res = $oracleRule -> deleteOracleObjCmp($arr);
        $this->do_assert($res);
    }

    public function testCreateObjFix()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'obj_fix_name'=>'test',
            'src_db_uuid'=>'4CA773F4-36E3-A091-122C-ACDFB2112C21',
            'tgt_db_uuid'=>'40405FD3-DB86-DC8A-81C9-C137B6FDECE5',
            'obj_map'=>array(
            '0'=>array(
            'type'=>'owner.name',),
            '1'=>array(
            'type'=>'owner.name',),),
            'obj_fix_uuid'=>'2E956FCb-f9eA-BccE-6dD3-EF5FEC9ccBF6',
        );
        
        
        $res = $oracleRule -> createObjFix($arr);
        $this->do_assert($res);
    }

    public function testDescribeObjFix()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'e455Fa0c-0DF8-CBbd-dFeB-224BfcF518eb',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $oracleRule -> describeObjFix($arr);
        $this->do_assert($res);
    }

    public function testDeleteObjFix()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids'=>'CB6cbB5f-Fe7d-85f4-16df-Fef9f44CC05A',
            'force'=>false,
        );
        
        
        $res = $oracleRule -> deleteObjFix($arr);
        $this->do_assert($res);
    }

    public function testListObjFix()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
        );
        
        
        $res = $oracleRule -> listObjFix($arr);
        $this->do_assert($res);
    }

    public function testRestartObjFix()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'obj_fix_uuids'=>array(),
            'operate'=>'',
        );
        
        
        $res = $oracleRule -> restartObjFix($arr);
        $this->do_assert($res);
    }

    public function testStopObjFix()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'obj_fix_uuids'=>array(),
            'operate'=>'',
        );
        
        
        $res = $oracleRule -> stopObjFix($arr);
        $this->do_assert($res);
    }

    public function testDescribeObjFixResult()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'A1b789EC-d98D-4ceF-da18-57ddCaC01877',
        );
        
        
        $res = $oracleRule -> describeObjFixResult($arr);
        $this->do_assert($res);
    }

    public function testListObjFixStatus()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $oracleRule -> listObjFixStatus($arr);
        $this->do_assert($res);
    }

    public function testListBkTakeoveNetworkCard()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'rule_uuid'=>'',
        );
        
        
        $res = $oracleRule -> listBkTakeoveNetworkCard($arr);
        $this->do_assert($res);
    }

    public function testCreateBkTakeover()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'rule_uuid'=>'b52ce03c-363A-2f1a-2E6d-42DAE3c5DebE',
            'type'=>1,
            'enable_trgjob'=>1,
            'enable_alter_seq'=>1,
            'start_val'=>10,
            'enable_attachip'=>0,
            'net_adapter'=>'',
            'ip'=>'',
            'disable_trgjob'=>1,
            'dettach_ip'=>1,
            'script_content'=>'',
            'execute_script'=>1,
        );
        
        
        $res = $oracleRule -> createBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testDescribeBkTakeover()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $oracleRule -> describeBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testDeleteBkTakeover()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids'=>'94dF8bD0-40d6-ece2-Bec4-6E9e53E2F8F8',
            'force'=>false,
        );
        
        
        $res = $oracleRule -> deleteBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testDescribeBkTakeoverResult()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'bk_takeover_uuid'=>'e1fbecd0-CCAb-ae2b-FdDa-bdA3D9b9C0a4',
        );
        
        
        $res = $oracleRule -> describeBkTakeoverResult($arr);
        $this->do_assert($res);
    }

    public function testStopBkTakeover()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'bk_takeover_uuids'=>'Df2B433e-aefB-C3eB-E4B4-B6A5a454cf1b',
            'operate'=>'',
        );
        
        
        $res = $oracleRule -> stopBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testRestartBkTakeover()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'bk_takeover_uuids'=>'BffdCB77-1B77-E6ff-BCD6-7Ee4caF3626E',
            'operate'=>'',
        );
        
        
        $res = $oracleRule -> restartBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testListBkTakeoverStatus()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $oracleRule -> listBkTakeoverStatus($arr);
        $this->do_assert($res);
    }

    public function testListBkTakeover()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array();
        
        
        $res = $oracleRule -> listBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testCreateReverse()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'reverse_name'=>'',
            'rule_uuid'=>'F530FB0E-0208-9071-66D3-E595AE7D5A4C',
            'start_scn'=>123,
            'rowid_thd'=>5,
            'row_map_mode'=>'"rowid"',
        );
        
        
        $res = $oracleRule -> createReverse($arr);
        $this->do_assert($res);
    }

    public function testDeleteReverse()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids'=>array(),
            'force'=>false,
        );
        
        
        $res = $oracleRule -> deleteReverse($arr);
        $this->do_assert($res);
    }

    public function testDescribeReverse()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'rule_uuid'=>'5ee4C5Ae-eDEe-Ae2f-7ff1-626f3dbFDc65',
        );
        
        
        $res = $oracleRule -> describeReverse($arr);
        $this->do_assert($res);
    }

    public function testListReverse()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
        );
        
        
        $res = $oracleRule -> listReverse($arr);
        $this->do_assert($res);
    }

    public function testListReverseStatus()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids'=>'e25Cf445-cFA7-70Ae-ccD9-cCABD566CAF0',
        );
        
        
        $res = $oracleRule -> listReverseStatus($arr);
        $this->do_assert($res);
    }

    public function testStopReverse()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'7B7e3cF6-126c-a111-4AC7-cec78dfDfccf',
        );
        
        
        $res = $oracleRule -> stopReverse($arr);
        $this->do_assert($res);
    }

    public function testRestartReverse()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'AEDef9Cb-0eff-e42A-F14C-08987b1449bd',
        );
        
        
        $res = $oracleRule -> restartReverse($arr);
        $this->do_assert($res);
    }

    public function testDescribeSingleReverse()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'9E447cBc-Acb3-3ee1-1c8b-5B9eC83c4828',
        );
        
        
        $res = $oracleRule -> describeSingleReverse($arr);
        $this->do_assert($res);
    }

    public function testSwitchActiveRuleMaintenance()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'maintenance_switch'=>1,
            'uuid'=>'',
        );
        
        
        $res = $oracleRule -> switchActiveRuleMaintenance($arr);
        $this->do_assert($res);
    }

    public function testSyncRuleCommonOperate()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'operate'=>'',
            'uuids'=>'8b3Cc46B-c1A3-C91A-e9E4-859BE4B18a45',
        );
        
        
        $res = $oracleRule -> syncRuleCommonOperate($arr);
        $this->do_assert($res);
    }

    public function testListSyncRulesGeneralStatus()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids'=>array(
            '0'=>'D2BD1b0C-E530-8Ae6-7b3A-1e429FEEe5Ec',
            '1'=>'F586441D-E4e5-9937-84e2-ECeb8596c844',),
        );
        
        
        $res = $oracleRule -> listSyncRulesGeneralStatus($arr);
        $this->do_assert($res);
    }

    public function testDescribeSyncRulesLoadInfo()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'rule_uuid'=>'',
        );
        
        
        $res = $oracleRule -> describeSyncRulesLoadInfo($arr);
        $this->do_assert($res);
    }

    public function testDescribeSyncRulesMrtg()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'set_time'=>1,
            'type'=>'',
            'interval'=>'时间间隔',
            'set_time_init'=>'',
            'rule_uuid'=>'',
        );
        
        
        $res = $oracleRule -> describeSyncRulesMrtg($arr);
        $this->do_assert($res);
    }

    public function testListRuleLog()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'offset'=>0,
            'query_type'=>1,
            'limit'=>10,
            'date_start'=>'2015-11-24',
            'rule_uuid'=>'F530FB0E-0208-9071-66D3-E595AE7D5A4C',
            'search_content'=>'test',
            'date_end'=>'1989-05-09',
            'type'=>-1,
            'module_type'=>-1,
        );
        
        
        $res = $oracleRule -> listRuleLog($arr);
        $this->do_assert($res);
    }

    public function testListRuleSyncTable()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'row_uuid'=>'AB1C7CBb-b1aA-C3eB-D671-C21C9D5b163E',
            'limit'=>15,
            'offset'=>1,
        );
        
        
        $res = $oracleRule -> listRuleSyncTable($arr);
        $this->do_assert($res);
    }

    public function testDescribeSyncRulesHasSync()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'offset'=>'0',
            'limit'=>10,
            'row_uuid'=>'39839beA-608b-Dc3a-35Ad-514742f513e4',
            'search'=>'',
        );
        
        
        $res = $oracleRule -> describeSyncRulesHasSync($arr);
        $this->do_assert($res);
    }

    public function testDescribeSyncRulesObjInfo()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'offset'=>0,
            'limit'=>10,
            'rule_uuid'=>'F8db35D6-1Fce-dAbE-88b2-bbA0C8Df138f',
            'usr'=>'',
            'sort'=>'',
            'sort_order'=>'',
            'search'=>'',
            'obj_type'=>'',
        );
        
        
        $res = $oracleRule -> describeSyncRulesObjInfo($arr);
        $this->do_assert($res);
    }

    public function testDescribeSyncRulesFailObj()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'offset'=>0,
            'limit'=>10,
            'rule_uuid'=>'29D9AD4e-4B5F-FB8e-bdCc-bf0b210aedd7',
            'search'=>'',
            'type'=>1,
            'stage'=>1,
        );
        
        
        $res = $oracleRule -> describeSyncRulesFailObj($arr);
        $this->do_assert($res);
    }

    public function testListKafkaOffsetInfo()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'rule_uuid'=>'1fbBEDc7-F7FE-9FBE-9373-EC59D7F468D4',
        );
        
        
        $res = $oracleRule -> listKafkaOffsetInfo($arr);
        $this->do_assert($res);
    }

    public function testDescribeSyncRulesIncreDdl()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'offset'=>0,
            'limit'=>'10',
            'rule_uuid'=>'B2b47a25-f28C-BFc9-e5DD-Bc54c4bEFADC',
        );
        
        
        $res = $oracleRule -> describeSyncRulesIncreDdl($arr);
        $this->do_assert($res);
    }

    public function testListRuleIncreDml()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'offset'=>0,
            'limit'=>'10',
            'rule_uuid'=>'Ac0EFFf5-eA4e-B5d4-459e-deDE3Edc7b4D',
        );
        
        
        $res = $oracleRule -> listRuleIncreDml($arr);
        $this->do_assert($res);
    }

    public function testDescribeExtractSyncRulesObjInfo()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'offset'=>0,
            'limit'=>10,
            'rule_uuid'=>'efAe881D-D067-DAa0-0aBe-C5A8CC3cCcA2',
            'usr'=>'',
            'sort'=>'',
            'sort_order'=>'',
            'search'=>'',
            'obj_type'=>'',
        );
        
        
        $res = $oracleRule -> describeExtractSyncRulesObjInfo($arr);
        $this->do_assert($res);
    }

    public function testDescribeLoadSyncRulesObjInfo()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'offset'=>0,
            'limit'=>10,
            'rule_uuid'=>'17D84fFC-3FD1-7b2d-adBF-f3f2EAc24C7F',
            'usr'=>'',
            'sort'=>'',
            'sort_order'=>'',
            'search'=>'',
            'obj_type'=>'',
        );
        
        
        $res = $oracleRule -> describeLoadSyncRulesObjInfo($arr);
        $this->do_assert($res);
    }

    public function testDescribeSyncRulesDML()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'offset'=>1,
            'limit'=>'10',
            'usr'=>'',
            'rule_uuid'=>'B4f3fb8C-63C6-75F3-b9f5-41EBDD6fb44F',
            'sort_order'=>'asc',
            'search'=>'',
            'sort'=>'',
        );
        
        
        $res = $oracleRule -> describeSyncRulesDML($arr);
        $this->do_assert($res);
    }

    public function testDeleteSyncRulesDML()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'',
            'type'=>0,
        );
        
        
        $res = $oracleRule -> deleteSyncRulesDML($arr);
        $this->do_assert($res);
    }

    public function testIncreDmlFixAll()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'rule_uuid'=>'',
        );
        
        
        $res = $oracleRule -> increDmlFixAll($arr);
        $this->do_assert($res);
    }

    public function testDescribeRuleZStructure()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'db_uuid'=>'Fd5aCb5a-744d-EbDe-A446-c6b3ABf22FdC',
            'level'=>'',
            'type'=>'',
            'tab_name'=>'',
            'type_value'=>'',
            'auth_uuid'=>'',
        );
        
        
        $res = $oracleRule -> describeRuleZStructure($arr);
        $this->do_assert($res);
    }

    public function testDescribeRuleDbCheck()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'src_db_uuid'=>'',
            'dst_db_uuid'=>'',
            'full_map_switch'=>1,
            'map_type'=>'',
            'tab_map'=>array(),
            'map_type_list'=>array(),
            'isCreateTable'=>1,
        );
        
        
        $res = $oracleRule -> describeRuleDbCheck($arr);
        $this->do_assert($res);
    }

    public function testDeleteIncreDML()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'',
            'opr_type'=>'ddl',
        );
        
        
        $res = $oracleRule -> deleteIncreDML($arr);
        $this->do_assert($res);
    }

    public function testDescribeRuleSelectUser()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'db_uuid'=>'D08C6cFA-8e85-6ed6-5D36-58cEf6Bab457',
            'list_db'=>1,
            'db_name'=>'',
            'auth_uuid'=>'',
        );
        
        
        $res = $oracleRule -> describeRuleSelectUser($arr);
        $this->do_assert($res);
    }

    public function testListIncreDmlExtract()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'rule_uuid'=>'b270f076-7c60-E45B-3CFe-62f608ecbD2F',
            'offset'=>1,
            'limit'=>1,
        );
        
        
        $res = $oracleRule -> listIncreDmlExtract($arr);
        $this->do_assert($res);
    }

    public function testListIncreDmlLoad()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'offset'=>1,
            'limit'=>1,
            'rule_uuid'=>'13AEe715-6cDd-B63c-9Dfe-ef4C9D31aAb9',
        );
        
        
        $res = $oracleRule -> listIncreDmlLoad($arr);
        $this->do_assert($res);
    }

    public function testListExtractHeatMap()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'rule_uuid'=>'',
            'top'=>'',
        );
        
        
        $res = $oracleRule -> listExtractHeatMap($arr);
        $this->do_assert($res);
    }

    public function testListLoadHeatMap()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'rule_uuid'=>'',
            'top'=>'',
        );
        
        
        $res = $oracleRule -> listLoadHeatMap($arr);
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