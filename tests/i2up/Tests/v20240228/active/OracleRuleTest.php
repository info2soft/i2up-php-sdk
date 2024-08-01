<?php
namespace i2up\Test\v20240228\active;

use i2up\active\v20240228\OracleRule;
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
            'key'=>'MartinezBrownJackson',
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
            'redo_read_thread'=>1,),
            'bw_settings'=>array(
            'bw_limit'=>'"12*00:00-13:00*40M,3*00:00-13:00*40M"',),
            'biz_grp_list'=>array(),
            'kafka_time_out'=>'Bf8OD!m&uUftBThwsubBD1bsS(QT6WcVj3pjs1gYGP7ORfUT73om[L6q)OJm^*Fav!NyT&r8xEio!X$WkW!)opUCBkYWEkIs%Ofplb6hts$l*(W3T#vAk[)(MX9JY#EFuN]GlJDK#[&*Cd*c)eArVSB6S1ALNS!!nnA6sZ)DX8LvFG$b&vSsg[J^#[umv9x*RVgB2sAo3HmfX6dQP6jO3Ge7AB@nPUaL5t)J^gHmzyr)2oV%zqKAZ8R@x)o9LdY73C&X1CSXrsQIM%tDXb9CA%GfEIa7V*85oKKYU5KbFL7bPkbro[T!M%D]d!TMJh)t(DiRZA9bCzBjIDj*rYS$9In2dtFOj!j0xXz%U(JBvulO$]Zd[m1F$BT^oIysc(#KYAnbIr059*Ifv%^H6TK!8i#Vvg*T5M0SxDk[A6l8YB[(zJ(&mEh^!e[M1b5KN@9$[ioPCV2jq3Y6lwN@gt6fFcSeUh#oY8[4ng]ftTuH1bXK6wNd^iSrm8P2FX19^&S7zjZreO$a52^odgm04![EpkQEkKMPRLjalugfBKNK33LofZMb!LYW*zHnF!bMl&Zp3exh$CnmkFx9mGiA4fRLpLty[!rrL7HyB1BLe53w6AxzdODzA0&3V3wcYxhLJDn(UA)XJkvCnFTdgE]wTXyXk*B@Rdf4NEVSzg0qC^[9ky^)UC47M]5BToPf$Q0hKL5jZyB8im2QV*#)MCqj1@pi4KBjQmtVg76%XmNudym!sYsMz1VP@0^ozrEm(@]Ud[4CROSQ)0HHBBliN0o0gaudfe*1xOKS6QU*%!(Gnzu2Z#Z01C7fG*pte9[g%M]E24O$b!p7B8NxLiU)^Ih[Sp6^T#8hCSo2Ezwl&yBxy3QVMX^Ds4Ttkl%K)wSDeKo8A3rc1KeiqeOzjP%tkcvXIR!BohHUHn6%D$SfyI1L3(hH]T#lJ$c9pbJJPJPpB(*uqc&u6%Yk3pK[fkE8Mru1Gsd1GGQLVJyHnj)c3&Zb2N7cdLJ$0ewdaU$gfYN[@2SRvz5mjHrG06jI8%cRRTYl2DYXZcme8sGKndoH*fDOVWCZ$xj^UJgRmOg^FEM%uzZ(KdP#0rXTuXTz2134$nopeTDp[jVxjdV($yloOyuUM)Nr9JWxAMuc$NZFTxsq1$XV0DMHVDlNz2QuGUuQQ]8b[7RKw2AaQC(QM!e@9Z8jcDEp2P6s%v1!i0^#%qER%gigILhJtK8*(h$#^ECpUQb[M1LYhBOoU4(jk7eJi5KbBvg*MMfsY%NxLV1gD@@tN0%i8K7D&M(87rPRm$qSM6Wczm6$&Xd$oq@MgWr$mPtSx!QdYhWy)jKE#(()APFOr3Sw5bcGqiKyeJ)WWk]%jZi7#CR*csy&%^k)NnU5L2VPqneLrv(S9E%YbPzLV#q$%fqA$@Evv[ObFOVGt])RF4ssLSyzGLLQt$ffHiG1Rz&%m^GMJs7x8^Kwnt3QgpJ(w7%6DAmc2PG2u*hwXLsAwgVh3M[0G@Yy%%Wd^qQFfpb*96fJB9Z7Cs!mX1#S8fFW1V5xI@3r9]n00bg9mlLl3c982Z!napQuic67F8[lj*Ht!cP0tov%78U9YlMlp8ptBqJ3hA7lfKYXImVo6P0Ul]q&pyUE3Od#HWx])2M87OD0^c)Y&%lF*gkrSwkQzyGuKXnv#8xvr#oBm)$[#n)htUHOp73UE&rV9vtJJVy!qyYb]^qc5r0tS)A02msw&g*w13QV7%^^%tatdlr4LiA2n6Z*HcZx%ReQJ!RXRZM2At78qddhiCeh9fP$B(3agXb4uS*YC5fI%wYy&QAOBuPnEj00)3luCQVbWG&)Vt6BGmpMX0vu8mI)gd1(5k5rJ*W0A$oY9Sp1zkugWai0RBzg*cNHn9nU[x4j0Fei7XU[BjwGKjvS3&1CTQ7bAF&L#K8s4apge)5REgGkRj81ETgt52h]A1oep(@@H0F0byM7qcT]DGs!dId(8COHg*WNkLl[S4b&%TuCfof!$czzISBp)Y^&UYDIU1Rgy&l2wEnU7FqL2k#TXwvIW]fgx&nnwuT3Mc*r3OHVV@y*ixoU^3m#ChQb!u4niLpd^(R@m3SDGvPGz(*lHv7aHPv2uExDpAtCL)*GilrgK37UsWKfzd1%s%9@F(8VZmqvJBVG(J@Od*0X7JZH%MO36(octQC^PYRte5%xgfjAqg%pKkKchpfDLRO0EC(Dp9tDDaJ46kpp0c2KM#31Qp)^otptdr7JpQvgUZ8&bUsdchL(oecTmY2xqhoc4lkEHErEpV6o*A7ME5o)bu4mgZ@REQ^0CI)t#j#^g9YVhU4N8wSC2$BGZpWkFyxeka#ZL!M$4XljTNkckF^7ODyJ*QtAA26fVL%ZtY5e4!Jp7zF7VyRtYQE**H0P4mwCc0yL0i!QKzaMyFQSy$MJDv6#%wK!^rwUh26ezuNUR^I(r$cR@#H1pmlcMCEf0L8g^nX@o!Ji34ES@I#M!r4$O%ZB9eM)jtK@Y7fko&d2HF*$g(LzKfE6EZyg$405K@[f%*FKsx8H%qxTiAe1W)r&XNIevx220yGX%*ZJL&BXJYqLOD!qp$tDjbPp1NkF2VHzs*pQKhW$mTMgFiF!yG5tE9s@6n3CxjvsYLIAMZ3Db#IIM#WDCKM#edx%^&^Sx!PAW78ztAAU7LZHTUE7VHv8!EuHjbp*J94SQear7Bh*]mtfYDNl$cw!NUwwYec]RhMfj^R(k[(QW[0kWr^wBF8BNVg5ef43zfS^P669MDL![!xPWwCqpnNp(K]vwq36v6dEro[SrqtfJW!LipI!cR)55i2LHu72@THeHUIZ0fz*A82nPNqmZ#cG6!dEju&UT%EKKs)(&bFKxl2ST0L6Y2x1IkzedfWOjlt3O23(HPuiWvrj1)A1nR72KEQ04vueVarRKpzX[nbdXIdZ3^NtxP5pWPTJJuq!e5v!QxzMT(h$85EOJZt8NsqSF*Swn9dC9f8kT]d[wMtN^lVcVBtDw8(LNklEx[VRI47ThZAO43V&8&DYVo&(#GYPC1qZ)VFk553t7Lv%QfGn3[t[@$Bbh@ZbaNBA*5R(n4xz&yvDULaRFLRV5NAQkI!XOq*1u#5@ImW&prDirw3OI9Gy(utPrtN$ny0SGnfYA%FYSV$xS5%8mtvbfuWLERLYgx)zFYYf9OjnTvDk#eLMH8FtqTbEQpb49N@hL]5@YbI3d@Sjl4EcZXR2QLCFH39moiGu#b[4n1YmsToKY]m4Z%lpkmu)a2SKmA@&7tjerdnf0Zb@nzbJeMwRf@9kzhTV32Efi8j%jQp8tKk(sHwkKB)#xD[R^kcW^#IFtUDi]3Jn@nBP@ed5skSJH%Mr6[PvM#E41U!^r78rKI5w*o7H[S846py2o)3*skmgHR6XdzDiK[xW)#bwnu572NURWcKqVYGe&R8!cdsIQVK#gYZ1ZYs6ygedX@2FTDsS8FmJKJFcW50el)^hXEuiLgUm*!49zIQW[0$#D8xsGhGFDlC^SfP6fCfLfbTpenQzpUtMBiqLL!CVUgJR078Tucbuq2[8iQCc!uWzZ*SJw[4D^(fEqdDAJgfE2LW$eHQg$W&G^9tT*co3ILrfAN@z(EDg&Y!dIhUv5TD[P4rpxfPb$M[TUnTn[eodgLpbQxcWdiHJY4g5Kp[6mQ(An$AbD1sZdwjdjvJKu%fOJUD3yCOK9Qtj^cM5#At8DNvOK$6zbXzsCXpk^TcmlKlyyjhUyj0ch%09D^DsQ$CpzP3ITR1s$Ng*n@qQTAdOAvB#s]LDvXpERQq9%HJQBqxKJYYo#oN4R)LVFzq[3L1&u4Lzn60Cs1c!ukMCn7sw0uWgivVZU@)ucR#m57#fz[]phq)^gmsDMVAgdGr0OYweTH[11IQBCdRf[UkIw&E%mXfQI%qKpXiY(eU*WN1Q9gMoK%1ahr1Re9C2@6AbvlG1%il0RqFYTNv@Eg@*]m1PN@xM$lcOtb5CvAUT**I[gvL6X%03SWEDS2c*@[hIsmO@gqb$PJJ2KrcySf[1EXYOo(Kv]rcpJ*pYd&j07V0OE(ldDj&9x*Ek(7T3gdspJF5B$[fey^$WG5O3oHCWMSyCpqLsLq3J8mAKc[JWMhU$WbU3]#Ce9TomAaGkws7GXw9[EDFP$5Z8XCq*7rqUZMVzp!clb7QxXUP92^RgjaGj1v%BPu2@Yjxh#gjnJ*3j$)vzAFLmjGCw[][[yGzX4zOfX9A3QaL3HkQP[65v#[!m^kBAiNEf]Jz7buMsX@(L2D[^e(R%FiC0tC)%Emgr!GUVK!ScLI)nP!rE)*Lc@xnc766x[fNt8C1nsUJ5T8TQ(kbM1o6P1%4RCIcXC*lwBEMj)1Ts]hE1NI6k24!kj]QBpTnAVGVCEbzCjxC1x(ZULOL98Nm2GI8fl(#I$3*ri0HHRGTD8kU%)hE0DdS%8LwV#HCf#VZ(5oSzCRu0(CQ^ibnYCZkl[yo9r&OB&nr8jlf@A5R0AZ*cbwIT06SQWquVg@Uj%jJ3[mL4N3r)t2fDjZg*XnR(crc5^77vQVN&1fFvH%u(n%kKywrwi$duPEg6c#EVGD6qiK[K@8q&N4%H8o#4I6lBMtP5&U5Gu4af2ma)2nxKG*@(qG6^c!Ej(c)e43a&JLF[MS(sVf81C$tl$magzD@i[t8WfRFmN(10uZCZc8zFObOPDFFDRpjEY2AFkp(k@L%$ZSWL02*AbTRIxpoHvlpd01PLt#x$n]P&(*@*Miv&]DkP3n62Wv38hccfCXhr8&BQIep8$DthZKEO0M#!9V#)c5sbU9FB74T]Zb7S]ITUN5Qrg5^xW8rMtG2nt^tV3qx8(cveK4*(OxeZ]VKPoTqXTU@JfHt9Bjs1Xs9Ufgd)9ulaOvhuvDH9$Fkolc*O#8HEW)%W8aj(BUy[@T]n95ktScmm*hk4![)4h@fwCNZiZ6jc0$)[7c&(673vudniB0Mxf8RGYx!OfUeA9pEb4[kgxtT8yKfhOY*x%vN(LabYAEF7Flkng!HciXLK3EgUsz#4!7n@yjqotCnCjb8ASMxOAFuW![G%&0IxfdD!aE6yCY&ndGr2DzypPu[ndAC3n3fWf576STHXcM*eaB#oqYLvboq6POBtf*jp4wT&WA*Yj459GmY#n!cBoxQOzP[Vh%n[2)l7tVNh(oxs[Lf3liQvKC)Vc1P8Cp7dQj0Q(vRNFkPjV*kjS&ILAR]hm@h(EK4eDXsjC*n(N$iy0!@MstP(HPWDm3K]]$wDd3Dd9vjr5lmpzq)(Gxz^n2m4)M%m8Pzki$LBySAcr$kJZk$ongQI87WlKrOBsT*B[D$8SOsWMt%]LPdfG3gJuX@rXEV)[SCPVu0ZbcnkF4THXCC4u%H!se)Hm!gsOFc*8@AIueI2I6!ge%6yhTFOx(Tm&iyASWwGD&C]XUw$vhVvrcLo23v0A3xbj$uGui5E3iLi7[&HK##(Y7Gt)vhZd2FBIK^#8KR)F8tcgQfn928e7L!E@lbMLv^&&1lXhCUSE$R0kSM7hqp0$O7zA@N8O7W0ChKWj0rjmJI#&Ufnxq%E%Xn5x7YJ[hehBrgfJ^3is*X1laDUYmxl0(P1Uxwe1ZO8EWLVQ1WjZFIpq!@ZryfxCGeIFJUSV$2FK()UnFgyj(LX!K67j2fgHqenJW@[eL)vDn@Jz1YpCfO3jh8Lrl(P6iYb2bf@]9W7KJ55qr9&VknG9j#om(GlnI4Z57[6&EjgFG4O8[BBAfNnh#PU&9X[1loRC^Z%8lIZ])jbgapPvl7VArE1I8jmu&7FE#1S3bF*ImSDP#7r^%e8!qgneN0utcK5oA[B2GY([XKc41R*Jb(h@3JcrEW6M(TDxBuzPCCG%^2dCHu1z87mt12ej0rSGSwuZ3lkTAvTS&(Tbiwkr8hYJ%7q^mt!MmEfUx3Sgt$4DJ7ceTo&zy2^70mfZANcyECJMTaT&grmccug!TD2]!g!2PAzGT%qV66*(SN[fxlxmSErw[isbTs7Ipsx0zJhgrpX6Xkk7YcqB(x^b*Riwn(drZkvO0mPF%XYOm*eHE4NLsHRWF0eCLj^TZ)t$Jrz7o!B**UZgcnViMwXbE(CM$^HoUxvyZkjOGR*^!riKy1QZ$eJlfySHEvHlU7F)3B#d%YI&oJB[HJD[E9$HUIjXW@(AkBgz3IBBPQvj8!2tXlbpT9sfB%d[7Nnpb2sN7EGD%9X%8STynQ)A3UvHb6#RbU^#WqS!hd&z9m5LYpWDOUatXx^#RT62TbfEYPc(oBXlCBPllX^qE0KBkTAlHYu]v3cc$64SN7Ak$k#S(e89fbg90aDLFxzBX5CYC(Q%50bovA9q1TRREgvXaAbOXetIO7Ojy@n%$$]kgtL3!YlSv7y!XW78irdOs0PDHR2kj7fEE[h$[28F@htjRu7H^l)w0W[ZvCh*DYcc%9Coxsqs^rEJs8@qSz^dOsOPm7K#[YH$fguyeiyfMOqv*qOCm%LWDw#gGlUb3TtP@bC6L4jw&RoPUVl#hAs]xwzr6jr5Y)]Yi#(Hki[sVI&P)KR7NWmdFwMpD5xW8&6ZHKA&t0kr&*&9fOM7Ku163sBiexq&D#deZiN5rl3U6R]hGbsePE!xlblrl2*4crjWot6KQuAYyW%TdSpuLHTUf42a0l@Opj3)zJxm@)W3s6zR3t84gWldoFF2g@DZPE[!E%56woXzHqLHhjwsoctjpj9aC$Dt$fb!H@nB@S!GjJYkdFqNQhZWrbtd7[xtEfyGNgx&zB21AX1RAi]RU*qjo$jdQthNqnY[Tw7gKh*R%wpP5!UcWJy7KpBx^ZMjRbXhX9ww4B]tlUSeE@z0OHiuV5TLkM97!7hL9xeGa1RGiR$f4[LtJ5ZXzT$D4][M[jmdyzuRemW^PdtS3Oz1s%bh6t*T$!C#X9pGSb0G8b0ZrKTxBd2qPlC8$RJtREG!jFzkR0HA1y!NzcyRiQs*yHHRHi0[mgPNUc(YXL5KsV3wNmjL]Z0F^sjEK]l&!k)OrWW[F]W#7t2twbnmpEJM1U2%3NjHlVnwl&O5IZMg^!6WFpxmxPd[Vwt4ko(p8gF1O0^LqpEX4uL9]CB@SrL6V6Mf]Aehm3s4IJwTnPh8l0)HE8%Qmckn2UX!M8k)y[e4jBVeaHf6KIK2kWrBwTLqSIJb6)PDspiz8[tJqa&jYQC3ck)#6A$45AT8vY!kMnwidiPImefrlk)W[c&uxVQFTMKI^&GEInp%vlMvyNNR2(ggc4kx!qCXI[1)&M8*5FC2%S%#vjNi1ZxW9YK4gWNU)(R!IHQ(0$4I^Mom4jhnRVsm(U0XIj[z3MU*hFpw&bXyTzM$YGwtmps36W5eqoQm4J@&P#FbS2yyrk#B[Lj5lW!8tj0(z9j@tmVY^q3ERJb#AiXZZW2N44^BISQhlOk&PT4fzfzW#J^IRkm0j4sM8qWck(OuRHrQY[USRtPTbZATcCWh2K!LgIfQG$MOOlzI[sPP(F6H5E$w2rQZMbKIe#@h[iCqERnP7u#7d(w8$d52TIm^SwkkwttfriAXdu6i^k^QhT[Ld*WI0JOViP9IFG01LNwY)YhmzoZKHfeJiUJ7kC0BeuwjHbYbO@Qv)fUT%&qD]%3DVhIR(fS[cR0$uf3Kd1]XUOmxi0n4r&NGetT9UF[)hTUldtBnHlaL7MR&S^&dXxiyRhVlq1hVUmV27ajjYKwAOb1H!RJBMyUss@DXj$dD6zK#2[40^mdAQ]ihpi[qXIw0YsVWsC@QebgomLKU@f5&KWBrfb*w!5Q(Z(abt01pxr10T4!RY9Jqn&bW)oY%fKml$CguF7GaMc@*mkVE2H%tH*f6(gTj7h$R(2B9C0ABL)Jn$wUm38C[^81$((N$chgpQ41xIPS*z0q7lnl8JJjRbkGJ5tT$AmwRHisWxvFEebUL6MLWHjUV3Es1*YQJHXwlf7(Xz7CVTr#ZUn%OFos&@&IXve4cHsXU5Z*p99rWiqR(06^tK9X@pIJ$5%@i!FL*0@C*EU0kS1!ypRdaWKXNIC)EDXOKH9eXw76WilfE*xdvq4lq!ajUPK0DgqXyj@ioG&[w2n9MwC]L1nYz&4ejF7*W[f%!P22O%iGfTW*U1[e$*GJyW@Z0Pd!%3AV9j#PMP^N55Zil[(*GdTM)6$lFKy4S#c5@NJrMJ@Zb32uuwojH^rAPDLde!XU]#s2ofizC71Hhhmg%3ZK$3QnF@F$4@Z*&H@wXS5L2DJR8E!HAn74bvL@6u2sc16GD$Hneih0(cm86)^WY6PIHTMeDCA#g0Xi8FdiG%coTzbz[F1qz6$xImmGVmE*J!b3!LOn6d7$l94Xc00Hgit&4UEzL2lDi]c)&PmXYfMLFoBwFFGVEbPq6P10SwlkdKyp%7[2cSQ2SFt^%*ji9tMjN$0cHNB&B$)q1&ozB3Rx(**[lbr#Bc%B&V$LwmXTsX39^wuZp*k85GbQTRS2VCRUjiawGdQ7Q&9DUy#whVIhltAXD788R#5GW8pkCxMCj!(d395uLVx%sg1M3YfAnl)y!4)@F4U^%f(1hvdJTjvfisv!jR4cq3lqDsA8%f*[%J!HP&ou[16elM[&UbkkKZrv2H3@4)dWjFKqz1Zg7xm3H3yO8R#QacozODHXX@Fek4xIj4zoF%sL()xUsxy!fpozeq2zR*zJ*9Z(fNkwfQ9Q3@!z%bXQy#jgn(CLqJVIC$@1hguK84V%hfFnmfXTfqjbZkFve[#K4smBmof]!9m8FgSBvbK1Bh3%3MQ85qTO8vfUAp^Kfsp%lKo23tsrVfAS@KQqQ63nYKyctX1VWtARteP%HgT5J1Fwj7!h5P#G1d0%uJ7jZ*^)si$KR$MVP9N^fU]A4WvK)ig!y7FfECyNr[oHi@I@vgy0Nm0d]xe)UI$5YV!WVCrk!3eJREE4%kT#WjPUt@e8yxDY354O^hZH65V!sLc%xK9!Z[RybgeIKF1oPkcOG7ReRG&61JFwOVm9XSlrTOWkj%bK5)i^07KyoXpoF08IDBAFtZarQKyP0dFQHzwW#G58n8GxRPRtgvgVfNadh]UVp5252&%#%i@qd3#BV4dCPu%C$Gd)JTj@k&mhw#%bAm&#kocbQpP6j$v!1k@OTPFF$H3n]r9&J%jif*bSe2Io#ZpjE3h2eL[N9N@mV4VY*[pCZG&$1FMLufk)P2yAHH$H@HVHL&%8wWfxBLAyB@^)(iLv)iZfD$6^$g5gBI@Re8YIYEyyVdxmO9e#M)(b%8jkM)FS0GgOy9fiVlsPTZmO2u2nvCY)7&kGSO)gC$oGikiMk1xqfb5nu46pG1Jd)t7hlmwWk)$EUzjTgbl50i&!g(7@0zmlWHyG4531z&1oshpDyVIDm0tcaq@vlTnRfae2Rn^8xL$w07zKjMQr2cs6dL7X$mM$0rKM]p0#RBnwkOiGUvTgW!bPRuZcw#Z$j5ARq3nzQo^j0[3]%N@UgF^2vH)AX!ggg[JT4Kf61ZHbGNu#1w%5%Eo8bylQ3LY&%ySFVmWs!OHrVrfF^53S^gKyTBRp93r*0v&3v]Gec!180pHNE8#aOo##$FA!t^2KhjS8wQBYOuznlpeyIOIy0duwBIw4N^B(iiiWIAVdsFl3WS0Vuom3DcmSkm2B!88Ibc#O[DR6iI*$M1mNEG)turAEt1McMy4a%yANuIPXnvynKmqgZw@7YdgbJ8izZFw3pIeQL5M[M*@xo7pZR2vd1hK%Ty@4THjjW3KFbL0CC13sYffDV]moWb@o7ftKD5LOfAN7SML&1cKustT$b%w%(RN6Fe$wY^x^WVo#lHKm!)FJ3T84(9pYKyUJ%yO86S)RrCvEk#k4(&EQlmoz2o]Z4mCKgufyp$KqN72(LwXf*%2v3k3djHQ4ymIl)PFBI)4theHC1&DQX8yPO^87uzdfqZqPK3&Xyn6oH(&1oqhvzzjuhBqP5kNnd&!i&t)[98pGKH#fRZ2*bRfm8B90zIwlNEBr[II0TzzNQIwi(7)EMZ^RtOYH&y7s*skMz[Wziyval1Nvu(Io4zQitRQSUmdx3YN)KblPk0UQ%2X9!f8S(nOjt1fzoB3!MVW]Igd3zrw99%N9&OT1^BgKs!swbK2RTST5IMU8BH@2^0s#2^WCc!(^4FSANDSe8e&Ok![%exBVj0N^8r8ef%C!bbdFRjUT1mwv^55o[pZjYQP(hd^lwyvh6g]r4bY*6DTozGnzwOYcOFZg4dJZSJX#RRVun5td@k4pT$!7y7HiKLm!p8GOaf*e@eV[PURP5&dOwxGW8^TC]vMC7FTN9oIP60nPFzgJt&ZvNfCFDe5o3^I2I82kzLJxbiNM6AjU[@vMZoD&&jQQ$q!np8Vi^4wWHs3p8QZP7fbAqIMZ&#hkoBl%ZDe@Y6vBQ6XQo)46*&YP@&9BjSNbDhz3(XjbpHs!CYEWr^h1TEpLnRzb*gNU3$NRDizY6*68m4NR0bqog9893Dem94)MsIp3Pu*bp2OIX(gKfc#^mP]mqnPCJ#Z66iU7NF1za[Q1S3wkKJ8HvWjKYeqJ(Q)*A^yF666r*8ZA7S8Bo^YQ]is%NC7OzS2[zjFRRxV9nQ8$3*Mk]$*kpnYpZ[MsBNf3uY5muWq%wO%*$6ir$^^B%IPqH3W1wICQsrMqn9wGv8rl7Uwu2^aw)Vx&Zk)Y&S%3vV^WpBti&N3ts!L56[$J0yG!c19c&)w14DJwj4Bb1Nfr*[zy(f5cJJss7SFe9oK)2Q&nEdhm9dxlIJHm$j7(*iZDzAnI2$@k(Uoq29htDDqZU4rkC8g[jIl$YEk@)kkkTt]rI*Nkgi6&m5(l@Xz&wY9T7oBq@VN#S!OlDN4uw0PyThp@62EQUGzwH8daDKm)a0Sc&EVjhe7Bk1%XnYe1PutJZOXt5*pdEHIR*dTFzoE7IpmkoOWMpMkh[JiOw*gf7v[Ptt#Q4TS(UO#uNO8KMi*bDTx]BlOApTs&S))hXEM5q@QTAdJXu&L!3fDIuJI!mbE2mr(9rUrE4z4NwKA&o)QLb)8YC0NIctN@okssrRfJsD^yv%!nSNTDcSWzrBIAPdyHNyHqLD*whI3q^N2o4CZyCMg$1EQ4CMsn3[C@II9x[d(wQzWQBT8Z8M%sz34cU^Fa&@t@UQP6bYEOx0vi[%G9vXkR#4OmG]we1Rf[!^B^bo1d&UkV[HrffVNg6stdsWfT0jPoACLLc78kT0YWQQ4#Bv#jQN%HNsV#i$MZ0K^CUlGh3S7vVjRi[XbuBIFB5o%*Mm8q7YD!b1GDBHH(h^KyUgj)E5&^jVWB)]Bnha4R^dzFlnUXZv0Jkt9g^M]X&T!!QExj&Rc4Opc4yFynzWzoNb3GP!A6a*9hFet[(hni0T]z#VEDg%y(#$E9uhJi@l&(LYlxhiK7zG5IXJ1XJDLnOr6d4572eOkDOq3r$C6!676*wjcPJXKj0lSZ7O0ZQhyQo[*d6^4dOZW6kIp]KEjywXv6KjnK$TE2uHA&TeWJIm9gsnqwdO37#k42AMTqV5Zz45qpd0hKqoxEXnnN%7^b2wI2[exdBUcpE3]D450r)Mrh0QId6*&1eF%ITJsPW!yN@kWfi7Ov9dggf31kAeWcdT6c^[8G#dQiJxixsVyhI(OW%#Ih4$kHZOkP)NsHHL2Nx[XX6qU91#n2MQchaBnObZN1h7BiwjXc$qg[K$2@MmsJJW%[C4HAXwSEV&Pwa6GnlIL8t%PcqAw!(&pzmGwo(wjJAIQI29C03kCzKN&Ay1J2$ukFmkIId5SiXqBs&3(sj115ZP!V@2G(c]Kj8xC5KtC]pkeJuEc3H1JmWw56XfvlAQQ)cseLDZxRdx7G$Hg0X%U6UO#1asrCenoIvWZudWIne1jFfUI4zm5Hso)W(7$UoOKcMMmDb^w71fi7!B1N^B&^gmEV)Z312vxpNxPySN$Jhwl8I6Ejqi7Dy@7LK0m1zc6Se6w]#[swtM[INmz7aUevw[CHJ#BVZ2D6EhlrY6z#9A%b132XsD$bkm6fyq3fSV0JkHO)LvTyZYCsO(Dd^9PP8qAM70b$pLHt$ZCKvBJYIa9X]MU%h7DFf[n2*$ZCdNW50VBN$41@^FV9SC&!IOasf6tx(gXd',
            'part_load_balanceby_table'=>'',
            'kafka_message_encodingUTF-8'=>'',
            'kafka'=>array(
            '0'=>array(
            'binary_codehex'=>'',),),
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
            'kafka_time_out'=>'PZIaG430XSMh*&kA76G&WqJMYn9SgSiNbD7&AO]wFaAp4D#QVTFVppmm$0^8N&4Q!Vpb60o6hCT$XKDyWcgJ8oi5m^Ke0UsHYhhM#FCgpCzBihos7(6EmLOR8cQcEz&u@W(!*BYh2C5z7GpIzA&Cf(s@!Z7t]m67POoyNNUI$ve&eN*wGwV4@[OPkxd$fFteDHZN25UM%qJ7UvnsC)]qt9a&QhJKbK2Qt(GgD(&yfObxjfiGyPZiZMvDTt[YyGUbv@ELi*dYe^8HugPY!brh8%&02k^Z3ZV2ho!G7RGJWo^@c0DB)NodZ#Qy8idz2BsUQLTWrnx7AUTXgW![MWw69yPhQ^gMnOnEsWKkNliL[QWEbx0ZgBdP6IM*$GBHfH3V0f^QArx*oiup6OVvhVf3!1XCqPUzxH5T0FTvZ[LkmPSk@wEHO&tqW1*&yufuTkPdQcSr%Px(I3MJD8hT%V$oe)W5R4[N14pHLFB87xH[Q^$$rRnaCiQje8piCzyKPrlbo9tk*6d6U##AGQ3PtMn0Ud*01jvdE$!65Q3z!uRDf#roXT8mT*2SIaiiWEt3b0L*M^%s9DHc&&j$UBC(tIUCbStzGvJuFR8^h@6DAUbh&uXj9t5@KPlJlR]jCH0XFD6ieCRIl6u&NmA!IWF(NUU2ppXNZgXjnIw]54ewNC027GojeQSX7J*x@8(0(8TP7u0JNOY8t9leNNb6hkF@iT@w)KqCC0IFq[k(d$PwUB$2XRlMubHgR8cB[Jg#U^)nR1yz0XTzef^^CSbOXRkgbj&9ZwRrXFNb(@vRH%A5rRt[k6O%ylrEURzuOG9Pk^@wO[t#bzo5xDmQoHlHb#Ove!qI1m[[G*A6FQ4#&y1wvKf!q0s7[p#&9shFD2((lRjmQ5hu7mN16x2irJyxmSuVsA6!MCo19Nl16V2eqE%78sAuUFR*h)JIdIUqrkeJ$)qelAm06BmEm(kUf0e]Jkqg0v7l%Skw[L!@QeLG3@Wd0D)tV8xz#u@9LaXswgwbgIQuD^8mqZlxpB#6w!u!A[CYusCXdhgfKACq7JbAWCF7Kw$94^]&4%5XWHY)[tfZ)zc&qIr8hHrrqCcDsx#4$St]rc@b9#!dvdS7LS[Ujpy%VsNdIbh6lNcpOGz!)k3l$RKrDUWSqR$4[IruonO^Ze$4eOCRmS@sQWH&0l6iy(g*)V6$z&]Ybx)7u2K8IVFhDIm3Y7FiD1kb00KmOO3@sI81yAzdnuw47h^1)bsf%g72hIEWs)Wo9xMLKVLxZ9Qog@RO*KqR#iKgKfcPns25)mmKN^Ek^IoZmnW#nT4ot%Mm(ikWS%&qs(f[j(wdliIEYWM$t!pz$TQ3n1xGFZ3BGLo6TJWFdfP1z&mClcWKL&*h(5sSygmrceTtGtugsDC6J)ZJjJszCYuni[QWtok9**0rCxNyG[MgOe05JZ3Cr63PdsDGl(vI$hY^jMKvDc$k)OgoJA(vXwAo$F$]K(d18OwX6sV*p15cjROTH6ddn#q^9EMiv4oLIulL34)k3r4#8WkChJRWcsk4Y5(y&eKWFoRpCL^4hFRL6JwD1Q0TmJymQrHWQrZy%Jdh&(*YlAWfb4ifOSniqu%qF)RQ2(ty8$ACF0C^DEBo^Y#vvwbL%pPd)!L*oAYsj$uy#(j60y&jpWAhMoBmt6I%Wbdc1Syf[(k380QPszuZuBNwX^8QJ3kS]Yv@01tHOlsbQdHZ6^*7FC]7]hO[uBTWmQUS&dM[F5dNDYL@]CcJVQv3JS%nK2B$jA*JECIx3zPHeBWzXYIVZSOblE)xt4bngYmoF6D1Rpw7OwbXdw8&mMANVpZQ3[y6MWmBQA86Wo)l9i#mwH[S(gfbbcTBLhB)%l1k5TCXqp9nYJFs&oZ85dM6dDPJonEejHeMnnNvTfO!1r)IRY)bPA&[LKTOQ2*y)5k&LTYwVey@zdy^CNq$17Zp79LF*0U9b%P4X(0FiKq5z!)Wi[m67F4^uC$R*C[Jig!KdyuYQ)qh@kNEhvXz[v8KQLGMuzH77xeD0n@pQe*E6@fY]sxilgtWDpbQsq]UG$DR1P1KrS&0Gq7u^pgs15DsRA60IL$K6f4PH^7i%N*F^S)f582HBu)D$&NPUSzz@WvBvVLlYW2X#PHrwE8#!Kt$UycNCS*E10QAsWd4]TPJG(jFx[*#p02qq0Bn2vFd%H3gtKnf4iA#8zVWE*5QEw^Bga6oVC*9ASmekgLOErd#h6I2#CV$9^750R1*&f7xv^kff6oGxJos$ryj[$T2xyJi3g4lEmwpyOQABIzRLdc5edI19Q2AxaAiy#C)RKVHm*ujkn5q!KzuW0QgVO3jpk7ryT[[9LZL[*spp)62kJdzIGIttj^XTZ!6kvPu8w2Bvh%*#2TXY7E[WqlFkxDNEFchnxLudKGEvoXCnC]sI6cM^uzSU5o&NGt%(jCA5pAid$t&4t5TJ1wzYmCK#pEI2g)U2AV#id8m#1KH%MT3ZVhvij)(tv*GD5u)xofMzo4knx5U[sYwvvKZ1NoROX*fVu^yw1&L24RBHcWzcnTX[ZMHr5HdmunpDgWB*Yp1V)Zg^cSK9l&1wt&g@4CpFNuTNck1]CRwmoC69CMq%$dvr#DPBBZFD]4$1$NTHr$xwsG!Mm*J*eJ7yHI1KHKKIwGGiar!@i7IK0ztKNYopRTBlvAQkq68Z^TctWXUe$4txnAS3N%@QUfB%G#%BSZ7D#aFt&aqavpW*T1irGx*!05I)n6U4SJDb4sye89(mFeUD%!nMHmk1S4xQMcSJtg72y82JH$1@kZfGktZJKD]tiT5^!1BA@78V*I2d1jjg3TujC#**iS0^^yU#Bm#x9OGfNXO^FXwx&Quz^y4LpVQb1szKbMFUp746izXjw2lT@Cdyi7xLHJknP4M$0yGdwbcrv3eFGXOnqq#i[hFrXb)@hGSGJTrKh#x!rS[[!kuOF3W&Wh[3UHhEo$tXOQAtv)x(y(0OtAel8CTX75TEPR0uCUcmCti7XxY3t2qp&g8l6WMkWhn)f)MLiTB#^wvvVEE[NN*e)vq5QDxJVc0rT0q#XhN&52j%[wTKO6KDoD5rbw#OYCWHLeOKoT7e[NZTVICUT@JAm*X9A0lYhjBx9mLr6u!$wFCJL7%WcDxS*x6vhc6YzrGUr7ZTyRvH@dh88I1ILYb3#U%w3QD[svK9(B2dd5*^zgxJf5R^wuioLtxYobBUUZvGv6(NuEGN$NyJuUTtQcRVL9t7BBmUIxTN3saL95jb#6[rHLm3HvxJjJ0Wn*QJpIdKFbZ)&wa4zKTfv5dJV)bTKYTXfjk#$9A6kS6h1J@b@E6c^tc[6[wlgbIaq*&[KOstZrgN&DOZX0$Bfgmc[OhCV!yXmoCWvfY5BJ*bx9DklLWAYxv!CsSwt6mRuyDCh%$M0K]2]5VBCfO8ABPq!cwXxruBognjcu7g5^MXkW!Y6DrW9@GJkaakuZK*bAWbLB!cEOm66S%%dOuT)0VaL^SurF1[0&(Ux0*![@9zwPJ!PvMHuYIMuo]$qoLpTIn9jHu#hS*&BqIBVV51PyyL&CX%%LN]qDYw6&cAALsaI5Deit5HHelTARFdNm3zdT8DyZHxt#8SNM6KOv!U)xxf]&VNL3zqj@!Cf^Vi$PEeWs(4gV#sewz5Cps7v0g5mr)^dpYAJWxXjE$u5m3b(NxzdB^b((KeP9K&IB*t!B@O*wvvS5ZI&J2[$)AJhYwW1Dy85t0Z)qVuRVr[&3l9yKiD%FB^^h32f6$Yz3[aJNF[8rpZrfoFRYgd&$Pw6IqqXmF5uOYulQ&%iTX)JyW%IQ0Jh(PDxrV[0jBGPtVArYqNg[ljr0(&)aCeGS&qNhWr7ESn$d#!BmEuzBMnvHVxjMVl#wpAxkD*obEzMdC[9EY7WtXq]&HP!ec85D3pb[O%DxbdztSK]AuXe7Y52DY[gQ7ONE5)e04Q$pyBzpMh!)f!Mq$[dg[AMuvHBb$kiq]qLVIFO#s1*cnL*eCGGCJIthCx6wQ!2SB)6)&UgU2O90RV[Au3PXAJJ2rsfG^Rpy!nQ7ynNzsM4ANz(7o@goG!3%l8WsTn%5jsQw!hebTBnpH0APfS2s[AMHgUGkYP7UocGGuYnrPRLemFEofw7eOn0vAiF8bB%DnMKT[cpGhSt2^QMQP3w2[uPZEPiDpQrpzYuJXQ8QNtYZCqgA*ZvXH$si4g3YSAS%4zk1s*bZSOQ%!Vnr@3%c&4H4^1#K]Dlms^GQK%6bhw(gUplJePgxZxNOhEQZkbSfto5WHL0dlUS0rGtB2chBl72&QlM3kOjQI9yKfb2RtzHYpoOrn52PU^%AQz]wLz&rENhGHpD#W]esuZm]J[o3hS[Sj6l^Ot&L#jlD%EWC!QRGVA]cKQBnLD@(VB4Hoa@dZeNDM@xvCx1pEz5DWHRcGR9t8CkFz$(tFmY#tVbuhKMGUX$G^ukJ7eJY72RMH5$J0P2aKQ^vd$b[IshfywSy21mNtxRL[Mh&[K5EJ209]Drkn5B@7zKvFa^vdl)%ZQSxc&$9uiXA6XPetX8WBc%pcxscfTkh^MampZpnS^WBZv8Fb5sBwqW5I2TLfHm$rIBqz[YQP%75KLfxOh%UE%)eb5gLXuOH@hzpHuHbAS(yfvUvgn!dvEl^LL#ux&%w#8SAZ5GPd7aY6j1NXaoSc$D35Fj7ZcVYzz^yrt36^[d2)N5PFl&M%y72tyDsFip8Z1qh4VTDqM!Hh6e8q5OOfsw%2Bj1YTI0bDI#d@T#8K1xkE#C6gt^MCw5Z!@(R(ZFzkY1OVW^UYoFddJB$dHwSAykWb0EUE[Sj9bv31[YTDnJU3b%9ZoFk(VAVp@W64P1%@mRAzffWIl9HhHU305OM4iX8eY425$A3JzUn9OuMseKMn]cavEBebH6Z!@ZY2AmWAt%2[)nRuorf]x0ni6tWE(]Jwh7VThJrD0kU%k1JeW]r^pqd27]2#KDIMlL#4!Cp24J7Jtvd$4uOBSbzrbnjYiB4!wwDd^GeT(4(VHaiUueLln5oAo@$hPo3SG*eVfHpLQ(mZ#n@9E!@E2!nh%03FNcPmNwThh9AWuRE(]0KO5$bG%9wMIh7$g8Xptf(6qJZC3lrPghOVPQ1@01]VZJ&BXz*BHS%8M10TT&M)E%O6RSyb1v%[2xGxpk^zR9tBD2izAiS^b$rVC[nIcMGwJuw^#6h(ygCInYO@d(e%GfyF%A9&SN))0P!jkpoS$%3nIMqdnGAgEL@$CGGlHR]euJ56mJmfvzUcUcTshzlzemYf$r@83EL1^83mHy3#gI^kX^o*)78KbSXp&[!NQnq^]uVIZat0$MVYp)cZljyDkC1$AjqRAyNe#]0f[pB7PH7)GUFG5t)@(W3*^6(8jgwVkXe7SaVrDsrLvCLu#aoLvEymHcLKiiWUlMS1TxS@&$Q1L!Yp9EhasX6%KlMi2Y7^Ve!og*qf]gteK#(eWcRMWJq4@jNTSfMi1i1^]WbJsuMJ6ipE@ObpSZJo2&oS$6kfxVo[I!k%wFM8&5Iionunhwh$VAb*b24CYV*K1(K6HbpQ^GXQgQgTP9NVXIxRhtgf$Iv[AYn$!pAL$X^oi)gKtxUGFn)V(tmUxVv%4$Q(t!qj38KN*dXMo3pUQWFI]Uy&OiOtM5k9cMXBjFYTw&G7$l!tC6sYSpQ]&b7bfY$isxP48KaHj^3K^QuEYt[#J@a@JNj5YYBcf@L^L0kPxNPaLF]nMYjg%XNMoYpx[u&)of9L78IF&#UvXfuOxMgBC*Ft(T*(ip%KyxWzv8^JmY202[7jCCJQM&c&^T)#I]1Am550vB[p3$59Klg$w)RfEjP*kj0KdTzB3PSWBeNpvo4Ovi9xXDUrr@oo]jQ^m(PoI^^g88&lF9ZISfojfwo(UcnOkBLyU0tMlt!is&ySh0O#VNJQn6PlkfLyG#dk$P^)9OP$onc%F&Dwv9I$TTjYrojbzWMQj!snp3iesJr(hiZumqHrAamb3pmCmmRoi8w[&^sULNPoyoQxaV[*gCUILG3t5u27^44bVT@PgDsZ)08S#MhYzfjCCuh5J3Oo^GIgpfky#dt)iINh@BpL6eqyM&%p%&@fXNqVod1ME^zR%oFXy^8etx[EPwP9KWzGKthhryJr[R7FYMG7mT)X8nQ[k#Ex35sh7Wz61DhohZc&20Zcx$M)KWNotKjf7fG$ueYz8ik3je1yfj8ntqc(nR#pt7TmL(7vuid&i68rt16xNG&0uunh5iZdOcQ48yajL6k5H(OF$oIstUw0Mkg)VDiOK[G*su(339T(MuGE8GElz0fL)Kg!BsYFVNK7yd&XWEqCwi7#j4moj7*ccr0X$s9D%PRKQ@OL9gVzAqdrsSP%ZdQQ^a*i$HuWeD9%7R1k04AWguN$bhu1mXHd0I5AW8)y)pzG^Cyj(uNm8V^(Zjk7cGzJmwN5s7oA4E&LvcPnxF)mq2wBqSc6gIC#VYh(nisg24YcI]Qy2Xt0@tnXz9z$LBFzdE70FOer6hz#nc&HW%#wu9[AuODr2s8NIK2KS*B!P88$F&TbSM8hSp[UqY1)Hj%zYQwZk$Se]*dNEUJ*pLWPZuq7P!#pD*&eO4pvnGoA*sEDiCJA@ph9LZnewxbBlc!DL(gD2u8!reuM93y$G5a^mk@QB6plc()X5y)rlD*nxIRO($Xg6oF*%81Z^)5KdWqnEaD@j)zTiR#16Yl#itQ(YkDU%dMsk]3dTQgSXvp(0ZLNYFoLU99R]RC(gb]z)2x3M@C[NtmFLggugAr41uttOTln4*cJLS*Uo^xgc#TQrz)(OyhkXxcENOLs4^B(s[pq1KqmRuOwC&DaIk(LmVmzxBFgH3jvTiCst84eoQzO4UlUoYt&Du3BE*6L4)40Sd3Mwt!xbBQylyDWTHOY(9#JfO*Rbg1!RCtB)ju0&mFZA32lbX3P)csxg#FzS]y7rv*rIggWEoE3WrHJkn]UJ7y$HpePfu0nCS)@jbJ$Ns#Qvdqi*rh(g(L5ZLivNQk5pnrPX0j8)FszPY^aD6i5lv[BwSZ^JtV&utfk5b#POJ$)lycfZrleHncd9u)mRRI7(058Bovbv4W#mH[qB@tIzwo$9SDv!m0jsLlU*TW@RBPl3p9Ljf^rdMe4h^ZVmRp&A@&nTGyL^E9eO!aHf$(YJ17rsvxXE3C3Ko1GmS$b*o$UFlQ9LtPMv!I@RVNk1pVgBILi&fZg%x2UvT@NTh%iXeYO!VxSqg4Omeo#Lr1EMH[%8EkqI%bSCliFWREz9W@fKmdpD6XrZJlrnzSMcesFIQcoy)s73q$$Rdch)Q[#KUe2h2)i5N7uIg6L$UL2bto3p$A*&hr0As@ZW2wWh3X6BEXEyZFiYMKZN@Iw8XXuyH%1FmqLHWS(mr1en1gfJqGXSl5#7u$ZPMpOUWnutCMiR%AYpv2jlU9r%LTLyyKy]8VtC*tY#rip6wWyiIDV&Ok)&6i!!XB)228(QsLsOwhR3ngL1^SWBHrEk8GNAqFmbZkE*mERD8ASY8!XjLPvAb)lCglucA#KtKo@jKb6xv[glu7zE8N8MgDR*xSH&Y!4PQJ4UpSwIuobVKCKE#6p5B@0qvA7*k75d@)i1HFmP%d]mY2d*O86iPI#08!GMhc$n(!zRnkc4J68q4Bw55J4LTYcxQ6l7tJts[NKTMIQeoASpK@DYPfS$BmZ(mcOsV$Yw4MixlZuq21fw$!bhyB)QfRLzZ)95wz8pUxsS$6yc6^yV!sFJc7O@&I4uTG8u#mJuswAjcAH)^aK1rpHPkShN1BJvY9c00#D^[DQ@gdm86AvBnwoBDP@h@3Pq5O[YMggHyRi67EVEzwckVJG*ch10RAu4@ARvq!ElxFChFX)9*$GxerkXVynXEJPBw2GZgBBbRlP@Js6VB%ThsJT@C@L(iCzYKevbU3S9QxHXcNV#ZLbq*z[z6DJjjWB34$D)obUc[A9]H9k^3C7nkdG0ZcFHAOW^@C8dANW@emU#eiG6P9&$W%bZ&Ww6SyWN9xO$COuC[&Y5dwx7sl[bcFotC9umjj6vLcgI^dJiQXplmqTH[qqPfoz[qkbD%*HyJUi436O64@lf73Z0C@itGTS)RhCj68PWsy&mUqt#SSTzLTHxS9HF3TTNpR72p9U75G%Twk3eqG%w@!kAgL[AQL)tLhRcFF7iBf)j14H(t@%HiYS@OBz*UqU%ljm2yy1CEiscSL(69tJ3LWzv302saVO5L(o#pEogvc^(d3SW4tlQAJnv4h7xLmNdz@q$@UiJD0CIgEgVefY1JRYJWIw#fpEkhOp^^XqG%n@VjEPs#nipPsJ*vOTx944QptV$i@ZLzfQdJY%7IA6I4ZrJ7nYC0WpFz*Az18l$oKEL@KPM*2khCu]jF6#Rdfnz10ME2H1SNw0]9qR2R^P%CsnXRcdSrnQ2WI*xlbkoK(O0BYJ[1bH0(nU61*MQXSfLc]L]mQtSS9u#3O4nia^I*dVGU(3o1GHzD9]bU(naZUbAog)c6mq7c^zEiwvb%XfnEQiRVlC^YFKHJeJEhk0eHvewy@5!glq4XaN3b73gu1Jg@Rp))brvO3MEPf^Bu7v7bSIDMEpdDPL0@dq)*Z(On4X%N4zgqGP8!FhW1CQDzUo]jIB7c7f^Y*19$sfpewVcF03yO9lVNNJQpUWTFn5@5CRD$!ezy3w5WCg434ioUw2S%nC!XiCkmYIXT@2T%(PdGFxaOQ9QB*3tiX]B5ccgQkn9aT%QSqRYp8I(sSmZf%Qp$D#y]@*9mF&aIPFuj!m1y^9d[E5kT%%vlrTOGEmhQILxcOJ8nC55vqZotXoajuj73wGiQXcu4C0![b]dCfJdQ3LYEzGlPxXm$wKbLCjU^o4H^TW!I@yjVbZ&mimnNMGunMKK@DHrbSMm@wd$0%X6iF3@IW3Yv2pNGSJoL2#nOt^6WMhhY[%S5x4X1iM$rGo[M8LvPCV^7iAZb8kJf!LmFvnhJ90FPmOe6YVn&yIJ%ww$2[5G5p6)O6[kDh$TK&1(oT%h^9pG^nO7HHy5w15L6StA&Bj9*(f(MbxPZR](mJb)MY#Fs7PgyoB(Ge$K11BKIBK#W%AXv$hCVyT%qA17ZeUL64*Qf0q2%r4x8P^Ewtg^qO(HgU0gFvkl3xA89bGt5xeusukD02XYNJmR#!iKi29aEyT*dDc6!5WDw[a%cbnGnY@[$!wCDFSSD0*tC!k0@4UTgvdZDg603eJZL0tPIUsro1dz5iU1j73)9uRZk(3OwyojwhRApbVCzI^f0MxoA&(MmHVFbk^SxL23J!&DRZ8iIIdRdY&]P^7l3PtRMI[SODzC$JbVdwSgd0tZHohLVktfhu8llcP@xC4@p(YK7#Lr[*^(e%12VWpnoKlzvguNjcoD]9[Cn@I#wPIfEbhpF46Pn^uXj##hhmk0dALb42KQ*r3@A6hT)nU7hp5(Af9tBy0!FcV5Ue$CUHPsrxyWo3OFtpzm%mZqG0K*dRj@WWYjj3Mk8)h^e^1S@0N$j6HpgblT[O5HK6er602iN%]vT#WHz!Dr6FJT&r8ilZrg4v7)&P1[hc*doiX987BXylmA^tCt)NdD2[Xiq7BiJzmt[tuLHKlG6Bg@2gZ*#XlGrvWbf5j!4Zhk$4xItVN)Z^clgEhVS2M7PMgtDVAb7@CsJ!E)nSH1r(HHMSdK&3%@1sDEBr(83NWLD$uHLR6JTqCdHHSBZUK#25aKG%C8i$nULXf89P[$hAJ96ZJ#oZ9MJCDhi)#qkStMH[3botkzc[5fQ2FmW)#c]T%UBw22Y2eE&GaYWBfRtMJc^IURkSt)dFaKx@KvGG!8hMjtz3hpI#f^H3O47ygfsJOPUrHSs(t#lzeCwBJ7@tZRvWsEVtoRbn%7&(q9DU9SQlRD9ErX7F#X0lrJOSkO!5QhNvAIHH[kqNUR%W6mx9XxazW[2cm4e(FofBkcH3xAFR8#bZSL*X%NDLI3!v[gX6ENcjlv6mRp3$nUjg3hpVdi*V9%MLkufPE$lAVm)lfqNzCg&An4^qR2t$l@ywO(S3zxon!8icJ6AzGK]l)rv@[S*h2Lvd4[vRq1jiM*P6eFFsn(%dX@hZUrm$kW9F1vW%&i9n94]u^wED&!@G$tYPjq3622sjgJ&J(W!6lDG7rYT6#f6Hlsbyzg[&i)9p0DAyALA0H^uMWtbQRnTgy()c$xgrXmyFUWtseYV)&My[&W1kpXoEZ9x*PLsf]U0ixiF#PG@)Ubma4XB7nIs#urGx3*KbHyBBtTKQhop(Dlxws8#U8Q]oyIUf(%y4XEUhUx%O(f2jAHOcW4tqsE60#DqKr&lPjMv^kKw&c3UGfMyLjKf&MXh9K(B2o6VIw1qQ7%tfW1YsJpv7wwV[MO#82Is9gB87[I5!LrUK5fqH9jetG8VMA(kyLNE70qKu$VhmwLGmdED)Aq4]nk8Rg4ZlBz@sIf0)&woXCeVUdC^lDEJMT2Vq5#I0tmD7%1#2ZoDE1s!rqNuH7*93vslR)l#jJMMyE2zf73bO(F43DV%3T23StWOBINO!U(aG2r$JD4Ho8jU&PzSTa(03NC2fc]1pniHM#0RR!Y((14tg0lgZK6Ls)7*DCyd4p0#tI42zjMZdiq[yx3U1d9u7[8t!rdI*BOzBRbCGLio]xL#KQU%bl)qiP^mMIuMbA@OOuOYiE^hJb9&J[]$I8Tgu!96TehNExlUcuuRxt#Qi]r5nT@bNSnJnp)%QoNvFaSXB6g9yWC6&&RvZv^1dLk8AnDiPr(nDo*oo8JH2Uw^%Pkxf@4rWIkXog08dItlHC4fOL@OQsqyXC68bVhF9F3SR!FQEkb&juOhiTIgmuD[o8G5LKF7vuY%X&Ywhz(&BJULg9Yg^^JMSkGNO$r!o8fA@ZKkCy$I)x(o^EJFoG3z4IOuzcRp6yokB3)ey9J2*e5KiYScv8J5kCcmNkP5fI]##XZBd0Q5Rtp40RtBQOuLlzXhr$QYIRjG0SHCFhM9GC$WX7pNeN2W#oT#VEQoGdRmzkO9QOZ$609b]zTK(BFcMTcY4XeOuHpb#!cBTjf^w[!!08I(YK7FZnne)4!!DpWEL&GLHYXSSTRrYYJd*8Qvge*D7OcxBx7cNqVNbZep$YVXVa4JEyLDIh5euNyGKS95LxWm&%vNJv7^Mrm!GH2k9tfPj3KAjkZKt&QKMKRRilY@N)xWIr(j*c()^cJW#1S9&QaORk^D!VVqVtZtp5JIxBmxUJ[mi^KqYS@dgm1j7RJJ1LI8Wd48YOSTmA$PJ0iAS!$Ex@IyoOz6!97@d6hknz0poq$xj[wB3R]CiugRrdrl4R*vNFd24gHWR6BmL(IRw^SyMvJ!SLOF5DoxGpNUc2fMYcwg(1uIN0RqmQMbb#dlWjrQZ1YOuDrby@8WpI3GS[0QwiLuT03pCJSJ5S[QY%E$ERHtKJ%Zq(SJ(ro%XBY[U3PHYRM(#uUiG)b!Ox(%jnVtZ]heoEh[4C[k5mjWY#KrIS&SrBM(#IGSHGdB(#lazpzcq^*wO5Ul*pwWPJMmWf)D$EGt&dAIenycJ*Z3q%spf$lBdgFioeDHN[hCkFOv8[U8RnATtISX5@cG7i#LOZZ]$T)*kZfm2v#kT5Khk^P&yhIqw!l2CwM)86@qZZS[[OrFoot@1^P*vREl&kN4cGB6#h0%Ze(@k4ujmuQ]W[wci6GdzPRg1)cv[h(27pM7t1KY*v(ZsABme*Us60H%%E59Rm6qk7M4))S@6G9l1rJ@bKTycvRh)K^usrXd4@qRJHslKV*kRi)L5&7Bp*H6Bd4&cKqY^bcb[FoRkTRpK0qp@W!0x7(IppMJXWRpeOZ5GOK8jkwNP&@)IT(pDVkZSlJ3!el8cvFq%zJaVAklfIotcNEOo1hEgOJ6*lU@17XLs(e#0!$4pCL^pZ1S$^cc3Dnty]0MZyXG]8blRPVn7FI96FWpObVHHAQxQKYgng!g1b*#lxH&fevj6m93([mA0!$3BUxd2Df(GrsS%wJbf[ZUx$jlLzCc6(Dix0J^6o7@T8CekqvJ8UN23Evob!#QAEW6QT%oDWw$od!![pHY^NALnKsG1**@(YvVa',
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
            'rule_uuids'=>array('11111111-1111-1111-1111-111111111111'),
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

    public function testDescribeRuleDbCheckMult()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'db_uuid'=>array(),
        );
        $res = $oracleRule -> describeRuleDbCheckMult($arr);
        $this->do_assert($res);
    }

    public function testDescribeSyncRules()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'F530FB0E-0208-9071-66D3-E595AE7D5A4C',
        );
        $res = $oracleRule -> describeSyncRules($arr);
        $this->do_assert($res);
    }

    public function testResumeOracleRule()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'operate'=>'restart',
            'rule_uuid'=>'6ABaD2A6-a88B-E0E5-d8d4-ABA5ea6b4B5d',
            'scn'=>'1',
            'all'=>1,
            'rule_name'=>'',
        );
        $res = $oracleRule -> resumeOracleRule($arr);
        $this->do_assert($res);
    }

    public function testListSyncRulesStatus()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
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
            'uuid'=>'fcFeEEdF-2Df4-Df9f-E153-6f93F0e12B78',
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

    public function testListKafkaOffsetInfo()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'rule_uuid'=>'3D8a95eb-c9fe-Fde8-3b33-5F16766ffe72',
        );
        $res = $oracleRule -> listKafkaOffsetInfo($arr);
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
            'rule_uuid'=>'5faD1DAe-d932-ec9A-c2FD-27B4fDE439D1',
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
        );
        $res = $oracleRule -> createTbCmp($arr);
        $this->do_assert($res);
    }

    public function testDescribeTbCmp()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
        $res = $oracleRule -> describeTbCmp($arr);
        $this->do_assert($res);
    }

    public function testDeleteTbCmp()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids'=>'bFE4e5Ee-6Cb4-dbA5-9D3D-CABC99D25dBF',
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
            'uuids'=>'1bcbDCFA-4698-bA25-Bc9F-e92D7c7dF9b3',
        );
        $res = $oracleRule -> listTbCmpStatus($arr);
        $this->do_assert($res);
    }

    public function testStopTbCmp()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'tb_cmp_uuids'=>'dd6213b4-F7AB-DECf-C3cC-7cF4E1C3De86',
            'operate'=>'',
        );
        $res = $oracleRule -> stopTbCmp($arr);
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

    public function testDescribeTbCmpResuluTimeList()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'time_list'=>'eB9BC462-4a9E-7f77-b2a4-72dcBfe59783',
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
            'uuid'=>'db99D966-38B2-659e-AD8c-9A8CdE159685',
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
            'uuid'=>'BF946e78-4Fe2-234F-732e-7F8B355F69f0',
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
            'uuid'=>'8E76DFC3-9296-aAD2-c103-cD14feabCDfE',
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
        $res = $oracleRule -> describeTbCmpCmpResult($arr);
        $this->do_assert($res);
    }

    public function testDescribeTbCmpStart()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'',
        );
        $res = $oracleRule -> describeTbCmpStart($arr);
        $this->do_assert($res);
    }

    public function testDeleteTbCmpOracle()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids'=>'C593f810-7F9A-CfEd-eDD9-513d8b2fBe4A',
            'force'=>false,
        );
        $res = $oracleRule -> deleteTbCmpOracle($arr);
        $this->do_assert($res);
    }

    public function testStatus()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
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
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
        $res = $oracleRule -> describeObjCmp($arr);
        $this->do_assert($res);
    }

    public function testStopObjCmp()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'operate'=>'',
            'obj_cmp_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $oracleRule -> stopObjCmp($arr);
        $this->do_assert($res);
    }

    public function testListObjCmpResultTimeList()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'aCE4152d-CE79-9E17-1D8A-0e161BDEa81c',
        );
        $res = $oracleRule -> listObjCmpResultTimeList($arr);
        $this->do_assert($res);
    }

    public function testDescribeObjCmpResult()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'b9CfFba7-D26f-440b-DCcC-6Cacb3Dd5dEe',
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
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $oracleRule -> listObjCmpStatus($arr);
        $this->do_assert($res);
    }

    public function testDescribeObjCmpResultTimeList()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'F93DAfc4-d8fb-F7DF-575C-f107C6C9389a',
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
            'obj_map'=>array(),
            'obj_fix_uuid'=>'B75DfA55-19cC-cBEA-AeBb-dE9Cb3F8Ef1b',
        );
        $res = $oracleRule -> createObjFix($arr);
        $this->do_assert($res);
    }

    public function testDescribeObjFix()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
        $res = $oracleRule -> describeObjFix($arr);
        $this->do_assert($res);
    }

    public function testDeleteObjFix()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids' => '11111111-1111-1111-1111-111111111111',
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
            'obj_fix_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'operate'=>'',
        );
        $res = $oracleRule -> restartObjFix($arr);
        $this->do_assert($res);
    }

    public function testDescribeObjFixResult()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'b9Fe9D15-dF55-Ff1a-AEB8-a263bCd65b50',
        );
        $res = $oracleRule -> describeObjFixResult($arr);
        $this->do_assert($res);
    }

    public function testListObjFixStatus()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
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
            'rule_uuid'=>'1D5C9EDb-eE7C-Ef33-7616-653F52CAa5eA',
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
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
        $res = $oracleRule -> describeBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testDeleteBkTakeover()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids'=>'7E444cCB-CFfb-E92B-fFb5-927DCbAccC5d',
            'force'=>false,
        );
        $res = $oracleRule -> deleteBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testDescribeBkTakeoverResult()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'bk_takeover_uuid'=>'7c5F3FCe-11EF-E696-6817-AF07fF81A3F8',
        );
        $res = $oracleRule -> describeBkTakeoverResult($arr);
        $this->do_assert($res);
    }

    public function testStopBkTakeover()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'bk_takeover_uuids'=>'Fb78Ad5b-eb21-EFf7-47bF-d6691cdd696c',
            'operate'=>'',
        );
        $res = $oracleRule -> stopBkTakeover($arr);
        $this->do_assert($res);
    }

    public function testListBkTakeoverStatus()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $oracleRule -> listBkTakeoverStatus($arr);
        $this->do_assert($res);
    }

    public function testListBkTakeover()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array('11111111-1111-1111-1111-111111111111');
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
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'force'=>false,
        );
        $res = $oracleRule -> deleteReverse($arr);
        $this->do_assert($res);
    }

    public function testDescribeReverse()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'rule_uuid'=>'2e9349Bd-F31e-EbDD-6DBf-C44B109A9fc8',
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
            'uuids'=>'4Af83fbA-fdAD-AbA8-9DBE-EAFb3a6DfbAB',
        );
        $res = $oracleRule -> listReverseStatus($arr);
        $this->do_assert($res);
    }

    public function testStopReverse()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'FF0b9Fde-5a24-be6e-8EBA-BcddCcd2Ca1e',
        );
        $res = $oracleRule -> stopReverse($arr);
        $this->do_assert($res);
    }

    public function testRestartReverse()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'4cDBbeb8-A738-9fc0-E9cE-37D7afEE4631',
        );
        $res = $oracleRule -> restartReverse($arr);
        $this->do_assert($res);
    }

    public function testDescribeSingleReverse()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'69EcE7E8-3eB8-BeE9-8Bf3-F0A480F2d95C',
        );
        $res = $oracleRule -> describeSingleReverse($arr);
        $this->do_assert($res);
    }

    public function testSyncRuleCommonOperate()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'operate'=>'',
            'uuids'=>'a9d6e107-bF0D-CDe3-D332-7A322bdAA9cF',
        );
        $res = $oracleRule -> syncRuleCommonOperate($arr);
        $this->do_assert($res);
    }

    public function testListSyncRulesGeneralStatus()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuids'=>array(
            '0'=>'3Ccd66F2-d92b-Fc3f-8Ddc-B56e1CF43Adf',
            '1'=>'f6Bc2573-b168-1eDc-d215-B4c5DCBeCA3f',),
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
            'date_start'=>'1976-05-22',
            'rule_uuid'=>'F530FB0E-0208-9071-66D3-E595AE7D5A4C',
            'search_content'=>'test',
            'date_end'=>'2017-06-08',
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
            'row_uuid'=>'166eF7F1-a084-4c31-BdAe-E8550FEA628E',
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
            'row_uuid'=>'636B8ef5-19aE-b7d1-9d35-ecFbfC84Ff37',
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
            'rule_uuid'=>'1f32AD3A-e24f-f290-c9f3-A5b21e5EdFF6',
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
            'rule_uuid'=>'1BfE8Fff-EdB4-A15D-e6CB-0dc8E3fE4cB3',
            'search'=>'',
            'type'=>1,
            'stage'=>1,
        );
        $res = $oracleRule -> describeSyncRulesFailObj($arr);
        $this->do_assert($res);
    }

    public function testDescribeSyncRulesIncreDdl()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'offset'=>0,
            'limit'=>'10',
            'rule_uuid'=>'ed8725A5-2E4c-Cbde-c8dC-3Ad1f55C210B',
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
            'rule_uuid'=>'4dDcFEb5-5cEB-5Af7-BC35-e42A3273a6d7',
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
            'rule_uuid'=>'B6298101-EA40-6EE4-6Fec-EE6eE52Ad219',
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
            'rule_uuid'=>'26C8AF9B-686e-AAD4-E2cA-afDe1FbFe88D',
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
            'rule_uuid'=>'CB86e6d5-42Cb-Bc49-ABcd-D6C5820fAEcb',
            'sort_order'=>'asc',
            'search'=>'',
            'sort'=>'',
        );
        $res = $oracleRule -> describeSyncRulesDML($arr);
        $this->do_assert($res);
    }

    public function testDeleteSyncRules()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'uuid'=>'',
            'type'=>0,
        );
        $res = $oracleRule -> deleteSyncRules($arr);
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

    public function testDescribeRule()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'db_uuid'=>'C3eE8DBF-3275-3E78-eBC9-3eeFbc7BfAE6',
            'level'=>'',
            'type'=>'',
            'tab_name'=>'',
            'type_value'=>'',
            'auth_uuid'=>'',
        );
        $res = $oracleRule -> describeRule($arr);
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

    public function testDescribeRuleGetFalseRule()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array('11111111-1111-1111-1111-111111111111');
        $res = $oracleRule -> describeRuleGetFalseRule($arr);
        $this->do_assert($res);
    }

    public function testListRuleLoadDelayReport()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'type'=>'sec',
            'start_time'=>'',
            'end_time'=>'',
            'limit'=>10,
            'offset'=>0,
            'uuid'=>'1d2F6Fed-DAC6-FE94-A6cB-5Ab55415E9fd',
        );
        $res = $oracleRule -> listRuleLoadDelayReport($arr);
        $this->do_assert($res);
    }

    public function testListRuleLoadReport()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'type'=>'sec',
            'start_time'=>'',
            'end_time'=>'',
            'limit'=>10,
            'offset'=>0,
            'uuid'=>'1d2F6Fed-DAC6-FE94-A6cB-5Ab55415E9fd',
        );
        $res = $oracleRule -> listRuleLoadReport($arr);
        $this->do_assert($res);
    }

    public function testDownloadLog()
    {
        $oracleRule = $this -> oracleRule;
        $arr = array(
            'rule_uuid'=>'',
            'type'=>1,
            'module_type'=>1,
            'date_start'=>1,
            'date_end'=>1,
        );
        $res = $oracleRule -> downloadLog($arr);
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
            'db_uuid'=>'5Abe4588-b209-eEd5-7EA3-91bcaB48dFF4',
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
            'rule_uuid'=>'31f14b19-fcBF-8455-cC82-84f8b8cAdbeb',
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
            'rule_uuid'=>'77b88BA4-e5bc-97Ce-0240-26ff6EbCc6f3',
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

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}