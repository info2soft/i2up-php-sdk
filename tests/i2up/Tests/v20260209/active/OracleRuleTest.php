<?php
namespace i2up\Test\v20260209\active;

use i2up\active\v20260209\OracleRule;
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
            'key'=>'MartinezPerezWilson',
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
            'kafka_time_out'=>']udqWNX96gJTOs8rifrO0N7mN4SpW*$8Q5PojLQSw%H[%swaR!w)FCX]Nz7v%YZVA3kU48CvRe0x&4%[0T1bIVjKkwyt#e[dP6$XerCD^ny2XL(*cqjLVC([EP69vp@D(13B1si%jbv[TU)XUw%^mnlQ(RWcbIx1IxRWp*Yy6sb8splEsUshHUL9ysnQ[spHlBW7nK%nz0#iD12f0e7h^8@8aQ^6hF92B&I3[OI8m2tw5zoWKwaW8o6okWZJExI!1^C1l!N3dpAAT%6mAl#v8t5tyNU2RE(ElSFsm(5EV!lBIzUTw@BKLubBww1PHnnD2Fli!N$moFL*c5Y&8QR[faelOyt245F!6ID!BBzcOlLQ0J(Ts&KG@UJ$I2!TmV*JK9VE[QD)6bnLivtPC2MsB5^AN@bc5GAF(X11VWe37JaUvqHYQC!qysmuq]X)WS!RQhIn1g2I5Y0ydXp@i#3oE@(HRjv!9Yr32tIAD!@vXJy1JetxUr&E0m&SotyS9uFa]8y9xA%1unaBZXruHK(1dpsroo0R@(ziSW5d@h%*MXHeh)dgy((!RkU%[7i6TAQjc(sWvjPpe(d*$kb*UZJHTHCu3H^G!RWm6yjC^d(!ej@LO6MOTwNy)aGKx!2Yqj[gfucLIvjNws8GXspeBH#v1xUJ4dd5s7O!eeC*2fM7ci7DHHLAG#sB#Nf&XGc*CZ21aj3prRdk242Ct[SnBA4ELpVc3mZ35pS6rawEjANQGUH@uKYAWqL*RkDoGIjFLp2coS5(uh2a*@En^T7zBTJejqNDaL)]3BdE8tPGJYEn6S1R%S(SX9[]P7b99%^Bh*B1IcYK@d$RsVC$oQwxmA^(Cqjcm[v$NsZI1YYr!gjN!&kptSO2ErsRCUk@u7ltp9(!G*DC9QynSwPKlKnd6cxpgfqs)XayR^!5Kx1NR[Ypp%APT7RGb2o%@XBHsVmEefKE%kORk$Hn[SRAueiNp&@FN3DqPjRi3%t[QkdGz4s5it2c*iYnPtsphABHG0)sd)7&y^(gDFEhpPvi0Fw]scKf4V(K9cKeZ)**3n9S#qy#KaZCPu0qu1(Msl5w(gQsznV4K)m(#AAALM0clXHb4g]5&wN5zEFJrhTySq2ml8RlJbCkL*g^0QH4AuLFAe9B6o(!qdwM2ojphqNH[pqyBoT^B*z6YR@q9M6&HHitTXnSCK!c&p&Cp6i989vEnTTMQ5WYE8KYcCAi(aaxjuN8QK9&cBW$tPx@d&a]Pn4I^J22VvvUMx&4CU*3T#fJ$jFjLAFO*R!1u^%yE36lfgC$hSusb5GPGEuiDU9ZB8CYUP)slKRdzxICApAxWHk&dBH%Iq(y%eeQ&zdJ8LP3Fpg@&om0gaOUz(DINK&ZlO*t5@YXwGNm!^oqgpHBR^x0z@)jwIugzWL^H]PKqC4EGF3]RKrJ]#!erCYR#4LkGTzlZo&PzGrz8^5w%SZ$2cPC5R[EkqVX73Ycr7Gn*CrCTM9c@u2Ul4LBmz)ONKxnU4Ue9]#1))CMl4RvAoV%2XeCJbJ!I##UXYS(0H7VL7Z2^!OsyTSKNHH2[Oc^uRvh6IgOJLh([4MH5rp!dTeL&eJdJNlSsJD^oqI^lFq]i#NNY5IBzr5m[$C4yprZ&!SgCWUfhW0C8g!MNE*c@U^@OFR*ON!n9Gl%IB^qRk^u1Hyo$PmoLcAR@axXG@cH8Ts5qk$L)GTrPfy2czyie%*Vz^%NpqV^3SNk[EAA*E*gcX6)xEKQ4NJ%&st1KslNXbHdnfCX)P*Q@3Ll7*&m0J(DA^Vmi9M217dw9Jhjzu5lZehWHTgI9xdyJ[bGuVrAG8@In[LDVn%YBJNK*lwboQfTh@Hsc34W7KlGXh@v6CVLIqkAKhrGyOZEsAYeZYxiLWJwSMZx&edUPl9*7GcvuRwgCxN[EOQt(27yWCq72ZE#T8v1bT%uT5Jko3%ISq6@c1B8M$ZCsV[C!sBFGrxM5ujqn)ZmwL8Z)&e72)PPG%@fR&VPUL$#c1JcRY[KEt[HJW(KMl7ioDei0ZAP0aF43ool2tSHxJJYWQoT[N!HYBs13]^)5j(X]DBZiZZGVgykD(idjXFSqMfXa(d]@V9OJ2[oYIb2N)SGfLTSPBzOTBi*aP1U2R$XPjk[@MV4%79Cp4bDgDZ5dNMFihrvDdus*%tl&gumWUBEJfbw@c5Hf5$^B0oy&4d&[ikekO6r#0DXBU#Erb1cxt*hTgHo[AZeI3nL2m9WvsB&oiIYEXU#lNKBi4nyL7$9FOH)layPVpoppRNYg)fzDprCsP4UTb3V5prvb3)2P[G9EniW[7nGF4jgS5ENHcbF5FmbHNGP0N9TQYE#4V#)WS6YrB5VTR6wBKW9l0Y8JI50cMfqYnpJOtB3pPT^29I3Td($O2Cdh9O*ulc$BfnzFjWdi2hfuEr%(z4jpQkCLBi@Q9&JydCrl&1Lp[KVW3Wniomu822]HpKJB4M2dYN9gh$bq!AB[g#7oV*X$WlV4Cim%8ZQ7RG2n4g&s)MKd#CudyxiUF^iWsg5op&)TZrN1^UgipXLKMuGQtH7k!gKhYrvI[XQc$wiXZ[KBG[Q^xBhKE@seATV3LDURS9lM]&NXPThlNBoPm7iC[DcXdT$iPYdpB$^SetENvIfG*3)UhkGNDxUREuOYbKj*upmKY!(Nj@ajh9YwDoi5F1h$^#CW3^84wO53isB4YCMRkhFq2wDcUYhb#)Q)AI*piiK64dri5PC&h^c&d%Z!fL*sl%F26INVbWCLR3J4VsE]^VKbiX&I$GBeIm6RYQL!LGu2ts4NmoZ1n2Cn!GI))kr#mS^ejc[jelnx[kh8A)Rfwv5k06qQdT((wZxwft1dBiA!yFKEBVb]wUDP#h#NR%vRqDHwE[ulngib6B2qRIGwJ)e8m6RhOkWwCoIdH[M3*VkAZekK^^[zT3XamjAun7noeU]dtCU7MrKE%HGOJcD6cB%B7^6VPeT8F3Xi27Sbk(IXgrA5%FSzNld^^*nKG&nEJEgcLB(@IGbSq5)2lEeFSu*R(Ah$lw0huG%rbgx*ghO3luq@2)4h)RQIp^YrgDj[4^p*Mnil7Pt5[4X&TLhtoUqL&Ss$1JAotNm(OK4q0Gvj47@$jjMsIEr)QhZNWZKBT@]r(MFM]66nZ(n6i%Rn2Je*A72z2Y1z@GVs7F0#[d#c1mQPImnznGFXB7P#@Tq1VO$ry*ZvL5v1W3e@^hTB#MHolW$DvGQr6@^RHnvnZy804rX$Bq@b3uQ93rW5AchB^X3CV^LmzI8P7(%sB1DnZz(@FRa7Cu73b96OoKXOOo(MLvNykqZ]q93*FJuiOQphP)#YEKLFdR4hION1wBbMSie&2i@*6Ny%Fhmue0Qu%K5C^MEIlY7Q!&@2ciL9Rgj6N$3o7Znu#2$jDv5Q!VV&5eT@$k9g@H7SXKJ1&xxxOlO3l3&[Ed[Mm6sg68[uZ10C(3eD^$Ae1eTh3F0GY#^PpWpBRIE&VqOP6ojzuOk7IiDrh9s7Jke9IOoMK$mepinUIj8FLbUQSjH@AeltqkcZaq3L3Wj5o]D0GIJ(zeRWv(JZMckKJ]amT(3mpvTd#v(ljdVZdR2gzMtnW4X9SFbxhAYIQ8RofOv(Pi7n!2JRo5GtsWw08Ef$f*S6e(pAg#E3tttT$M[*YZeCYHWifZw!6^AL#!QRBmjc@&U3jdsY3HEUqRIO(l1QBgb%cNA%#2&0!L3Xu^Lf&)PuI98RRo0RH3&4^@Ktei(()$nT[5VR)@uqQmP9rwdZI17DK&r8DW[$W@*NKywwk5Qm)fmLOffb&pwe0q@f%VVbT6KhXLvA*HCyxS4^XqWgIYoJ1O!$#5%l#Jlc*IDJdMZuCtOnkUf2QOPxk5s%fShObxlC)VF(u%&5v7JO#^#kx)Jf%$ANQG)Rx4N0aN1rN6ltnZLZ$^h(q3[1B70cIDhOwBsp6F%*DvsHth^]p*5XQm%qH[1ON5%j*yj@3i$lyOr2e[kWkcXfPy(^Ll0aIO*8!*5Nmz!04YDwOeUY$oskxaA6%uz4mZGz1MrRYfyAofw!EjMWY()Y24NoGP59aENi$E8%q$^v#s91rULRq!UMFnujxvssNbMeNbKq3z6[hgVV#21kGC#M9Ks0yn(6lEW4zb!FD9wHtcL#DdN*lr02lFlRhjSwu$sbNo7wqlcsjIungySO4!CmOw)C(1*LBcFX*&rgO$qybgZP9z$6sDE4YteG^95T[IjpynbVIDrTYvgk8[V![np(wjO&K@kEkHMEBO7b%!bfXU&#5)Ax(Me&3KgmbtCtYZFtKKTp8fh78mO)K6&KpcXszPMPOSngfZ2QD$n(KTIZ3H1KAQNpbznijBv]Sp5hOEzMe4Fs8XKBjD8$dG^8R#e^Lwn2yNfrtTvkIQAQ%F(i8vpU%v^2z^#&47x4*]SCA3VhK7PitnB7VkCDmoyHfuOXk$8Si4ZcKP(#WbW6S3Xm*w]Fssopbm)QJj73HhiKN6$H1e92n%exJ$O51Ptj55!bDBeI%FqVX0RKfM!NfcH&B%ac5sjmGZx9%JnmieR2KJF3mMwO9QByp$ZVzvUhxD*hVFkNeoyXVJj1()VK9l^57eTvY^@S)fp*6E6LzWy4RdL$$@O*GjB@ZrVs1t3U^$yv16f14lSUWw1CLgTc1GdwGVr[Dz86ia%9BngHo)$[twptEDwkTV3vV%eNQvxgDFF^xms1wOw6Uc3R!HQj%icghkjf!0mT)on1lkTKfGTMLSNkkyTt[$8qcvN5@ohA5RfTz*SUTfG9*^jQt09&dmE0o5nvw9])InUbYyrGGtzVvDmQ*nfIK3uvp!TgTc%pExUmPHjXRvNCm[iTCSZFkxOQcg9T$[&F18dX1PI#bJo1uFRXwOhVrv90uEzGjDs(e%wc2srJP@rTL575F2^x@ER&M&Y*9ecVcp%e0fKG^KjlOUX#jABJHPuz$1AxLGe()QaN6qR[gk^1Owgpt2A@0YiJwN$)avWzC&5nMyP#vZiBM&iltUo1#S9HsLYkp#D!m6tnVq&v%lX^#OjnGfd#*pOKU)DrTd)q)J@vc#Qf#&uKbqcxkgR]0Zbv^kT1s)xZFkd^p5uOd@XDpX@9[8cjzRxnJvg]#b$kCGj1a*bxhj$1a[HolpeVDul[tenbrT%4P#YFMw3GqVEay4QmaR6&sxNA$fKKJ9$nNEJn9m%!R@R2(1nZ6$7^*2s(EzETpV*q12bu)MzPYzyCmvwv*WbdJ$#Lx*vB#2P%8YuF[$G&VggbG2Upkh6a(#WPloyhTGsx892YXR)hGtlZfbBNO8nNxc#b7Cb&#wgdkRfqBzCes5AuP[ctnkx5YSTv83iOwIz[bUJIQbAPiPVr^xCZ&[%cAHYONB5LNN27b)Cg3R4km6lAplE^coxqJJ$&mKoWQ&R8cKoOtlwrTdp70%[3wAqmhL3[#BtBl@H3*JdoDFUyRufV4)tQN6I[OPcgRtyw@O6vlZ(vyd6x6p6MBtQAtIJ)$zGR7VIOHKwNALtQjR7iUqY1907%t#3VRk#AtbKGnBum$9J0Os%t$!v8[Ui3XiG@4orx50bfzlE#Jw7NRoV[6Em8X9U8whv[HTNngs[jM8Jt7WWC)%KJd)jpS2C*XB08$bxt9SRSPXjWxwrdrgWUlo2K&WTtk2P#V0tuqqFJqMYji3KF!3&YQs6WZc[MMgKogBNod(v37*$i&YmFILZsHxlngVJE%0h[Ks3C#$^pr%PGlMBV)6DqZ5Ni))Um1T1LJYGM1$TYeB*C@t*EKk%PFq!Ub^kvRx2qOE(iIYlNRNqmHeD39p(i)CRB1h)orfkH4u&YxvcLOvGh2V7f*Xfm4x#Lhvr]oauCeeKp(!MIS$4(N!j^GKgIBny7mbzb8t)9i4E44t4nlV9KkLCnkjjK&ztT^Un7byDhDV(C[EVTA]fsKu66Q0b#yNg)CKZF[S&@L[N1Rg7fIQZx*M]gu9S*3M1k86hY7]Wsy)C&LrxZvRZIvMbKBrnLI@nLbv8x&t1*ltuzuj5Y[QO0[!6BfMdV3SE!&]*XOWS(VUK(frO]7FYC14euif)UH3TlwMkVkg(TIKh5^@bv1Kcek&wvrFP*dedUmL^(nTM89z(XBV#e]1iUapvTlPZR&344J7S)XaPYCZG%Ovcl2mtoPiesLbhfI%gxM!mC6V8ehnILlld^2$98PBkJs4t%@A5muQkh2f5M^&ZV8C#FcKYE%nmC!B(bpt9YXzZrM4d@Gt[FWTd1[*c3CZq1Ca3*yeqc@@*y&pcl*6Z68&61d*t%fk6oTpxVhkhqs[#TZpfZm4bLPDnAARKD3^DjUb^#h8yEU4yF3puP2eb[%ul4]cJaBI@VWZV3dMBKSr##[6zV6KkFo&e9z!a6596l9zWA[W4fk6&AC*cRpN&Dc%N^l4X^gH![UO%)Grjp(awYqiX@OO!p#2^YEqo2EWMlMy)&vFY)Wk]ETNpET]RVjuX!Mlk3dX0vi$c@0b(cyaj%yHHjdu@9^*DmsbstSETuSE^pXsCLF$c8Ajg&v7OGeuEUp7$G^Lwkr20xmnZipO0ts8I5X6HDbSMIBmcVgn!ijgD!Ze!xv#ir55]fU!wW1$c#ok(@qEQ[hk8xte9C627#JXIdGGWTCHOMsqDjiRg#0kT[fWrx)rArAJF4$jk7cOtE7StWy7De4UB&7BdV!I0ng6IZ$m39vB66Ymipg&GiW^g9J)X^oI#sZokSdUXXsa4puG^$)olJ3NZz5kbTR%FVefLZ8NiHYCXQwFdp8Q)K4O@PBp(#6(3b8SUQR6iI[)x(ZC1bUP[%vZT5jejjjxSoZE#zHdfbgvObXGmFLh1[#RYiXqtZ21&*4ymM#M0!^Y5sJu1)DL^0nC^ZfvttW]btRV5S(jCcvAZf$5seLunNwslDPY$XTE)p^SA134qnAo$YaI]YqF)^O)emvBBQCEN$FPG$ckmvj59cE6#dRzTIkhUGM4yOI%Lb8K[aT$A]DFpATT!Aaa%E*Nm$#Mr4NB)QcRI5uVsPOupDgG09YyP6V5fLQRQB0%h93Rk2oJKa[mLETlLvy%qfox0WWE2P*dCUzddxIfh%sO3sXQd]o[&2cj%MtaNLz(K&w@dc(CV4@iZTIxEdoinEeQ0RR7&rC%PbU4)bWdKk%SffWncsNci01d]Q)EXz)bs0vC6sUb5d8hTZuo&3wb*tLAx*$6K)1MdYET%qDx0LWfZUBeJt4@$tIppqET94EvFEdhCcc4Zex3pGSfEy^)(Y&)%^^KlZ1wSUFZ87p0X^rUyulES6MDBsbpbe#dzC%nbSNI)&gwXMmBjAJZmzdOAQ6wpB50cTNK*xPB*XPw8zMPrVX9WPm7Y[82sKBM)ee)jQoE&qhV!C0%0hTfGlHy)p!B9YQqP#OBkMcUeOtpz3KuTRVGMEEb&*l8C#*dYE#&Nn1eWV!fM85RyKu!v7ynfrQkF@^o*g#x%Ptl9MFtxRO(cqpuCqVdCK(iupPhbEyoE(1iyrU2AZp947AMkfZy9RI$e)utrot%i*Lt@L5rPV8f[ADTkfNw1&QvK8PI)nP!PwmF(gS6skc^3ZEmCf5fFD8XNw(MwtLLp3O7&0fk0Hrz^bz^1*$S%sGkK[2t2&Vv3hCu4#s5JlEjyE3Bk2)Wx#zfhBk8usso28zGvq$b(TJX&vDw)Th*Fo^lJ#Puo2mPn[18zYnh)qqRCaf@FDO(a6$LkoM1O1LQqsE$STNTT2#^VMQnO6Si)^7MtxNX*U80jZjqXPI1wtxBIBjFzZ%SC%ejXQ6@fsCoUiWCEM59x!(xkK@fb2(tc)S[TPbeueR5yaTl2wD&bFM*sAH3*DP0orsagCO2@GH$bR^qXTB3cQ8dz!sjSl59IBAQ68hIaCw@YOXtdSQ%IpHCCGdPsVxDn2tIK47G!sTRgYh9lg26cwO*)xq8$1m(v8MK%*)yLQDCiV5D2c[tdiLH%XF&RM%R^FTM2wJqqFdMLz[UJrk#@(GU0xlE[&Sq&jHjcfGauuHny%90*IUV1d46qZRGlgD#k6kPf0hxP1iQp]]btOQ%pAP[p&!X1lIuY%#IKX6)r!nLO)SDhdrT6Y[T@ulpLag8R!bn2l5qHo2fKMMQJ2Rxn6yfO0sjcRK*Y@GvTzpB0JQG3TpDX[r4fwQNhdGj4QJTDRcsRReQIwIszdSZcEs&qepe$mskP^jT7siM7XA9prs@7(w5DPQ(q&t%nt#%JUdfoh@Ow&AvSmccNTrOzwb@Ggk%0HkD(K)P@DxKApH*vYfD)XJc$PGmo1H4@!t9w#L@foz7OdBKe@MQJ*y]i7gS(97tn7mWk6QL9ljHUisNpHn6OUCM@(ijZ3s)btX4liaL76%P#xCX$6]!m8Emae3smVE[VklA28vrC#630GnmUIe96jAGN69Wvl0$kHt6DFmNhUdxo1RCrd(xNCe#0&#i40^t5E7iodD9pZuIT!hYGu%T4fz!MAH7x8SyGxy3cc0#V*&22(yTxZsx(L*D8NKyQ)FY168lA%)L77HEq(7h&!*fErI5D$50DCE&3H%Ja8@*GYoIY@i&oOXIC9]mfQRceepPwRLSOClUoOK])vgNF(YbxBoI$j7l8iKmK9sDSFJgNrSsjHLTDA*z!9UR2*s5F2BEbDxHpN4bYkl!)To357]%1[egs7gtrzDy8[Yqg9]OTc(A0TXFakDyLwCUAnpiVBq)*nvP#6J50UL54Nxn3u$o$8$4Xt%2Qr(Jj5I^ChQznqwpKtP4Qd4^Aoqn8^6C6(QCsKa!sf*MOsnD(#IoZmz6gdz^])5EG#hRkxEr]tMu&jzt4wTqRa7llyr^7lYqpBOlNy6OEu9*BHsc]hGgV)m9XMft9Q(bSm[)#69J9EnbKhUSIgi#m9(1wQ1^v0]jyF$XgY%&lL65h[Wb[rv&xpv(MN19m8rsVggdr0wL*o^GT9zTmWs&P(K)T)q9YCK5zjfEdxxxnQGZmnRlO1XVK5K&mOT&dcbYqn!814iqS6ge[xyotrpI[^vg7[B1&ZFRqXEPGOWe@KhhVxJVtwjVY!cOIbU2*7nDa*Wk%j1q6][(h(Kqq44!^g]^yfUyw2M8d^I1V9cvmvOfb$Ydn7T*62Sh&qEf)#FIVcSLlyBO&FX$*nQoyGsmAgM4y5VCqyBHxQoUSJ5pvGhX#3Qu5$mv9c1Zim4vi@yc0V0LF#niaRF5e@^$zXN%D3rBN*wk#Q!25p*D]xUOBAvxte^y%a$nZyFbrL#)E$Pw#N6l*NHtEZsffdfjNT4wLQJSBqSQZ$2tpLB#Q[I)JKzKxBv(fEePydRgRFT(Hcriv[sa@[*]eUPA(M3e)ptTUBe6rAd0rRR$fIEmRIczgMXSJeO@z#JTU&w&C@)pY%Umx%JBSZB3Jnd1U3zvIS!%UAQkjxpM2(bqQtH!UD0stMdxFKuwMB*7KeFk#I)v^X8*HlcXm)#gXdlMRT][&m1lpq!iwPYn%@FY7AQowpe#s&6J6lnyG3iwN(MovtU(br@NlcIuTaov(tz(L89w!cyf8lU3ejD%9cMd03S%QAXqw15J0#7w*sPORpdcEB3)n1dkBH!0ME(O^jeZITxs$G0V]CyMTI4h(jcmRiyJ9@GyXs&$yu2laF4[GFw&NJNUK2vu9VXaIUmn0qIggC2XGBzBYy[Nj!dbvtO8z%TPm6v25LSSdos*CuMtxFnFfB0rsMPn@jw!WwXUfi[vpi%BL$e59HW)j&sT0AIzDOQqjzAP@(R(D*T2JyBM[g3y)ASo4pKdy6!a^[j!9pdqk(T7RNR7UKh[00Wk81OEL@s7At@%sqc$&KVzqd1$F0wVowN6eBW3CZOUwp[@2nncYo0110Svd@^EWh&KPZ]@BcvbXo%69(m@zVl!4K9wVCSTVmOQ3MpxBRqEM4Mj7QuTXruqJ9MKCP*WYnsyj!ujrprp@&vIC]UcaV63LPW1UuRvti[0hBjLWIl@1BE)YXEbp5m4HiFr25LvOs)^ubeo3nLja@dRkreGLYm[u!VJWZRycuS2zIUV(Q$[UIfpZc0tL)Kvpl6cXN9O3Gc0TFcs[XgQulg[Di*(oQ1%xxaeR$gnswcby4H9nhp$qdG8$d1&iYr%S7#@YtWL^zwNK9OSflw02zQZ[2Hbjq!^X9zpmIOn14D$1*#GPvh5Y5E(t)eYg3YCNuvxiElr)e5dS@zXIg3sAoup)6qh3MdRXdOTc46zulv9oIfGot9gVomqnq]kVtikNS7MFj%#xeLC!lz5XvSomDfMGXkBXc00NTi6k4Ksdj8tw#7ST76PSbtA7WEANAc[xa3PJlzjIVwuwnv4cZ2lO1TsCO$ce5E8*Al]M[gTjSqneMk#!eCpOJnK$rd8PWFn85v1Rg$sh*W9A%e6%n60$RnV6g4VqX6EVTGFKz%35]ZgpoN@ni!ohl6PcMz9j#$8xj!(R6Qbdi)gQBYB#n1LAHd6%IhYG)iumB^s(NED3QF%TjTEZFg!XwIhM$0)6TPORthLtfDGph9f8R@jNHYQTIiqZU2Z&gk4nCiQOyna@MMQhA[pCVK6hl1zVr[JQly&x7eKWYGNt[fXEYrDmJP5C$RWM@BkvCxJIQxu5ng[Dy!NjFiiQ%qwS59VNC81ru@gl(^[Ze)OzMPED^&4wT8oy7g%fMJLrd95hVTSH3jovx3*2Ah58MqGuzDLRWeo^M4$Y&S7yt*TMRTo1yIMzBbNlh)9c^pxLEhsrJQJbXYgeUuw&t4kN3pQvt8%%g$11H#PCp&&$z07VH(VhzL)5QPQw1jGXkNENGUwHS!N1ckzOUdzlUFq&5[faJfEo%YV2lO*8WIhtxAqiVYGlREItd*dORxi16euksi&*HX[yR)tn%KNk6$jg)]%O1UT84$#Hd9mJI&CF)DN$ot)$csiEb$HgOzzC9N(@]4RJ[#(ScY#ZxLdFOkbVfj$rb[scFBnCvhrJicmOM%jJfnP1UpVh)ZfpQK0nmn^O!2kY*EL37Za3aNH%vl0$M7)!AMhpr(Fyx2zrDILAq6y6^cZWm(J@8S2wRnzd6T#RQ1QD7gLHcBintzd3CyA09SDw9s#TBb6yte!B@yO(ytHv&[tEEl)d^cVUs*f1g8Bk(anNfuCVD$dUOeqErzEeaok3B[S19eepk@@ZH]L#1BRXZr@up[Zj3I2h1kJ1LwOck*e%OgS([zcg2Vchz^IGI&Q1EFZ9pA*92WQkSNmCt6%bCiLklD36uSTWn6$GsgUtF9btpLP(6wvW7TUV%@o%INezoKM%(N4B!w(QtQ[DExqjPBFs0bI5uW7o9X[KlbWClFvbwJDSQ@zhOf*@IWKPNpX0RI(8tSM@14E$#IRenLIZDkkOi!1TqC#KpByw(QEoV(QNPJAttRx!0CYrkIH(@iTEUc0j)EExS9cSq(g]qjF934orAi#rtc5R[[t2!tPPM*W%Ox5PT1r)]hkzY@lIM&x$Ea$%ed0dOEqZEM9)&TacO@#8Bk)RuPRIxLlpLROL88)%PyJcU74rkuO6LMKbi5dl$GguQy4kja2H6ODVmq9MRxNVO%b^AzcnvRUOXkyNYwAXfOYxzhnNH#7c7BJ!D%l6vV7aG4H71mP7L8$()IRrjp8[QX!$nkfANhu$(xmxLC#e(FLRs(BC!nIryyLMLntb3sxzDEWRERKNhcodc*^rbDpl69RsJ(%RA#G^uFASZS7K2ZnE1t!%g0DReDkTok*$YxMkLs(zmQFeKWs4ZG8uW#Ww^qgDcMjw78nmJ4eXXA8X[FBy5rzN$ABstB(5GrIZ@johy@%RkluD4Yx5k2XS(EZWY)8QdpjGQ7&Dd[9(pAObSAwj6INNb)RmU^mGvMs9@OpnOxS&F%nI[!mQ25N3LfA%8Bnx)@D0wkd%oQpUF^5dY5v2%HTFfD^JKV)KNOGS0GsBE)w0[SF*izprXiSh^b](#o6RS!uOADTPWssAuBL0X(P9VP!7guz#ebU*P%OXaj7@NSI76r5@zper#^j!hfUfn3Orx)cn(@CP)vU7V7%H[24pP[2sGkf%7Knm!wX^2Nz&XD4dpHk(*1SOGb4esow19eh!QxGkp6uPbtdkpmj7@U[fBD6THVEAYfhyQygQ',
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
            'rule_uuid'=>'aFb7fEed-Da07-CEd6-44aF-b7c9feDe9AC8',
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
            'rule_uuid'=>'A7b685Bf-DdcF-b567-4DA2-B88Cf9E9c1aD',
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
            'rule_uuid'=>'c4f7393B-eC4D-Cd36-A713-9EDE3Cf367CF',
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
            'rule_uuid'=>'F04aA6eD-c3cC-8F3B-4A41-FF9B0F7abB5F',
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
            'rule_uuid'=>'AC72CB90-C5A2-1190-4AE1-3C67Be9bbAF3',
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
            'rule_uuid'=>'1ce50BfE-ADAe-d7B3-DA8d-bCC6FAe141ea',
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
            'rule_uuid'=>'ED68d2be-eEAE-C2CD-F204-E11e2d18cE6D',
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
            'rule_uuid'=>'4b9dDA2D-836a-bDF7-DbbF-7A13Cb1E61Df',
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
            'uuid'=>'9edFf481-bD2c-ccDC-c2c5-4F1dBe325349',
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
            'rule_uuid'=>'B9cADe5c-Fb6C-e8EC-4Bba-9486dB2CF6ed',
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
            'uuid'=>'AaBaCeEF-4E06-1894-43E6-3416294FC79b',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $oracleRule -> describeTbCmp($arr);
        $this->do_assert($res);
    }

    public function testDeleteTbCmp()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids'=>'4268e5F8-2E28-edD5-eD15-62f2f6C6B8c5',
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
            'tb_cmp_uuids'=>'B6b3dE0d-4efC-1edD-32f3-AFBfF86EF283',
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
            'tb_cmp_uuids'=>'5C96fB77-e45c-1c68-A8cE-Cf9EE1CF299A',
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
            'tb_cmp_uuids'=>'DEeaB42c-Ea2F-7dB9-CdC1-4dccE7C987EF',
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
            'tb_cmp_uuids'=>'EceE5f2f-4bF5-Cdd4-1AcF-7A05E1C1aE9e',
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
            'tb_cmp_uuids'=>'D568ef5A-F366-BaFE-3b8d-e50c2B67f9Bc',
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
            'time_list'=>'167D952f-f606-Db6D-F7bC-d688ef4F4FAD',
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
            'uuid'=>'0dede2DF-9c7A-eCee-E7B5-bCcD3Fc4DeEC',
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
            'uuid'=>'a6e6CdfD-7efd-68fB-21d9-D2efAA40cbA9',
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
            'uuid'=>'b327E06f-A0c2-FbcF-F3C3-b48C8fafA4f2',
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
            'uuids'=>'93F983fC-bf03-cDFF-AE2c-EB1992cD76bd',
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
            'uuid'=>'f9649e49-Ef4A-D2Bd-C617-a9eD48CcE5D4',
        );
        
        
        $res = $oracleRule -> listObjCmpResultTimeList($arr);
        $this->do_assert($res);
    }

    public function testDescribeObjCmpResult()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'EDa5D1d1-FBbD-95D8-5e35-dB3ad9c6BFE1',
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
            'uuid'=>'7C0ef728-8Fb4-bF7a-FDf6-DDFe6e6fcd47',
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
            'obj_fix_uuid'=>'150F9ca5-BA42-7A7f-413b-1C9aa4db3cB3',
        );
        
        
        $res = $oracleRule -> createObjFix($arr);
        $this->do_assert($res);
    }

    public function testDescribeObjFix()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'1e6DFEFe-7A3A-C895-65C7-1b3762Bb9F53',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $oracleRule -> describeObjFix($arr);
        $this->do_assert($res);
    }

    public function testDeleteObjFix()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids'=>'4Ccb6A9C-ff8f-30eb-328A-742D6aDe745b',
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
            'uuid'=>'C82e47A1-FBDd-0C8e-4dd0-7db5dE4e4AA4',
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
            'rule_uuid'=>'834Ccf76-f1CA-97fB-CDc6-2D9Ef3D23A6C',
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
            'uuids'=>'e78ffeFd-e91A-edaA-1Cc8-67bFDce1cEd1',
            'force'=>false,
        );
        
        
        $res = $oracleRule -> deleteBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testDescribeBkTakeoverResult()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'bk_takeover_uuid'=>'53F49BD4-96FC-65f3-29f6-Deff57F6BCeF',
        );
        
        
        $res = $oracleRule -> describeBkTakeoverResult($arr);
        $this->do_assert($res);
    }

    public function testStopBkTakeover()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'bk_takeover_uuids'=>'2c1CA5e9-cBa1-6301-679C-b0fA4144cB48',
            'operate'=>'',
        );
        
        
        $res = $oracleRule -> stopBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testRestartBkTakeover()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'bk_takeover_uuids'=>'1D2FeCec-D7E4-7fAA-f7Ec-Af7ECCD62F97',
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
            'rule_uuid'=>'E4d5DDd8-B136-8fc1-DdcD-cb8c74C8D7FA',
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
            'uuids'=>'EcAA9E9E-F3c6-5AcC-29bF-Ae7AbBAe1adA',
        );
        
        
        $res = $oracleRule -> listReverseStatus($arr);
        $this->do_assert($res);
    }

    public function testStopReverse()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'26F6ABbb-88c8-1996-ddDD-6d0Ad4dd1d4D',
        );
        
        
        $res = $oracleRule -> stopReverse($arr);
        $this->do_assert($res);
    }

    public function testRestartReverse()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'11147819-6FDb-01D4-e6B7-Ab68dAddBBED',
        );
        
        
        $res = $oracleRule -> restartReverse($arr);
        $this->do_assert($res);
    }

    public function testDescribeSingleReverse()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'9FdeB57e-f19c-d8B5-C97d-dff2dB4cBF93',
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
            'uuids'=>'1D93dd81-3Fd5-f915-9db1-6A0BfCd1865A',
        );
        
        
        $res = $oracleRule -> syncRuleCommonOperate($arr);
        $this->do_assert($res);
    }

    public function testListSyncRulesGeneralStatus()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids'=>array(
            '0'=>'Ca8Ace54-ffA3-e4F5-Bdf8-e0cbbe98beb3',
            '1'=>'846CDba5-DDbe-6Cbd-Fb2e-b1bdF533BBCA',),
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
            'date_start'=>'2012-02-19',
            'rule_uuid'=>'F530FB0E-0208-9071-66D3-E595AE7D5A4C',
            'search_content'=>'test',
            'date_end'=>'1982-04-21',
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
            'row_uuid'=>'fEbAe17E-0CDA-eA21-53Fb-fd2647a42d1C',
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
            'row_uuid'=>'C9Eec54c-DC43-Ab2A-BdA8-C0fbc5689a4f',
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
            'rule_uuid'=>'E41c0c93-D2F1-AcCF-BCd3-21Bc7d25b9Bc',
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
            'rule_uuid'=>'98eB48eA-6f74-731D-ff9E-69a1b7c517EE',
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
            'rule_uuid'=>'d76dcC99-73e8-9f8f-79e8-0D62F4A19cB6',
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
            'rule_uuid'=>'7Abf21CC-fe42-26AA-50C8-5b2Cc1850F42',
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
            'rule_uuid'=>'d0BDc98e-e6F9-f81A-94c2-92DCc099CCD9',
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
            'rule_uuid'=>'3de0Db81-98Ad-E191-baBf-ecf9EB47c64b',
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
            'rule_uuid'=>'7314fDBD-84B0-D652-EffE-3Fb6DfdE9fFb',
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
            'rule_uuid'=>'8F924cdA-bb81-c415-6ebB-B5dECBB2e5AF',
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
            'db_uuid'=>'b4c93D91-4c0f-7E64-71Da-8ab02C0E5147',
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
            'db_uuid'=>'15344F6E-CB8a-2644-5B94-9BeAf2fB6FAF',
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
            'rule_uuid'=>'A57ceDBC-13Bd-d4c9-ca1d-Dc7B91Ec97D5',
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
            'rule_uuid'=>'3dC6D65C-70b1-Bb85-bFe7-A72901238cF1',
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