<?php
namespace i2up\Test\v20240819\active;

use i2up\active\v20240819\OracleRule;
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
            'key'=>'YoungLewisLewis',
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
            'kafka_time_out'=>'HrJbVxAU^ZapR)1@8z*hrWdDawPZU3S3jNQht]^(#Ow9Lw&ZvxmhKY8v6w*rdc15lw63&[cgAkGcoF2nGaLmQtd[ukhNPj]jcqGmcDkbYn&VjPHp1[u(6wZqFC876CC6SDn@8N2!L0vL6#6baruFTdfxFed(oD3bruM1[4[1P42l#*g#d03Md3@AOM3s!p^ZIJ2Zj![ytW#9$s@e%mKZ1r*oNNA9EQHEWNjtO@5!O%$J*5@AGSumYw#j7vxlXB0RnvGlri%S1S%p[z7q2TQkUbomgDYVQigdywb88Uxox&J3D&zOHut)sqa@CnoJrNB*AuhqFI^Gzy8hs3ff6ePLQUozDfO$z8mM&lJ32xgkwhl6b589Lxtei#T(Gi5Jmrw5Fh8[c^#YqD$ks[u!j)n*zey!mFF@KJOp#amGEBhkj@KMXHpV!CNXK[^tqk0k)RMXyFBMb71ptQxNvrIbjFDo9jH0&mTWrEYJPYT2sAXtUiEy7d@y[SlaD4Lts6Q$WnGdDG850q3W5XXnwD!M39r@Uxhf6B7rgJhNHig)cR5jgo)GAZiPOUqRKZemBI!]*T%r7qptrx@6(OgleB*@6jgN$xmbI!%NNWuGIZw7EBqBe7^@FqY@k^9O31Y34r7zah7VzdibP$NQ0YsasOj)Zpp8A]ku7R$%@YBlmpbVAN]&]i3%d3j)Cm48ZsAf!N]guKMLXzvDFXQF&L4U1#uNZJO%tyBClz(baNH1sKX$Vh@(kdOSkxhusOhl9!(sqmO1kqj)1[d[i(f$K2RKMn[pa7oaRmbMv@Azy^I%^k1*Vo(R0Yn%33LlZL9rTTpfiQtt#wa1V3Ak&5KASOnV99Ot3C7Qf]hXRv84Ga29djaQmE4OaUuzXaU44Ej7iZPi0YuKGpN)$JsB9H(yHseY%)zF5NfzBwK0&B^z!z7n$^1V588KCnL[(k]P7Y5fGiT4EbYJrx4L8QhDr@wx*10kGMG8*LG)H(6obVliA^^hT0UBQOO0)Iahc[OpoUteH6sIjw#G2gV*Mp)JMltEYtMxJvm#1TM7qyFGZ*TFmkm)m4nWfuz0pV0mw*^5)EQ)m)UqAM(AXdkqFhS5fmVWe7sAho^GF%)O&WgE7dvQJR$6VF0YmV^D#i!z2VGAw*&wQdjB7)#jp9(oNshhCUjko1W4B@UerBD%%LYX*sjzoTiqU$!sbc$[Oy&#*ZX%1$%sQEb7(R![ubRKdc6B%Rg@ONp4(SZ14swdVQP!nN[vrPGMUAFpUOinMU*x$A8yON4rO0tmsmgZkOIXcFi1TqYcf38P^iMb#&g$zrEvwg!HrRVAGp4((WO9E%(*(363HfExE]2S2jdJWYLc&9O*Co]w@0FSpN061AIP6%v@x#WXAJpQfn[2aH)5HMc$s6KjEFDSK*BJQV034gAQ%pusiZrynK)10S894V8Oi(jlfn8KggmZbmtbE^z7KJuspQF*m6v3rk^x0W9RqQMMt3A1HnsiIbTPEtW@1gqHqpUd#nUHN0lBEmC@HWe9Gn]qxDqFSJq@3%peN@BKmVm(wRly[slb![UTcjO9jDRS[vL!djb$UVwxKekiLM$IYEO8KzgIIH*Od99#B$guK9t&$lsv*k&Nn$7E!$TwCK15E6Q)Zo3q%]EO4Wqov4![H4xWAONScYKBjM]V5&E5R7MUf%ZC4lVds)nvtXynaj*myYX##JAygNT7rDu40%d)!oYJDCu4s[^R)bf#qGw[dRu!1K1XEpj3vUynt)y*kK[1oa8NzgS60Y(Y8P3xG2mJkjp$ZMY[sIIic%Br78I2Whf[sGsH4saK3tk0wcgAbvmK2Gh083hOe*grS@pJ71S&pON9BufYEyPyPj84tk4#SU$IWVaq[)I*G#Q$H2gfq$HmkHRi4(f7T)hPkfMI3Lp^3#W8$1)U4Acr0#Nchn&UaNNNqu04SSZGS&K!O&edtrlNqsPcihL!zVs@guU1xQq0la1wciJN*a#UtN&WI@fv3pQFbU5wJl6Q9vG01KDO]^eBotwmWbsVUPxmT&PxwpN)J6fq*Ibap(IHjMw!HSf%hPP&i1R4dx4Y*(MZE5MOsXL2*Yu0DWo^$R5c#ARrmeqf%8fLY4[1K7KT9hi)(f7FGzdWxkG#vH19JEM]nweQx7mZL46BGG1[rMF#4MOJ3WF#l#owwj[wzdDTIR(u&@b#gndhb4%Jru1R79Nx&lfgf%3iYOoi$1yQ!je6ToA@KAXgROlIW[t#5Fzx(VH)B(gw7HH5r&#oaAFlN&7fKLNzJz*UR5hb7!(OAChLT@YFJOXR20ca4!vDXGK^&vPpZFG3UqzLx$BOxiYQ&(ODx)o1cc6PSmJ4&K!6XJIXgWcmxw^tj[*nlLw]VZno7B2&XCM32$PN)hr4q]cXUb@8TRprW1xRQ6!TtNnpB8RVtAwD&oK)()@#uV0z(doUOBkE%dGNy%d4E$xq1CQB[]LJdHvXc&z*di8[L68(I)hE@b6v7lVHL1D43[3PWWYvd%^PcXpO&CAn!EgNyUZ7V(L6VqEv)H!juC&Vx%Ai#Dhu^)otTTJCp8tw!7J*vUS#ciyt1uyXx@&vf)sHiM$v@B[v4BoiY6*AIVub#[NqectCNf6Ifxr#cU@dYw!ifDS3&T$yuJjd(oQ1$)c#d*me)cj@Dy(bd2HpvnD#[sOY34!3KD@0(Am9*)422lhE$g6UhrbN!I8y%j6hd7VOd84vJ0lNMeJ!pXYW)UKdgWMHvPJSHBF2kYOMjABe$DXo(h1YoUzjRTKjk#$V)tbA$HS8g&Ml$lk@pt74pl^KSylYkAlC8(J(rS[#iE7Lp@!VVEy6Wzp824SQt&Bvo3t@Ik(0!eP2hESybiHicUKZ6Pne7AvqDIZY1MkXiNOqgVMYUekTyN^dw@Tjf7s7wnNc9nO^ajMMmXGbW]OEC[IH1%#wNXEA4x%DMEi9GG3DpQPhynVSvBTf(W#UC)JDU5kZ]WA2pFPGv)zLD)FFEoPMcdVLlu)3m$KM0Q7D6ECCTXa0*sT[TNz2kxG9G5gA(ijItyT7Di0j5Ci0&l2^AV112jHK!prLoUlK^T1L%N0I$yBlwj$H[7@khygW6ZXj[V2lugmIW@9cUj8AzeYGg(EsoUp3dV5rQ*%[VJGK*8v(c&knCnCiv4TQtSJ)@56ja3tVszhHZdu&DMtEL2jli%KkKC9v#0jv*W%9ElICsPh(0h7XW^9R[EscZ)2l6qD&BYLJ$FS[#5Op8($BXK$BZB5irfYBy&HhHGTrigfn*Omp*yp2gz4ri4[x%MpTqHZAK#hVY[!xS7Wx7DF$iKwgX9^BgZUnOHZIM$3)vL)I)L4iQ[8!*7#qRtqo*JJ#CQ6IO8HeXEiq&o5r6o#rG5F8[!MKKtbQ$@@Xz]V@i2%2hv3Ju2dCqhIdROS64]HYdK38NbZgAh8]EitlWt51IRa(yW!k#%v%N^ZdbH8qdJ!01ozJGLc6P7Fw!tK)X23ufn^$D2cKW%kBEqY2NzwAU%IiU1U3zYi34b7nF@0NQRHGnT8[DTV6S4F(^qTOQHm2p7M8mvy*IH[Rq0)r[#d5o$FVNKR4dXF21NJMSjLL)MFSsd2lMiQQHTV3Z![zXD&h78TAdRG0V)EA[x*bQSqS[VlFu*kFYRVRKi1hMENUWMv1)NAYI(3W8d3FlGiZnkr7BciV4HgkfpzV!xN1@A[356PQ(Snwu3LmY(baHtmqMJ7bIoZDOnT(oOyzgo!*X%M5M#kOd7bGS]6DxTtE1)TvnRVj@Pyi6P^*sBe8eg1X]H48exqXNrxlDqJlIg[A[qH7PbcEQ!Ty^br8#tJj#IWUVwr@ejjnA^&lJv0Js1bMSyjKcsv9QcZvTT@aZ&c[$f5^9OLn[nkozzUU&qn*O281tn4MxO3iBEdUw73SUjTVQl&GCuTOn8(SV3X2H&zMRXudA)$(OwDye3N#lVd2dotsApaHh%Wh4ZDbB%miGKWnv3Cw[o30Kr$8idO]g[v1sHJMqbHFjVb&x96Wc#dBDlMP[6qF&(t9dV)dk7Bo!ps5K!2ZLqnZW5($sKVW)k1Hyn%mvkLDPC9^hyHsq21dPV@xf2Jgiqab0pahj1ApM]98UN1L*G5d7G9Z[Au0gOsL5H(fXsHC#yZZeR6ALnauKT&)riidhew2jHzj@[0!(8q$BMCB80oz%E6B4!4qAOS$&*9ugaQ*JQt5m#*G60)^ZNIcc2bQ&!lmIeRZyAeb8rJIsBiArhdrKEuNQNFloqhQTEp^k!RV$BsTH4OOXj*16FzYGATz(ilcuKeuFI3gCClcwv84f6O9JVkmwmX#XR(B%!@@Jfw9x%lIOIbvV[CBYZIlG]pIpMX9w3HV)ZGZwmI4q3T*81zT&qPvWD%%Rybbv5V1GwZFRR0K(BC60Nangv7hTg)Mx5M%iAtT7ErR3RyO&)r[QETySE5&NU3K#%&xSyvJKY9D1]7RuOpuFz2zao4I8##Hpfsd[z73dhclFjXlB3D(Tn#s#qtzYwYj52(fW*%Ev*mzX3Br8H8$^87rizUbLi)LFaoaZc)k0Bhw0&(2n8NxerV^Nw6cIvP%)F&yV53H^OJ$S&3wY4kg$yAOFagmzLDN@oLumg!q$!a5*RT70F!zXc9^FFEA]*DZkr$B4GnH*[q73W#*kfFFMdiOJ8%zC%Cw0SYfBfekm!PFbUX1o$edQlmptIj9bofKlGb(jzcGX*@TKJtLO%2i4b(*e*)rgvmnXFOnB1&G%gkB7cN(Hd6otcJF4d[64&c(CzUkuIM%X5xxL2([KNnJ!HLG!^v#!zS3HtGyTob(66MqhNKN2[OjPFVpQrJqSct1!I9bVYCkV8AF1Oq3Zo1oVRiefSiXYqTq%5t!HAqrU37L5Ocv!l02GxBep)x4ds)E*])sg5eP7wqKNAX9OZ#EhmuLAiI9f3uYm7&[Dmg(ekjTSsu3c#5H7Ds[Vbd[)m2SqUuRp[@Z09DrpAqcev)hoVYErxr9p%@#vKG6eDz2mmgy%4TK#gb4RXpy3MynYiurv^rfT#kSc^Ke$2J1E8d&IEiwJL9JbA44LIuljED1tq6WLGW4T^A2zMi(@*3G!z!t*WgoXccPzz&i9bl9G40I0kSzl2bR9VmM4Upth3yD[@OD#S7mI&F98ltXFZspMB!6VgNYOzJhuPPEcnfHKkIHHtpbxEeT&B$NO05v#9CbceyWx!tKQN94A3*Z%3HoCcZEufBbbvEmEsXe)LSy%5ei*@d0I7lsdxL$5CEFhA*[IURkQtZWgxkuO#He2(8zz5iL@![mIqpZ1cfacmjxyKeCvk*Oe%Ie991Zwb0yXdyVXTc3t*^1rw!WyhuZEBcPkD*ERIkWluT6UDU&Ey*5gT@9oWi@@ryLxtfBjRzxiZMOqMVTi*PPZuK21qJb]#q!2#Up]cAgeaFz8xk$EUq8)VnCujz][(5wM4MQ101t*O*4(wGhxWWW7gQpfc@sxD@SBwM31F)Dwyn6egys2m07xeC4#30wmmDZKTt1g9O%v(dHr&oEvP[8[14#IGhpOq[mo6@Hrb9BS%WQojT]pOR4A3SRA!RdlOqF1G[bwO5&e@$hv1sHIjCM!aPj[WoJdOEs8@nTvO7AJ8U)cID0IpTUQCW&qB6%PnJ9zE%pe4%#2NW0K%[KpjLVvYLId!c0mfqyoMkq4Oaf@wKwW@rwuHdKLFZa01Hx0BDyjS5#1tN9d)(#Ec[m0cXu9Hhrs82iQo2F7)xb7rgbdL0sG17M)YP1WFPBq16naGubf*[Z7^cQ7[6w$x$dj^XO%xsbwEMRk(7U@v2QSQTFSbuG0r$jBxVvC1Bb#XbS&orCfy9EkXJtt$ZO0Q1%w9KAa5Q[8RuqjE]REVidEfRnqmM*ReDlTB*rsdbT&EII0QjeB(XF(kIc2k5EEL^8bFD3LXylWmvG[F@)bCQz8qDrc62T*8]Z[]e7092iolOz[4nQ7KI^j!CLIAE)3$tLs*J$6N[MNLBOJlho[avdwUXGWW)vfORaTY(tc7x^]B%wjX)[iGSz9#HNzvcLZXdE#CJeOVK3YcoM*3qdH#[CUOybQiftu8i8fHwtd502xPjT(sh5AV[@NDdvUu5U5YF49uTA5lWG@#oAKh7XwT8Ypj7JuG%z!N0E$d)0OhVZQCP4w#tCcHcY^@mZz831&Jh3@FMNALpbI(eZo5(4as0nx$]qz6nHHon@E3&Ts(wIdH6%bnze6s9MLwj%2MOAq@k4ZYhcjKn$VvD#4Yps3gj&jpisBMN[u*[vvxmy)M9vU%%G[ZgFhml#Cb92TmOq6R3IRusl94$]mQKMBm6uQ77xc*KudwJtC%uJa*RoZY!TU@KX0]Q&dld*h!x#3tr]s#bw4@@JZR2FVSiKs6ye*lhZRw0Qm*[^z*TWf!NwF8s43SG*&gL4!DFyBUjQhVHzThzM9(]Y#iYcd&D6L]5hU^FH*49kzsN%ep%nnKe%NyByDB9Xp!WSHUFT7rs7#GF2Hs#yd[(9r[#WTTH#%4j0cYwf!lMfRyHVdfLex43dce18NZKwYKL5wZX3I*rGhYpeio2[C)v1ZeOPLGOTefUH31eYzySuy0Fem#sG[NR8I[LeD8UhC*t2gi1X82B03v$KdxcR3S&OIprVhM)9UgMz$epweGB6QafxJnvN@!@#V5s*LE3yHeF64*M!7cm7$fShR@^jtGTPW$ODSSujYdRD@h4*e^rVR&QL$3BNi5HcMNWICfd18W91XAH2S25HA4SSi7*c$J!8kz!mn08t[%fy#Oy^Pqmx(4aZNeGsrFYk^I(L$15)[S*f0I4TeTK#pqTbfFD]Lz%Eb9@RBFi[9yJQAgV$$0)3tZJjoXhKp#bJy[EZDw%6x%!nliXCe$nNlbTHB83DrhW$&c)%I)ch7!NHfjHKzG5Y#VcTu&pd$2JE1viN6zF&4SJ@6Fj[E*7]CnGGYkjCrMEtfP#Z%JJAU[Ty)L2kvvW)jIEfl[@%$hLG#xj$CtZ3[SN#71*^^eMvLr5wk[I33W[b0k3i[KrHFA9&O$rh[$L^RnI$h&@u)$vumuGD3L8&ME7(tTb@[pJBJ*4B$N%KPq7w6l5zl(tf0IiIio3MbEmX*E4sREd0[bWjaVVVo[jqOF1!lB@[Ku#Wkn56yLvbj$gh%VQ8FzrHMw&QGojBYT561v2[%m)1!SWyPk*b!(MFLjEp06$is3wYz!qGkmMQvp446s16Og&ihYZIKgwe$*VY71e$bOY09MX@cyo#frb)3Cmvft$Tq3hMNF31ICb(J6&sfkVDI2n8zNgDg6]yq3Kvi9EhO%F$D&App22#FN2cNAjBu8zUmceA#U@@q6NFeq6HWtE58Ft[UtHrAjZTt&BD$OqC]#H)#csEa6fPVnRKygOLcj44Se(Xor(FsB$pSEUY9PSg144E3dVoYtG606!JtfOvH^5CMW3BMAuhSmL7wDARgmO3U$DuUAZtFqib63]2UACnbegCBpDVocwAE)mk0[XJ3g882pmgE]98MwlZTY2jrZFFnNkTfsB2jeVr1s2HE1[K(H^DF$ou7R!w)PyWpS1gzkpUOt$mTeH)nvEfj!3*@Yh#I(ziTdZSHMPiSYw2g^td9J!Fd9wGH(*ZEL6eVbMZ1XRD)dZyyl6ZQ*y3P6y!VT*H!GHgs(2xNgwW5Grj*UN9gWLw[O^KcuGo3N3#x^W53$ij4LnWYB#lKTl(Yp2y%@K2NRkYLAzr&59dKeOB*ygFAv9OuxEF2&shFFsR3XdeFVQC6IzFH(^0xz4E!#[d0MJInwI$mb&rKLiHp&nM@E%fm]aIhTLrA%]8YzRJL)3(xuJGIniLxM4L8y*yT%*b*tuT(s77VcN6pbu%cpF#XxHXq([4&uI*RRq&7ytX29@d9kOQfR7#1cVLg!O&nWHMil%XwW$$)dYeFySeQ#aDO!@lMVB)4sJu]wODu%r&ujHL^r4peku9)pDSgf(ma!fCZUqBbbhguQFysLy70qy2IHpO&@t!mau7OBGcRlW%s2v4]a5&mN1]%KRzusd$(lheBm0y9xX87ZIS3Y&xIIop0IM^9PZIYclqkv$3RrKka(5sEP%%DHtn64wV#qmQ!E$msb%2e320DO!n]GG*tIOi#S[PTEiFv1H]eQT94T8NXiCedNLj$hCem6coDrD7v9s1#*Y5!Qgc7R7Oj#(O$Bp[VuJZ4GM!XNsBZnC250B1Srvc6@9Cwotp$kanyEn&eRHZMQW)PlHU3^4E66vbvYVxR6V#NU%!imhQQ[TjJFb4ver$kZ]4&GbV(KXrA4)51l26z(j2O$^3JxUPJa!SUHzAxgLKDdsqIpL^$(Llk4a*ojmry^a8@499)RGQU3u(q&!MIM%19#Vt8W)eq6zxq@T6w2717t!Ql*Hq6lw#xIFkFISWLXiC6UF&PPV[erl&YyPMkpqjJwSxX7D&hp)tKmVWsiEC!Q3oU[FLfkD01UzRAuoBBur20C$gKWJ%^BvIG5jTKgdw)49fZVfeUzeEU%@5*wnml]e#*hj8rBQ8&E!Wy^Vh6SlhqrQ)![0h^#Ou8*5yhHDD!gi[@Ad]WFuB&QAJNQ2v8F!T9^zTOrZbTB(3LiMBuQ2VFPRvuX0cE#WnXp@^z87&v)scGowrzFZKLT&bde*50m&^iIdC*IroEwk0lK7%nlxKlJcsPUd$Z5P3V8n3h!)jlAe77XFwpN8P&ImyrQt8Bq!knQNzmH8B*v^MxsqxCDaewH3iEpaBCNz05rynYh56t8&x6pSsjjnwvTMm88fDYyG2$sgc(1QFACrsjDC&WCJ8OKi7NKL9LuPU*v0&pc5ujErS(h(2jbb(iDP29[M$RAYc(1nFyIsdur8ubmeU$x@dD^4uDhu(VArQRPF]E&ukCmvR2VLf^y7mo7erD1fJPgjiNOXtKkA0ayI@Dw^9UdRt8W(MJeXf927^QKy5xBr#w3d$sZGY]CjzjU#V25iLrX[kGIV*Ph#NqcGbyh@ZTqRjCJmcZQtQ3Ub1nyGMH0%j*fo(pe2j4G0%Yie(r3B7I5e2u&N9EAjL4OV%CAdsIybhP@2z8(x&t@J&SoXwXM5VFLcQb3AJ^d*EdOXToTHyDl9PyX&gDUaUH$BQT6CiAS!8Yv2W%!%u)u&I$#Dc$4CYb7pY]dnSFdG6%&%ov!o752TJ%zr7LmF1m%o5xcIX[Pm6#VI1V4[Hk3eSSCqdk6^r8@r&PY@y@mDbL$f&mkw74r1rnyItEg!^#cFH9[9m&NktGyuL5%q$yyxqIeORQhyci5DwDsXq^F6GGjCk3!$o2puM#bOI9vibb2]fhePWxisY@JJ%g4B#vaN4WH1[xOqjhjR$AzIg1VoEB5B$7rgs#3mHKiXQ!vggvksfm3ami$9DdNLXX5GQn[CKGB]fI7m*O5N]W^RMY&wvp0U&mt]IitN#e)S#pMVJzB!MDjq8zrXEPwoNBPN3^DwC!3T(eMQWkIgIsPpzhxA0t*4Ng*he%6he$@qBXCKqkvX19l]KfDvd!X!*gQ8)Ev@$FEig@WXcdOqG&8ovDYOyhd^byFVR*n(4zo!w^(nrMNEIs&IlGQGMgkW*Ax!w9N[YtT9FlC6LM8X%r4twv0ArKKY4hOzCGvNxkAJ4X@O6v8eSi]R*h#)qgsDptnDkXmYO7!in%n)M8Cnv$0jA!@BIZ8A7Ew2hnpqzsBtuA0@nk87!qn!RzhxtGDe(Re2s)U)MR&QF5VIbLeUDwT&oyTrowoxN(*IB)4#rvv!JScg&S#z6uk(YSiO)(CY[R)Tl&9#D0ITwtm4tHt7ToOC@MnR8FNl)u]gY06iq9CO)4eUPi6m)yGYyZWtnOVXNiISxGd)@ZWQ(]e80H1ZPJw#Do0R^UPj^oC]DctwSBj)fmX[mMkVUTInM6cGR2*eFlV2)x[dnF2yR^*tk(b5IFumgO^f9D[FRxe9T2KbUYPHVzVkGJrGS$@)bWT4R(0$Br8pWzW5tGn@)oK7L&poQL&)RJrLeFpQG8GfcXIeyG&pgybJQHWce[Oh6FJWJ*ds^gjy!2#q2VQJ*G$3eZAARZ6IRFGuAiqCeJUhl1pbOsda!Mbp#XhId&r(LOQ&LiSTp))JBg2b9!LLSc(3f!sqZ(4u4FzU549GsChoJfRe)GPx#Me%nCso[EbdIfXxgU63!&G[bIZfVj0aw@OsKm#4bSA^rJMUX$!MQ9NqD&xuSayM[w^B8*!mf8@kxVwkscuxtWgG7pHEA*XG1lrr4ycMisJV^!JZPxdDhkjH)!9^LtlU)d&#(pI3Zu(aKYBz*#5W5&g)4zaQ1e3c8G$mD4$I6YNd0TY5RVBRX#bnv2TbKIQw3@[6bgbJL*iVbZZ0D7*9j0%sHgZQ6%8xPiyhfvx[ahd(5V*FD!Ol#aSMjBM2BVt8L48V27N8e5$bGKSsP@)($J)zJWsLeH)e*pWFG9Mu#QyzWfO&2zlW@&CO)I2&H)!318jye]nfU8wz%sH16ZqMa1WpnR6W9WDYf7p5JnC&z#f$NC2$wak[JSQ$VIHJoaai6Ju0zuiY8cTcirFgqU5IH)xAH@^D[VAu!3FBAjn2lsXG9ibEVV48A3aYE!#xeWM1r^[4w(HsmvRJycxDLXv)04^5bKnOvciX6QK]DpVdj6]HMC4AZ#5afDGzFF^@MzDyG[3Nd[LMV2X#OSnQB(Y2hAG)QwBQgGkeDsdgG!t^yQfYrCJcSysFxpVIFFwhn5nFiTw(5KglPQA7N])p$#gda#)zUv#p$MSp6qrY0OCn2*w4FTP%O53@AjJS2DRNa2!9jwgO&[z78j6H#1T[vAHsKp08YFydXcOzEQkp#iJvuyr1%ghw(uXRltEF[fY3eHbjVL$v*&EXx3$ZKc#yKt00x7lV&gFYf)x7i3me&tlo4gQ6)iDb5LDmRi10zXLrw*HF8Z^naQQEr&R%Zg&NEB)&2hN9hGmkpC#Vr@uG*e8jO*&!ZkuracIjT0F3lSePT8#MtFz%P!VvxxERgb[QSPU9tf6Ll5(gE8zwb@uLlBEcCrTEYuvwW$a5DCwj1k7KYEiATO59DFUi6bFAOCXfwRGOPX&r(glFXA[u1MYfXN@OVo*I[RxrD2M65xRDAhmIU09@(4PdiGIKOxYaL8oAMHnO*k&2hIQ)iR@eyTFqP8KchQG0UautMG)tP6rOoOTg1ccY%dN7vf@7gF!WthrUnyBH!izdgJrZRRh7doSGvmpPT5u7bl%yn1AgMkirZy!&6JmuI)NNs2ABBdcZYhKSeRs1%Vjs[11[^OUD%Ug@h&T6dZWZC!mE*cfDj$h9Bp8gBk5s5JN0WTx202An7HPZDFLyJiObY#s)^bdL8rfX))d)OS7RFa25%o1#UtYhm!4pDgrx72yen*Nwn%pVeyp$el*gBFLMS40f]!trpulF(rBoRd5PcJa%d)J1Bj(z!Dre[wV]4@B0OV4hKqX@fnmQKA(Y$ZA#HKi**J2enX*fK*X1e6eqepOH[y6wiGRt)$B^RRYfu!Gyx&UCGsnJ(f^&UOAUp$65p2BGRG[zO7Y[1oIL484$D1dVc0F3p$Z#W!wVyKXCoY[6vR!lx5vAOdUeiT0g)Qh84Uw$Kg3qhol[zY&fH3us1u1B^[S%uEj@k&dd$oGnD0)If^j4r70QjQoUqkWG15]okEoOZT[xqy)2yc*V8&9I9$nF[xL9M^ZMLH@^YOHgQh]4Fz)V)55lM^o6QRAJGxs[H7aYE6P*MgCAV@Sznhd@$V#9rIGV%l![yc)l$l2[WB3a5IwBH@Ch#*J^iv$^8PqNg43TFQxbvB#ww4rPqzbNSImXD(mF6pV(2MZkSWP(kgVI9KlEgDeb(Zu8POD2RJoDe@rkS@*&YcYkn*KTRo1wlHPvM&DyvNFq1%eckOHdif9DchtTVQ%VVeHL5XM52p70NfMqTZDGP6h9O!bsKy5!1zZTRAaxuHJh7m)VRWoNi9[rAD)11$RKjfy7(mH^*(bfvL$yZogxRd5%QOPRwUWzjj([KVo*O^Ok4W4t(cej)g$w*vnzCt[hQyD[7&EJwAivtKyOMQyOCe[z7uuFl^mPEiiOm4ro%G4TDnKxcqLwB9m!^cn3tSI6IxuIkJ7)KFk4[&Kd2^6*MKs6*8IM[zVFErk(x',
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
            'rule_uuid'=>'8D8a6B6f-811e-bAAc-4FE6-ff8ED3bBc9F6',
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
            'rule_uuid'=>'31B5DD37-f3C8-ce32-dBAC-3bF16cB1C6DC',
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
            'rule_uuid'=>'795cdfF0-e143-E0C7-1956-3ca32ccD1117',
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
            'rule_uuid'=>'8A13375A-Ee7e-Cb00-DD6B-1c3938d3DC5E',
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
            'rule_uuid'=>'eA0EBDCd-a1fF-15CD-C46B-16cbe5d4A255',
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
            'rule_uuid'=>'DBd263cC-F288-abc2-9fDd-1BDBFf7DD8d2',
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
            'rule_uuid'=>'7d95E83F-eeB1-cb3e-D81A-637BcFb92Ae8',
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
            'rule_uuid'=>'B392FB27-B5ee-6fF4-F6E3-FebDFFF43CA7',
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
            'uuid'=>'1f85f0dd-eAd2-dFFD-73Cf-842b25ddDEAC',
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
            'rule_uuid'=>'f12fd9c1-2df6-2c5d-1E31-F460b1ef8356',
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
            'uuid'=>'32d5c3e8-3F8D-7EeC-3DFf-C3BCDE7D41cF',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $oracleRule -> describeTbCmp($arr);
        $this->do_assert($res);
    }

    public function testDeleteTbCmp()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids'=>'dfAE3bb8-fe3F-e29c-AcfF-9B7eF1e9c3c4',
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
            'uuids'=>'4447e7DF-87d9-4E49-f40A-BBe91ABe0A91',
        );
        
        
        $res = $oracleRule -> listTbCmpStatus($arr);
        $this->do_assert($res);
    }

    public function testStopTbCmp()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'tb_cmp_uuids'=>'fdCbeD56-FcD2-5fd1-27b3-C08Def53Ff21',
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
            'tb_cmp_uuids'=>'23568da3-78e8-488D-b12b-ED7D9e8DFfcc',
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
            'tb_cmp_uuids'=>'9FCe94c0-96ca-Ee6f-92Fd-aeE2C4C12ccd',
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
            'tb_cmp_uuids'=>'6d197546-7aBC-2A38-e6aD-589ba5b24Caf',
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
            'tb_cmp_uuids'=>'9C7e6283-9bE7-9b81-8084-86266A05fc4E',
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
            'time_list'=>'77d882b2-848d-CF5a-BED5-63fFCE3CAB5D',
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
            'uuid'=>'1dF6b3f5-ea25-b746-a3c5-2Fffb73cFdDA',
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
            'uuid'=>'9Fb86C23-D76D-a452-c319-54Ba2afdFC1A',
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
            'uuid'=>'bcCCD581-bBDA-Bf2C-e7dc-CfEBeF92FAa0',
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
            'uuids'=>'Bc18DAec-86bD-27e5-B92B-df3470AE7ACa',
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
            'db_user_map'=>"{'src_user':'dst_user'}",
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
            'uuid'=>'8Ad6CddC-fd38-E7Cc-c5bb-cEE4245f9A3e',
        );
        
        
        $res = $oracleRule -> listObjCmpResultTimeList($arr);
        $this->do_assert($res);
    }

    public function testDescribeObjCmpResult()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'BA5CaF29-C3Df-E704-BAAF-Ec87E455c1DF',
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
            'uuid'=>'ec8248b4-7f5B-C4DE-93FD-4Af7D1aaa6aF',
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
            'obj_fix_uuid'=>'D464d827-2aAD-5897-6a99-8dbe1F3ED11a',
        );
        
        
        $res = $oracleRule -> createObjFix($arr);
        $this->do_assert($res);
    }

    public function testDescribeObjFix()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'d233Ef33-7A1c-F62E-DDBA-6ddf75FCC8bf',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $oracleRule -> describeObjFix($arr);
        $this->do_assert($res);
    }

    public function testDeleteObjFix()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids'=>'D2B9c081-5f92-bb45-dAc2-be77F45895f9',
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
            'uuid'=>'EEd36F3e-AC7D-31df-66D4-fFBfEA5eFA1e',
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
            'rule_uuid'=>'B795A22F-bd2E-9ba6-b89D-cDcDD6d5BBbD',
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
            'uuids'=>'462E29bC-Ef28-F7D4-e0Bf-Dd66E0a299AE',
            'force'=>false,
        );
        
        
        $res = $oracleRule -> deleteBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testDescribeBkTakeoverResult()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'bk_takeover_uuid'=>'e2AA4aFD-fA32-90A4-DAE9-6f6F9be57bE1',
        );
        
        
        $res = $oracleRule -> describeBkTakeoverResult($arr);
        $this->do_assert($res);
    }

    public function testStopBkTakeover()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'bk_takeover_uuids'=>'eA88f7d5-A83b-8cF3-dcb2-4bF43f5BA509',
            'operate'=>'',
        );
        
        
        $res = $oracleRule -> stopBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testRestartBkTakeover()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'bk_takeover_uuids'=>'2E8A94Af-Cf9f-adba-d7d2-6b4d5Fe3D83e',
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
            'rule_uuid'=>'cD67BE67-6720-eB95-7e7F-da1Cbd81F2e6',
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
            'uuids'=>'2BcfF93F-7F3d-9EbD-D1fC-9CE94FC7A014',
        );
        
        
        $res = $oracleRule -> listReverseStatus($arr);
        $this->do_assert($res);
    }

    public function testStopReverse()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'Dbe32DDF-3aBA-006A-5EDD-6c76aecb3888',
        );
        
        
        $res = $oracleRule -> stopReverse($arr);
        $this->do_assert($res);
    }

    public function testRestartReverse()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'b7E28B4e-55C2-3aBd-2756-dD55C5dc1Bce',
        );
        
        
        $res = $oracleRule -> restartReverse($arr);
        $this->do_assert($res);
    }

    public function testDescribeSingleReverse()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'62A2638A-f76d-e6a9-b7c8-f39cAa1bCD90',
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
            'uuids'=>'6FB2Cc51-4eCb-EbfA-724e-5D2ABfBBe81f',
        );
        
        
        $res = $oracleRule -> syncRuleCommonOperate($arr);
        $this->do_assert($res);
    }

    public function testListSyncRulesGeneralStatus()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids'=>array(
            '0'=>'Ef0715e2-3E23-FAd1-FfBF-d95899c1Dbe9',
            '1'=>'E15FB9E1-dfCe-C324-7E8e-c72B3916ee27',),
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
            'date_start'=>'2007-10-10',
            'rule_uuid'=>'F530FB0E-0208-9071-66D3-E595AE7D5A4C',
            'search_content'=>'test',
            'date_end'=>'2003-07-16',
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
            'row_uuid'=>'213A4651-66d4-cBFf-B95d-1A1fD0FB7e9C',
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
            'row_uuid'=>'CFC8fDAC-4fb3-7839-9c5C-CcfcE273057A',
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
            'rule_uuid'=>'86B9faa4-5AA2-e09a-CDfc-33F1eac111Bb',
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
            'rule_uuid'=>'85BcEFE5-b09e-7773-eEb4-d8f62Bb3ECFf',
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
            'rule_uuid'=>'B24efCfC-74F7-8EcE-ab56-ceB838d1CBA5',
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
            'rule_uuid'=>'763f4db2-22Ce-d7f8-B598-8BBAbdDCed9F',
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
            'rule_uuid'=>'Fe491a63-43E7-759B-4b7e-866c884DA858',
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
            'rule_uuid'=>'ea5ADdcc-570c-D57E-51F6-FEDbC38c93Ea',
            'usr'=>'',
            'sort'=>'',
            'sort_order'=>'',
            'search'=>'',
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
            'rule_uuid'=>'3391e71b-48Fa-FBbA-08bd-Dc5dC34Df114',
            'usr'=>'',
            'sort'=>'',
            'sort_order'=>'',
            'search'=>'',
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
            'rule_uuid'=>'ADB7aE42-1A29-Ef6d-3cAD-7AcC18FfbF7c',
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
            'db_uuid'=>'cC4A5C5E-37Bd-CEBA-6dA6-ABBE5b9CDBB2',
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
            'db_uuid'=>'81cA4eD1-4638-A0d8-a1F1-1C9F23a2f770',
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
            'rule_uuid'=>'4Bfb6A64-b9bc-bb1f-eCC2-B4cebeFF1B0B',
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
            'rule_uuid'=>'Fa7Ca628-Bd55-2FDC-FD5E-0fFEBE9C2B57',
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