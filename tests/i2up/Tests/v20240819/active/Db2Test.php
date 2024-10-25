<?php
namespace i2up\Test\v20240819\active;

use i2up\active\v20240819\Db2;
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
            'kafka_time_out'=>'^d)Y[YN[UeGlrJ^&#*[F*%PMEIcP2HSbT2ghjo$Tt7Ln0HM6oRS6l^x^ZhEKh^RTU[@wQ#W]bcGri90E7uJRK$Ac04Zud0G]isIfGSUO[#y8S3I%8kVZeHISV[WtOA8!zIS5ESOej]gOpYCQX%vsP#bn)6WzEi9Rh*zpbw4sF0475FYI#zMFKCULM&@Ow9]GnYW[d6v6MT^tyP2VPEoA]IKYBazo5CLfwiD5F%KSmA@yJm4jbdVm%ugJtYv2LxLHAgnVXP)U^$A!OgrKSo!7pc2Vl@zRGJV*m5tV1acEGrpaL8RSVxWkDHasjm)YAd^*$!GGf91$!^hedYlbKmK8pDC)cXu08$3bOTU2^x3LLBW[ihilWN6@o[[Kirun2h&P8o0BgTYQt8cFBKQdtu8814cO0]sRu4)(PqJv$CF&dcVqQ0cJVyMkKd*Jlcz29fi#GC@USJO6QL7N5Qfh]ptM9VD0dIKqXKQ36Aw2PGh^d%*cP]V^#c#jfcj[Bz6K%(@LuZLonCwf!MDDI!I(X781TX4%SMeRO1xvMIrp%NAGq$u3dgfIL(Ir8WP6[Geddryncq*5(Dg3QMNNO%kbUjA3k#YDm0#BGqqj2Om^CF2QQpZ!)6N%8@(h(yloBWZ%dzR3[xZhLn)wL%9NumF^t*HVg@QPFkQlOUHNOx[4nqAwtS%nndKBGtkRY]u)jP85xJz4jbAFsg^h]s@!3UkwE7&swkk67wmOdmhx8E6tklR[(9%MJwk6PP@N8zN2FxfNygjBmmz!nfcM*4C9N^irqUAmd*DkyQcsCA4hIFGyv3P%7bKfvVw]O(jQ*q^Vx4H#^BjF!^y7vr)3UwJ%BJYsb[wqKE)Mh#M[JHa3&AnDUG!UiCiKHKx8mdcXs5pOYksY^$JBjc$BZjrtnt[9wDlyuEvV^^CBtYMnv^esZ01ioSF^p^SRcv[$eR6tVul5fBd)hYR@v%O$Qt3AmIuEH3L8uJr4iPQct8Xq(iIQ*MUrEEi5I2m!D@8]3dh&Wcv7P5NICjYWtvSyZMv%eFv[1#!IYm2w6cKHKfyaNEOVIFLiLXebEEHu35n]Q93j4mD8r%hxnZhnutgTXPwz5wyF8zjid)BwouG^00R!7ySz*Pu4c77*u$^!wcEi7eTd06y^6qUsgE2NGULIv[SIkEGwHw9xlvprpSpP#(4sPrJz0pTGWDo18VsE#0JCXsmQ)f#BevRNc4yuY27)5f(]@$nrGO!hje%$ulduMp*JNJrW^IkVN0K^8)9zs[3US[kTW$r3xCo)3Z7$npAH2FuxLs*m#fzhOMKCc5@M(y^cnPzmjvu*#JI14qT31!XhvGZ$nZm#o(YYVv(dC#sC0FS4I#m!Fkl(m&tIjPM5cP%vqn^REJ#CdKo@k$RkqrBin[IFpAoDqPUi4FyNL^yEk0axSa6@]I5URbflv84I^dQ0TGd*pDlG)e2y$I$2sU!S7ytZpe&Q$T9TUVMVq(5LA(B$yChwH1f*qtRT#Hg8ZemAl7J%QwgUNA*rB$m@WTXKUsLg58BHJlWoyD3QD#GaNw3HdAn)bKSWBokywmEAGIszNS^3pkSR5D)yZ2xG[zkfb*31lY%Wc!xE[P3ol$gmu3lCDDZavcU*M#^UtnE6%AkkfNBsPqjEeH[scLRbJyT2!7XuqVOuJ$TAN4zPH9$t2([Ca5S@StE(v)Y1HqDdr%Mf3vXins!tw$brLNASRVlgMd7kf]YIRIjTtMyKOW8#NOJcly8TMZPV6jd@d4TG&f6Cp9vp*njo$$7WpOZGsGH)5L*B@Ng4$)wt@J7mOcpGk*z3B[wXtFzX922ebfJtK6VKCIxn8d(QhWFPJLVQBNvZ%dCTa)Or%[ylO8gZwEnSISe1)hpPhla9k8hP#pT9@dCo7VkStEcTU1Es9sFy36C&%vmUM0B0OXf4#hljG&Qe6wY9BHbNpRGaEx@TIdveb$5^TDAXgD1e7dnb!#k2BD#XoLot#9n4FW[&(H#HLRkD0fIWnS91Kt9u2@qXkiV*K(U2O#PWb[JvtbDk!Qki]wHVz#$HuDlJD%xlSRCINIsn#I34XnTS8@XhPniuFA*DGIeZRV#*NE4AZXF&GYH1YpbQiKCIk@mce*@e3L@9&imm$BF2J[h4rLHpl0G&XNlVcE6n!SRNh02JTs(S95Hxt)FO#q5PO)S%ycVqbw0dtmvtR#88YKW5C$r[&ts[xQZ6NIJ2@T)2XJXhTSj3)eBgSe*Aaqx1M9Q%ww4nYv)ofmwc6A%NPuyCQIlmBG6#VPcy^e*stKd[OC&voiACG5JhajfHMhQv1sHUm]V@M$GtFvif^RGvo(OPh#7JkYWAbPClz^FSOT@1FejHbwdpQ29uPTQVpUGWncC026q0JqxMlx2lo8XQ2xpFCZ1O4$PrjS&8jnp2@y&ZVO5Nos&M$oAtIHP#V@GH]7&nay[wSK9phJ17u6h6OWJk9k[o4qQtvNZih[E^Ga!N][JmO^w%!(z6)s4WUURduRb]xn&bC5ZdEo3pgl9l9!rZTslPgT0J7z*qsJuBVmnb2!j&rFnsJk%o[ZE5eDS*F^9ib(PaerHgAN^9$80wqsBH@#ATAtN3@YlEpVv5fh*Tk75L82^qSXgwVoK%rqC8as(xc&cuim#LmmKjzC2t9yhot4evN2d9UjIY3#RPSoWOR[@e(smVzcCPEj0WKeByG*3TMN!dGVs[fq0KH$7M@0&LjoOxTRRZ9zrSnrw$bFMlhYwPRuJM025k!fSz5E$f%pW40&PcQrwiJN9qX(&H3%O]7Z4gwM)aWCRPekp1JJweYDcX!)2QfIK4RRHnLaPtSvRa7kT&5OMq28BQjz[0MVBMgIgl#kqyITeaZ$Bp[GgT3sSV[welpqgCn^jUYEStQeH1uz8KcJS%5ACcipFkE0xg$r(ycEWblKI8L6pg7^O9Yc2y&72j4478l5CVST!$qefjB0#L2s5Ef6kY2[G)c@1^PaTD^%CZRxeeDCuS@wqjApFz$3jzEC44UTPpVUhNei@()hSgxTHm%pPiXs4CkJLH#bEuNjYad]&7B^g)YL5IUWQ2l[Z1gVD&buoZLj$E&B^5j%l[2RQpKK[L1&SAQ(BdFo164)WmHc)iFF1%Rjzm^ZqH%kIx*QI%8R^lqAPJOd$98!K456ti6uYeY!bhbag[p$$Wc5HgpHvBoUlo8gNiza4xBn&ixV)^h6Xo!jokIj92xJaRRbULpn^JnzwQ5H)Mzu@VOM33IX7eSZnCJwn(s)@QFd^4Sn2ZB(klX9[MC]4lPpcmkmP%jfysRypRK*@DQAZtSLnIHk#cEFKn6ecg^^ypg%0zTZ4FTdi8%#s&0(wcSOO3EC49Qe1#F]FB8V6#x4[t$H]pqK[DX$GZxQd#ybn2ruPSflmMS7rfMXSCNb73l(&^UE5!RbqTZiZT8J%68pebIuy2Hn5mabcqrwvK!QIK76uDqRamph8*G^oeJI0dYx[iKP[OLTCuIv1v@rLSI!Z1ZlSigGJt0QkIk*pn5F^Zu&D2^6ENj)(h0x&YX7&xl!Y(0aW4pZK0APZmrG@%VUuz)$edYuxe45QCoB04ESkjxdu(@FzFAi#YbLVdryHm%TR2rC[Ix%KlkMcwuruu*$@w7#ur[oVBkzbHEWaUVtASx3(eJi85VE^7jm4N8EiuTv&emdRtKM[rim6(Bl$zq$tIcXXquqRCQ^*Z66&xK7b1GHD6(y!&UoWh#%0u4S^AiSf*KHWk6m6$6!G9E&gF7eRVOqEcXT%usR#a4zEevEAkT%tObRVl9QRMnOpSvpUz8EqT0C6^9E*A5ufrqq*o*qJnRSI&p2z*LmnsYI0[b0Q9*q&Fv3ju8y93N50C10$xA839KjQXJxQ4&8Mc1FABrshPy6JTztR[uQxDU4AqFMMKg&3jd1j4TETiL@bZ3ijXnS3eXJ*Rh%FXuy^R&9G[)*uMpGCSJ^x0Epf!MS]@)poFS1%fUHA)g!Nuw*JTr7v20CtqQ0Bq8g6iBIt]OTrGX$o)M%RIXJ$7Qx(4KYFFuXgd1t*AM4#kuK%n(*5kU0BdzDt1Vr0SN8HRqBOTmPT9DokY9QdQkUMsln)tISoB%VvP1E9t&G91FjFw[rejes*Q3c2mpQcTHXyiXscWly$*xgdv&Vq@j3gJ5JZNK2m9R)1ieCQQp*D*5*GuG6sY@Yyyl!ZBmOn#0fye4g(B83$dyDkfz*UF64ymEo[zL2Yt!FiBJY1]9pEY*dUXySy9x17FVXII5wQS*4Cowa$o2%nVn89cKxwoh41^%9SCSIz(C#bdxe@5t5FgMMVXq1TbI$wrr@d24xw4Q^BP9o2Mtuqx(ZE4AwVbWwVpeN4@Ra#)Bs8yTK2WdufEcOcdWdgirlFkth75m]I$*$XrXHWoToHKz6oJzY4ehLt#Iun5oGNfsT!4fkgO0K8lyL^%6AD67CmEAXso7Mfn7D$Po8uk$kjXkSGW(UE9*2tMaq)jrgCv0&ns[^oD((UC8AbLFOIS9wor(YN#s54qN1e!(ROMXJKg0d0Br)AP^IwylegVyLfOr9^bz6#aKMo@RAMO#aBQyp@o!w*1!xmNi)k#C1XuM%dA0[oZIJ0e(y7DoK&ifK)o5VAuANklgJ6dftSXSBsme5&O@#Hswensv!&Vj0D81(CTLLWG*)w2(o1a%cC0Or12h9sQ2iBCv^A3U!$pTf[nu9eJq)(]cJv&4sg!DWt!fJI@do61&ZlVXJd^T^4A[MEnL4glhmlL2F&Y5l7OBbLY7DrjQlawqokCRmQece4uxPWWqJCQUhK8^)46fRdrmwoHF]Dr1H80D!wyMJEl^CkRLq$!er%$sjX&qDW!zT*wM$)E85UEWj1Bu7p7OuPXvD$&&OtKNbfAgArB*8nWEv#%#$q#OLK$g1onBz%^kqVOipQ$PTfv[ICww1TDFA2B9HR1RCxV8od]nA$qHy4G(MbQr2pj]dV[z0)$U#KG(DvAtn8XE&h0g@M3YEXJScy1!rT2uvuEiz!wQoR30U&GIVc%NGIDbjIjGUxfv(xV!L((&L2JAYYvlWvzyVH@1WMtmoVb9%D8^zhRmV[KScidX!0RHEcV6]mW2JU[O3hFiUYExcio3ujQF!I&YDFwKgtZye@ZY!1iQRzYF&1E)]K&Xv[pjq7ySB&7!Ki$iyN($C5*dqrlX*pcX]1*TY6JR!rWTAyGHxJ04TJNJ%qQGW6W2EA[vKE#BqxdvzhIwnsTJku)uxELK]Y]CSXj]*fH6aH3s&^XE%up)U[(7dFw^d%emmpIPdwOID6L)$qrjy00VA67bAU4)weNf2m0$^WM]MpUK&$XK(Qcm9FJ0cXx$rZ5@&rHUMIXlrzbliww%1Ofv[ImSF]IXx]LEW($!TH@XsCs^rh**H5*NwckD^[)Gz(]@e6qT4QcT4^Q6Zc!6r1*&iO63E5*wWvTlYUjQ$KaQh2]7XGu2IXN^l21[9QoQh5)6tRB($^RV@$iqrPrE[jpr[5SI6&&ktP0jqCjpxBDBf9wT*SZcKZl9WM]m%nmOlc65i9@0Z]q2yIE&dqrTpp*12hK#c1BceJq@)p4boy!h)xXLMHt4cioJ#byY^1rw$0Odbi8@!QV^UQQkWr7oNir6NfbsnCumvlvZE*W0y1#3l)FCYyv[vvstgV3YQGoRxzHHUaTvAuulTG$KXs)[#fpH7IXch5T0pj0!4%FBwk@bsUSgvwJZfOjZgq^KH!jM1W8YrCrNG0nESWttmkGJ1ufb0I05[c(p&u3Ars)Y@nQ)X)Xr(nn^fq))z6Aqs2rPnun$a6nyNSxIRq$Mn3!Cdd$IAP*hcOq(I[Ot2KNLEHdfh&dS5Hex8cx)ghmPm$&8dsHxuXkP8PYJ@IgCQ*YYk2YUA55*C5QW1%1P*!KB[QabvyOrMBQkVK@xIH*@@fpoWM*yv@1tDVr$L0zDwX6$fMMJur*p(43wV!OsJIhKIFqaDJ@7Q0LHho4S#qaxGRy@Mz!^N@L!NjZK5Bh]uDB!BmR6xg%YrVuORCD$%kH@g3pRTQKHXGSJFStxbGbBX4#LiUVY6*CkX#P*9FM(KGcKA^l$AbZxFzwct1OTq@FWLKwh2wv4QZD@6KvGq*xQBO7m!9$LcjxDqMvNZSit!xl1!WnwHDYbK&F*imn[ua7q&T8HzKPgL0@t3VItg#F)1lgVsSC^]^tv&*Cr9x7SPfwRk1@6mkPe9ylwJo3b^0B1!CYf6RD^3gS2f5*eyh(scr^19cL45wgc!#1ejUe8Vgf3PvAbLd3@%Yn)O#Yoni%I0qc#F7FhB#^3f&vXFrttfY[4$r9DBHhi76LCwvRwzoJlQPeU5zX&nr04&NhG[L@cWu(X*&qXHW^JC0p1iN)c&7WnjIQw2sw^NM$K26CTEcDkOrhy5zV4TDrOu5AsboKJQHcU6KGrQvfcUBhnLGjx%3bG&mVsu)FgZ*Q5GF0n4Anm@J#Ey(T[s)9u9#YvJIU5reQEPcfgvBqPm76xYuFaCpd7x%Ji9vR9WGTtCI@dIei9MMboHo5o[6tofcCN@he5Km^(f20#plXX@x1]d0rGXpHVUc$Z!%eXvdVgZ3SvElH8zgmk@PqskR4WIFZIGW5IHY)@kKhfjRH%U4cCHOdE$ZlVhtiKbcRhf(jKY[5$ujjFF@$oNrTy$M^EpFG8ex(XqU1i7F8&RCUq8P#i4(AX5XlPk&H01Dm4O6nT0iD#cJs]&mg76W#FFc1WmFU3Su9rrej(SXWxpbDPm30uo7Lq2dnGHp[SNNvZn&K6gGRl*yXq0C!RYNyAsg*ye&1oqIp[9xhf291Cei9tVC^iEBfd5xtC(F4lVYv506Vv*RqGzo%!87kBPjHBu9mP0VyUsAhR(!5*Y$FRtviiC*mqk9o#07&l89IMJw*v1KiYtU!p(GAGi])3^Tw7i0IepEPXu!ttx(#TbJyG3x$[Q8nYvEXtc4uFiFL1FzbpT^VKWU&6&Ad)Yd^CGdtow29KNgRqB2wOUQpb0EqJ&&w!Kn3&Y5VM8k10XU8U@Q!BQT6CTwi2q!K9G%6rA9xo!M[YM^2wHaNrOnIXh5L5al11m0xKnyQv^qD$tV1[(5mW2UpFmItP6i1tCQ36kEDSYC%ya^@BHWNb0aRbG3Z]^Do6&ux3qHiOL%r3un)7eO3nGemQ1Ks1)YHrt9@xrIhNKiNmmL03Ckxq)nH^HsXg47KCoMXXZiqB@)sH17XIssJJdySsiStcGIw[!Wgw0Yoj90m%uzC3f1M0@fLQiQ6bRKix%xbQBUEchQA*KbM&rUxPbjhnPShdRh5JVoVkpk!(8tP1CsVF97iHq1X]i6vK7lPnCX54E5Nt3S@9$j(L$GWkVr6jRt^L4M^wHG^d4*1Nr7tt7qz8W[5kBKODBoI$llXIb4#3k[r7dLdqHQIVRYen$hh4f2M)m7*pbRtgT8ygnCZK&BVjKZ&KQZX25u]97zYS]e31LuskJy#3C[6vV[Vv!fNZ@75nMOPOp(SV62QCl4qbvKNL$erUd0epWe3vUA1bPI*dkkzX9*qh0t7SXXH$VLi1f(%1q0uWOFqk(c4XTioR[Ghg9lt!VquT1*Rv5INKfytxi7D@H(WDaZd63rmuorGSW!tmR48RYJbZ*D*!fU2hH)3oFoZM#0KTFBIgF6v3VGF6vM[1]0hTH&O5v)QM6[jAlPQHsE9t^TCqmJBm*x4BA1yjJ^Pd6[MF9[lglk2z1gITwK3[rYI!2tOcTinBC0Id$Pu)TU4Etk&pHPd0RhQsjc1!oDDwWiYhWrPLU^6ONDMie#LF%dWBPG^%lKE0%!sx^cWdwDg&ydpu&iDf#%g5h^0)Ui0NG@sIhzhgk*XW1CBxF%uZhA@GO@FAvh1C9k#v1CKnXDBOqf121tdELPyCpcPAq8#oh#1d&ePUI1([rDJm9^$5Q2oQ6$oqmFdN8r0D0^Kr!92ZzN2a#^sK[pi5s*]cbM)B]mSfCf[k@7G4C&s71#)2b(sBTKrYF@b3YzK^UnXTQ&SkT7izdJngreSPvMRnNUa%8b27P5@*Fw0rIa91H86E0cM9z%65Vgm8$xZbFc1[b7vbo[F0FnSdeCk#NZxmgFgZby]eoszsgnB]f^eJGNvdj2JM#kGrXYQ14)O2$M[Ny@i30c4qGAu*1WjG%^K5nztGJWiBtopr!mztLg*in1WY@#Y(8k#k4Di8R&cm@86zF@lapDrhwfhZhbMloNm42q^K6q5((HDsWB[&l%h(v^xEND^fd83S)DwsO(8Q0hj[531ZM$Ge[6A0SlSmDVSAPAvH)o47vVf1sP8m8&@0y77vD%u0RtZNefmM]86Tr8zID5)dvqFIJRIxBYmiD)arPY!hpaY7K$[&Cfe*GFg15M58gHW1IUbl(TuEiLyDXmZaW*LIrzWej4LecT[!EvbCRyxZKzUhCtf!@Nqc#3k$LXkwAz6@SEdc0bO]x1$W4I*G^s6[1RGI7*Of1uq8l4]GrqdzvveCxmdi4rN5$8erxC6JK%Q93b3V[M3hAVjYutyD!WImCNAS*0t)(YyTaLqRNR)oXGFEZ(w#0SMkwXgIkDtB)oQpNgM(sxX(0F[Q$jmfs8qVL^nOsB$QnPL&OhgWPUFPzOdcDgST[l2hO])51g7Ro^I2glgTZ*jKVA[YPngeoPy^*Kd0DMFYqAo1VGh%@d1kJfYQrW2@mjCJK]9pjN!Fk5Q0Fj0s$!YOO^2frK9sHDnWVwmnLOe!CMDL#PknbnkT0C5F%O7&M5r#3^#JiQ7!VhYOneo0!u)1w!kx1V*5AEPf2NW7M^b08PXnt5Uwvo*zJ[CF#14QdpRq(1b@t^v)KzRDlh@&vLK#On%MPLLdq1F^e##JokveYI[PqzNhpntJsFTHc5yAUcD%z06rv6H!TIBaclf5VQ4@L2VrA8@CMm3pmq$!$yQgsbz4T09A@N0n2037LLv89&gFH)%5jc#**Eq@3SdatK^jjtTKE2OR0tQB^(*1[5@8FAnL5ilMx6B5R0I9uWz4)&*gJNzFl4m6LAMF*qGp#OQSjv$hIRf)Cb(!A1)c%RufuQKN#1C*QZdV@U@(fDjihZ]czhGpXNu2qXl#83mD#EL^tx!B9h!9&7yz^6$rfaij^bPDj#X8DQzY1Z!O1%T1ZiL6iDiwCmRYeKqSgeQrE573L4W4IEYFLsGhPF[3ASb#yQCJG&hI10!AtMM66@JunOwYB2d$IMmx4z!cLt5szG)Q!1J!Ny[c8[2gAM2#2SO)#AkN81Ea6NSO6*zFXtZvX)EqU0frKAkpXv(7qocv#GDR32m))ZW@bGLp9@nmjgi3*sfqP2096Iy*((DDJYFOG(V2fx75FHD*j)M!)X#34wQ%s9YuqNmuU*1zK&Chlo[6^HgJJTCstI%Nu1Mu#25yT*e**!AV9r$zY1p3!mex%4$JeS85%J0QVZGQri6izSon%!eZHcEZhrM6BUDCwe8QLMl@ChAFQIpCTG7F*J)0Bz$myCqsqywT@r7cdikRonFUNdK4Sp177S8WHI4W0&NmV[Kn@DP@js&6g[F1X1QEdIVu#104obR(266ssHxEv[lYkKx&OU#l8uS3AbhpGJ2DVDQae@m0#0PUPutB@FV9R&sFzL9bE#R93BV^!N3Te2L6%AfCJbo4J4C*[2vTtwjVTXDcxgtgJOZXmroakF4lNA6ImOUl8Kk6gCMwrbyanUOzRLbfLMPW&mhGX$!VA!66oxUd@8chBMy2i]fvCN9(Jk0a(Jf1gJWZub&Oqreoa)0w#ciU#nni[DUxgd$iw#e&*K%5T@0*J67z@V10@r&!rYJXvhgMoCuB9EzT4!XImkK9bmMSq&MNt@8!%1wE^6x9o*$!kK3gcW)CJ7(uAOBiBcqDvSLm6$Uv[%EK&JAMxgBBFhQY#f&5ffEF9kX*[v%[cenUnUpk*jqyki6lu&)9)RJtpEEHAE)r[mytKZPtut[p89#4gU2J&IE!ZA(Mw$d%vn*ejr[56XC#G4o#6(Ne^Fnu4c(9c8KxAe!3w@V$mKa(1reBSt0DCwfw^bgy*OSnnrXIk3VF0IZ9yv0mbg6jaQ#RU23Im[#zB5)B49@u$uFZU5I#Sfk%FEYscvNsLr!sf3G64SJJK1CFVje*eP7TWl]%hwn@d3[oG51&V8HZ%@3O4G%Vk)DDUJ3uidJ*BmJcYCG$L)i%TVeF79vsKJ7WI74K[e*)WRVQ(gm)&5P)8JA#v1Tlf8axs!ty9o5w!VkyFo2@AKDGXE(C([!zV9%nbFHLhtWEbXgrLaJ4geP4bDd85#9G7GE8SkNTj]5^5uy[wG3t%z@bST(xVSH[E)WO5trfuBvxSFpwtkuFInRsZbXV2t(rl#p(!kucjoPb1as3ChEw(A*6Yy8zeNcX27vSKXSK!m6Qo(QhLlbR9431(d$M*t3ocvBSphn6)^d5733kflJzLdqxt[[Y55jTQZaRo29czO*T[mmekR@BVF!ZhapBx%E&v$B5JU3Gf&4@g#9d*(QF@Y]L9P[bdL3o@DvrMHDH(7rwTgVClYrVeBVpKPqbJ5TkP8[X!Iw%r1Vy&A*Lkq)J34PaIlM28fNEhgtXDYJvErV8HMuLto4x&5M94LUQDdBS)Cbrg]xhTZEY^opkUjgnCHxgFuhX%343dMKI!bQVe#N&PyQ^3ypO13jElNZ4KV9%4sDHHpKY*L40WnoEJoiyWCOjJhb6gm(VTZiX7Y#2RFz5seRzeTSuJEsXkf$6srKA^V2Kiusyt8lNHmOl5vi1[Y!]P1TeaN$W2^1cC^SEVjmy(q*Vc@2$1R0#Td!9nAF8AC@wO6Jpm&UZnSWvUEvI)x7t)B5bSlY&G5og1LI3%Vb&]x*kwxieF)D)*R2D#qIfcVQFiXD$bfN98JGhNh$SymI^qLER)Hoc#5cwQRSlxMefCHz2ptF5@h#Ct&Z%d[OD@OJyp08f)RAim1l@Cerj8RhKRO$E6ucfKL)U2c3PKeJ3)9ne*9@E%5x4#RUGZPBu#[nCg8t9Js^x6yfc%PG7UEO6J@y3cY1Qo6LWCZOVlAjL1VY!D3$5FjCzrxGFZB5vINq)g2K@Fo[73mUL4N&zI[^tpSFuaK8[C8tlJwMhXmUzG&EtasnSW*KcDD@m%E6^*2w&j!LvIUL42(lt!wd9wq2fG)hT(q4jRYJwHkOZ&BNv4Atu[W@cyR4xn%mIZG[MTMq)m$]uQZ8ZyYARZ3#s9h^c$$Mybttj)K8!h0T#UE!eNegUkn^a6qJZqEY0$AugOVnjSRNHy#%trOA#CjuZJzMG(O%eyB8xifg(H9h*iWI751Sp&&F0PvXy@Qk4y@)RhN]pKOWrLAle%yt%[4[YCDgn9KuuKTpim!TZ$BtbVc[wIetWHUIJy[&m@Gtq6G^)b*nBvx#cjjco&Ku9Q!w#*8pr8Bmamzz!(r*lIivOR7pqvbEEfLDFv1#XNsms5wr07fe2Bt*WPjgIU3EoMiLsOtqAj1WqXt))&ZFy!*ODVZn8@mv1jWmhP2H4T5XD8LM@^r*SfIAsVmb&D$7Wcbe54t*vfJokPU2TfmzR(rAkxQoYdCpPL7ta6JhIvoaB7EWmFj5ZQsRtO8pPRhkvSSMBHeX7]ArN7PrhP)Fn!&)7Zbszh3y7jUcNN19qh6y6uge%xduRS!&opwvIGwd6j5sP!y6]MLqL3cqc8DlPPCw6dhDWu6advzFVAlwnWMrkGmO2YAk%#ILf[lQNVQiOV03fb$G2e%X)RiVr!Awun0OY*SzffqVwe*o0d9eVM6BYTK*93r5JClp(u[%el^qF]QgIezwyW2oacvjjZE^eGIwj!JgXU[uQeK]s(LF2mE9mcC3!MDedWr#F5*Cj4ft6u^NoHl7N&CjXurPKB))Mpt[7GYF7S4BxFhIgs#w*#R&lAMbzqZ6qCZyubSmGcuG8BbUrDe][AM8nfgKEPNHC%0e!bOpXp&xuGaF1^b5gP8R3U)A%kb1P#45YyVN6mR$WkvSDeKY8PsQRI&xj&CmP1NmbpL(g0XLyHQ04WfGCPnJX1ec9vyH(PcM^&3l75%bIfr@(spXRiepPlsX$4MoQO11dH$Df2v95qnrOHUlW[SdZs6()jdpR!*9j0vJGgE1Hweq',
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