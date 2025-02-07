<?php
namespace i2up\Test\v20250123\active;

use i2up\active\v20250123\OracleRule;
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
            'key'=>'RodriguezDavisWalker',
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
            'kafka_time_out'=>'I&$#BRuuBPxuuS@qgS9SS$g7Z*Y0mfiKMOtpyGWyfVwlno&e8v)avq7[ddVyfN%OwqUGtLAR#58DoF*KWBjtk5u]shJVi3vKL@HfUeYTi3eY2Ez&KH#RlnaRQP1JQ#L)&ET3y&0iiVvhR*qC@7mo@eSiE0H!&q6x$T!lJN0Z7v(uWJ$rhHRO[vn3wu6)RN4UqTtC(Rh76^EPr%*zLOFQ54bUKg5oHr5vIb#Q#*VR3!5)KOjpFOZNQ1rNh1291hNNrT[&zb[gsVg%IN4xJjRt3AIOJhAKxYwnhm4@KJQW^u$GfX$]K2Bm5w1wrP5U5PkTCGLDaNCCebMI!0rkNdbvyAdyFCBxLrHPtWLAybIm)p3fP#1@7i3X#f3gTUJW!Yi*2LrIX[EB]yOnM4)s@B^ci9bd$HOdFupEE)to^i7HquMH(XvjOLHd5#GG94wksEd%ux@k^eqS4qU(z%3Leqs#mnR7dHAMUm)M^NH*kGMgKNU^%jdb&3WXl[cR6Pz4G[U*yjwBth7##KEaS@xi(JSHyKqcYq^*d4yqp[Z@VVBZ6K#ScGiHBAiGLgylO5vujHgb6bBV6vRFCcK5lUvMBR(xI1EKXg@u%m(8AT&O5vh05*@NQ)XyUsa2f[J9PiE@[VdGmvQ^)x4%@B%DV[@Nz5c9c)qqsBHPMYuHMAAxfbmf#rB9bJ(NxZFr@Pon(Soovnhja7ZNnkZ4VXcNBIuwSErc!Qr$znHYA0W2mD5)taKpt^ou#rtN7%R8hOzQZ(kC%zYRzvetL4Jr@cU1&pU951c9SXE0Y&RXq^j8si(&[RhNjFaLD4deybh3ii[2fceBxLhGllbbHMSZVJd%PjcUE0nC($JAX]y3]jEHh5IdjhkY8CmFo7Hd*Zw9dyLF!I#JgAFf*oUw9%Q1V2DPD8hrZD2C%6TD6h#61u@#Beh96I]%k!fLSthP538HmJjQ6YJIwwkV[^*vN0zgJmK80^x6L%594WAZo!24CRmhCZVTTz[Ya6^DXg]nMk899tm]6sYr[]XXsG[8U#4!(#UEKY!(J^7tw6zzvdbIFNURqhOexMf*%WCClH@8XXD(J71sYv(Kf4TsH5FBcmmi1UP8)R%$y!^z8*RJ%c)[cYzMwlQ6!ZZ@^OdTplJ*gh1#Q^mYguhlXMyG4J3GWlTvhjEVxjlQz![zsA)cghd*%3ILcgAz[wm4HxvIjnzl^[^BqCyDZ4tgcuyLnOYmu^jF@ZrhAxAcMWoG$EjoO#9buPe)c)YroncGHnLqqEw]]m#[4sh0vznFMKV@Drr%DVC)N5S8Hz2MY)u[orfG)odFd^FFDC7*WN*l*&zl52NAqt8$%Uwp7fsll[ttn#J65r2LDF4do$IoAoO**6T]BP6uS3klhqCXuVJ(JZePh36Hcbg(KmwWsQ0Wz4maorhZT5F)eQBJRMR11c5MFq)Pf29e05ep^sJuhuJ&lZJZtGc#O0cH9KVY(r(PEB4veht5$FPVL2pW!9#I&TQYtP#tI%mPu*G[J8YwfzsH!d*1lFIV5PN!%w@zsH60jWIBwOrRzgKN5U!x(FP(2B8MJAAwVkhGE#RChl%1nTMp7lgMBe0iCCHZ5cBy6OMt4DU0ymEze7yopuS)1%u(upH*QnFoYNPPzdDKMWQxsbz1bNBtW&jP1zBr2T0eIVCEmFKK6*fO82k^wVd*BM96fpoUrRH9Ads0kn*5@y1MenG#4NfSKybu@Z%tQ!g7CAGPZY1%bY4MF1)0kBPrwM9FCohcf%!8$P&8AMtFHCXi8KL(bNXPKJoftudqHFomrCo6G&sgkEAwVmGLtD@&5c7D65!KiW)SG7iqcA6AXtN)QuRcilN1&UWnomLD3oxx)45oBLYe7IRbX^DaCJtK3$8!vz0ItzhZli#$CJW#QdDzZhKrYQgmbQ&@hJrXL2hLY3J)3^zrGbQceb9w(qo32M$0)2V2Kj#RvJWHQuCc3p)LjW8iM1v12UALH%U!w!1Nl#o7x#K06)h&M#m72UL&Q^[LaFAqJ[jT2Sqagaj8yZikffGK#NKIowWsj&^l$5vdQ$dAKI9P()Ut1@JPjQ58ZI%hpU86O!iA!$0Qm%15uy7p3&0Bi2%QKXbI1@(YYkW7(S]kczZM6BI02URA*M*CpmZXrhnve(x[MjXGKBxK6glNhAiReQFIiIVlI&p@YmD*I@TDg)[L@reoHM@ztynep]lI7n&D6n739)dV&mNxS3OggW9L@KLLb$$F@)^]iv6F0RNNl4N@OIKKNK0B$lT1GPjqPObQ9L(U^%N7L#^[4a%Ch6zWGfP8mE#OzMd@qO4d36J00DcGL8nA[J@%y$&*8tQLWEa^Sq!TjZR^]Do^ocf$kjyvxLeQG^&TSmgmI6xl*@5wu*HsQB0LXiiTdEpVF)j)l3F()ROmW#X^rPLYuLjqjuzvrct4N7X#Fr[Y*N3HDgUwM12k#8bqjy%$qI*6XlYvAW6q)$MbWHmlMt3phU0d8oMoUUZ5lzwZjOgdMl@buIl^rOUt9oqZ33XyF21Z!o!gsWu$1J!GOYJqfkwr6d&Po&66#XMMPN)q@bINB6alHd(6^R][PLMxJmVtKXKNok7RCNqYL%]SEzAWR(pw%T)QCeox$m8xH@UxMOdS3Z1d1eWx*yXeaz!dRHVMNMO*gWd%@l9EpCp@d2xLy$0hjPB^skR[p[[u]OgXKA#CNNtpDOQwr7WJp[hjkmL$k#jLF1RCMRbN#3nDgBLToLiD[9ZOX$f6hoMKsr6%w*CeK0o&H1@LmrXxKsgPtlOIW&kfq(0KJPfmVnMhE*i3Mo77Ki2oIEgP%pCl6w5[l8M$T8o3XR($eei0kq%(SbO(TdwFmdJVT*v3k4QHcZYj82kbigr*[JK$z6cM)t]!HuiA0yIrR*YX!D*P$IKEoCAVmj9]Rn0R^5n&6XGQMxIFYi%%N2FShAY5EeYnB$(I6)Q7T@Z405&3#L&bAKIWE#jNoW*3*E$F]oMTqVW@ZhZlxQL9EyZp4PHTQCC#AYejOy#R3Y(hn(#0(rh3c@2nzk1a3Tj3sIf85jK3aCSR^Sfeq@fmWhDs2oMHQhi!$Xce6IcAMBH0p$Lq(IiQNj)%^XDHinpyoNZpGJGqO$Lgc8FdBM#VnBfF28x0](S@jZ2fP)hj4SL[ul^b3uwvRw(PS%kPbIqN&g&TvFtpknMbN)M(2[OS%mRKJi@c&1J6puUsxjK5hdzw$c8ScBDnGQrCNwATPGr#8@0USt17^kMVdgxNy9PQ9MK]vsR%sXOxSB7%^bCt!i&A1!p5iBV5endM06]w0oKuAR*98IQ8jf@FvHUIGL]p[#GKLopQSJ6!zK46%TD5NPA8n7EhtOYPO2*gmI*cp]$0o48JjNhE@kj^wNyvTn(Hysv]@XvDut0VvPJPcR0zp&#Ra%O8@R(U6)(Omjp1x8kuCrh9WwG(ONv^Bo4l^M!dgOANKs4WDeI)ML[eZY&rx$TVF&h[x0gfNhZ![pWBpD17#2mExxFtMy1UVxm2oIxst2D[A8mx%)uXu!Ew0dvsZfZR7^4k@r%pBW0YOGHfe1TeP1MEOc6YZIn#QnNU9pIn2sZ@YlxCv21RlrWPJG0g(kp95nQgzH#TvwJs$0#Tuup)5VSc3j^kzK99L$&[B((&oQ7rb$wC*V%!itmHuZcersZsbOOEKTXzt7h5kxlro&nkp%GX7tzFCmB(2oB4bx0KB9izE2Rof4n4R@4I6#EFtf^G!rbqYnoHA)PDlyq5A9%juqMrSxoS*ceJwRu[nxH^@dg%hVHEp^XN70j%ph1J@[1v^Ke$!Tnx[e8YD3e&]5Jnz[BUQ1#!$bOWRQAq3Lwy6RFdYsDd*G5gwfqbloK77eH0NgxyVI6YnyDaguc[7M)#7RUkUQyooNy*h$A3NwAsgn5GyPuVYos1lCjMy)x(0x6&5Vj%L*@nY8bnANTQk9S(i1V[!jRiOAEU^9KSDFDp[47SlQugGJj%!#tqyS7HIectW)03i09#UAFJsiH@TYVSVu%C$5CBXH8W^u!Qq2o6BkSCPMr&%gJ44z)Rsuo%)@SOVYf@Z2myi3J*$C@]eh7Qv@(ALNB*kpoQJZ8ZtlKQxEKjs#FNTU7%E5QnS$MmD[D6uX[6mSc&zvMQDY(8AbN7Z9dtvA$9t*dr(EfI!SvNz9XO!LUxRincXZSC$M53OTJi8ociPIeMWcpI[jvG9^n$%MKlEl$yUL!(pUlZLzRWflGwBBZx*i88zBVufs(q@77QlP@nym[gf#]xGM[@wX41(tjN9#k*ez^@UX[Viuo[II!r)8zvM!LW#Dz6HI&73jZU7x#&C7Y[mrXATz3trBjDuDz&$^Rvwv%Q^2xMkTHZl*gV48uX*7N2F2y0XVDdnCfbI^^!%*QLuAT3t!q]LaMg5h#m00@v7x&@Z4@ICEnPWE$tGN8cBZBfFilnZDpbz9]6nCPQK78Ru^[Kdf$s(%TOVyTZ4p05MFRcZ4sC*UfAb1!K6q(xe9*)7jfAgJe)Uyzu3@z%AjL7hE9A6XZppdig4Nmn)%x))U(@AHK&iUF%zW2h@*[JA!rXe9epyxp^9ZbHKbz$dkUulyZ$lQ@7kU*uzkALR!(iSnE6V^C(r*4N*rBtZDh]#@Z5mFOndATF@4VD1jDxNx20ukgm9RE6MgDCH3NkVyrlOu)dF6pztS&6[$uTXTo7^r[VDr0%8^^3obwf1y*&dZBo]GGi7l3BGeuiAnCe]zrnI3R))goZ4qrBwt)@*@Y61e[3301fBFFWNpFDqX(lZzuTVPkirkHSC(&w[o0TdfQ%uCMA#&0hxom1PoPf@XNME1zNCw2odj0sU@yQ%zwqEbjGz]Wep1u&p@eiM&[2NcEN!#hiI4fi)&lORsd6f6HuN4gAmDUxKu01Kud@soCxM)&P@C8aR7pJ!vb6i$WtDw3CpKR#JxotbP)GBC*@Gl)&0Ui$kkXCA73Mip4lGcXbkd%JmO^w$VtMuiwgeFYhTJh&1VyUxVB7o*LciYdZns1qeFRDhwK$H@quBWFCuzqB!m@3demehlo)J#dU10g8c!9*p*6G6%(ZhL4Swo3iZbUdHY1@GeSzyVQ7L^hC%^j@iq5fgWdKNTphSv&QO9BXdzAcAh%0n[I[jhGx)3jdPfaTz0Y4)9qlFoWNLH5d]I7kMb0paw7PSJn9Hzej$bBjqKQ(ca*qMNiU5DdoCYMz2ON$vlmUCyEpOy5LlGkkEc&i1*3*OIn(#Jgm45%eloU!J[9ApsOVxjWnV1N8nkS80ppF2140JvR*1xqJ$Gh%)MQ]L9]tbC9(MuVgcd@n1#IN)Oa7A(KMQPQscM0]EMRweU2m7DGVoy!09bG]^)A)48)Q6@z#%l!mN]I@nzm)(moHVYDq%sBttcjT!ut2eOvbCAOGPG(SrD#4[PvwP&&msPSQuijkx#)kAeesJfR!sVEf#1V)3hvnk]yp3lJDZd@lYjR!YPOfLrVLe85AwaV$yem(f#We$C&@vc$Q8DP^jodHfR*y)&Zc$@P%K1Z)1mnB*dHe]bnxRtCUuelCsyCgJE3*GlM1o7A6MV[)KsB@45S@lhT@1ZQyfAKqQr16kH7vM@nRr31qy^Dut7AE7g%902Q$1E]iqYRFzhXbxw%tucqEk9[GukAn%)5%tyY@jtPHBgjE[#R0mHCZPS!J2z669i*tCZ]o#WKUyn&8h9PTMAmu6VPot0n%HYh^E!46bqH]JgJCrTc3&tUTmjC*VQMxEdKJw[CAb0lm*3@]%QecwF6#yaNE^hi@P6k(7kYJcwQf8ZkMrSNGghjSr%ts]l#2dOt6VhuMX2X)QbXWwkmwb9DL&ysIr9Z9XpJRK!f!pl2FI$uTQuudFNqFc7YLv@6lINmU)w[cLD(sGs3oTzj3wu*1qEvUtWS1G[DeKKbKxHV1&PpUwWXcQc44]gc^pV(w)iHs&PhSZiNknxM8hZ1qY]b5D&FOyY@lpgIVsCT533Rx$SOCZaX@b%Y7nF08d6KwXZw#J12zDj!D&6gX0Y30*QHDexLG9UB*7JRh!mHLlN3l1Bj0*AoJYg@VMbEdGlnXIkstKpM)KChOHmaFdXT7@L*&#Jk2dY0xcgGcG@xE5BVSjtFjE@3tCT63^@cF#JBMehRf2YzXd(trp5ApljNI$u1i*Tv#[Bb($^SLMNNZ&]YprT]D$C9oL]szf7U)v!(CyvJU4ZgrEho67FZcXm^^ToCx*2MylswCR%Z)B%gCiv0wgjpNaI^r(z$k]BjA5[St6D%Am@50wjH1Y35c9$JIncWYs*u0DY0YbpztU&LyY$#%MpzCnU0I7U$cIE9[&$2b&x#wFRJtvBMWS@^)JcnPOmYbh!BO1YzXBiC8JSoPy!NxoIP9t5ZS0r(b]2tSb3^fEXX@XlFr6GwqI8m%$7a]lb]px(WOHpj#mVSVBZ*Fv5Rj9JkTPcE!KBfPz[^vo1NWP%MeP!$iF^Q^yRMWI7K9Vf(wlNXK38i&oMOHRSp^zK0Pt^$dIONoMG4*oM(iidfeHsGf!x16Mz2j3pWvb)J1tq@a2k[cy)0X(0(Z5VkHZIjGVnzjN8E1[TRu*u1qE$IRD@$GE6UgEnvC#nWb8tkoDgLxHnqkvv*pnhCH#1s5AJ#tw3zR)z3uqOUdf*5nAehIedxyU3IYU)Dpqp7#FA@5npJ[Q!M&9vYu*5TdsP8vsDY(P4sQiQQobziSKnsi1y84ru2wieT5D5Y[c(Ua1cyidFNKKqiEA[yq1EYYR%#JsYzP&(9wx2DW(N[JUKjr&&XXwiOXVqN@C1M$)BNyLT!Ebf8RKMIW&L6Yd4fYbDCqoWF$Hnh&hSDTP$q2EcHUFTEbM82Z7uZHhU(11pz*ccUKJBogy8R#Piw]rX2(7eUrtvRTljZRbYhhycpjNOMzN)8dDz!XHsEqEXMjwndqIUt8VpQ5H9F5JAv10uyI*2@kZFDUUsu!7#oXd@c(*uNv%x9r$0IDRW21*mU@mV&14PPjRgXn*M$f73Nocubq0bGkQNC4@5Ce2V88)JEFN)Mj5eBY$dswB#kUO86nNkhPch2xoKB61Uy%&TumdyD#5Se5#1^ePt$6T#^KMkx6*D^6yVuDk^p00Svl$I4[io01xTAP3wqARMYkL6yN1dd%M%f8NX(B%(^SOtJsSx4vyK80H4lE!lc1BZFOx0m&QU][d%qb&1gWyrzi^[(u1odVGP%6cIJ@xJXmC^InFaiK88UD7PY65ftwQo@xXvyjjIf2I*[xRmZheC!2x0CE5^NN5Cud0LmHEb7dgWBQC91$2Pw39EFwz49YKS[DVRu1v^U&uFJTZYIpQ5WE2sZae&EoQ[WDcty9lz8$qZ&TUFkm*S5epmgZ30^OXrrlRnrGmlA(IxEph5V7)4n)3dEc&g[r#Q@3hqnUv5NdF[TdYe4nT#n%8qBxRRC&EiwMwa%)(qKt!tG2#9Hhf8KlyFohL1s!^1bWC0*2glZVUhv(*f$#Q)2sVlloj^]ftnLLjX3iA&8^qHdgBQHK07E8Uc*h9#LP2HE0AM6nGLFycYc2SQEI^^cR^Q4)ThGi9[fZ#vt6gAFx##zxqUr^)75DuZr7LlY0#G4ZSMHk9g!ryy[5S$[OjMiEQZZkC@T$WmkXEP(pmYo)e$LqxC8V@S)SzKgp%#!rvPGf55Y7S$pid90SZG^0NdjHqqR9HSkdI35nkHvw(t8tml7!f5V7by0$[pevlk*(L(tG9RW8FM*VZvdgV2MKfkV!&#&%wGJGyNzCsGV@WrC^(Olyf)A@TMCCMroUejvuO4FkkXGQ8VL6@QlTOj2!xObXrcsnrU%J^)kakTpxSOFRrrpFn#7ajn1mwdIcm9zi61UqS(%6&5^*z!MtADbJ%[1Y)Vx3C1AGDOU)tXFfnqqdJAdDGN@G5x296fQ#5d0%qJ#683qzR27@*[1@Sj7Ld%OKB8990$K!Zf05OlKyH67VFvC4KLcNsgv31Z11C$2^QuA7DFPJ$xSeG20c*yzCOzbOtxqYd8lWeE0Py3xYcLzKih*EQJ!t$$ChpC5E4R4f3KS7NXFOBMrYnsiqfcqTfbMs7vw2@7oC1$#elHtPNdunipmkLHLIiq)oWiGYwFhQgXSXIA^B@9M!&Ol*Kc&6ed5*jVRC&)QMA1pn9Bll1klQ#*Y6&ZBZMO9YD0eBB1XGOx*VJUSguJT0PIpYIgNXPH^n&70YoCEwrkbRqIK5%CUP#zI$h8b)(y%#&VNw)$UC6m[^*$oOM7)wwp!&^w[k1rUo%)xoX$x8suC7L#&NZH)GswjnZqUE0AN5Nkanu0BKLG0NtJ%6ifY(he*9D)HGYBpdTtlKy86FxKtO$iybxjB)HCfWqLi*R3ohHyKalwEA[D@mClGMjLM88Ac%j&9e1ZM]ErZ][*58xDmoMU5wSrSwcrJYsqTPCrp5^(ar!Q%A8OPNDM&7Di%Ox4[^&GdWSxzVR^)iti8i1LXlW&i6DX*KeqhAyBMrkGxXH9t6$bRebR8e!ng&8eFhqs2HwYNr^AZlnniH%P7jkjh3ch^$2&[5NruZM9rA]i@XmO[8v13i^ccuTfx5#F025DYvrT]XBqjp$lI*BKFzN^GLx6n[l$gBtXL)[EA]vzwLK619VFSAgy)ogq37HJ0Hj^*&LRlyTSK@Pjh9T364St4#8Sz*4LVDH3L7@TZz1%VH2xmHqV5@uV$yj83!mxH$05rNStlSnp1ruU$wWjGlmG7NnX@ZAYG)QXPkCphhiV3dd@JUzRGmOniqYo[@j!8WTjOWuPg@x40g&c*yhupME*Uz8tfeJma[%D]MZOA#6g36eHU3Eoj36@ao#i!p0AtgO0a9oCY2Qd7OLKX3i^Lob3m5)WreceHw(oL@A^oMhprbn^wYd4Xp(5U@UTVLXm5!T3ezbAp((Zsc#FJK&tx]Pc7rJX%Y^JTx1LCsEr^VRhzfsi@s6qcsqjkpFisG0bAchkE[C(@vjAb56aP%TK(EqOhc*#Wk*x9nycTzIViQGK2PtgDxYj5k9BhS2^)MLQeybtmKlvRlr8Q8O6Ze#&8v&YtwTZqt#hGmZ0&QX2N%LMi0S2p&U(bDFLer!x@LEvRt7KI2rthf0JEeC0XUs5H58^oZPicjP0dNCSD4mYid]uMNSZNPuFxX9dUeXggAHc#wdUnAJ6yfZ%ol&#dW4FhWqiwc0UE2wIvX@$KOy$UiqpmQ8$!vt9JT%Ls37533)vCdAgIQ0XRL4$E[!RcJ)SK6GeVrUm6Kt$XTpJpc663rD5ET5eEkIBT[q$NqTU&rscu5@Wzv[Q8ZZhw%1L@Y1kF!II9t8fKuh8#]%X8Qu%^NrP(UpnXwuBGbQRdU)Q992[%z#reucwFNFTT[B7x&mk[qv3j%eLQEXxXjtAgvGNPxnN46eD@JvvXxL*5Sr(PIyI$$G#xH)0olxrNgnJah1ze1ZtbAuD(%F6m[eK[6pdhCK9xm*!Zqn@F9eEf%UEuRi$rypG(^TG[9*pT7jXqda2zcASsFpPO!gEYvLh&p&zFQW!WpYFrlt[wo)QJW1PQML[1#3WZi5M1*74!(!nfM91%@pVD$#R[@YRazZfZ*kAGJ7JmDbpSbSu*zUIoIFEHm(f!66O!PX1q*)XaKhmxPfns^Yb%VoVvAGDGjE5iK2bD3G1C5%At2[3hHlr[pjZAQ9whYOcukwzw7E3C6Lk9D&Jg4^mqaZ7S&dux[qh1c0jqpEVPGSuG)2@H#skvGT3rGX1K1g6bUURY[NNSbF!wQDkFUVdzyHQ2FEN[DWC5GWp%)LrmKxZc^ICt5p#)N(GhJPkaWVG5G(BvXwj6hPclKNovFDHDmH2Kge[@f!S8e%#S3Q9Yl5Jfo05@^hsknr4wmwMYnK$JP*J[g$Rm*rr]K*9g3w&Nbappcg7@*fJr0MKtxuHc[QD^evfghIJGdjlEXyU^$SE&VRyzmUphLXeyCZJ$myHu#JUC)(AVemGpL3HvLlF)fs$Zr)L)GOwlQ%8JzYsThs($a3jaNz4!jLdTTSH44BWgeVNuch%Owqv$HzPUGCeFewYyHvJ3Fzr(uR0vluD^zNoeL]@uT#)R&ZRiE)y61UHbi9^yUR46yu)1kmyVx@rwVWVsZYWf!zAD1pT$2a2v4YFNR^pv^NBIYx4lWY*!R!wRUtBEm4SndTH&6WlqwEcHOCh9tMQx3JJ2X(L*Rcto3m$YCee3r8VU40KMP@&3K@jLHiWZno)#hYc0QL&yFmhquqF^bwY#EL[tGQjR7]y#Qmr)G9wElTzOeu4imZ0#pOvPC7ks!@EFh6n#x(ffZ$xYzyR[mxmKBScwZZ7rodDzV(u6^A6TScLM8cS$rnG3jT*SCuAmA!4p%m9G@)GM@VIdX%3]m#R!IP@1w*B1G1BN%ehuZ[[DZ5&Q^ijjMe4F!ivOv[f(N0r5MhUI#b[7ZD%9Zg8vZKVia5OEB56dE5kPy7gx^0zjR^v]d2vDSKM$jP6#dUoueHiNMIc$xlJ74Vo!mr6lE4QgEVti]z[T@303#rNBcEwd!Dzyni@X%OOSTdCx7P6z^Nc#ib1Cf*RH#V%GplTHPV3[srU[39QssK!g6ugsvUOjXl(4bk5O4EF&bo(tFUTHC39c*fB9OJFwpyse1k&PST#@X[#gEQtYO]I[@hKzEf&zT3OvnjQdcOiOj#vUUYCRqD%FW9gRA693kePXAxL@&Xr7pKLS2%HaelEI%g0K0IEPVHKzc$g6eQjAR%OuEVXE1pDGVmI%R!IW2boQ7BiqzSD1YJfI50V15ubikjE6Y5yrY[Ye3U5GBtKx15STS%Vp9G^E%47EQef9$FA2a2@D$tiVdyncoVPUCM2(h8lovc$MGwLwD^[o&trY%RQ^E0(ZJfVhE*l%OrVbWiwN*3Cz5ZECyVc98%MM0GpxkQq6FT%KwcjP[*^FJ!a5ymBmONejV&B7p6qeCtEeKX!Ty3qB!ZN@p#NU8^23@9WJT)(lVi&YFhO#dUN#c%204$R(BDlCSq@ij8xVkDI]!3y^[UCNSsEROzCYtQEDd(Krx%sPw85tsfpGLb3*zQbnvogNQM!24UkCC$Bx6Zj!jNLDCdr#KG^]LYsuNMlga3qJqV%DHt2quXKJA^Zsi)FrTOR6(#P9#UUy7LfgH4wnEJ))oen]vS*Rh8yH$#HEv5wqPQR6p1Ov4l2fLt)^Efv3SuiEfzBS#vv27xPSKYgbk9lrRmW2@JYuH2#nhaXv4PJn)FAgYCoLrT4hkuUVJTWNj6)GVRhx27Mn]jD1L2[)aL$9GX6nW2mL)3%JNkVJ%Uf[WLBYk^cXh!^2*mVJLeU]qT%PswdvSZvJ@Wf^a(klYwVn020njv@Q4QRPC)6u71#R$8dO3zVpao8hB^t3O%@WlETT(xH6y6SvDzEtyp*q*JYU!gByzS)Cm6#(JR%9AJ!xxrFh!EW&L3z9g@^m@*WP#)%EdF@I)rdgDw8vtgrs76TUN0C6FmCPcR0U*#T^[@h7$#Pjrl2H#fHWThI5#R*kJnX7cviujBtTI%%I5bg6)!TyAMBGskdKhhC*C7M^VLxmUQsoZOq8NF3je$UlL032@26iekM9J9KA@9Rb^vbU*n81aM9*Djq4sj$cxkZ4x[RtiPJ%etknoCJYbPzT&hNVhImbpg4XHrK2)f%8st@PxAeQ3YbKh(vDxkU$oGcYEN!z6]ml*Fe8O[k!r8QZ&HL4dPqkWwGDB2179jX!FDcLP^nd7wFWWdj0V5n2%t978I$t]&4EN@dDld(FsN1xDL4m!y59wvk9IAc%OQexCqrz)J5mfED(BdMxds[1DMk1RlGvKVNJEuu1fJYryW3xcsacz)9UG6EwL#kwXmPs^bPUjqPvcNTB@Y8uu$vEr&*71mJv2&ugQmnZr4*eWVY^OT%!gXVw$#2EvcZw8kN3KzcA2gicHssN%mcwVQDLFdzU*8dtd1YCNwYWlpoMeP1L8@(ATYm59E#tzG7*f2UNq564XHg9isnOM5vX1KQVu^!FHypn]ZWu$E4IfaBnhqXZeLE4%3^GCvPmqK([3X$*hk(tF7w7v1YwN)#7cPeZJFu$n^5IJw*YBf[ApD)H#]iLJ2aG#6xKX0aQ@DVst0ytxutPXnE(AzVJv(qqx89PY',
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
            'rule_uuid'=>'0EFbb8Fb-Dfd2-3c8c-cACa-Fee27b73aC2F',
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
            'rule_uuid'=>'DEc375d8-d376-2B05-DC1e-23a045AEFFFB',
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
            'rule_uuid'=>'BC7f917C-FD11-35b6-515b-Dbfd8dd418ca',
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
            'rule_uuid'=>'ac5F2Ccb-f9b8-B7B2-B5Ed-89234be1eaC3',
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
            'rule_uuid'=>'bCADFcbC-A88f-53FF-143a-96Eb4B976ce4',
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
            'rule_uuid'=>'3FFD4cCC-5f15-41fc-AB1C-dEb09eeCC24e',
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
            'rule_uuid'=>'63dA5E8b-76db-71A2-8445-EdDCc6759C6E',
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
            'rule_uuid'=>'daC3A30C-E8F8-F7ea-9DAf-B4C1BCC44ed0',
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
            'uuid'=>'8bDAbCe1-0cff-2cb6-ECE5-B9c0782F9Ccf',
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
            'rule_uuid'=>'4f8cC9BB-c2F6-cEd8-59cC-43B2228Ae718',
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
            'uuid'=>'eFf1c2Be-a172-2dD2-4BA5-BC6b9ae2eBf1',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $oracleRule -> describeTbCmp($arr);
        $this->do_assert($res);
    }

    public function testDeleteTbCmp()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids'=>'19Bd7F9f-6Bbf-7A0B-8De0-E3c3EB188Ccf',
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
            'uuids'=>'ED31AD38-9B9b-3bEA-21DE-9cAf6d12daDe',
        );
        
        
        $res = $oracleRule -> listTbCmpStatus($arr);
        $this->do_assert($res);
    }

    public function testStopTbCmp()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'tb_cmp_uuids'=>'6e0B4eAd-EBbe-dFFA-9Fb6-A69De1aE7cbE',
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
            'tb_cmp_uuids'=>'F8c3FF55-8EDB-818f-1CAC-167fd5B9e76E',
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
            'tb_cmp_uuids'=>'7f5A4d30-CbeD-2E2C-7f5f-9EA86fd8Fc92',
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
            'tb_cmp_uuids'=>'4d66f856-7867-c2AA-FEFF-AA3E44792601',
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
            'tb_cmp_uuids'=>'19ca12F4-dFaB-BFe9-cceD-B869Ae65FFCF',
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
            'time_list'=>'B97ED32C-68A3-012B-cDBE-4f320b69Ae3B',
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
            'uuid'=>'3AFBe9E3-Ba6A-47f7-4CFC-D496BDBAe6B1',
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
            'uuid'=>'f5DADb51-C3A5-cb2F-24c7-eb36f9cFeD56',
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
            'uuid'=>'efEAD8Dc-f317-54FB-Ed42-48CF6BF768AC',
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
            'uuids'=>'a8a69fFE-cd79-CfCA-1C5b-C8f7E725cb9C',
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
            'uuid'=>'7611ACBd-833C-31f7-bB7b-D27DD8bF6F1B',
        );
        
        
        $res = $oracleRule -> listObjCmpResultTimeList($arr);
        $this->do_assert($res);
    }

    public function testDescribeObjCmpResult()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'4f65BC53-d6f5-eD33-EA7c-EbE3cD615cB8',
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
            'uuid'=>'A21b7f83-cE59-DC2D-D409-f97e9Fd3cD32',
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
            'obj_fix_uuid'=>'67e3a0DD-c8d7-F1E2-E8d8-dBEd8B2EB4bE',
        );
        
        
        $res = $oracleRule -> createObjFix($arr);
        $this->do_assert($res);
    }

    public function testDescribeObjFix()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'F58eD8c6-8d5a-7deD-DEAE-beE77BF155B3',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $oracleRule -> describeObjFix($arr);
        $this->do_assert($res);
    }

    public function testDeleteObjFix()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids'=>'adf1c57d-755A-1CcD-97AC-7Ab7deE82Dd6',
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
            'uuid'=>'D0eFA9D2-fEBc-ACaE-8141-fadCF97a7CD1',
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
            'rule_uuid'=>'560B434E-54B2-a4fD-c12a-CEEbA4D7E5E8',
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
            'uuids'=>'c4d777Ea-b5C9-f3Ab-7AEF-B9495cd8AdeA',
            'force'=>false,
        );
        
        
        $res = $oracleRule -> deleteBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testDescribeBkTakeoverResult()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'bk_takeover_uuid'=>'Fc7bCCEd-126B-E9Cf-F685-e781A488Ebf0',
        );
        
        
        $res = $oracleRule -> describeBkTakeoverResult($arr);
        $this->do_assert($res);
    }

    public function testStopBkTakeover()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'bk_takeover_uuids'=>'5aAD6A94-aed2-4d62-Bf3D-deBf0CD762ae',
            'operate'=>'',
        );
        
        
        $res = $oracleRule -> stopBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testRestartBkTakeover()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'bk_takeover_uuids'=>'A6DCD93f-36d5-5CbD-DA5F-2be9fd9A0ce2',
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
            'rule_uuid'=>'3FBFB31c-dCD4-3f3d-B49D-F2a314eDAb8c',
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
            'uuids'=>'CC2bE7bB-DF42-e67c-5CEE-fA5E6991dE4f',
        );
        
        
        $res = $oracleRule -> listReverseStatus($arr);
        $this->do_assert($res);
    }

    public function testStopReverse()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'Bd1a1dDa-EcaA-10CC-38C1-BD936fb6CFb9',
        );
        
        
        $res = $oracleRule -> stopReverse($arr);
        $this->do_assert($res);
    }

    public function testRestartReverse()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'Fc337dbA-D75e-8ffA-74FF-cc46C067CEb9',
        );
        
        
        $res = $oracleRule -> restartReverse($arr);
        $this->do_assert($res);
    }

    public function testDescribeSingleReverse()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'DcF6d33C-8D4f-AE5F-4CEd-bbeE81e0ccA0',
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
            'uuids'=>'182c9ded-54Bc-d6Ee-D8D0-3c36CfEC6f80',
        );
        
        
        $res = $oracleRule -> syncRuleCommonOperate($arr);
        $this->do_assert($res);
    }

    public function testListSyncRulesGeneralStatus()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids'=>array(
            '0'=>'DB457e5D-4edD-a48A-dB45-98E4c5Ff4AC9',
            '1'=>'E6Ccc38A-E2B2-A6ba-7eE5-3894134CfBAC',),
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
            'date_start'=>'2014-08-03',
            'rule_uuid'=>'F530FB0E-0208-9071-66D3-E595AE7D5A4C',
            'search_content'=>'test',
            'date_end'=>'2004-04-27',
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
            'row_uuid'=>'e2f9e883-733E-2bc1-fA7d-6A5cbe246ba8',
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
            'row_uuid'=>'5566C875-eCf2-C2Cb-422f-dea7Df6EcBc2',
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
            'rule_uuid'=>'95De47c7-D91B-9eB8-9E87-BdE1bf3C19bf',
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
            'rule_uuid'=>'66ef9dc4-2ebe-cD72-527F-C2BB6a7EBfcF',
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
            'rule_uuid'=>'9de1d21E-a44d-Dc21-45D4-F2b9EdCeA793',
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
            'rule_uuid'=>'F4D68bAc-fdBd-D4dA-C7fD-f3feBEdDFb6e',
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
            'rule_uuid'=>'BEB8Be7A-Cb6e-eFc7-993f-BFFF19eb95Fd',
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
            'rule_uuid'=>'ebde3f8A-8f1D-d8EA-E4E0-92eC248f0235',
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
            'rule_uuid'=>'Ef9e5466-ea8c-1960-F48e-Fb4a4c17Dc31',
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
            'rule_uuid'=>'946f79f9-fbDA-e7A6-4029-eD6fB946E9FE',
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
            'db_uuid'=>'71bDBC3B-8E65-CEe5-eE25-EEbEDBD44Eed',
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
            'db_uuid'=>'43cCbB1b-1EF7-b19E-902f-688fAa60EfB7',
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
            'rule_uuid'=>'6fb1914A-c02B-CCb3-7b47-8fE14AF3c0b9',
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
            'rule_uuid'=>'78e6dA13-6D17-bFb5-961b-Bd7AFEbE64AF',
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