<?php
namespace i2up\Test\v20260209\active;

use i2up\active\v20260209\Db2;
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
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
            'where_args'=>array(),
            'like_args'=>array(),
        );
        
        
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
            'kafka_time_out'=>'[B1[6Gim2(x3NAM$nqS0*TUytA*EPHE8ZNZZ0Z(wN$@BC^HtMA^yJNfTvGiR]nZahApm1H(7J5L5oo$dEQff92sx7no56SM%2FOjemt8ubi(EGub9u)YjkdO)rN21gRpQ1Q)^sdb(T#%5u$a(w0KV*DtpU470tP*QvlLuu7iWEA%tzbUV^3aKd1XzY0C7tzs82Vn#*(fsET5v0rO(%k(VL*c4mN^WzIQ7]3uDK6ZRJjKuv)Dp#HG![LXX$zYilJ@3AoPB9[gzhzAn*BGc@cLXT(e*!k9v0YUJc5giH6SpGy1TDZ#0UbKUjMG1x0FaC0E4GPQ]$RPwu%X%%@NF^%JchB7qr2SAFZ2h!6H8sy5Wy$oMirfWoEku873hWRfsjt3Xq^G[bn5X5p^m&tLXa^XwypAuuCK3^8UfzvBD1LrwcrQp$k7YZv%VvB*igNkpWihIyB#3hhw(sc4*c45nlRf3W2iIPJ0rzju^AvZGwXD27Ly61p9YoUUwh9(f%iaDb(B3bxQOX[^32Hw1&)$54YWg$!sS)Ly0q(TnAQ*jhA)D5bD0$L1ITprp11Zl7qDl5N^n&leOTO7RT2ODGe%YP#wP$&2%4rn9A2cB%ASXiKk4(F^gTl[8)UyrUN3Sb)(4Rapsf20FY3WeOzGz#FSg4v&^HB%vGEpsOMx$H1FKf&JS)g8Ew$w)2WAEmDFrj#e!cptdj2#hs7L7VF5e9J&OC*wWQP]UC&JioXfIW6X(Rvh^eZfrzvsFEx)y0^O]qqD)7r!RE&raJ(3suRTq%z6Gy%VE44xm$TyrD#A!TbtT[hOY2m^AmAiW)s^cs)9y^eZTEJe7GgtyuDdr#n9Qh[&JxwJjVMq(ppV!@WRl#uPjMTnBdwC8KnnFcPLCQ4taDdTulYvZUHOb43VYfupX%HMK51Qnjl%AIvTYI^9dv3uaVsm8KA0Sm%QxTMY0bT$pMW9$$whyB8gdYnA%T08FDLPqmXlLmlL4Hyy!bsn5z1EunA$di1VRFLC%Ga#B0o2!vEMKmjs$lk3JISfTCWtr3lZCFgJ)*Vyt0PockKfmeMPSs#g4A#B9FQA(CftDcqQkQ$SM6BudvrjFW@k5vCgItrI#di0gjC4BQfgjOtB^F)Xf3Si95TJuEl[t60tj5LggeyG0e446^C2G7fXq(hWJ$2o6vk3R18j4f@LnbKxAQhJ@vNh%W!E#wytr4#0V7U5rVy))7ZI&M8oqrkxY&QzU3x8d7B5H&nKZD8wxZFMdJ)Q)!cZKN7GZUSi2743A6@o!vlYOdl5P7c%RDbi0k#@1SxJxefYhcLFnmL8cc[z*6S9u@E0(%hQ[YKe(uGQ&KFjxL$GhRx*1nqnV[T]OxWS*g8d5qTEbF$)o$u#ikT(aByhqDCjpmVOmAIb*hobmfX9BaJe9)5[$hfgdLkmvCXIdB!GGz$WMKC%6VG]jYxEwZ8u7KWsqbMbysCQDFo^M36ABvR6NMJbsuFVksz7J2BAVvVJHW4$T2VB4KehKYIgU7XTJl#gIVF0gW%Cr3BCgoI7LCULSLm@jnjiFCfMq5QgfFjFZ^Xz3kloK9]QHYGnDFG(x2!A[Ni12T9yh8itj1MFrvjNFYqK&AqCmqBmtq832b&mH]Wk1G$5TKe74Jc@jyzlQ2n4CoKgkswyIOT)cwQnz9c4v3MkkZWGgVBvLl*B6vgwPW!66#BOUDt[e3Fi7(ohKsL7B54Rpz(YA&@TpKIgm8gy)h$nF0K)WIIyGKNohEsa#l]DvK)^I%2*v@vkq9M)wh3kS5$F*xj[zmYECDI%ouqmo15RWwVj#2AWkDIhLAbag$gkE7Phk]3$Q56J7G62Sw$7kRVMZd6X9N25(noT[2BzsGshPmr5dtPTn$[e@)vWyiTTMdV)D^pIWcLu4ClH0RbO$u3^17PPNOq6Zh$GSSOmtw5DD*tMjCrlnX39d4Aes3$DiEZdtnJClHC*282!5WqRvG@mI#ofOo9c(TIe9Wyn2gbTCDp07tCX1xlLV#D98cOc#)7iP53d0uJ^bk33zDXb(&70VrmSMx0cun0$4$HWv1Gfd]]yqwid7y6E)2u9k7A[B7sfRYw$#jLAcEKVLa$1CLbDO%fL!fHgsc1&ILCdpzK^!SXGgtmKrx@wkzcO0G%hGih(M(in$@z7ARk&@bZSYG*%t%csweug3[zEN7xZTI%7X9AVI$rBj&jRM$X)$AlMqIfcNrOq1jC0N4PV]headoM!k#i)jQGdZ5LXlzVbkHEyK[s3WDhW3dOlRIsNCeuel1aB)2WHDv%4^KT%X^NnE!AR#odvITXH5s&#)pv[v8Jmm7Rhx5foJeYtH2ii$x$kfM8Spf)^X1g1QFXmyAV0ap0kQpJu1Aftq)LC5o%WgWG9Q&8&Noc7wkM!SSp0xi1k7l61S%uTJAlD3@dMCA0WBnIHx%Ztwk0GL)!YxHz$nboCgl*4g3Q3bpjGko^^D*Tn&Um28@oPsG71ReZV)8XYj%!xI[d[q(gl8]xeX!fY)5q]#g$spjYxtewG@h*EW)wE%sF2Gu0nPK(ueAhnb2I@L87FyhB$w5VbgxNa*f^AIxCvKx9zU$ngHp8sjmQeF2L1cO*PpLl9DfGflVFkYRxMowbK*h&rS^1sB496qIZl(Rzv!EV89Ieg5Sw(j^DE@)bqoiMCW%!*UC1EBdyL%GaFLY^3W5&c56rQk[3C9iL3Vn[FerQ&G#byg)0!LLdq#8vYO(3dAcV)miKhizxkS)2NWtFoErXg)Wo&zJ27BLiO@nH4wgC%j$0rV@km%XRNctVSHU%Ds3HFM5*IdYx4rjlR^Q6D!aB6)AJ%Q)QN9I)&!%TUt4p12sRtnpNp5NEov1bm1q!jYvt2x6i*0%[TxxoD@1#&sb)dObx^m3lE&Mc[MGRmqRDiXb1QYMX1!^au!CyUJ^0wrrNU81A2Az)9n7)#0E$CQVtrlv#4l[S%5TTEQ@QLokiM#XVCa0wURIAP208wG6C6]$p6XEU7D[8NJ6HlNM2Da*iV9E!p^vIn(m%$I8qL&4z2sou0vt8Z&V@qI@5VG%&JXpqc1wUZf*lC15TbO[o)xIN3mP$%rrJiGKwV]y$LQ%zVi#5IndQNYLNrnM63rJo]mfFSXs5[J7v$Pc)TBU%!L&uj&xtIVqoTuLg9u$cpts1IICgSqQ2$fpcI5KMdZlMqk)H[kfLKcfox80UpdTG5LoIiKP@Qgf#x6iwhEsT4FoHdwhql$)mrsw#MzNP&DN&E!zc9f&!DRH4gVjh@EDe71[u#OvteFOzM&ek^wi)dS@LdpyL2ftY!xvyWYHJjrsEEgq^F)OFN$E$4bi2fJsePC5^8KqNDKQn&$$v8AefU30hCNBWIcg451HEm2(*niSxBDpyzLzv0^^S@@GC9I9&$*mCC@b(AVKyT@OEUo6exfvwxdnDVyT%!TGTHMDv@kKzx288h!T7iMzj$dACy3dW6bMKQlv&pgqdkHS$!Fgf9Pb@C18QfBA@yGK2TPNdV6iSMXbAiRrG98oYXZ)w^#QB7KHb7)UY#%K[b8zj[n@G0*xighFm[M)$G[]P9umrJN2QKY]CELK^i6USEx)xit$0RbZAhiL(OSjuG1V!#AoMBL07DawJgYb21I^vtH[qYB[5tJnw*zP@pPx!6MK$2LImijQmzpuZ^iAGU#R(C2wLi^B#AoCK[t)Q5Q4cAmB[rP5O)Jal@N$yGnSXF$zc[crhKXQMQA1[r4uFHTvS]L$8&NB^lc(zw%On3!1SZQVt&[sW6@9Z#4N9Fi12A&)msCbeyR%1BiUIlMmohr0cfcH1t!WQBog6$KgqIlgBLJMF[oWR)c3tOqRcWFhYHU%We4))EgDbcW&q^[fEn!03ot&f@mkwpC8N2ikXe47#U7e)I3QlOCM#YmP)obYv5p&NpUn4L(m@jKCzH9WZrFFj8!QF%%$J8Vu8[*&iNBq*unJ5pJWKZ%uXt4]YmKKqd%^4alKAFN0P1^wh#]LtrYj7JZq74avQ$iDB9uRiM!gGkAo9a6(diY4qf1!!@M(z[E(UB5ONSW@Hr93GCr[7fo9gr2!B*AyENRpMOllxV6&UNsFSJjDm#6jerf)LJCqk*Swu44SS0sDg5bqgWR4leua![anW2O@F!FNL9aTVslyw@h)gI3h^sP2wvtmxO]KnROQQ3Puj&329F)g5dxn0$&#5ZDFxL^J(rtm0yobVHFgKjf^2VtzADGV)mBYz)g5VJDB2PpnY)awBUMg%e#cd@!jx^9Vf2(PSf2o3d[jMWKsD5g%iB3^9(nADqI*1PXGBTe(fcnIIAAGj1OKL@gLuxJ]lG$GDYOIBkvABNNKcU3pzL9#5#AyoF(wRvEv!9h#zoDV$Zxa5spGM3VvcmykmX#Cj[l6wdTt6C[Oc5yTveTxg&P1ptxiq2)otNpBJR[#nCbpVbbwBTD8Ipv#i4Gy[NiIh[T31%X07nMqvhE8Qo&kOdzzW@]TFf3lP4dxX60v5[U^Qp7BzL%$NmS9xD5fOitdVrxBv5jcl6zeV#TKgOLi(yBKkCimLvLr3!qURmJ1U(fNtN!0Vi^5MyS4Wc!g]*]frh0)xV3hl5O9)g4272a4dQqJ9G%qIm*ngRuBzv#i5Q5i7$^B4^Mav&wb2r4O[)rxRFbL0hADvNpdYP)Q15gIw0(FkEGd5M[#io[n*o@i0e*&o#Vq5ds0S]vmAj4%PbL8H]Ghgly13q3xR)*f8KF@BvtZfQmCqTPT91gb#g![O#!0rGkzk9e5qK!ehzr)pTF1P7t1MWJ96@)Y8%yt%H7(ht$Udu7(zrK41(LJ[Oxczd%^fsrC*eWE#@DjZZl3M$eIuq%3m^FWV2nUhtx[vxvHuX3cz%N0)Y#pdhs@GnunWZtybum%!3Nm%[SrG)&AS5ZbHMl(P7ajS7vqDCE#v47Po4IdW[dHoI3lm20G3(gm25!8ZATg)XKi(xm9xUi*0]%P^hX]GS$er57PdLt7l34E#0IQcwuc0(T9YBcifLQhqfamX*)yxDDh@EnPfg1cYZ9S21jm@9YRcdoq(#I1Bjfb9rz0pJZ8FAI!(9)!1Y!pqZXzgq%YRJyZ)pro2OZX5E)E5DgW0XQ*wkHX%qSqvu$IuGQ7XjGXHrzGqX[qaId^sQSGMoxQZao1O[6V7FJ8Ll7UD2u[0z0(eSVHnmBu&z)H7kFcL1IbgNK[rtEp%dWAKSbR$7mxjb^Nnk&ZH[W)r5O2j2BF%*UiBqoQc9kMF8(u8vHQhm4(5U#yrsNgSM36%rTkyX!gzM2I[%PuBAfYNEZr^dR2hlyJZF!ApnW[Y7dfpzzPtc2D^X7F*Vr*I273Z5o@0#T5&xBH91w!f&NrY[t$IP#ApBcJjQd[uz%yZ4hL$Jz9wsLW#Hm2Ol8^jzT&Q^K05fp[NO*iZz[kKFNkhJ9aiD261!(k]7ZhOR#xFkA@%RjJxgI&$ojE8(4BQGs2Zzw^aXO2[*HVTBB#AgZg*MKt0A#LVt5s&k$5T*Sh9G*jsdBgO81pZGu4zWYKQ2Mxioq$KNS@EsBinbLMgJflD&&@CJYO*fGreAuF3fKFXLRvu!6jqW$trk1$3H4%TOL0KETttfY81]e!7e(zz[OIS)dJAD#6wZ&0hdewJhMoKzhHjGkmK9O])Wcujt^r0@O0gi3opnZ(JV)A@K5[pBpnIjlCiJ8K5sME4#tRGvAhnIMnQ6gLUAVel5t&DhijK[NrBM*1y9%tM0K^*L[oS[qdypTxPBQr)Ay&1[PNE^fZT3oM6m0X@I*8%zwXu$e5PdUr@)EUDUVHi2*@VL2MK3ZwBZec89)jKf2%TpOtpXABFS[BhOS@B%5Ur2c^]3ey*0hSDSTcsMWm47UB5QlfQi*qZ82Ix)Ye%BGB&]ErT5x1@T9ImGb2TfTq6LH*SeZqnd^!IuHp%5GJ0bP2C65t3qXxflSSqw9ziw(^VJxo(MvuC7vMLZK(0$OFLT(P@C[@FF5swp&ipp4yyz#YxLppgwKJ)PFzfS%M3sPhrfFKur2pOe[c&Yh1o5$!njSt4#wJOys$YLV(e*(TLbBz9Ne3k4s8%r3HF)ut[y*NYmrQC8e4$B!*93t*mAJBepcNdbw8M5djVFfg[3pX[NV81E&zP)z758jJ#EAgCzpBiLUI8#HOg[QSSQqR64gD02[0GctgKDf!FX4]S[pLV^%5EZTx[@jj0INXj67x3OJyvKW)hinzfBnM(dgsoPDjj87hJVYggwM[ATFS%S(NA%vufjbGyP@pY1txVrYDpd29YlVMqJ!zLz8qoCWGm7IUX$FS!5&eKyFTCXh6(TK)gT1L0H(wfpCDowHKs6HANycYndHSl&ygPryG$jk&BZthf5s]K)uXdpzhb&LmwpOPGNN$SGf1]YR@k*N6U[CC(&422E6a@e6ofspD3T[jP^pb6YbmBW5PxAI7Y$j8Wut%uOF*2[SXIKqLUMK6Yt#aXtbp0U9Zr$3S4%mA]@I22YXo$1dvpkGt*Gccy[W2g9Z*UaNvAIU@8]wHw[cH(S9FRCilJ*!][1EXfBGbSXf#cpF2Wpqf09SPncnZQUoiG0ErGuH@uQcuq#h^[7FIJh0Eq^D0)%K@TWnqL2(ZylMBZJ(D66kPYfzT%AKPHMy%J4nOmBgPwin^&ReTbFe(K@BvG#a9Xb#cji*B1jnu^uV53ZOApG)AEw7NuPD@T6e!zL2eJ3)R@4s5j%oL$V]n6@Isd&f9C5@hY5(abx*mtnBq(3it%BwNl)Z1nQw2S*h5VQAz$*DJR#5M&kQE]SeE3f*qJuGx]b#6sNv2ZpssMA%Up^pA]dfAUsUSMF0!Q^Cw(DLRki1c$a(Mo$NW$(FKoe&o^Vwnc2pRit4W1PFg)$uB@(9#9B]#9*2LUWwbbnUJm*4Be0CH6ws88ON%ij]^CyM$jpxT&FqqA*fB$ekY7Fde$5sO)NSP7om*1yw19b)60GwQUY*d$QqOJ*&X$$$vjrRDLvNnbVHIBG8[$e)w(o7@VcPF1@yew3bqzh#NSdj*Fj@xiVC4CJgwMR)#5!(ams*nTTsxlyuEwDaNrovf@7yEaYZtabQ0]IuRu0FFdOECtjaOIQMD1FfRCUVaL&&t0K9MbnRv&JIc#DV5B8k&SBw^P(VmZxERCse^Li6w3yLcWI*2ISTjRY0jZ$DUMmdX1m7yf2HYWz0uo&2VQ4rn*jl9D5ck6^g@!N*A![[qu!yK$zdKd7F9t^JCNiPytf!k0QFmJ^o4vWVyohrpEG@x(YKE9AwbS3yq%9IRLRbSyJ3HPzTF1xTqH9UsvnexR&!1PdeGuOieQHNA^ncrJ!rCz5ZZqcKh$$gUKAuG7OR%@T&y4YwVKp%^sstknsbrKR03p2pDpMG2BV^iF]L2c8At8Zmx^YY0GDl@6Vk!Ie3yaG40%9JlZ!lxh(&sBL@t7IJJMR8xFa*%E$cE[KscE)#Me1Iyp28iBek7x[XArOCQJF$KQRo]8gWOg1!boz5acPDR%ViL3v0koHtfPRaIZvxOkKb1PA^qfdlfNDSgHlbo%D2IH(hO0G1!OoAz2ZK^0h$9u17m[eV6gTE)wuL)$aNXL!^BJPGj$m#)ij9mGBS9ARCR*Q4WL@7Y(&csvBlffvPz^l!0FiUq29W3J!IGU7RtE*$ZLX0yge^vT6U^9]s37YGfrLYWGp4pB5(1wgUy7rRnghLn%S4aJ149GEb@x]oCquz4k$UQI0[p%9k)4f7rD0b5TU#B$!g*g1IpWW2eTej%Dof*Ey*lH)k[YQoD11^fpCZr6Y5!(wh]NZL1K$JcG^ZVUe#p@sxtOY6Hli1ZfOIRoS[e1xmUejRN0SFqxSs(myoq)HHzO*e)SQT0KWZMY#zZ@Bo&20LZ(z@g6Xa&kR&jsqWbyNzS0Hc#]prFcI2duV&Vyd3CgzE8$]uXwnwId^9Z!&)mL68HxkbALVyC#DFnfNFSCuq&2Q&DBR!SGNeNv8x)R&8qpvYdmIKir@H$9C1&jV(rHo29$tm^dUfeUR@K2BI5$*W75NSLbXiOjkhbXe@p6eNBPfi&53[uOyMmGOe5pPZau%G![W^f&6VSfKLUZnArMHJ1Q9bY3sv)!651Qta(yvoH!cTdydgrFJgn&dtXOi0mi)^oD^CcCoBRNskWkZrI91dxaV3o*Sp1rJi68I5NtR2dg]gljt7K2!LZaYwdiw1USQb^N^LJF*Mkc)im0i0wZCYJACkbd]JeUZY@h5sTzw)&J*(LMdWvhheD!cdXjRzA&zb4nHyqnzF&I(l53a*p61B)l)Z1jPPdc&lFG6y7!E#ytARv[xlgBrHVLNI8tYV7^tS46Qvj&LWlX]scxWzsvgntO(z7qDlRZrqa[Y2y1Qup(4w9DjLxbP&yTHjeQEqOzh&6!So0WcKr157^kCMO38dCXiBxk4MWncBkc3x$#WI9PZH[fyOxeBV2odH*V2wsZ0UoTcuBH9!i#*eu&ecx[uAp^fXAzzQKhK%@6X05z#PwRuyjf2F%Ux!%u2UjA(6ocq9CGny#Xb(0Wqd1PQqY0H&NfnM31hd4)*@ygKJVT&hmzc3xDciZwyhnInei5&V2Opvwv@@13ncctGhdNDnnOdO*wKLp80%*qKYGxg(RG^T3W*ImpulS6((Qygu$yW8u4KQhgKbofz6VfwavtmdoFGf5E[3nSUkmYT!Ls##WurnIlgYi!xgas92FE[q7o[0[ED#Y*UEW#%fs!b#fepJ[2)RVgU5NTQuJkdBPoO5U(8zZ$Y#9^Pleytn&PxxlPOY#BYw4pU@XiG0%p4jr5qNzw%6gQbl!jRY(%QT0OXH$nVy[B3Fs^dS([S&Z@qV5XkF@jRS4sceCS%x8czNvs(chvDhzR4lZ#[JC@mfRSX!nT#(lupRKzo]o6kumjzroQOb$sTP2I6Mi5efkUTxF3^vnrMZSHljqO21(@LU^Dg#bY(6EOk&%gSufXtmB%lCQIQ[vq3wsQJ%[Z$Wqk[0N)iOG64MD[*zm#s&rL!*iz#2veC!lY)3#(7M6Is5j6M$0xsw5anH(ClW^[p0)D3R@iU@skx]DJp[2oiCpqC09gp6y#ypbmDnwzWxzz!47H8KeV4TlrhdKHH9w$85O%1T9n9Xr1kwqnUxcc2H6cSRev27DI]NZk^e0b0gU6NQVN@O^QBD#r8BqlSj9H)9VOYlwz^&XM)LrK8OlDsEfvwEkJtAzkjJ!2gJ%Xb7JjnQH[xfgZfNJ5^J#L$tH4yGYQy6k$XHKqVz7mjsK72XHjJg4XcXdhOH$LAeWUsvTG)Ss1*Jl*yk1nNtUmx7[5N23uEIAXEdLEBn!Q@QKpd6Wxk1WW)FA$yNxt!(ckz%*DiRxY^60E*CyV93LDN%mBuS79zC5OMv6!jETKU2W3qILqokD]qQi)TQqCg4lBqq@STAI&xNxR2Do)$PY(eNI)ODep8klq5jssL&#%!I*B6c%faqt9(H5U3hm8G9uHDLvwXrZieG#NYgS&F^%bodYpP%t3d9GJ70[mE@sNgKPCJgqKH)Li9cbfWtKTj*@x6#M86wjIi0Wo1e[f@Q[#fzePK^jMl6iu5!ojcS4%hl5TsCje*@#3*PA2cOws9p3fnr5UCZQHOQP)dw^dl0k33dlOGbc!3WEmzfZTFYEe#LbwxuV@Iwpv&5A6jUiXMhEVmlAw%*uwol&4uQAAWaLz[N#*)jTOtZP[SKfj%4MxBW)a^z!a0vWcuMXfl0Jhy#lO1nnu61FVSx2W[^W2oJUE&MSSD)92Q$gAH&%6urr3qB$)gcT%[#wBsLL6gkzHDGmpBeBBa3o7b&eP0pB3VdbJFgW5P4nDd#szLlXm9BCx[Er03VEj[AtUqAe(1Sv]k0lb5ORH#uK09247)$)U08zUOZv2Sp#Y*cA9Uue(PM#BJwNI@leM44grxN4m2TR8b7$row5x#j9qRBdne8PBrpchtdJRcYR5&V[KfEsg7PhbgV315lv^!Jv@HS!OM#xW(RaGFIoKy5QpwXYQI!!zzPbVH@SJlJX8388K2ZCxFn9S1[aJx^!gH7Dog^BzEvX2j!$eQ)d6j4#^02YDWC1EGNQzHko3BU6VMzi[hK89c^8al12$Nhky^*#3X92RdNPr#GE6&$KKiPdgV^TnWRJ(P@1s$!y8%YQfeeijZR1)qLj7#zBBbVgzk@kjiXiUqfiNAR3GFcAMfgK[Y)[YQ)ClGr9DLiyyx%fb1nVwDy2gu)VYW86EV]&15cv1LlM$bf^idk[3ojbne%7J!nu]56Y@t7e)fN%M[&FgdwwBDZ0wQyH7hDqlpLXOIMQRaER3dabWBP(jg*@zc[hU&[8#oPWAzgyF7H^mlT@Ko8VuMUUgI7ZuA]*EZt%LcYfW2%AgKX4l)bEJZBneZiUPAxvPYs$o!fiAFfYPA5Ed1A$2x00&CR3f#473PLqKS$]HL^o[nnys!iLzvM6!f8weLdIQYulgBPzGHLEqBchb9gl&Q2M@M]hM[I7cZOKoB%fSBPASwBWRgtHXiV[!FYgl!yips2RTN%mnTb5N(VgAs416dmRobx$^dz(!X^r)WO[hu9Vy##yxakZy2#ve]G&AQRZ5t0)tLhw7W4moa0HjaiwcES^3%7peyvYw!!oGtSR5MghfEdNYPGpl%6Y5mgdZLIGZ2!^RS0Kca0s)1nSg&BSu&JgYwsJIkMrT8r9H#Xf8S0tb7hzVbD57xB5Vb$3%&AeALaU&x^wVe89Ty@T@dcr]iy0eQ!*cI8Wzf9owMO4K7(Dk5A4XzjrLBIASV@zIRFl1HjQXRWtr0be43UM201m[X$NlX2xQ@8V@n3NMY#rNrs11M*M8I)uejIRhGnLxETp4xqrLjSRmszb^noX!%%8uHorPvX9w4Ds97Ng7t6*o(5t@L)Q8XC(XF2p9[tEu%VsXxEWNY]Km4ckxDb8uq!Q6IfXeXN02VmKC1uM^)wXJmsV#3RT^[4giYC4&TWMrkL)1lPdi&ZYAA7u]G7vm1bN25d^9l(Qe3X3OSJzpx(*vC&TDFHm[0[BXLJjos8vr6UW#n&V$JGoGMBAWum0wg)FSD2#3zrmk%zt3jYZO(rGJg7qRFCckFy@X2Y8pVunKqAhO)wFf[vTnssq4$IHI!3jOrAv[3bD8mZ*PW5y(EkeX&[mud%9&PvZgI*T%Tsly8*IRqpPr$PpI@PDBb3me5RB#H51#2%WpKRDCVKKNibFHedsfZIrMiB77B)bPnWW*kw#krlLUjUk9b%*PTwVJi7BYMAN!PwilE]QM*wuv3MUthQ&J]dGZL1VTHy*C5Xne3(cIIWgYHddz&TvZIO#kmb7EXwJP76UCoP0GyZNpRcf2qCgKr[XUQbzu*m#&x%[yU&2b!!oG7r$E7m3NNWcVqXB6s@puK^DCxPBKk85*(l[v(PJBH]0Yx^y6E5qCMt&8Q8P5Od7^oY2V3vAm@X)XJH%PE*&I9fikR3YW77f%9eOt)Kng52ejo*oJk$Yk)s*GUG!yzNJsxhL9z!HpgA*JkY)dF@GlhYMOgy@n@RO)BMtG]LCwDj!vXVd(ujGQd*#8R^6ZPp$m#el&#J7zyn9tvEl#ZTRnM9znno1FXs4Xw9P$4#HPBfsdq$hQB[DhZ]PUVNepr8L3PJ@PnRZB60f9jsdfHZGidtr*wmo2bh[YNyvh6GHEsL#798obNCuroZLq&g1(t%nsSM3]MlGfh82%Z@[yylGg(^rAm^58vlh]L3RCI^EmDo%76I@lta6V6mY3ADpc3hfzsIs%Sx@aZku4aTpYc18*37rQh2F#%2P*9LFOlQSZAf1n$JyUF44$J1IS&whzV7u2Qq5j^@VJPsEZgJXOu)cEKl&BxYqvv0Y)Gqy9I&Li7suRlENH(kpno3o2w)1DhD7cCT*%4XtCG1ek#iiIM9IFuREfehIzr)9JW5cq4]R9oS5&6Fp!R%0%PSOH%thDCTk2RUdALxXx4xPGaW(zPGo[sYx)Pa(R^dX19Wf4xC3j&1r9qdL)Y[atJdMjkOH#N42&hC7$A$3eQ0A53xPodjG7R]vfcqy(4RmNHXsIp8h$qMGpjXDteFcF!4l$[AWcWxp008mRr7!bv#33DPjw9d)VBITeY64ZZzXXf]I8Oz&Pp9%2oAKoD6&rU',
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