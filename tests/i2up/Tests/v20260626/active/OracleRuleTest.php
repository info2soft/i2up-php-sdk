<?php
namespace i2up\Test\v20260626\active;

use i2up\active\v20260626\OracleRule;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class OracleRuleTest extends TestCase
 {
    private $oracleRule;
    
    public function setUp():void
    {
        parent::setup();
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
            'key'=>'TaylorThompsonAnderson',
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
            'kafka_time_out'=>'T15PN]EqQ5Y*CgGEeFihZSBjf&4fWmTh&^GoN[(2K!N^5Wo^xjTU45EZqjqYYhvKOy*pUX*$CCQT7gM8vFsmw#pqZ0JlprBzT1svHuJ&xXG5Fl7D7IPnVpEfXt@!3[(5wXH1[2VK)hri3pDKRnzmjo6pmOZICrC7@l6W(u8fLcY^yimDkdQeo%ChS5ABTxFcA2Sq&FL7G(lCVqWp!tc!JpifK)@j!$%Hv06mNEUT7F6FQR$1Bgi)5XY@&[*jNzsI7KmnAb6GDJLyB6SfgoyIX*@mFL&AMllaWNQL6NQdT9Ug#*P088KIFqTG8!v2gVYb8ba5tt[^kPkbPBEkCujKXv[!s9gexe@Q#2*QM$FE6w*HPitLOMENG!Vc98#Fb#Oi)*nsStDFnzDD50b&xfBo3eVSfY2CK@HAGYP%CKcX@Zf(YzZ1AxqWN2Q$Do%W%#LZiv*0rL(e4cosc09JOUD5SjtXy&#LJbsI$]88Y2T*^]89g#lgZUxNI[VIsQ[^wpj**(u&5S6VbFM[cPukQs)Q]v9Td]GTVQ$vVoYyC5]E^wNjwI3Bhgt*(yPeQlVElOD]%V6C1qeUy3KtMO1U@Ngi3JVtz9fgehIBTGH)rBX8Il#)Rz$yYUXS[7es8Qsd@WWVJQRwIIZ#t2yJ)[$8c[%l7sI3RPnF3K^%N8tPxLrDUouks2oHmMW[4nq)zBGJQj(IzmIR%aHxl(YbdzPp%ttDAZJVy[2ep7TZt%kUTpsncaNGpR#lG#nr8!J6&nUH2T!Jjn[YnI1[9MjN1jOdJMY6phRLP&L@x$[vBJQ0fImhJ#CkuxDaRgc0DLorn[O2HE18ju3Li3cD^XfQ(yfCjFwUP$759Il8*mNntiNIxN&eb(b#ORxMjl5Ugmio]X#sGKM%Xxyq*R]nJ#DK^SoACMSZdRBCcfwuZ*UhuCk)uiPlREEmpV)yL]2kxvFjPf9U@KP3o14[KPp@sI%@v!UDxXdjJ2hcuTd%9)dG*6O[vkzhQIkw!6#74M^Mi36dx9S6YKIuIteuYSN%N$dYfVgI6*H^BJW%Z(BD[9y^zUJr9%#p)RKevtJumzv$t5%vbNpy^Pu286&v1bk2#3*$@!5Z[QKFY((ghIar^5oR1dhTPD5Aeo8tIfBfjCmq&Omn7v&)Ap$J7O5mg$Bs]oPirF6(ZAV%p(JkzByiMzgqHCr(A3D1NZn7dkhMVSVw6Gsbc6h!17Z3Q!145qxp(VuYN^8VtCEc#kWgjj$z[y3bRQjrr4VVP9kdEMfYoTRU!ZnAFSxdeSLAtIG9Xxfb5Hk6P7LV1#62D70EKGwhEcM6*J^TVo8xBdI(19tDqSPGGLvTr@V6CA!ZV7OEbFLpTD!%X!khKBdQI^z]^BHCkvN!%^RdICB!*DsutZ%zYIw*PPKMF1uX6R7cSlhPAVVCVz^iChEr![$YfAEOtmGQswwOYcd%b]PA]xI$&kqm)mO$CW*[6*nYfwM97o4q5)AzuKVkrz)fRI54L6$tuj$3pd*G5vC^w6FO7XO&L!DI8cuIr@CV8MCzLk6#K8OdEuM^4FCHbNr6467iEE0XZ!ZoCpkl!TKzaJ*Ag!p7qqDD89I427$9&6cjyQ5xJw9inHGQ#4ii%f*dK@iDjTHeGeAFkX8jvh40DqQDICrw&Ki9Ndjbkk^(B!4*R[q^jsyS&wxzlFJHya^Are$vs%v4JfExbAHQ2EVJ71I]Yto)Dsl$qWfn%V2Gt^NU*FuSDG)@MrH4Z(t)JPN#4%0ODYs#HQX0I(kc^LOqD!TE7GQ5^Ssm)EKCTnmyATgrfm3sn]WHk7E0nuWAaujWam%uJe8IV&zsgRtR0HYr8g!9&noOjPrq5hZ0e]o9z^Zt0!(#P@@DOWTTwJHtATD9ygF3QgJOle5[MszVVOBDtVY7Ft[!DNg9Q$p2*eO2AdTO1m4vsXfE$&MKUn&voff$2n&q9Q*wAkW9&S3rqY38tHQCG0DIS$[[PsQhLze2kdI&bCieZ6(ryh&U8vl(YtqxEYO9SQST3p060f8eLZ4(M9]y1UrbSX(8guzbEUtgim#%%WVx*gACrtKU(0NlN3[zo#0(^stGTiLf*BXYeF$KpAnKTw7t)ktq[e0sq7(DUA5*QT8%%qmh7UHW[oR1V7&x!^s)5[01XM!own#@QSr3!wlOs6jAnR3Si@*RtMWYY9ews$K*6RxGriBf88ijD!Iv^hMcfz0$alZ9Oe)M@DLky!giA*hqZoLZMYastG#$ZGL3&[6iOcg]YUKXzMslA]mdEiINjtelKzco9Qn!1q#6[rHSwodd*nP#^u^DCWR5215Uvv6H[z5Y1WOg@12N0kl&NA4wzN8soB$mQI#lhlZ4*tdE^z(VJOKW88si$GjpwhVJYMnL[e&)AK1@D@39zMUbrJlRT3#0X)Pv60TOJK5Dgm4Cvsp0bKWJH6eMp8!2X9p@OiOmfo1iRq)O4aakB6y*OSt4&6Hz^omb7cmXJ7JgrzvOua4ojOqu6m9(%7twnYXm*6LlfFd734hNkTWSA7#x*rEqb@rJSX[&ysdEHFPF[ue%lyue*Y^VZ$ky1]6hgYc6qqVFIQniFWZB#C1@vG[eDeNmGzy%0eB4[cqGrEzbQtOKzzp[0f&HIpN2s&xjnp&n#M$^%UJACFwLIl5l!1m4T[e%QPMrk(coifExWmTWxpj#A&vVAYprz4bhJXIZJJJ%z9NSz5Rp3hhTSIn@v5Z[abD4(4[pRIw5#kuAbgSausXcXY)!OyD!XL&i5Yt$d1JQYiq15ur[oRlY*)u#upHr#OAM7@N%OGyMsZ]a#6!k*c$fuQO!O7NuXg#V0YSiVgGXf6vwx#jmi)drxyjwcVZvxmq!P^DEt$Y)mOn@AnWsj*U5yO@@K2$SZI1IfmmX6SqnCYA)TGh5M7n14Shoog7h6(EQssGBt!Q*sZtxg3Wg7K6tS!N2^R)d[B)iE0(WkD(UVy0SfJ2*xk6gjYvji1^Gz(TEO9l4sOh7ER)Qn6#Wy5ex5lHI]Den$D*%2mN65P%qiti^[zWJAG6rR0I$BbVqQszs&bBQHm0*T4[f4zjcP^xUQ5EqBHVpM3(hYeMWBIF1Z&1G5iWCWoZyhDicd9c)c$9msEMIC*yZTcpjNswQm[KL#Y6aWh89Sh^y8@aNfLQLj7NBuEpNhKZ*w6mvH)qd%LjzdeLPJMgIS^#RIf^16mfq$NBvd!XyROLoHBE^Aoq*0c&3Ki*P1M)CVZBeN%IfB!0JA5YrP(SF!^*F@2QrlOMXlX]O@t$ptP%(bYwf^H5US%TY$AQA(yEppAQa8ED[NxposHkc#jwQ9VNG]W&P%RQ[^wMAmEAFASNpo9E08ezhp@JsW4^OUk#31e(zjXMnT9PEg5NoBX#PDa0U)ky$Bc7R)qkuNp#lC^@h40u)l*K137nw@fJEhK2JAp#Clm*Wz)uWDu!B9rXjX8rG9pVuE]^KwpE46kEW^8ccBA86wP$RADahi)8cMeV7xJfVEBM4AjEgk*OJ0%ceN4AtIKhMuhRUKHfRA($mE0B0r(mk%Q1O62sgAn3WD35Vr0H*KUKjn1)VKD*E5hy6CF0][ltHew2[hGfKQAyqdgQI&Ay1XLjyxj3*3Y[fob^icdKaZ$vGHMQDDkc%U3#Uypgv$#%WHkh7#^j6vRY942Sd5TFd5T]1j%ewL$hrT(0@04BTqmxy5SKI5PaOdXujpfS2(ho%uFBlVeg&s98LvS$1ouN7@!H*LJ!oj*K7OJrsq42l)ICCR1L5YQey1UFx(e)EDZSyf&xshQt00s91alYhFu6F#2eHQ8fZjyD@wJ[JXCv)i[oT2$FWhB9nqIgQrHi9lzd5^8djK)A0V6uDq6rQ4PbLe1G]e#F0^9BoAxJCpa72Ldj*[#AHb6zl#OADe87RJGICEw)ABbfMH(l^22yyFI!jz2xyYTgMdP9!dL1OljlG)q(AjgWZcybdvT%B8IXDk[x^&ZfP#s[)XDd8imL)[[xHjDrZ%c&H!e46BYK0BGuyEAjjQ#*[z([TSf!#ZBs@51X]cesndVYXGgGs(s%f7D([Ol1F2z(Dt@MnZFb#Us&*aY^2Op*cY*@Z4NTrC(svXns1#$2h[ZqtrKg)9tsSsHT$Z134LfN%)YYAk%]qLV$UcWpKYchVWsA)iR2v4WAgyb5lIicLK3bY4vcnn7*a$HoQj*1x$AnU#NLO(2JVfYw0vEt^37zOXSPkf2NNkL@NA(&M4&oSW&KBI2%%*9YvxzxIEbD&o2k9kYn2j8rPECCW2eoB5iYH!]9Lv8s1bARMZZG1h(RbGIUTG7H*f8DMAUTSRjBiZ0GuhuKDiv)P)F[31m9eZ#PCu*DixtDtH5o1ZoRe4j@zwec$((gS&rlS9)a1FDncwzuw5EcuR71pI[N(Q6iBJqm9FJZ%UyzxvfRHSbPcpxE0ktOq$Bek)fVmB*pD@1LrYO^tie618lV51eYoUb58Of71cgv2nLImn1yPu#lYoM79blas%dby3@ugFT*fICIn30#xtY9MYofU3SW9$P!Kwz[@mmow$7&ZKdz[f(I10d)Yb@vz4AmjmQ#^U%P1bK[0wjZh%z2F4r2&IVr6u9VgV7WAEY[[Qbf[[i%)gHR0%XX(epds1P5uBxPBm#$lH)N6WGKmqXuKDqYrhukglnXJyG!ReCWr&)ANjQzCwWL9C4R[**1OLdReD5Nd]3@kHWkP(kxgycyq43GAgLDu()S5dkt74RuQavNEF*eCMDU@W1qB(D2C6)Ws])oz4d(7xzw(8r#[ZOyce1ckdnYg1lz260WzUWwPRdhdSJQSx)Hfc3%cvgCOLvHWjox9MiAxEeHuz&$Jv3mvR)8y4xCw51ZMDV[i4zU#nP@N$eQBFO2g*R(Wzab$W5Qiz%E5VAjrxsCU5GLl1#l0QKLa3pJ#o7vqv0UO$S)G#%Ky[^(YXOGEQYbNtE9uWuHGA^y&iked*NGkZ0nD^sTSP7rSbCzegR9l1!(M$zznl[NS!4Emodz^OzwXgU$8wiI%xJMOSnEkVfhrl%k!1jQblFcXlEkcEqxFHeNRud2iIW8fOooWifuzVl)kH*RN5dj282&74&PYaIrb&KL&cif7s&scx)8f6(4qXiIuQx#iYq*]W01Sj68svm7DCW^X!3u5v[mV1[q%j1Qc8JrptFN^pX($ou@BHj%QiPR&F#3qOZm$reR@^S&3RbVOCzNWMfrR(6$1KWHYL)k6hRnx0lLR#vS8VC!7511CCakbNcMTH2qSWgg&2!(Q4c$@i*zqfUsqlwcs93uLS7C)oGQv(gEilraMT%WFdz411ee!Qmh4Ej@pl0x@pC70v%UIuDwOMY93YnrX%5qQ6Und2KIkQ0(nYKnXnzNVM0HT83ihoEWGodBPXuWLu]tBaMBHH)7R#XDrltSbfzIdM7qIBcNUme6nCw[M!TWHvRayF%l7V8FEP2FXEjB]*[w*ajBD[ZKR!Nzs3UMUo@Spd[pPVfy#$Na2f$y^fG@9izxxyoU*ES#RB#JGXk3f7Mmv3w@Hzd45)nSp%9j2XG@[2J6y4xj#ZdPxk@b#MZSqmDOlr%$6BJp$Wm5MTkCNb^V6^7&1O7bJk3EhXw]FBMijnV@EYnvLBmG7jnCpdWTqS38oIBf$tcXYL[6q@U^n[wmF(mLRMRg#*b6Ys3Xl2q4S2L55&l(M3G)8mpQOqa6I%XCHpG^@mERZwoTLgO1EojgRLQ$S4c6w@UirdTwlGT6lD44$9)GyQumQ9V*x&Lg0t#$H$FnKC$6WddQ78%!QBDQVlgtMV75oI0XfQ3FNuh31r(E^eIpXX29ACdcp7X26n@%MOq&V$*t2dY#b#gLnOO[IPAgt*rJ]U45FNou)u1rX1Rh%D7*@Y$M0Brjp@xSCG6y@DdAYECsL$IZv4*%AVcKS4PpjSoQ7At@r0aUVLmECl#yVLVo$x!IpMtyV935dZbfD2KWVUaPXi58#vfYu5RUSX8riO!9rZAb@^QDZIKUxRqOvMrU$TVhg@I$tdHhGNFF6bO$9Wox(66xKv8EjTnnRZ5BR7XbZKzI$1DXVkY[cwvlb%W$t%yco2ACIJNi]$ef7DORRzY%kq#r93&AD%PKD7v9La@dbo040ylvE5zPatg)5W5tUCL4UfX@uFGyC)$@bY*Oe2Ot!wyM^IqU1dN6@s@j5Dp!SiI[CTu[kOBL0$09dc(@^PmRH*)nFwjw1O!#%s8d6#QO9g^NR!2[jbod#xgh!sGrB0if35^EYuhJGSju3et7]c@hsNA7[G7b4e2Lb5v%SYyKfKxb2CZ(o#2pw8)^qpQ&*nrHNygIPhX!@Tixm3qI)Fmds(LTA2d8i0$(RNDe^(sm6jFpLDV%uiaRGXQpI9eZM4COHOkc)5Z3XHuKD[vSY!QzYqNmhCrFFL%k]OL8xgdl)vYt[k36&WfD0u@kySBzb))enN0tOl3yI8zY@$&X3k3sf1*^bjBO[mpcC%[vp!n%C*N@iMrtR0PXMLus4oV%fy9&XNs4qLnk%$q7LG*vw8lFMow56$n7KIj4)ukGn6JEc#In#$Jt&ELAOaaJHQ92rJrF8k2(iZGHOpBkf0S0H5n%TdU3U*m@#Emhp2V)(iHpEyE4DKiqwm)Y!9P$g)Fi7fExL^zY3w1qrP#J@%%784X25&7sXLBK2&H%w%1mm8i&vVwSMW)%VecHrqJiXVgo7DAm!!aT$uUg7WlkhPwBHRGFo7hrREnnk@ZcXCM86IN@qH6q(Ux)^^%72)fBcux$56MuGVYTQXm^E^OKGX(chX!#jDl(FFPV)d1VRQRwKOgDRU]%DHtm37zwQ2Kke!)cr$F0$nE$)7od!^pLholPz1b#I[kLdoSp4In26xV7Cigl5P&oy%2RwQK[wdie&vFd#MA@jBE!IA[5UW1qmdGCad&xziM$)JtX!gFjWhYHoq89^t&$(F)v[P8VVK)GL#53y2CXvXTuw7!dKo6ChX6bkMhHl^gH56n@pIOZTL60S$q6LHFVGBTH@JBFiDbT%I7viZ4eSk%jjYMH9^6APCLZJNs5T5c5%&3[oJvi4kH2y34T7&oj)o5b0h87ZIRFCxlEfcvvGBJi2b3$PK#losGt$dwb%vYRZjZtA&qJDxF)bn8HIsSzs959^[Wf9(PsBKbA6@[gcFe$2cD$RF@wfxmquC(L$IqrW@cARc^3V3oUp[W9T7i68Ike[&@70iHqV4ElcmmMjJ&rgB$%JZ6mvhIeMUL!(8n^@l))UAlP8Q4j2jP5rDDHSweju(&6H1VJ^mw9%&gsIfe*]kd3u50I#X&hGXtOJjd^S)cYlLjNT(YRzzl9BffvNt3!tC#^ba!VYZxQy$hjT)m4oVHo$4T5oYFK]Jdo49jN%[AH(NMK%tBDksbcY%kIKidlDZ#C)CyJ1GmNb9!iIp#F]gHQo]pKptRF(#D*7N97C^)BrAoycrru0*zMA#PzYGDS1&mg2$@R!3biA&yO%W2HZM%K7r4)5#A5prnhQF90IJT2xPU#o8NevrL*n5iyJJ7yCNW3nYZP([U1)tqbMV%$q8dr&lXw%S%hcN#8udHblwntoy!zu37ECunA9MRivPWwtndHEy)MEFy9a![S)oL[Qd#1e)XV8r5hKJKV&eOjB]INoWtZRopri%q(qxM6k!t^vut&BnmgrRP8HM6et3(5o4zyUz336wJPwlSpkfH%DUBwVG%MVYvyRr82HX7$4^TbiefceQ5NtO8gkVq866DAhudwNl%f1Ic)fUjjy$A8XnB07JSlAoyb9(&S1*GVv^Xf72@G!imBUmV$0n6Vni0TLJrB5&7CbIjAstFC4UWzv2w[7SDyRdjCxEkKZaC76xbZXpIpKkqK(#gicR9%^IsuBv3WIACrM6fMMSkMe4476mLeh%QFchkY&H9Y51ruSJVURs[Z$NFmP^fW1$V)nndBFQXM7#)vTb(Z^ct(q[DBbWTnpT(9OhA0%t0wvwuupor^Z2UShevh!oT0$tHDg9XyEgcxkS8ljJc(@[c6qhlQ!b)Bqo7NIK&Rol*YlO0n0i0w)rm&bD)!XY7d)]ZTd*Y9H*6#5Kv7zUn[dg!EAHwFIjbkP[cg2JSXx^wD!*i]ndx1HGBi%26(QCncf@fnjbd5N]Q#uYLYFPgStZQ*#UwEEJ[Vp5G1reMU#A9MeD$o!4uNiJy@Pe&9(Se3%RGsBRtv8ur$(VGtcIuGPknhDMf2rCvxAiP!zso3%dvyX%ekp5pjB&GyD(g6[hBv1yPlG(#FIR7EBI4pAmgl[f7SDK1wXT$Q2xWQUHMs2ZAn9&f#r5WIev7JAaZK%^Da!sLMHzUQFL]m#ZGLX8BHX8]c)LSjs2(Q]G[2$0y%KI0)nqg0]bjbdzab6LUE!DJO(oJ6l^x(08KH8FyRBY4eO6Uys@xSmSKl8C7xrsAa5*7FrC!dOD)dbn(VWOmKoB65d*4&gf4rv3@$NVwK5Vn6V#0jd@sCcfwH%qqdEW(yEObL!K0u(LadFpf&DpyERSSlZTe!0zs3oAFuQBU4o@S3A8bh^udAlk]JWkKKd*eOR2Xa$t9!]rld%RP1ysNIDmLJMmg0^gKBH(A&NWWaCTxfp$HJP)1#I1VthQKwuCX$yxdmxzw*SklL5pIkthGeHK3vLHZy!LbquA^fR^YS@1nJJp#M&ee$%CJ@C%^@5Ubqikjy[!BLVMMWjod5Pq4CO^7)LCKX01K(tKh^gB!P9NnDEVw9Qb]Zmc*JeMgUlhlpPw9iiV*^wVgB]KBd7NjKwJQaE5m#DxlGdzmoR[#B8uooMSf82mXikCZ[K[aCMS2)&s6*REA]@tH8qxp*YTKLfAGQQ(5gBE11%SSHtdbbdrkl85Qq[5jsScUm[)F)^z9LpeRPa3]7WBmD5YjZzB5wC0$6aWe&!tLXme)(cmQmNj2@*mzkwWROlA3x^eTxYFm(Gf(fpJ9l@F^1kEg^S&ddSmfE%Mjk)Z#Bjs$BoLFCcZBU3))RCQsH(xtdHuIk5%4IFhCm4G4W!!SNSmht*%8hdDMzh!82#s)tbMc%*$OpcTMb5$V6x%q1M0NDLZgRy]J#3vjG3^z)#7C6HW[2Zt)Jom%X54IMnTstrE)Qu*(NFrzrN*sCbPDyo%n2PQMJ8jeFk2O3^0D18krpsqc9YxO$!uKE31OpA!G*o!pjC3LbkgdcfxzhpVj7r^S$u$q$Cb(U7tRi8XZcSSkCUg*zu$Wd77N%[LrVqg9u#k*^HeZwht%yJu4p!1(JDTyoyw]10INsGMHoQqHRHZdS670cs5i6EWck1r8c*W8pdgDrtf*NgAWE5#H5QqEtvI3]RS[RDZGF*711G64I4#$ZcpMz)o8ZuoymI4cso#GKeMJIkG!i^IMTY$[wWDqW5W4EvGF$UY[LnIPCR9v9h#T)BymIKZgQfXO2fH7xtzOlX[$[Cc6(zVKmEb()nv#WFqjv2Fwdc!sN)9PWh@9tQ)Q![1mL&m175oL50myTmdzfsxYU(c&yb&0zPA!vZxBM(AEwH[HsJ(FBFl6#[)KlJP@U%XjFg5xm81ktOgjPrhxIc!i0)EG7e[)o6fx6k^xwDb5SNoA(DTO!%OtDSb*NZyGtZU1WAS^G5jvtVm!vs2%CAaCupIKloMXN(Oi*saVCuYgt7n6[68KJRnYLzTjV%AGRSHR8iO[dVdbf6MzaSCT!cWx[&kbI1*vl#kCSa@UjwANDLFu@#3(!t3r5PvJGD)TP$2!e142HnnQVWMvHrqNN(US[kFEL3c]aT]HB7S9$bR5TnM$7vz8#5e6StYZsP6k!J%iP[ye6NpuVJpHSXq4ms&dOswdbMB768e^k^rbhu9N1UeQmY(aBv5nRsgUFBdBzGwtXXhdyCyhz6r(e72h7x9f]u@p6H0Y6JMgAJGk85FSB(WfiX6jcco3dbtijK*4BBG(9EaZtcy&3giK5[D^N[[f0fAwleUR3@rQTlPxu(u5!lEJkKzdzHu$v$L!yo(z8IxeC5ED%E7FU@W&)PpCQ(bXLCy[DUZMABw4bmv&0DN64Kg[7(US[f6wEj#uy^[Ts0VyoUO3h%GSs[&Er*Q!n0otQWAllO27YE!2Dx@xHdPXHXa[W6v([tZfQA6bi7Z6I]HvO5z6kOSbSQ&t^JSs5g@qt60*I$X30m22knC@%$@WoP^d!6WZF3$tqO^3lNbhL&(gqf$gccV8VNx%4[uO(XS71HQ%@6(7^uTIhhwL[&uPki$9FTbiu*8k9X@9kU89lqkrq9QSIh2bnmX2Xoeul[b&wvfQ[h@JLfI1wARnZbNeawLPkyI*KPl(YTxcxYUlC7$Gbi0ww3A#j9XhjHs5g3Y*(RQMWkv6cxRti24brFy6t$4Mq)$I5f^Vwqe(XdEM12onzNmpT$LOp!nbnr!&uD2^RLbqloV@xlS%PGJIuziYrBlNDLAgcwvSGZHKi!m7eZ2BIT4*aQsmsM&7lx%PnAq%%$Fvhv!rLa4MND0wpaAXQ2b6MqmHNvjpeNiXvchVAd5NJqew]I[J7BZ7ed3tjb((#m)Iq3EUvJP)&rNt&9s%#JudJrZVju7fD&5NRef@((%El!!1#D!@qINw^kXs@yTySY[hHKAvuo7xrjQXCp(mb(WQSdO&rwYUq7MKdzWUY51xquHM78*9ON$lhes$t[kr1l8qL%&hnmkOfCITMOmdX9hL1LK*wV][DHZvhRCWyTUsxPTql^t%&1%Nc#B7uhZQnT0(nt(5u2QNa&Ri2q(T&X3q#scaSb%nt@NWCOU7i9twrv#JDhuX)sMAq*YCS6m]HZ(*(ZBv#J9S&%u@iXmPVkX6wqlyT)V&FGNPAe0yY4X0((J$2FWwXO@6e$%XBek$DmDM(KkPnxF%p7k!(to3zQIEGvP$xFEOu]rFyF[mO!*Rz@ywn$%F8r)ucM^pR#%0YOM3asli4P*@wybLe2b)M(R0noG&gD^T0VVyy1x0eWB(Mc8L1TwA^j0nBKwj6)yMWeQZO(4X!S@HvBbi)*DSCgl]i8n[c@Mv%MNSqSLqK9OY1)TO])qmJji9LMZ*)hR@tizglWc!a9V4b&Pvs2(6hFQpTtA((A2s0mXcfAq5FGIE3mcYHD29iqI@8L!(PK8j6U#OUJyWYD9RiM2#V[CxYq9e&3ldVXXb(gxUD8I5q!Y4oLA8w17B*$1RRb6DtcF$5#nmF&)QANVawXw)Jw9nNbVz!LbuErk3@8lyciD#)L5SfHjKD0PL*rbtX^XJn]Wi^ZHvjWc8rJ[)v]7i)FJ&b4oJMM((!)W#ANOtygEmn&^3flxmXn*@4Mwcv^1OD762V2nIG$hgkC!O&1iYLZR9P$I*xvJs[O#TbKYmqr#ApUe#@gqQA$I]R3I8^rgYsS7fgB&fE^)Ap06Y3hHB6ZZhuVLpe^fX9AqEQwAYE&75R*80ty%BAZ)uzJ5bG4h2K4eFM3(Hhu&V]^OQy4ASRhkO&gRHLgXF#Xs^Er0m4SZei(7RaNm$F(EJtsx47IJzHP&&QRCFddLguXOjC8T0eQ@WuDE!xOYY9ETQwsxYyyf6g)5gSaJTXElKmcyPwz^8kyg6p]zTYP9v0XgI0tqD&R7Czduznce8%3x5Ede[kFFFV9eP%0V0*tnoS&c$GwNnz(dQozpaUPRYN5&PwKk$LFxjOvZe7R]LUQA5yBxow0C9SEo&2Sp(Sxy!2!ddrQCVy04g3@AZF*%sBkT(fx@U0gHbaMGTo$%K8jKitWtKVJ@YxFQnPXfcS(gfx!3HPfXcGuuDz7dQ@DlJ(5X5IbjUH&HkCs[dQY@[A6kgp274lu1FSSCiLeohuEEISY5oKdmnTkMRpwT$New5f!9VEy@YCSZuEofHLqfH6L6BA[IPP#YKWxZprCZOv9WuE73q5c&t&GX4HT(D[wlP4nqtO5v%O(FQbUDPH(eQ#eXER(6CYt3PXBHWbJ6xxxHYSwaubXL(5U90x5#kPCfzJ4ckSKSDbCuxX2%j1dN0cS*zl!%PEXD6YFzkqETKkvhL!154CckY((^zzCyow[i8%N8RWgMRzSB!^U7b#xuG7NPWNf%$J52WiJ&jok%yFUEoXOY[CsnFlfA6$3ylqu7Ewfls@Ab[bvwTW2D7fBfWvH@WNmlSa9esJZ',
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
            'rule_uuid'=>'671C3d8A-Cd7f-e5CE-1dCB-4C68873f1DBc',
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
            'rule_uuid'=>'fDDBfd0D-3Bf9-49f5-85F5-2FbEcf192d10',
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
            'rule_uuid'=>'8F27dbe9-24D9-5b0c-D4De-bc7a951dd298',
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
            'rule_uuid'=>'dc9e6B8A-De6A-5A55-2C91-C53F23dA4DDf',
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
            'rule_uuid'=>'BEbbF62B-f4cE-1dbE-F520-92ef9Cfc6a3D',
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
            'rule_uuid'=>'1c3A1dB1-b7ca-78e6-F798-3f937E36dBEE',
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
            'rule_uuid'=>'0cB778CC-36B9-2c55-d890-f99f85Acfc2E',
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
            'rule_uuid'=>'A56BC3AB-4BAD-50Ac-CB0C-de3fd869b4FB',
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
            'uuid'=>'4c10Ccf8-935c-B9dD-587e-ADcc60d2de35',
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
            'rule_uuid'=>'3a6A3AeE-3781-7D96-BFeC-D5c21fCC36cf',
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
            'uuid'=>'71BB54Bf-fBBB-d1Bd-D4Ac-dc4f17895d4a',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $oracleRule -> describeTbCmp($arr);
        $this->do_assert($res);
    }

    public function testDeleteTbCmp()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids'=>'bF141E31-d99d-3155-26Ed-F517Eaa3266e',
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

    public function testStopTbCmp()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'tb_cmp_uuids'=>'8eAedBFd-Fccc-f40F-Ee8A-BaA18364BeB8',
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
            'tb_cmp_uuids'=>'5CfE5aca-1A32-7c36-b1B7-1FBF8Ac5dAe0',
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
            'tb_cmp_uuids'=>'1A257Eb4-626c-28F5-d2c3-c4c1225F998C',
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
            'tb_cmp_uuids'=>'caDad4b1-Ef98-BFAB-de58-EBBfEDeD8C5b',
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
            'tb_cmp_uuids'=>'CAd0DAA6-8eDB-Ce9D-569B-bC1B6EfBd533',
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
            'time_list'=>'9ecE6EfB-Ba54-edfb-D30d-01b63e977C6C',
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
            'uuid'=>'a3bfAcC2-F599-4da8-4b3e-3269A8BECeDB',
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
            'uuid'=>'D87Acc35-7bac-Aa24-695D-5d13Fcd275FB',
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
            'uuid'=>'d280aC30-b756-2426-5BeE-5DDAcD71B34F',
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
            'uuids'=>'4BCDfC36-1DbE-1D70-49D1-f2D3cE0C2Cc1',
            'force'=>false,
        );
        
        
        $res = $oracleRule -> deleteTbCmpOracle($arr);
        $this->do_assert($res);
    }

    public function testListTbCmpStatus()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $oracleRule -> listTbCmpStatus($arr);
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
            'uuid'=>'Dd4Df601-EDdc-8D3e-cbAf-E4203969098C',
        );
        
        
        $res = $oracleRule -> listObjCmpResultTimeList($arr);
        $this->do_assert($res);
    }

    public function testDescribeObjCmpResult()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'5e3B4ecb-de4D-93eE-F0EA-4FBdE8edA3Ab',
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
            'uuid'=>'Edc51de3-1B27-6fBD-DBA4-61f1E66dEE2a',
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
            'obj_fix_uuid'=>'3D5d1D69-b7B8-9Ce8-39BA-e83A9470e749',
        );
        
        
        $res = $oracleRule -> createObjFix($arr);
        $this->do_assert($res);
    }

    public function testDescribeObjFix()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'ddcB1352-64e8-c821-3EB7-3beFAdd9bCbC',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $oracleRule -> describeObjFix($arr);
        $this->do_assert($res);
    }

    public function testDeleteObjFix()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids'=>'F4f78Bef-C446-5572-f2ab-0BECafcB8C3E',
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
            'uuid'=>'898B3bB4-5bfA-ffB1-fCcc-E8ebd06E157d',
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
            'rule_uuid'=>'03c4DE94-06f7-0c3b-d7eC-c5d0b9C4EbFA',
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
            'uuids'=>'7EcF8fAD-df60-91FD-C1Df-9d8Ab1117A9d',
            'force'=>false,
        );
        
        
        $res = $oracleRule -> deleteBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testDescribeBkTakeoverResult()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'bk_takeover_uuid'=>'2C9C9C6d-4f65-A414-60B9-AcE82bFeee3D',
        );
        
        
        $res = $oracleRule -> describeBkTakeoverResult($arr);
        $this->do_assert($res);
    }

    public function testStopBkTakeover()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'bk_takeover_uuids'=>'bccD7BA3-f3cA-bE41-fdA4-4Aa8A45BCc19',
            'operate'=>'',
        );
        
        
        $res = $oracleRule -> stopBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testRestartBkTakeover()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'bk_takeover_uuids'=>'6161911C-e9df-Db53-cf6c-6Ff5A3074D7e',
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
            'rule_uuid'=>'3ee67174-aEC4-648b-dBbC-b1CaefAfe61B',
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
            'uuids'=>'0BAbFBC2-1Bcb-Dbdc-e1CC-EcBDC937a2ef',
        );
        
        
        $res = $oracleRule -> listReverseStatus($arr);
        $this->do_assert($res);
    }

    public function testStopReverse()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'E4bEFf2C-4eEc-c753-b414-657B5E6BfFC8',
        );
        
        
        $res = $oracleRule -> stopReverse($arr);
        $this->do_assert($res);
    }

    public function testRestartReverse()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'2b55ACdE-8639-D6Ee-12eB-649ebF0577a5',
        );
        
        
        $res = $oracleRule -> restartReverse($arr);
        $this->do_assert($res);
    }

    public function testDescribeSingleReverse()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'02aA98BD-7Df6-C79d-6215-9af4bc5589Eb',
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
            'uuids'=>'ECf1D09d-CcC6-9A8A-3F2C-Ac3d87DE8de7',
        );
        
        
        $res = $oracleRule -> syncRuleCommonOperate($arr);
        $this->do_assert($res);
    }

    public function testListSyncRulesGeneralStatus()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids'=>array(
            '0'=>'F2BFf896-9802-CDbb-0e6b-dd5BcdBcCD10',
            '1'=>'A490cA45-D86F-D8E3-dAe1-cfecFCbddE9c',),
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
            'date_start'=>'1997-01-06',
            'rule_uuid'=>'F530FB0E-0208-9071-66D3-E595AE7D5A4C',
            'search_content'=>'test',
            'date_end'=>'1987-07-28',
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
            'row_uuid'=>'DECbb766-B4B3-D3De-37bc-0aC8c005Ce73',
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
            'row_uuid'=>'dD9Db146-74FA-6D3B-49B2-6Ba769Ea99ff',
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
            'rule_uuid'=>'E8951ccE-1EC5-AcFC-c293-6f926Eff476F',
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
            'rule_uuid'=>'26C6B4FF-Cd8C-cfEe-95eb-eef2dBBa35e7',
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
            'rule_uuid'=>'499ffD71-879a-549E-7eBb-6D5E0a243Bb6',
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
            'rule_uuid'=>'74A7bbA8-c152-4fDc-45ed-823A7bf4e4bB',
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
            'rule_uuid'=>'CfB149Db-1B33-4Ad6-63c8-EEEA7d68159D',
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
            'rule_uuid'=>'5FEF1fEe-0c87-4bEf-6791-5B990F2ED5BF',
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
            'rule_uuid'=>'BDcFE9CA-1005-ad71-baD8-b13D3F19bB7E',
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
            'rule_uuid'=>'2C1B97bb-D7BE-d72B-cA37-e55F9c41ebF6',
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
            'db_uuid'=>'a7ada1bD-e5Eb-c5BC-117F-2f97FAf81Ddc',
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
            'db_uuid'=>'3d5573bF-B4cF-eCDC-ec59-D4e33FB36B2E',
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
            'rule_uuid'=>'a3D4Eb65-f4e6-3C5d-a193-52bbfcb388eA',
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
            'rule_uuid'=>'FfeA0Ce2-d5b8-16ED-ef76-A7258bEba08D',
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