<?php
namespace i2up\Test\v20260626\active;

use i2up\active\v20260626\Db2;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class Db2Test extends TestCase
 {
    private $db2;
    
    public function setUp():void
    {
        parent::setup();
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
            'kafka_time_out'=>'Qz6qR8HN3ADDn#zB(PEXPZXx[I3Y89wcJIfQL]wQVOvS(EWh2!fYM[43CdUBxW@Nr)(@gGP5cMlnCFFoyYokEsO*wVxb!RM(3DoqHBB2%2MVN*GQYm3TGe@ofyoCJ4k]TE#69@*nSPwxbjsL6huG$z3E4!0ts#z(jc68V2XX&uabO78a3PiLFTiLASPxE^KdLja#OkzCWDGp#$MEUq6*2qf#vmDwfmgvAIX)$7VNxhnpagJ)LvuN1df1m6F]xX)Z#wsjxvamk&WkV7t1rLsyC1STnGc6AckM@wV]bZx15iK$YyPT5nGf20E&ZQsctcKiRmMHYi@!Ab1!1AC%r%ePwtkvuwqeIBHteUqVdoBLO&K*Fm*u9)h&)8Az($c0m*$h#22FSv95wAFZNjXI6AFB^lM9@^A#[ewtckY(3SVCl5Jj2DxxLp[hUvd^2)]rQjMn46ATc4aP3Q3Co&mHid1Qgt3jtHfQ[XNXFbBJg$pc9FxR5B*k1@^!Nu)yZH7dlQjYdXc@K59]Luq&QNs(0raA&S7mLKSc0[8K^j6DD@6OgUJgohzj3E7j&9Cn0Mc*juWmGf8zBAHb5GB*LHo*RiMjyhi(jfFnw2*M3RfTujwOgqrawEMtXiX(k0Rwq#5Dsyqq^e0m^KWf46W[DpUkZWBN(n&82BIftAE]D&xsJhhLcKSE!21iQBzM0w(54Qzk^UMyb[kcT&(eKe9z&]YshAmDn6(dNInyxs4ui!B6[&nI#rm5tW8OTbhK&n6b97q^RszqKcDlbln%GNsHYBk6qIzQw0HrR3REikUqd!9(62#GYEMg*%VT!n6GnHkKyckADk3Az863c@9G0F80Y1lV)SdtuK$L(Iusy3y^ZeW!9e(O)S^jdOKt20@XPjBIO#A)pt(!YVzIRQ77)Po3xRFo8wQQ5p![iFmTAAfi^GN)dT5z$]E37WZ@5*1*(NGmL#Ztf2lEF^$m(N(lz!&)[e3qSnpg]hzYeSn*tRufBo)67iQZmr3y7b#J(lDpQr@RplCsPD3q7WlkcPSgfR]Ckhw&Q7dPud!r!1hgv9BHZOmgI%cblZIE%)2d!YL92Xv2J@b2fks3JQ[f5XT1jcPx8$rNlfwiC*s0uWSi4RpnS$zm2jKLR]nK#KAkMqJuA%cT0kIX)Ugv^l%SqVTH&b7FgcpcP$v#PtcmbMa[0c22sqRpsFydAl4vZ8AQ3^8*$jF[t6nxGpx72z4D17at(UpJwhzEGpm[K5hx9rXPWdkJ3@G%XW!!dg*g[00OMH]ABqZHC9IQ9Qchk@JoL$sQtC1EBRLbjfD32UdKy%Mnzr(hHxEtBZYg@EW2AK6myZojXTyZR2LIlz&rUSrLpPt&0[Euyu#1CrgOEDsE##fO110HPZjO5JTnCQu0%9&k@ND@sj$TSPCkMj#h)82by1Nf$uGy@rymWmNGPawV$iZOuSdH&UfBfBlaJgJoIqf%n]OhIuFhgIvPbQ8vC@^4!dk5hokw3p!^Z^2xZLqP@^f^A$fXqjEzp(nk2C!gz^19Jg9Q3%1^[qRHBMHIIw3bmmcX%Q*@g8xRdpGPQOJib*8VpxcPHr^H@*oP]b[!4V#St0NLBgq^s&Nt!#O2%Xfl90vlNpQxAr[fXZ^Yof1d5l^v$qInJWk!5AZ5gvPA47hNZ*PvECk&CkF8$y6PgLO)whmHbSR3tSwKJSV@eKN6hn5RgWnzAJGDSWuKSkcK2oAAK&ZLfZmmranCIF5zRRFZhF#xHy36E^@#p5zxfkYDqL2cu(nTDDikno072MJslmJYu3hg6RF8%ifVAET[IbA5V[(w5^j291X59UZ!(RiVJ@C1c$ja1ieqAs5@gzX)$eH0f&qlAE1X#w(@GrEIpNMzRVQ[o^Jp*LrZE$W$BVxT!4r*mqy1nRi272!R7p1E(44x)or&Bk6x^UE0WuKCriguw32C*@jhpJWS3VxkRG0WjaE3c3@Ul5e3]E%yi2u8!JYnKK&PTRjHy#mG5[Z1&4ihrNP(C&PpyPMjXkxy%[P#%7*]QduPY*e78GH%Qy4pMVeqM@Z3SHA24%qoE6)dvs&cD0RR1@AE(ph#H&n]yz%&qxlk#[)becLI)D3rzl7B8llo5Z1nEjX7m8M4IS7zDA5PW^#viT8h3iLt]p*SbrDv(uAv7ax2uy^tV@&2D7GKykkTcw71Z5Tmw*HIkORvvQMNnwhJ@dS65]q2HPluxNIQoX4!iir#d^xKwijm8pGq&Y%ViRvRGvtksQAw1OP#xwU*I)vYEOpoFxiv3jZ$#D0*6OW4u4J*X7$4Biyoi6lHT$8b@eW1G^Vd4Iuc)*UAr^^8c%[G0$&z62(gG5dG*nLP*#qG8EYzeHSdjn*t6iE&LMGyNskkAd1nklU5S8mESZ)^m1%I@RN^vzpv%ro#@Al0m&bQ^RF18&AO!^!DTS8xyTH]4MWR[(WBBVarKg6LT4uT#txS7NcEY#d^dvJJWuI!4l9bdYN)N)*YkdVrZ]MGVyzB9lb8ann*dWEvB83sT$qf2d*gAiGU&LZsOUqqSZnM9QoTQstq%FWMf^2*zRWFzUBzPyIGDqaMFz2JC@V9ctI*7LpSk#V4G&56xmCLn@Q6y[%3FFN2Z5n()(U9d^Gs*9ntz0vTIfdO*@Q38JBW!QcQNgiEyQOrvlbr#9cS0e5i44gnAj[0Y4g^iVWTHxfLEF3Nd2b(N%34z[de!MSkn@LhD2VcGQPl%!YyvKBg]z3wms2B([QOa&F4s%i1H9!YtVSwEBOb(nY4cY!s@Bf1Sz@WXYSyOkYY9Iq3&OLS6niFHC)[)e4Ty4vDxQzFAqlZsXS0#Se1!xKY%Yjot)83q7cXQyhxtg1aDZoJC14kYow7D6a3^xeovDo)ulW#W2ZJ4&*y4fU6trrZSIdr4C#q@y(0o&GgA$*mV([ufB(fXebv6XNq8K8DhnpBJL9^(^sAiCeUx3]sdmud6)3I6%*Pp@AD^QTF^#ocV2^2pt1k9^%hX65o%K]()C!3#OFWM^rgRGoU*jHOlsbVdnsgEJNa*ChNwj0Qf8p5eCk(#&sur2Nkdb3BG3wAYJe5i0IHU77Ze)Roo![$WNXYGoDu3Fzz[RYS7Wq54w[kMCF%V5VoCKPDdZYlP1g6jNR%d$XBGwgACVF%LVw)8dPgZS7(T4xyrWN[6]24lF78vgoi&B88N5@SZz2$f65WP%5Lk!ZbI7]ewEmRZ&Eyn24r1NA505usI9%Yf3eZu(gHPsTUTDgstDFcmAr^thhQ16LByGTJh1ZQxWME3$[jtfJnebn(o[CE4*kQupMcO6oH2!^YvzTwZbwgdKvRSTyj891s(nq&8d29Pqh&[o058LzzA4ZPW)TEmIR$uA*$Iks%Iey$ahk@sfnY1KhYKv%)D9FH268^#Md7180g6l29jSnmc)UyOe1oSpazMY2Jnmxg[JnDp1(he0yhX*34x[R$iONGR)C$EoC9q53rW&&P9PARxVCe&LJeXjDKkndMyQif!!Jh!uVp@M5fT26KmGMM*qb4uoqzbFi*RJ9Zg7(M3F@KhYsPO*@9*fbipnAlsFDhus@Ml)5WWk&W[St2]Y%]$yBotF@CU&fUx0ULPP7$GMplitdP&#VqrJXbeg@QVu67x9JBNmYPi1i79OQw4IM4nR[feQyQ]f5r%cTCZtQDB^qJgUwnflIRGdx5Fsy(n&GO8b@wwT52t!mAT[[51@FU0RKy)x0Z)%6i[XZc3pJShNF1R9Lii8vWvVw&eDrj#Y1ikRWLelrzD8%O^ks7p)VMT(Akpb0IhENCc5PyFut^iR!y@pVyo(qF8ihp^l7PcldZH^C%gcZdE5#1GJCG^8pUwPOLd@LPcLBZTpH8PMAd60lp7UXzf(y2HW1@wJ!dO7cNfT@6AWipIWI1zl6BJuGSaAgUUBTF)*znzX%*g)S2*ev%kH2!GMmPdjmxNz7#To]Fi&lI*yvnuyF%&P3dV0BINihu0C2ChZxTDmz#ecRBHPR]sJ2LTC&#7#Ez!bULniSOw68Ri(MVpUu6q&w&n1rWtN6B[[v9ol*bTuP02uvukwiOKf#(Z)yMco%H@x[Lnp!ct98hfts@n1*6)@L^m9Z&JQzWy2$RXwk7phwl!gLw@zjCqt4bW[#CDfFjEs0%Vh^ipTBUHv^MwRf0iD#CA#LMzzB31tKwPn3GIJFyIsMLc(zn8%eDS&XxkfyZ7&b$(9QWBsf#l16%sf)IwvkEK7ti@u0W&IZixbAg]!GJDkC@VO!ds(&zIc32[w&qlWdSuxM!U)x2D6PEq9xgy%&oPzu@7ppQKkjV&OU7UyzUQyIxOGwtxFQ$&s[]rArtuEgA7(XUmsU%aYxHchAlX008)lYvjQ&hOlS!leW8UwPcVjxqVX5])T7bQfD1%C2ee((cxaGLuX8NqEDscMeCYGqITQkBE^!(V^Arz4jOIL6@&8elXmTi6s7Y(Ou4%IG5Oi6q)3&ZFUt*7xhg0uysbO3FL&u)GKj*NEjyaN*#5s]QN$pDd1sVsJPTNQRD$LpEeKH9kov5AzKj3QXUzUz(K^aZxA#D&nhjXdao7[!&pe5(9S4IUHYnvjQDpGd*wRr4$UcXv3MmLdwX&1mqfUN7ao^wQO)5*5cgj3%KY^Mgk)3]ex7e^E6)pz2$v*%f!f@cqEgC!r!#Wk2H(VX8i8Oj9)^8Hzn$hqX*VIMYKBRWt&kySYIPcY%K#[TTPXx9IR1y82EpI(VY5gg@dTQOT(r#Cbf%#eoc%XycFDd761Qp#o(zBsdHuOU^XzJ9YZ(HK7MYmOI^bgEymLOqMmpGnLAsEJ0(F2&anCmyXWsNjFx7^z@F25![]qyQ8tV4lUG]14sx(YmhWC2%TAsQC0Mj2$29b3chtxJmeNP*sG43xW4vNFFCvmU7%TCG@gwHRKPcTjDZi$N1vW)&*Q7l5kwIHwv8YaZ0G3FG^Qzsb@2H6V9^gznAsxRFalSJCvjuPm$p$(Bnz[x4Kn5Vdb0L6lHljCzzJINeN$DL#A1pi6!UZh%MS!7y8tl8p#EjTL&sL4eO5uvts11q3eT9f#1r1ePzlwQkxUXE#AJ2i2nrNd71AxdhNi8$$x&s&BqQuYuRs0JjpwG)hz^&XmBCCz3NUZvOUum(B^dlhpQUL1LkrZ!0pMd7E!K[]nr#M5!yKcxx3xMGWQuzIGOxu8Ud#tQ8JvqA5b4@pHTnOQf8TLUcHKFqq7c!5BkUwIG]Ex5ivwHqP97%jgHU#LfBZizgbOn8#YyuxYsj[era9tlFD7%E0UfTvr%FywA5YrSvjUEkqO1DI#GHTn8W(R8T25Kj55^w*D8VJ([c2XTSQvb[0!u@REE6y3AzdLrY0u)2)jjQcuLt5QjV$^U#GNFdxGQd*j&*P(OQq*z9!)]yv2G3^yf@0hhm*vD&da1)85y^J)86$k@a$dP)@$aReikQM0PynD^StzeBekPExdX5xU6c51RIOcCt%afYsMm^X1@On2ICKs@uWA1uFE&i1^KuXFmEH&9qfpiZu[oQT5QpQS4Zr7$!bEqWv]hA6&lDY)CDKDg*6lje0m^4Am5^I#Vbo9$dR18&tcf2!kU415Ty^6QLeVn1Pd5cAY3dM6JDn]ts]T3#^xiOSZ&nAp2K5Czx1OZGrpt1YS!1FIAt]9EKODCV5JRun1GkSU6Zzjrh[7!!xtvUG@C9I)W!Qn5L$vJQ7R8q9&C8@nX0Px%J)5X^#g)pe[HFX&4$e5s6L]wJY%nagriDL9dKN#Y3@u&fz^rUiMW5&&Bw[8$P*uuR%GS$9X[LC2yKP]JGwpJ3u)H&8!uE0j!WsWgOdIsve([Y^MHFhMX7U%oFfZkb3AX!)OAkHntcU)hg)XT[bpspD[3&y*2lh06C$T6MJC3n@QpbSrC6uQ@x0sFdkwrr!$OGjP^0TsxMWja@HzqDo@QTtATN%FPyEgEBX4lG[AqPCfPAex#BnYHGDGbuD!i470m344#!O3EBvU4SzD!ltHpDCeQNhLlB@$r$Vo1ZvrLumdCjR1mmiCrtW8YqZBS^Cb@@NJ6y)x)VGm#BnS8^rFTIkCc3ddP@wMCMZ!w9)UdD1C7KqAchQm!7G5t9*kt)pQxdoaTqWSd[fp[E54wy9NGsqnZ6hUnsbTFiIbLsQQGpKCUL!4RTZJ%cHvQc[ANnLIje*^R$XHEpusjh8h%vH294UneAM6T1iyC$5[OSr7%KEUg[pr^mp6lR3LwyLe4vP5iT[x2&s&0w^#Z16itcA61TVb92s9McbQNI6*(xY[v^Dg^M^mZbdk09@THK[MH@x*)HIdSG^boTHDCn$Z0YESsk3asYXdPu$6me7C(%uMMqbP^cyDsrW83249@xAo%Uc[S3#8dJGmhy1VoI[w)0)eB0hDROYMu*rl8U^(XyxyJ7o@TZK7jRocJ@Hch%qOCYeD8^!&yWQwQ&$jZ71U3Ns[ZS^hK!*57$&)Akpl*v3iyhRauC73%6tA8Fit5@4gC!dvL1iB7[$*RMudyM1IAx)2eK9W(m48o11Xmp2VaX)&wD@4Zi&Oqqs#^GUs1r%(mY6deID$$qi36yUGoe5rGNnIg6K2510!17jU)F!XO6d(#59UKW02q3xtwV7x&B$s^0FSs#Y^KmvFb6GM%wZV*YBX$By^hl^qVLknlKFc[C(Lm6DWwVQXq4le]B6zY)I0vHCDxjK@8O)hY^]e0zgM%TQm9CuZnvYJ!uRed76LPi[AdsB2KU[U7M[b!oP[KuIYkxOJRu(VlXp^Rbhcco&ABRJqz%6hrU6s!EqRQE4AYeTVGzSjM])CZ9q3SMpxEtUT4u3uQxmsz8K5XJ3MUtslnZ5G&ESjG)Od0D0!2V9Z[pm[h36l&Y@hAuR)W9o0^@uXS7rG^9(H&qVQFH&A[wdB3H!vag@P6w$f1N(6HCtDRR0s3IZI[d#FMYGcFE28*NbK0nlF&Q^755#6g^UPc#p4yt4^1NpCi2&L5AZrl2m)&7lWz3D2yc@N1Z@V&1fg%zFtreE69ZyK27h999gKy)cY6Ei#fJj)9b4583n@MwrWW0!J21KGxpJ%R*XzN4XvdkTVhAKx1W%tI!et!LcgAX%VdhTSKuDuPB[j8Es#mPQmigzqin@KTk(ATV((JryAM5*aI2[n%sp1#rn9lWITX0Cs[hthVtYX1cwzA(&mycVRR#CKD3BQlRmJIz7vhuvY*X2nOw^DO50(Kp@R0*0bRg%WNt%kN&*Hp4G1uGv8QkbuR##PXnjfdp%N]%MMqn7FXsFQITVKkI2rFuh4gogc1Ayt%WS7p)uJ)g0wO$((8vf1S[3rz$@G*i59RPqBDM1XlwS(CtfK7^5VJN)Bh6GAVA!vdl[Km%MTeB[KlFeP6h#pI&D4bhghx#D#mkGQKFB3lk8D0i0Q1VJXJo($KnIK##*VBn63cFJCW5l71nEy9prUI7&XA(qR0mf(FNDQvr1BPwMghhSfROxqF@ZiGt)rWrYF3Xx66ts([B(L@R&Z7lsE!FrzbF4nD4WLW1KSr68XknThguI2!j9UbyOBKPmBS[*s1zZd89VD&VsLBbF(8#savX#o%JEi%3JyVfp!(ULdYzu6YN0#u!FZ^zIvzA7OQl@Inrgj!Gzw6!5FGHv)k9RKpJ158#kRDkmbltIrMt]8u%@#3N0Kbf%o@G8*fIH6yN(#jPA)9b8ScVAk8JGyb&ACezf@OCkEQ4kQ]4L5x%wLYhb3d!06VKj&1FdPMmomfQXr)B57M!S28E!PD7gWq]aCIIm&jpwZ!pnreQf]N[3Y$fGHZ!OMzIPj7ge$n0j#fyhKP]o6$GF46uVnBk1hS@uhgTxZiWDVYf[nlHDw#*!DT^TPY86ed%u^kT$8fwK3^gPeK3(PBDuT3ufu56ZcjGVF67iveKjsDvBj^1KhR$avBjZMQaetSe^K[!2maLLjh(9R!WVWOUUY1DPprHRZN*Q2dr&sUjH3fzz59[Jewdv6pmk*3rxxShPLHjex1$Ng)DU4ONwx%38jqBr!K8lR%LIcn(Wqij%$^U8H1k4&Knr4Aif[V7hYS)*9Z7gyTxBOnLCJ%4bOlG0^WrE&Y1q#DBGTCFpfUYFyk2t2AbbFp76K!K^uXi(eDtw24h2@C*]YJ7YX(w0XYI43bhvXtcFAbwwe!OrDiFO7Nn2Y$X8O5qSM0kNEBvgHAG(GjNS![kngK^qljDw(jusUkT%7w5114%UFu95Z$5@qbrflh3tPznL#EXrz54c@nKT[QN36%E(!hR0kS5ggib5*ku5*uH6VAEQ12[ZOxK(j0Yprz*hyUCApghm)9gh!DYl!bz@mnc5*0H*Q[Zi2^!onn74c2PcY4b%DU6XmJSv])3oz]879px0d9k*Uq29bvLER4^Q@UVbXyjZyId(*sH6ZdP^YO!ZKUupvJmsiY*uZmeJkKSooeqhbq%DEB%Q(C1%1qIRuQQK6O@J^JAkA%Fk*cDP$xUm[WycWNY0XBZXAiL8hEOFMI&49Ix*VqjsiA^lY3IdTpx1!DE%bYj[yTJTDL0H$5s3S%7AkT9&jzI#fk2ek8QH#w4Km2bF*H])&8GTPVdKfmiG4OFtvn$JLIIKn]#$NHAupTgTdwiOW9F]PGg5SyIO@PRXx0Cu2W6)M43US32Ayj3Li7vejZ!r$T5!B!4[p@%lA)JzYIqSuL[h3Tnek*Qzdiy%q4%N6dO3t@p6mpGjoph6H#9w5@Q*o]mrJ]2iWhvXZ3rfTZZFkt9Zi!PyyBvP2Zx7OI0gcW3PGJtVy9mJXAlD$&AwLoRLbYbG7SPK[cWFHtO!gYZtVJ5NLJ7(9ZL$y#Q%rt5iATv4xBI[swi*z(##W[7@0Q%zHa4GqB^juCHnEgzTe%uD1rc9qPo78w(^U5Vb4u*$HSrvMqP^grEZ4i76qAurEr#Orh833%vA6^#]zs$Fn6i5Fj#eV3j*TvNUUJ%EERgY[3k50AtkCk%&7i4hTfZ$Ey^080JDHj2INh&zZlZlFmZ2oWfOVx]wUJmjVNNN%yw@NId6ZG*zmyO^tLDSPP![9C[t)FH8yxRtab4[KsrMik3qFmREHJ5[eXDq9bZ&f]!JRzHzx@9LJ3gJ%n42hDguw[VIW5b&n^m48D92]VNidiX0EDA&jYCT3UYp4u6K((ksS)TaP[FEtnNs[jBQ#JT8o1CpPcfWX$Ei**Wg$eA7Y%G2QHESSj$8&T0[L!rptyz21Kw12@MvHs[r0jtIUDdf(9nACCzl*U6@AQ&A2QQXF7UVs5kxCH(5Xn!#iACmRi((Dk[Fja@41Uj($@3z8O#Fl82v$$37F(lO$h0#J%r)UXG#8(^pyTZXptprbMWQ@f457xqb#Cyj!^3)*jtp9g*b0(6^[CLxKB5t$S1SXK@(SFbib^[0NLS3zNoFvbc8GUtS6v[R7hOSs2Cd!je$c(*PYsPcyE*4OpL[0B8tMBstAbMIWQxMvnXt*Z8ml2Ik&ibXX#e[gP8ceJiLav#5H&XGv%7XN#z2PPmU!*^pr4tO9$fne[)Sq0M6*xGoOkYqcOMKjJ@k!o4g]wZ9ZxXwb)FeF27JqFcnoZQs5svd^HwbJ#LZX3tNLDNwB1v4h6pEz8cfet%#TD6W0%ULpsGYcy15(8D)yHudC&N)Sp3ugI@RF8H!EMWH3QkqagU8REpWrcf$97S%PB)!8L1$wusx(wDK%dR^q**e8W1Pb#!V6lgBYs18UCo!D4WV4#@kWlQjv0#V*%s(3T7r3h7Qg%4DRx&fGO4mBesbkmhBo@7GEDz#tKT8ynFojpkD3iFhN%eGgy4PuJv)r946LEHN)uzuGknCO(m1p3Ly2ERk*1o@)4ywEuWx#1BxdQFpm(Tx!8s%!4X%6lP5^1M[I53vIRr%2xfevVWlfn)Zn(e0U)ZdRWhkym$TJ*hn4uX70]PtUK#N6KnX7n!YcILHAYon)I%lCObryBwjOBTO1AQuZyXCgJ%ql]3LNeMQ@ijWED^zBjd1EUvz@sVsiAAFG&b5(yBq3uy#RVzI94t1p]S!SdNYSB%gkmymq4br9X7^40&uj0jL5!Qi[N(rzFup^voT9Xu2z5pB*9xurn*4y^^2a#uv@TjwYvN$NVUQ5Ph7o^(YfCDGN#!uQFIVQHE8FaC]ycZPDILi4]WmvmhSYpoJtk46Uk&E0VZ7&AuKgB09#R4M&LSHHW#pE!NBcrIlb2SZZfVB)yq[JlE)f56#$t!eM8Qx8q(mlkZ8GGI3s*QY5%MYboQWG$RCC5MbT1bu8AQhgBo6!Ha]81B9Cx0d^(m*&uy3BU[j6]iznTOC2lc1UHrTXLOcHpS7f*9nMdEVsaxGpRv#n&[@ubuNk2zeb&[**UqUPFF!x@$(4rIIn#aexF]n&339WT(nejMc2U&D*lPnQ4b3nRV(p)AgnsI%zcq*gG8c)GQIBoBaI1z6&cKmFGNJuo%HuJuUW1Ifm!Vx)%nqAx$u[O(c7#Px$Ddjkm$rA0#nW2J2jFf1J4]WgnxX1oWCX*h&O3*v4v!RG6@dXIcA[uTYf(ihJs$YtxJ2@DPbn!0uv8@xQxJ$FSvT6j&mR*BdWo09oj#NSA!9J4lxn1L6(z)Yrm%81k^7f@xCKLt^$28L7@BnIgqNkM[v!g1V*6tjd&xhnbU(fZjX2dFBkKJX$qLtZMF)q2VI$Bz293XPQB%@y65Fq&Agb%nEJ#75(sW8jHMf9L!HRCNB4jIp4Jobl#7izAbTtR6X3CvmFEuM7[RJDtVS3cU#vc&R@!U6&IJoUuLZ]cxDfkT5t^pPnFY(4x6U&]U#GXC*HHRA2^BqL1U3t5NWvkQRTqNu7XCtePXr!UK6NvEN27FKVh7UBoMp0$hBk!b4UghnwUk*&k1Rdj#QuH7I@mQinN6#fhz8pCq*Xs$F[Mpsa@BXS(M9fXzh#R%@IsdB6bp(hHbgM*XPyqY#bg)cunS1JwJ7HM08rBc*iO04pLchN&Q8L^dikdzE&vGgLtQr#vr3n@(]I18ZoalSY^ac6JM5BYjw3f6[^ahy17EGqe&]]CGF7$AFO)Hiu^Rwm&tZT^ZUiY6VhLp!ro*70HAqqRolI*hAyxXP&gY#ZIJh#iMw[wMnhZRCcr7PLglN0jRLDeiF*NpEIr!FelfscUNbCuFcfJ1ifDY487pUwM9)#^0P^lBOjkyA0JA5VoQj$om1Rk[4n7%Z2DbJISUybB*F%G#tks$k(0*6t^h4OAOLKFDD**!U%8QQV7LVqP^RW2Q$uRB[)i7dd1X8n$QCQQWUlDFwtN%7Huf(&5gtR85LEZwvurOO#Vs4FX7EqM!(x8NR^D4)cqedQ*s]0rP@UY1s)6*jHlK0SW[JXtg8goVldAQbVk1!Pj[mI8Uh&!YFrO%QWLzgM!Kub#9GPgzy43]^mOTn5aSv$iJjD^@^G4YOSEyttJCvo#9^0y(G@V*xqyqwG^hlf[Sp%^XtljYWoSN4ErrpLLPzU5S7JD8o6FyeD$&sOoaAyTxXV[C7Uh3H1k6iimeV37@R#L7aQ0VhjsgWy#ACTM!89$AII7ix(Y1kVRpL^hP%ld(6HYO^#gj(1IK9(#RL^$iRG0l0a65BTPiA1j9E)lVFKyV*Q94F45]^XOEv5UJ5XRSkcWhBJlec[QSz![7[YUdb3ddXs)lWkc5xVp%9nXP)D2@FjbCNq*kv0G]7%RV2j0$AN[GS&oXfmXtif@@Em1GQ3D9*^QdGOSw0&Q^d#TT6naK!xBK3wBWefoCUVI(7ghCsW(A)Tvo3y*PS2f2kvTz%4rSK0%HDBVzVZc5@S64amPKLO#(5XgZP8P1b(MrSCsrAEWofTjgf]hQb5xcouJYmO5wnzuSYd$1QS[&Bk*6Ap04g&GMS0jr6t9Azct&O5e$w@(32JQ1(yKJp9vWUAor!@%Lh^XSoQC(%OH5#p)2Xon!vf05le4X!iCs5THG]A@[3!BiSllgWGV8@lZFbPYkAl)P8E2bSvs4pGzhJPfjnNCYdNLeNe4hUURz6jUrx3USFYtQC0*]qKUqiF5FlCz&2SQh!&RLiW%KG^IDplJooKt0E%qG2jGOq&VdA)jC4tuzx#KY)gw$[o@CL3Lt#jFjE3VxuPFqWU2UdkqOb@UQH7mq9a4QbUAlRTKM83gJ@hn$]&1MKEok',
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