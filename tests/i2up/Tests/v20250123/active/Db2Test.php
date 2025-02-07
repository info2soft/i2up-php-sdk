<?php
namespace i2up\Test\v20250123\active;

use i2up\active\v20250123\Db2;
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
            'kafka_time_out'=>'XuU@fx]1(W3TzSp%hoft9eClpHKL3f6@gkSV%vbYm6F1MQ7&t%[]Z2xUooU]$]EZ9k5olbe5rtZq6iR^7X$VFqphkRNo)&Dp&RzIgWFE2Sxyt2cH&DG5#N0fyN5*OORbd@xZ[9ib3EowZtk8T1JGBkbbxTDyi(l[GIP7ySSIe#ovnF^m[CfOpUilwL#&T8L$j590NkqeZMXt9U6e9KlSxb5iBhd$yenmV8o5cminUo5^8jGtWZsaWU9ja4G5ki^tEG[Nbvck4)1)l9@!z5!@eHE^Uxnb$pd7D378mIuKCMr$%kp%HDCA9Cc#X26tqh^O[SCfq&vaSXMvNL*dr[v%t4Qv#pXoG#PlXSIPLcmJW7ID6$pGenEtwj9^OKGVA)kRQ8h82Ef7]ZVgjD$QyFc5p7s#OP&w7mMSfTAAZ8mP*M^gLT0vmSX8[O@Qye2AB4&3icEanq&DS(4cW7#B4NJGxc[(ZLZ[@1kY$QppZm1LC4@QroU36ebmM*EBOM#r30k1ElY7!^B6mvABnHiZKRDBCD%(dB%DzNB^XaqsQw7]Sr#HmNzCV43TVxq1K*etSKDwO%w)(Qeh0zZmtnwAzAmlAzid8FY)o1Y9plCMvYb)9G)r)O0gB%s#1Hx(lLZM^lINEh4xtGC)pj^A5Egn5$gm5UInq1UN0FekJDYT%aum5k!N1(ya@VDQT&IX^jEriKEHlFTdxezWUqw@RE8^hHOY5m#f3#7ec3$dzR2SxUUoT&!&wqzmbKnjjpU7zz0xgkq3xfkky$c^zEaE^q@O!2QxdfxCZA*%XQg#n#lARK1YOz)o5!EUgIcMIG^[z6FWL)bBlIl3FbR(QT3@Rv3KYZ3cD@U7l*)%r[M$T5B[Fw7tRvyPg)mq0AGtDDDt%1n]0(FPhChNi1N7vFbM[N5BLJNyL2#51g*Y07MbNd23N695Syt]mQU%rc80(IcU1*UrxDI@O]7QHVh#SdOeF3nF!!OHF*8CCb$9B)sOtF)#CO#Bp$5t!mqcht&h!SjOU]!wDx[lIzwcw8O(vI(iGEUWFiNIoret3&Is*f[!)aEVhbcRM9Tx5fwRsLhKDVb1f%$e6q#K0^4LHiOK5KGKwox^k4pdT5LEt(DP0IrBGqLNE(JRmiaqeJCQD0nM(wNCy@S#cQ1vC%Q0]B2!J9X3Lf[UTQZC8&W4oqN#cr933l)tnNe(3qVV(*]o!8PMzzI@@GEW)71POZ6DFzTMrb$1[qIoVvq@U9te8WFR3VwSnqNx^b*hGtLS^fNwcC(1eONb3apP3(vvyLR%yNd(rtvKsiVgs$VkwMLLmY#5N9!XiJi(hZNwN]qDwSSNoNpuR$9Q$6(n[SHXBecg*ClEFpaG#77[t0!CuO(7IdSDdBq7]jxv)0zyfNTWJI(U!U6s1BN36nTm(mLrrITY4I&bG($7#R(@ltAs8!Pg[mF1tf1CGI#OX(*QtP9A9eK%Ikus8cI^PkI!TfE8HcdgnT#LGp767dUL$B&DY)P!AXS4uS1W1Fv^4*DcucP(kZs*B@$ud%%cMoBz&bWpW$4wrVeLkT#HcVJUG)z8@EuKy6UNc1jKq]14(m2^!268XAlJvf2Zady^0f59CIKc%RdWEqH4^R9$6*M4Bx%3Qk9)pHw@1%c9!&b7c9TWJGnP*qVZbcfow0bMf%ch7vsXm0C3dc[[j5Zjg&GuM%7SIeJd#vdkQr)HwJm1[8x8%hJqCTjwQLWZ2]eWvCFq6cpzKr#8L)jkukm#E88eKyWtvT)n90mjcAKfgFDYiTA[Lmw@J4Gc3pV#Mb%]4tFIW$KfWqGf(PepE[ENGWy3WJdqChlwtGFs#ikNd1hKAAgKQsM!]IcsVCxk5pX[3(HjXilnEwsUZTQ0^CSck*3n0hfJ7#b(V](3wnFIpw0UqlmhKW[31c4esF^O(a&YBtG^HI@z0OcslV)WIeM@32!4MkHKR[7vLn3reeWrDTH*$wj&PS%B1KZ)sqQhI!X5#L$1h5mVI&)(ven%jycFRIrVgYb8vjSe7gLwAu7y[UmXQr*aEmlqfe&V6#L28W%BZ4Hd1ybY!6BRqz!VjOiGvQZgd3WtV!3I12M@3Z&7n[)v236tS@JT5f79H(hChu]wRyEr4OGzzv5YaLmu%2[17!)oJ4]CYiY3!SD^cXO(vflS%yfvx3b9XlawgDp@z^@1d*EB*F^7IpT6Yp!Gzu$bo1l@&LRi[munBVvG1zoD!#gA6tOL&LR^8@kC!]ij[tQjTknmWgXvyQbtvSxUEkr90T&JtzI*1mHIM]atBK2leWtVkubD2bzffjONSCbWB6Mz8)C^9mysh5YGz6lvEV2NG2D7IkEUSXdwZn$sT949^g[Y)tgY7$)4AIhS$pFO1S(UeYPMCh1^EHxNqhNKy(N&Y%METhc3qG^CW$$g&37TZHlYzZB%u6xpC5@d2O0ly#aCWKY9gzEcEPD)]gmhul$b]TuM3wXEyIn7bKhA6jb#q*sKG@gM(rdb7*D[^V$NY*#&xMcMLUgeAwdC@GyjOm*x(3%MR[JZsF#BpEy]aTkTK#zDck(B[n!Z*K1AWjYxgtUIR(Q5ibP@#y%&MJ^IVWR#i6)2AU^mRIvlQZb$C5SQ&nF6ULGs4^VRd&41r5IyiDQ8zgE!xV5R[RI]C!kFEQwWm9Jb0*0XimL)4a$so38Kpmuif*#7NKzdD]@(eB&4w7W9^jw6y)2z(f9rrjf4&T1jT]gfpTP[pq)#XXWZclg2@en)n*)Q2e!aqEfnkTq[43pt]ds%UN1JjzPf7pmpfQsfSbxHnS@J&StENlj4qYm8JHl[%F$#we&pYqx][NwMCzd8O3ZV@ec@aBhS)(oNcU@vNjzi#tyZT1Ut6KYdC$Yn!5Z2T[gFp)1TRfGfU8qvLJ!&T%AZl]7GOHVS@^ai$M8w7RoI)]rs[njb0cw4G[qxZ#rDHS*K[K$wT9F@a5hgBwcQ(w&R@igbS!PyTVt3J7gM)uOu)%DemGqLO[c*Mz![PtoVYySqIE]iIPb1X@3WQduXSo&h)vk(&0@$Hz%YRj6m[(!Un5e#4[S96FwUQPpOJ4ff[Te0Q$NPxpo(*KjVyE*%(t@hTLfaT[QP3srWqbjfKHplVfna#q$AtU^U2F71CgO(SeZ^gk5!$ZpuFWJ2KE#ZM)B08o20X%IYep3(EX9rFXlvlSZ%M54]bYQm8TTkuCYkTo@V^y^)2#vUj(ax7AZf[7D7U]7VBKg6m2D&EJqUQP&dK7roKxHKhXWY!@2A#5%T1iqCp*[NI2Q^@qvc*!A]RYo*T[^0Hn(rFWxR%HH%#[o%)zA!tgyht057MEzqANYCw43xIA(OYP*0pb6Im08PiOlWx3OP8eO&WBf@%0aweouI78&qK2IUDWfp)W4mWKzw3Y@CYwNS)srtAtXYp5Gbj4VYj4f3VJpuRW4XgUP$Tx!6b1KoYtPAC8a9YOAE9l6fDv@G8yUUUiRx!8wQm3f$cAs*MbCIdMMKpcxlWBK1Yh1wW$NCcfm71UuCWJ99Dc^LY*W0u*3OUu%sYo%&L@vdGK7K$mZ]gtDIlWU69xUy!d&mvxpUq4$^IAQo3TwW$Yyrx[Yyur#(xe[K3O!CGi8%Mro%(9kx1@7hBR0GwKQ(#*C5Hfc&e6d6vGE(LzJ6QjqAxp*@60nXhhdGZso6T$(kNRq]gaRnrE[pB0I)6fjloT5U3*ZCd0*0FzFF@mcgBWqMXFiCigXTv)tG*4&b#I[(Lz^sexWgwQ6WuA@ME9mwNzuQlr*QF[59W#5*0lx!WNBfjN)$94G#ySjzqxF]&!hpDLqo#*4bseGFkP[8jlJNandWqqhDgb!f#1ekb834HkhNqJX(8Lv8m%ROGSFc6guE5M@WkZqzBhqF6(Cpg*Kx%$4zYIv4YCNUz52WULfHtg6izc*WRLctiGVVg6f5]Do@c6Ehlxc%$7j%EMg(pZcNs@RBzRQ9oqLp$BYxN1pR5s#!]*0N5Lo^(2%DXSriGK[AD^QW&PiFoU*kW!^3@xZM0Yos6$HldIPPxM2Gw1yqJRujDnOo[*ki6!bdet0rc]&OIE[65GUH5rhfKR*ubM7[bc0]u(7Yom]MvJ2z4&*sjmADNLuhiK^cnI1VWPpzmpHcjnww0wlc(HxgHoaYQ7rw0!PcLrt2SdmdMhhA38KCEuEZaJ%Y1WdLKs@^f8eIB0oTC8Zbf02ndu$LHYx63C)n!c%F%M&fP2hF0bkTMCCdNlM]Wm3&JhAFp3K)Fo6mT(mgowmrqmoQ1Rc)uQPvs61[C#A0dZMKahzEl07lRYxW6I)r7^uqflgaok7s)uYDZ6!d@B2Vmedxv8qDth%I!y4&K*uh@gQYGUTFL@al$sGfHp#ijuOC)Op4@6p&oB@MjDO7oXrC@lmtWM31#cuUG8cSJRkp9%V8!rx(9Q**VNhN2TdERrg@VP*#odOHw$VTlb128XBUyH!r0UQXMZRUFeBRttwYe@TaM5FIw*bzjN^wKfuY[qfPgT%8[47ifXjb!Tn!V2r2sXH)^v5e$VrUG(WkA%U7M80W^J^4#L48M2JjE8fSVUiCj[Vfw13yjNNt7G)AT8AcB5MBM2hWYEJ(VookW(HN[Q26JblpRChYemfhu5$c&qzb5U]0]uEUR6lGTWyNl!97Pz1IMsl!JLdumGOxPLAyIne4QW*494o%xWe0H[LFbiS*d(Svn)jVYzV3bW#r1L0xTcp59X3m#T[#e[ailhp[j4(V*n2L2BwEMn%$^V!hvTD2^*Z6OCpi8&HVhfkGDV9rGdm$DFW77QVwnSmKElw!&@pCW3R)nNp7sem1LUhIWFDN69Worhq9@8XB7jq(JLfvC8Rg&$En$sqMnzzd3&DuTMvBM&HJ#bh$MRdTa97cvk@Q2RT24E638@@8TJIA2*Pn@YU^TI)@M(PDWzM*CyYNcH3!%iL^qMfFY&Z87S8n7pi13pK2$[&]F126265LZMQIu[&HFWlxlYpBRei46#b*%k#[jeNKqa4^Ord5ZDnmwoA8l&)U2qtRi2BY7im#ycniP387K94c%@jLIZ*%fE&Q5xxLwOz9DAyy4ju1j[LxR#0NLl9Pq%rb6um6kzmXK^9jowVpHrRx9ADfVnWWoAO5pWt&ykrx*i0&17aPB6iaLNAoQv!S8eE5km*DH(vJQG9OOBuX^P@Nl#sOyfuh%WPzFjj&!oEmAP!0JPRPqm[*pgeFeUX)VmRD@Zbsib2HbE9rj6Q(2p^*f[HQ5oNqwGXO#Tbjm7o!iXm17o39Up%W@j&m93$^eJw%wUISr8LmyAj]f)gTscRPpfvpggMOmP6ifmzLV!BXPB9IctSWeyWtG6EtBC)BPzVDVw20f!nnK@9D^^5AF^vXuP*$B[M9cV^g[wX3LCYSJz4YG8xvkYu12bN4n44kCvl@uGvXw#i]miI%Rr9hf3ygdbUW^glsd!4uju%%TLGi3)hVMfvOCVx2pGKdZ5b^d5o4oIwYdMhOnVhi%7A*wq@dI^p2I0I[g7^wJOOZYvYk4&184rM2MbgKf&7D6^hPxMdp5Zh1Q[mDH07N5)SLle*$j38eJ@S1eo%As5[XI58WC3I*RLNDsUhUMrk^uL(lob%^RzUY3nHoj)jv8OtBW(%WYWNHoHMh!@nDT[f7E[&q]FAlpfIx4DjAAMA(4A6GQqXA6@K&BJGKmm(GtM&0x5^A(z@4X[uENHT7B$Pdc1TGtuoO0IsJnGxTjhMfv64jofVHUPbimpk4vYOAXs^i9UfCMxyvDI55tX%!g6GfT[]RpfJz3h!fM8Z1eyegw7[1Us@JKC6guN*Wl@HUHl4xep2xqD09l08Z!cg%by$sYK7M$m3cA4vwZIIOdblp3wNQ%1x4jb[C%M^aAyzzXxUgL1bURSKzSqnFb*4g2CVKOOepldyBs^]wEOL6i@mY[tKw]h%sttob^sranxrV9erc17SFFs7H&[K5**B9vfHZ^!N9Il#efctvNCVUqm1CD*kpriLvF(PqVseKO4OkNv)@K346tN0WBd)xT!b%KiUfGBI8(jxbmufz%)ASBxYi3%oWRUq8Mywe[ie76sQO4*sy&OuoJ[h1Kctbx1RAhN6j8(gE3E81BY(yWFNiEV!%CefgbiW*95Vc&VOB#7bS!(iYvLO6k8SyM%BcEopPArf9EXN#&FV2UBSjK!%iF8r[DghsgHb!5UWs%7@Smf8JRU8vqwd6jNb*VfsJ1X0L#2Q!iX1xm%pqrm(^[^mM9JZ0A!cfWNqfkcBJul]e2u7)B4@C@6KHd[&aTPnK3ufi*bMnGgphHKgm8nutZi5)y)75yEj5XLX)7yvm@FYii$)IHj*ORvq*eTvH@SI%rwi714WC9jmMH79G*^8Cd9HzySKruMP(VrFBo1CFgSYScbcPDKvA4JR&(TZ*wBZHT5cAk8B1ep6(#O#AShxgMAJJJFOCuPN%8uGHscD$ys0oQuLhHfXyf]4Vn3&^^f9sW^NBB#WK(iiWuP6OULvfgBb@W!vATr5GQPViNApCHkn7T5SOUkl&(V$7&CUTb(d&fR0lLKO!eBtF0ipWAtLu#kMGOrwW$RtA[RaA9!wj1[%QD13x!g^qUIZvBAqB9*h!06b4h(q2iT(Rucka7A)4sSzl9P]oxc4s5oFeYylHH3#Bgi9#!f52f(kL@)Ybv436VA34Px1obS8*5bCh@L^YJYxbOypV5OMTZDyxRyXSlFfL908AUosD(N4C)te8ql409o*0D8Dbz8F37Eysq5dfK0wYdf$lW3lli!A1LnDF64u25H6%nEdM1BLhB)dBqitPt%K@&ph6$ggW@bcPONcPo6]@&S&q8L*W)dJg#3EFPpXJmXe]Ij2h^R^vOY4Qj7UoMjMbg7H767)Oi9feb0m@ExuLH(wxJe%MQI%XxrMwUs&BSyK9NFFDVQwEbqO%i3xk5yj&%U5g(@$XWZ&A$6RHfqF*JfB%sQjs8vbd0L)y[G0S*^T@9AH7QrV%G4)f(LGE$dy*#!gmh!zah0wo%t4R3Z8ql)x1ACk@Q&us2yLYRz@jLonuZTi3b9z2xrl%RmWhyv1G@*]Q7Tq(vMp2chS9dXF9mKSzNvuTe3^FMP5jMxlg7EaiPtPu#u*zFYUr1TUB$bu#FOdzeO$gd$[8FMKE7J2AqvVh7)Gu2WfcRW]Vjg%5)zDXogyYL*Ufd*fx5cDj$eA3e*1SS9oUYHJYlcplohRzcGXZ8#vrv9Bl$BgDr&GPFN(xcm7)tk[DSq9Og57SF4ACHT*LkBX0&pxUjg4ts3xxF3Bo8J4wp$w1r&H73#1Mp!r0Toqq)m#k)VaGzCF@T1XA$0fsKmupdzZijvkXH$RTuRgmHZ9]!Hd7Jp4te9)$G%9$ApH25*)ss)afK%ODBS@Ad[hKuYNQ6Jk(WVWSPvef9Y9AGrck$HEK%2B2@$k42*j7ZFhZP$wm(QiBYEefQiTS5nqfjI4aZ#@q14#)@UTK(#V7[2ZaUyQvBP[@@VA[TDVaq&Z7$I@S#gX(z6aLOSp@P@OB70Gj9fWUhc6p#]4UKpuhzuyr&(9bP3DPe2!KzQq##!vzk[zhx#eb9P1BeyZl@ItCs%2e1F^Crumts4U&r^8BnA9D7JV^SoPIvkMoSn37AZ3SsuZdPyWu8$C)[qSt*)n7YnfVcS@76O(Pu@C]ob3w4ydXhnAf9pII#(GIc2Sfo(^cABhnbXz3TrUALJ(ysfwg8hEviU4YRHM1m@mLnAfe^gAtl9N)WU$NiFuQzMBAa7DpQ@Ga6WY#*1wkYt@xlhZr0vwGOzdjL8B$peMq4#0p9N#ruKETdeBq)YGjfJzcV302YzUfdaYGqz)4kwq$He@cVrjv)FF@eApZzzCQbE4DbR!mC[yj626lygWTtEmnizJSm$g*aOXt80Zdy!9^*VP9Mdp*Kiu29Z%1ynQirHhNddpr351bdFvMv^Z&$21x3#i9(60Es)cf6F]vvGjx5Xe2@kX&0BCI7VTwp3rqM(Xbr@p2MH7)k[F$%Ou78HW$]%QTKGRYTJLo1^2ll&9DLTzrV$t7rOAf!sL6JQEFJitZRLjCWT!p(rHn@QsYx[oId5WfUEsyjNyU3*iU4*TSA3JdA8YY90DyJV]npX)aVhuyU#yWqqAJ)DeDM[F97[A)*&%8@IStROtJbqe25fVpOsKjDGZ)jP7jdN4aj$*Jt@QE$tCTJzM@^i1c^5b&fxO4lE9t!$!f(vsB5C$FZsC&c*Fj98mv4IShzkpfX(r&c&)v7NA*$g2^^iO6OX77^w6ezkfGk*P4t&u9SHs4WqJO8A1w1fnT$CyyT&)j$vn&kel4FI)I9r3IHl@7S&%[*9a2$!%EsC*Jv1$oXmJpq4Cbmra93FT[VeWq]@pr1^IuMYO6u#DycCjtGPpKEi!LOtrg(%7lZDpSCI#]!1)By$3NirDkcxHG7P(rf18QyWg6n#VJ$rRLc[i$tkYeUu&Jr&0[2V*hy2XyoWqjjLzHSeV@8tk6)ffzOiF$Xwz17jdZqW%Tpv)PJUVWht^Th[*oXT^Fgdqi$zB%GG]IDp@#0^Fm2tlDPx72)OBc2eJ%mis^I%7kzzy^AxT0t$p@ev6OEz43!2IQFWNPy%cK$bTlhg3eJZu[BagbVJ@TA3@B3iGe9sJS14(9)R@Ne5(9C%gww$c3lpqZ71H[cgo!58aGEpxNkl)Uc8JD3)!WxhmFUjf[Lx*AE5ruAz3u77os^*!%ho[Ghw6xFol!(jfz&7IexfGyRm*hf[V4yV[7RAT3mNzAX5PyCi$s$h&ZjtaUV*0k$6fC0HRK)z7^5)r8&g^fd^dq3DS@UowtG##28NmXCmdt90zgSV*ii$ZwgsoeZJI2tniCC$NxwgvauxKnbF#7[JAA3w7aR)ZUAJ9$6bQ(gy[&3gkB(xDGcWsvCt7iQX1CC4akwo(FWRt$bn7g@oPlOkgNDaLOnlF!Z(!1&1V*b$#SEYOE$nGp^gUQA76GYVbrcMjd18@ndDTxJDfvJGp9oAk4w]!m4!G#%iqO^!^dj6&fPsMVR(GjlI$fEEKNHjh*TzHoBgjQyw&Xo]WIuY5u9715oRjwQZo#*7vpxmUZQN^@#AzApMZaIfud^g9lwULgx2El&Jcj7SUpgp1L2e9a5Bx6(wUenguW@m9ogQHL(*&ge4#darUTl28mui3IK24in%X[7O%Dxx5[32xss83oJ97J*HkGA]$KRt!Ed^pr8@otGNgrMrB@2Wi]tmtQ1n(Sv3hFFa4)KHqq^ezB%pv@w6frX@B#itjRtoYeLW&Xz9W6DE(O[Bks)z6sull6UH8I9u4kpNrkv]ItXSxm7Js]gAjKdq#gUjPC9ZsH&i5^9#KpX2jjUQ*3N[Ym!s6*IHd92cwJx%^1T5Ha()XC2dtWU4z**Jdeh#hCfWp%$GF4YteS7oA@rJZg]!bbYRTe4z!ogHi9Vgv#ejTw[Bd1o0x&HViH@Gm8sizetWFEsiIJ!i^B0!1Z9rwT*RsS^0^s#buS7$)5ZLUIXFcTufBm!js#Kb9C)3BIS2I9S^9tB2PbbXNN3R*J](!G(X@ZsURTVBqVrqUq45zhEoMs[wen39z(WTr&ZdjZysYJ(hu)QvL[]nVWe#gyRZPHQ&#KMQeVsI(RCGPQRAwe7(y]W#I1!toE9uFSW@W0@AL*P8M]GrVT2o^A$L0dUMOUlYcN^yx4Ts!%!o#XC%W3[1XXcgOh6DR^DPoOFg*O2D4lm2HJeDw$i[8lRtS&Zxbsck2hbRmQuRr#Ag8^(Hw*^SHToL!R#s$!)F07]iANx&F4b#X^W9FTKxzbBs8QC7tji@^d(GC8Ho5WQFI(NlIseRP5gcwRViVO%7dAnl3j[VTKNbW$R0t*S7q0*dxP(RtSn5h%O*&lWvc8L[m5ZZs*2j3X^%QgQ#uJkhwUenT9DKtR8@5!##Xhag66w)TA2!%VzP[Nvkvyn1wSiCbnv&#2$7L6rlBc#LA6F&$!#cPro!lH#KqlG7LqNazZuZPAVA5Bpkuic8O1$JDf52O%c1$BV6yNhK6p*0DQoJbOTU!zur9@o27es%Cq(iBizoy)41tN4L)&)t4$H!G(3FRV!Lf#[i(zOjG%L)V%7HiwhzGCOVvSQLi!e[2&5KOum5GpVdMkPRdki^pz1dBo&N2!)8eZ3qmz#[^YQuO0e7qZh1mrh^smUs[24b7(DsDd[ZvnYict*9U(*]E590[y!r%Qzp(7FjWTwaXJfK5TIaP1&I*S*8VbN0e6EAbc2YyIFdB)QzMB23eTKZJ(v1Fgr%xkJk$V!M&E[[kYOf30o[%Ay^J6EpaYUVRv7lnxeVNK4KyPR^PdM1NE!lg8[ZFYBx(@rUl8wP5fc#DMWI!85WXNq7ev&BMVT6uWSXQjax!!L#pP&QexdLDO2*V0S$%Da3oV56yxArvekMACQ!oEFQo!9aIu0&JvXOxXG7Cu%%BU11FW^M**RexOnH%Rec7#FW$G!VT%UmEZ!Vb*q[zopOxyEORJ[p3s9SjhBDbAW]x0oQ$V1T4m&H(uQA#)7ekiAdI#Yko2#F%1KzDVrrzvxs*&)BRq6lJh3bf[IITixNpFtb&MlBcOSwhfA!Zz%%OjsB3qNhsfrq1Q)$@w4Zq8%AVkkhQAHQjIm[eAr[EeS[^(Jx1bSFY9GjdA3j0wNODm5ycaDKTC0fvfev5PGWi#%Et&r8BnEWXUv[1OK$D!)hh$TAuHLyacIuyjrJnSOcN*9sjq^InXHuyiZmPxAA537k1@@FV&9DU65$@JnId48EAYBwbPEyiWi!zTmIN89F3hQU*jp3s2Igl5eB67gC9BsaDg@&bl%x#cNffo^N8V7AdmoHZ[NyXDcIyhQ5lUpbC1BYX$2RmuI93qtripwwnnDrU[iz3mF&d4!8CO$j0c8o5Leg!ulOsPv^FdiRTwkMPs8zMviyEHUX1HVBysgK[O&*L8z)Bbv#b$tUiOpqblgv*[YKbuh7EdXfFCSnGKKYYXG52t^LDYX8R7q$iVis15jvhcGS[PVKR)54Kis%qt)9s@UG8@m!apyr*%2S#dm(3m[$eHp6qqiAw)%AtkqTbSTboh7EK!PDI7%4c(Tyua62J2TRF%gtgYhsvr0!&3NIVdsqCOMnsrix8(*jnn6F!uSMpAHVhM3)hGsMm7C@q^jnNzXrZ$8^bBB8TTP(@kynsXKrzZIRyiUzHx(JUsvDkQtbe4jE*(uJ!9JG#[UJUGKYXb8VI&hc$k^6Bq3Fj(w2N&dgtCDbTgqGQI6mM7[z6MTb*dmoFz0O(INkfhwjMsEFWs[V^#jR0ezoU)kAESXq5MWOFK^Fvt6DwVeLy0UGD@g5&DOyLJpx&KCDAmlK02Up)uixZNWyrm#G^NVrVtp1QKPCooCII#)aukN$^532%Qzs4($Pt6v^ggoU(RNYVutxiumeKw8(8T#Z7$7p[vZEOW038NA[&9j!PoOq8x3khWvjuHf2%*Y6S64sinAsUUy#v(DePqyp^l$(ct#Wg$AshDo01A*O)Exn91IjKmbI52gHld5x(tG#zbajs8TO45*fbkA5mE#lNczfI)F(02edrgn^%(84WjOSABQ39(Yf5PHIICW50Na6diLbv8vA^RfKp$CNx]dvss8O1wzOLjE#TVT4wys8&pbL&O%f&8qyvKAZ%gM]QE(uY^VZIzy1VYRups4*6aTf6WCL%MlVcwAM*SHn]UtNuNF!)f4VtM2(#M&e!Ju3u93wDsb7[Zv#P9S^BCsTkoP!iUcUb&JQDSxut$m0jHRxi[CVKjIwsVjGC)Km@xyD!hpBDmw(5b7LhhKf!w7w@AUrDSl!KuDx@QwBGbxbVn1nik9KcfR#nVh1*]mNd$nzcoXlCVM5x$Xk%a6pT98UK6mXf&23E)1]^XYM%q4FUfMn%%%ZFtxBg5n3FMPFsZA8jAypw7xpM!@RW[@HOF^n$J9DbZ94J^Fhh&pPo57^nsZ^vnfHA([]R2]XqG[@%VLv1@*^m%tF0^%[gvkXvpuhoX#Db&zKna6ienfacDM&locGqQ&HNC8dSY&X^O7KgF0UwuDLBD[)T2wCW&678JdFHQfR)89u[(DQJIm%j@ys8*8t!4r4[YAPeq6X(lhy9v9rcGDw2)ybxh3FJL',
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