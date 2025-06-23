<?php
namespace i2up\Test\v20250630\stream;

use i2up\stream\v20250630\SyncRule;
use i2up\common\Auth;
                
class SyncRuleTest extends \PHPUnit_Framework_TestCase
 {
    private $syncRule;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> syncRule = new SyncRule(new Auth());
    }

    public function testCreateSyncRule()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'table_map'=>array(
            '0'=>array(
            'key'=>'MartinezGonzalezGarcia',
            'split_dst_table'=>array(
            '0'=>array(
            'condition'=>'',
            'dst_table'=>'',
            'dst_user'=>'',),),
            'dst_table'=>'a',
            'dst_user'=>'b',
            'src_table'=>'c',
            'src_user'=>'d',
            'column'=>array(
            '0'=>array(
            'dst_column'=>'e',
            'src_column'=>'f',
            'src_field_type'=>'INT',
            'dst_field_type'=>'VARCHAR(60)',
            'pk'=>false,
            'flag'=>1,),),
            'filter'=>1,),),
            'full_sync_settings'=>array(
            'dump_thd'=>1,
            'clean_user_before_dump'=>0,
            'existing_table'=>'drop_to_recycle',
            'full_sync'=>0,
            'start_scn'=>'',
            'load_thd'=>1,
            'ld_dir_opt'=>0,
            'try_split_part_table'=>0,
            'concurrent_table'=>array(
            '0'=>array(
            'user'=>'',
            'table'=>'',),),
            'full_sync_custom_cfg'=>array(
            '0'=>array(
            'key'=>'',
            'value'=>'',),),
            'dump_split'=>array(
            'enable'=>false,
            'least_rows'=>1,
            'least_bytes'=>1,
            'expire_seconds'=>1,),
            'end_target_db'=>'',
            'end_target_type'=>'',
            'end_db_map'=>array(
            '0'=>array(
            'src_db'=>'',
            'tar_db'=>'',),),
            'end_tab_map'=>array(
            '0'=>array(
            'src_db'=>'',
            'src_table'=>'',
            'dst_db'=>'',
            'dst_table'=>'',
            'column'=>array(
            '0'=>array(
            'src_column'=>'',
            'dst_column'=>'',),),),),
            'isCreateTable'=>false,
            'full_max_conn'=>1,),
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
            'other_settings'=>array(
            'keep_usr_pwd'=>1,
            'enable_truncate_frequence'=>1,
            'keep_dyn_data'=>0,
            'table_change_info'=>1,
            'dly_constraint_load'=>0,
            'ddl_cv'=>0,
            'keep_bad_act'=>0,
            'ignore_foreign_key'=>0,
            'jointing'=>array(
            'table'=>'',
            'op'=>'append',
            'content'=>array(),),
            'dyn_thread'=>1,
            'convert_urp_of_key'=>0,
            'table_delay_load'=>array(),
            'tgt_extern_table'=>'',
            'bw_limit'=>'',
            'etl_table'=>array(
            '0'=>array(
            'oprType'=>'',
            'table'=>'',
            'user'=>'',
            'process'=>'',
            'addInfo'=>'',),),
            'filter_table_settings'=>array(
            'exclude_table'=>array(
            '0'=>array(
            'user'=>'',
            'table'=>'',),),
            'exclude_tab_with_column'=>'',
            'exclude_tab_with_column_switch'=>1,),
            'table_space_map'=>array(
            'tgt_table_space'=>'',
            'table_mapping_way'=>'',
            'table_path_map'=>array(),
            'table_space_name'=>array(),),
            'create_pk_col'=>'',
            'create_pk_col_name'=>'',
            'timezone_convert_switch'=>1,
            'src_timezone_switch'=>1,
            'src_timezone'=>'',
            'mask_sync_switch'=>'',
            'db_map_uuid'=>'',
            'byte_extend'=>1,
            'char_extend'=>1,
            'table_attr_cap_switch'=>1,
            'table_attr_cap'=>'',
            'is_target'=>1,
            'lsn_keep_time'=>1,
            'lsn_keep_interval'=>1,
            'master_allow'=>1,
            'virtual_key_settings'=>array(
            'auto_switch'=>'',
            'manual_switch'=>'',
            'auto_col_name'=>'',
            'auto_separate'=>'',
            'manual_columns'=>array(
            '0'=>array(
            'user'=>'',
            'tab'=>'',
            'col'=>'',
            'composite_col'=>'',
            'separator'=>'',),),),
            'encrypt_column_switch'=>1,
            'encrypt_column_method'=>1,
            'encrypt_columns'=>array(
            '0'=>array(
            'user'=>'',
            'table'=>'',
            'column'=>'',),),
            'initrans'=>1,
            'memory_settings'=>array(
            'dump_max_memory'=>1,
            'track_max_memory'=>1,
            'load_max_memory'=>1,
            'dump_unit'=>1,
            'track_unit'=>1,
            'load_unit'=>1,),),
            'biz_grp_list'=>array(),
            'map_type_list'=>array(),
            'src_db_auth_uuid'=>'',
            'tgt_db_auth_uuid'=>'',
            'comment'=>'',
            'rule_name'=>'ctt->ctt',
            'src_db_uuid'=>' 6C4AEF37-6496-6DCD-E085-DD640001E4EC',
            'tgt_db_uuid'=>' 1C5F3C4B-7333-9518-7349-9712BC9ED664',
            'user_map'=>array(
            'src_user'=>'user1',
            'tgt_user'=>'user2',),
            'base_settings'=>array(
            'dbmap_topic'=>'',
            'json_template'=>'',
            'binary_code'=>'',
            'kafka_message_encoding'=>'',
            'kafka_time_out'=>1,
            'part_load_balance'=>'',
            'row_map_mode'=>'',
            'save_json_text'=>false,
            'message_format'=>'',
            'full_sync_mode'=>'',
            'lib_name'=>'',
            'jnr_name'=>'',
            'exclude_dbs'=>array(),
            'exclude_dbs_switch'=>'',
            'start_rule_now'=>'',
            'ob_sharding_inst'=>'',
            'distribute_mode'=>'',
            'ha_switch'=>'',
            'subscribe_type'=>'',
            'subscribe_name'=>'',
            'subscribe_procedure'=>'',
            'shared_process'=>false,),
            'inc_sync_settings'=>array(
            'incre_sync'=>1,
            'dyn_thread'=>1,
            'convert_urp_of_key'=>'',
            'sync_lob'=>1,
            'gen_txn'=>1,
            'merge_track'=>1,
            'keep_bad_act'=>1,
            'fill_lob_column'=>1,
            'ddl_cv'=>1,
            'keep_seq_sync'=>'',
            'storage_settings'=>array(
            'keep_incre_time'=>1,
            'src_max_mem'=>1,
            'src_max_disk'=>1,
            'txn_max_mem'=>1,
            'tf_max_size'=>1,
            'max_ld_mem'=>1,),
            'error_handling'=>array(
            'load_err_set'=>'',
            'drp'=>'',
            'irp'=>'',
            'urp'=>'',
            'info'=>'',
            'report_failed_dml'=>'',),
            'dml_track'=>array(
            'change_table_structure'=>false,
            'date_time_column_unique'=>'',
            'load_date_time_column_unique'=>false,
            'op_column'=>'',
            'opv_insert'=>'',
            'opv_update'=>'',
            'opv_update_key'=>'',
            'opv_delete'=>'',
            'audit'=>false,
            'audit_prefix'=>'',
            'audit_appendix'=>'',
            'identity_column'=>'',
            'load_date_column'=>'',
            'load_time_column'=>'',
            'load_date_time_column'=>false,
            'keep_deleted_row'=>false,
            'date_column'=>'',
            'time_column'=>'',
            'date_time_column'=>'',),
            'redo_read_thread'=>1,
            'trackmode'=>'',
            'incre_full_sync_custom_cfg'=>array(
            '0'=>array(
            'key'=>'',
            'value'=>'',),),
            'log_file_retention'=>1,
            'incre_max_conn'=>1,),
            'compress_encrypt_settings'=>array(
            'compress_switch'=>1,
            'compress_algo'=>'',
            'encrypt'=>1,
            'compress'=>1,
            'compress_level'=>1,
            'encrypt_switch'=>1,),
            'column_map'=>array(
            '0'=>array(
            'user'=>'',
            'target'=>'',
            'column'=>'',),),
            'policy_settings'=>array(
            'policy_type'=>'',
            'one_time'=>'',
            'policies'=>'',),
            'maintenance'=>1,
            'is_duplicate'=>1,
            'full_map_switch'=>1,
            'database_map'=>array(
            '0'=>array(
            'src_database'=>'',
            'src_schema'=>'',
            'tgt_database'=>'',),),
            'encrypt_column_key'=>'',
            'incre_cmp_switch'=>'',
            'incre_cmp_db_uuid'=>'',
            'incre_cmp_db_type'=>'',
        );
        
        
        $res = $syncRule -> createSyncRule($arr);
        $this->do_assert($res);
    }

    public function testResumeOracleRule()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'scn'=>'1',
            'rule_name'=>'',
            'operate'=>'restart',
            'rule_uuids'=>array(
            '0'=>'5D601a57-8D2B-7ED8-2042-aeb2c68ADFD1',
            '1'=>'bbC1f8eE-48FE-B994-1871-85B11F7dc7E9',
            '2'=>'BFa7Caea-F7E8-dc9d-E95b-C66cC8d1bF5D',
            '3'=>'50b1BB5e-997C-23dE-7EDf-B666fde28DEf',
            '4'=>'d5CC3dBd-47ef-fA5E-baa3-1FbbE6bdAa4F',
            '5'=>'477dDA2a-5d71-3fAE-F0a4-8BaEED8D9a3A',
            '6'=>'6Eb28B99-B85e-EABB-66e6-dD995EBb3b33',
            '7'=>'bd7EF8b1-40EA-50fD-f18E-bcD6b7aD9C5f',
            '8'=>'feBB48fD-D56F-Af6B-6d9E-9213FA7b3eB5',
            '9'=>'cA71FFc3-EEd1-D7be-CcAA-2FB25d76ecD9',),
            'all'=>1,
            'tab'=>array(
            '0'=>array(
            'user'=>'',
            'table'=>'',),),
            'fix_relation'=>1,
        );
        
        
        $res = $syncRule -> resumeOracleRule($arr);
        $this->do_assert($res);
    }

    public function testStopOracleRule()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'scn'=>'1',
            'rule_name'=>'',
            'operate'=>'restart',
            'rule_uuids'=>array(
            '0'=>'FEDD867a-Fa5B-EC89-4551-C33C2F0c479F',
            '1'=>'7D98d9a0-17EC-73Fe-a90C-Dc7B1bfFB67B',
            '2'=>'dC2fb1Db-ADF7-Bb02-aE7D-1ff64Bb3ade9',
            '3'=>'1EF4FAeF-DB51-8Dfc-C79D-C8Db60dceFB7',
            '4'=>'9113fA0F-65B1-afBf-cfbA-CF52B616c7B8',
            '5'=>'30F60e77-1eBA-b782-fCA5-c1a6E112684F',
            '6'=>'bf3f586d-acDE-ecd1-B95F-35D714b306bc',
            '7'=>'5a62b22c-5cA9-38ee-7498-C5BFC5Db4858',
            '8'=>'94C39d0D-E1fB-E3EF-AE5b-15A4628425Cd',
            '9'=>'29D6cE2b-2C86-DB5B-5bB5-776e6bD15dAf',),
            'all'=>1,
            'tab'=>array(
            '0'=>array(
            'user'=>'',
            'table'=>'',),),
            'fix_relation'=>1,
        );
        
        
        $res = $syncRule -> stopOracleRule($arr);
        $this->do_assert($res);
    }

    public function testRestartOracleRule()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'scn'=>'1',
            'rule_name'=>'',
            'operate'=>'restart',
            'rule_uuids'=>array(
            '0'=>'eD37893e-cFCd-Fa7C-35BD-638bDED277C2',
            '1'=>'efcaFe43-57c8-4939-9AFf-E41dEAF69fCE',
            '2'=>'f9e36C8B-9B2F-9F0b-D1e9-1AAdf0B6d7C3',
            '3'=>'65D3cAcd-ceA3-e389-34e1-f2cAFDc3d5dC',
            '4'=>'e2AEF2Af-CcA3-b2F4-1783-0c2cc14534C3',
            '5'=>'BA7ACAEC-cCD4-E875-6A0E-d8E5239CA019',
            '6'=>'3f0e1fD2-A541-52E5-CA6b-3cfc7E7cfCe7',
            '7'=>'4d2760f4-8FBf-Fd53-f8bE-DCD3FFDe5dbc',
            '8'=>'D20b67bd-48d9-7DcA-fDEf-b80BAF327bec',
            '9'=>'725dea5A-f4fA-858C-38De-51c0C8B83bBC',),
            'all'=>1,
            'tab'=>array(
            '0'=>array(
            'user'=>'',
            'table'=>'',),),
            'fix_relation'=>1,
        );
        
        
        $res = $syncRule -> restartOracleRule($arr);
        $this->do_assert($res);
    }

    public function testStartAnalysisOracleRule()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'scn'=>'1',
            'rule_name'=>'',
            'operate'=>'restart',
            'rule_uuids'=>array(
            '0'=>'E5bbC556-8dd3-7D6a-ebca-aDAdcCc53bfe',
            '1'=>'6F8db4Bf-719e-ff7d-FCde-c59BdaE30b3b',
            '2'=>'0Ed224BA-f5f2-AFd2-180e-5aB23A261072',
            '3'=>'FB9Fe4e5-0658-CFcD-bad1-fE6C3Cab9Bdd',
            '4'=>'bE2CB6Bd-FFcC-Dc14-5e59-b64AeddF12ae',
            '5'=>'F1a30DB1-Ac26-a4D3-673c-f08cBB07e882',
            '6'=>'BA7eAD3D-f42B-b0De-a458-2cEd603FF2DE',
            '7'=>'3df486bC-cbAe-4E37-EBDC-f7AF6dbc709e',
            '8'=>'ccF7ad7c-9EDd-9183-B41C-ACfDcBC0dd4d',
            '9'=>'e2d32867-A83F-2621-4C96-Bf7BFB0c827E',),
            'all'=>1,
            'tab'=>array(
            '0'=>array(
            'user'=>'',
            'table'=>'',),),
            'fix_relation'=>1,
        );
        
        
        $res = $syncRule -> startAnalysisOracleRule($arr);
        $this->do_assert($res);
    }

    public function testStopAnalysisOracleRule()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'scn'=>'1',
            'rule_name'=>'',
            'operate'=>'restart',
            'rule_uuids'=>array(
            '0'=>'3bBbe1A3-fAdA-E0b0-9Edc-88dfb03c26bF',
            '1'=>'1BAA5b62-CB16-5d67-CCfc-D4c36dEa4490',
            '2'=>'f9B8bA4d-bD7f-f759-63F7-EeDD3FB4dAAA',
            '3'=>'3a336Ebd-B0Ae-0Db7-dA7F-7CfC4bfAcBdB',
            '4'=>'4fF929Ce-d3d1-6dB1-Dff3-CC9967d340Bc',
            '5'=>'93FA3Fc4-fAdD-AdAb-A9AF-e8709E233c6f',
            '6'=>'9d3EDfa9-Ac36-DbEE-8cCF-1fEe2c0Aa98E',
            '7'=>'DcC3bBDD-Ba4a-373b-1Fd8-bA76B5bd31d6',
            '8'=>'8B46Bf84-1a33-d7d5-348D-Ef8cfd595949',
            '9'=>'63bB33Db-EFcF-C516-743B-38DedcCdCeFa',),
            'all'=>1,
            'tab'=>array(
            '0'=>array(
            'user'=>'',
            'table'=>'',),),
            'fix_relation'=>1,
        );
        
        
        $res = $syncRule -> stopAnalysisOracleRule($arr);
        $this->do_assert($res);
    }

    public function testResetAnalysisOracleRule()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'scn'=>'1',
            'rule_name'=>'',
            'operate'=>'restart',
            'rule_uuids'=>array(
            '0'=>'0103A23A-aB8C-8AF0-de1d-9c05a01cDcbc',
            '1'=>'9E956A52-26Fa-e048-e9E6-DeE8Df3b01E3',
            '2'=>'efAAF2e9-7Dcc-C4eA-3Fd2-a68DBCdC159F',
            '3'=>'2cdd742D-A36a-eb9C-Acb5-Cb6BE7C1ef1E',
            '4'=>'Ed9009Ea-93FB-ef7E-E9F4-BA8704C4C865',
            '5'=>'4ffcc6Ac-A5A5-993c-39D4-a1FE74cf152e',
            '6'=>'49Ba1165-f897-7adC-b483-b1Af3BE35cD4',
            '7'=>'c97fAaAE-78Dc-F6b2-e1AF-D4B98FA84915',
            '8'=>'4C1774aA-c13D-99bA-d1fD-d0DBBecCfED9',
            '9'=>'Fb60A735-6eDB-B4Bd-0cbC-a7446D79fBFe',),
            'all'=>1,
            'tab'=>array(
            '0'=>array(
            'user'=>'',
            'table'=>'',),),
            'fix_relation'=>1,
        );
        
        
        $res = $syncRule -> resetAnalysisOracleRule($arr);
        $this->do_assert($res);
    }

    public function testStopAndStopanalysisOracleRule()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'scn'=>'1',
            'rule_name'=>'',
            'operate'=>'restart',
            'rule_uuids'=>array(
            '0'=>'3a033D1E-CCfa-fc1a-db3c-072A4cA4F3Bd',
            '1'=>'87844e6F-BEB5-Ae23-bc1e-1d3ABDDffCec',
            '2'=>'5486DF53-3183-9CEf-edDf-bfC8FA1E17BA',
            '3'=>'d90D9063-FBf7-5C52-67Ed-3a83CdAC39Ce',
            '4'=>'Be2C3FAD-99e1-fb8c-E181-424DA2bEDBC3',
            '5'=>'ee1A9Bf5-fBCE-E25d-523B-4caD5cee44f9',
            '6'=>'FFfbdC2D-F09b-c5Af-b9fC-B1f13dAc83Db',
            '7'=>'f3Fce42B-81BE-C0D0-566F-9Fc4AdcfBbb6',
            '8'=>'f53E17cF-af23-c27e-e2F4-25C5Cd9dF817',
            '9'=>'ff9Ff2ed-7D2a-f8c4-B767-eccc21EFaBf9',),
            'all'=>1,
            'tab'=>array(
            '0'=>array(
            'user'=>'',
            'table'=>'',),),
            'fix_relation'=>1,
        );
        
        
        $res = $syncRule -> stopAndStopanalysisOracleRule($arr);
        $this->do_assert($res);
    }

    public function testDuplicateOracleRule()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'scn'=>'1',
            'rule_name'=>'',
            'operate'=>'restart',
            'rule_uuids'=>array(
            '0'=>'eCC430e1-0A5d-7E4b-DACe-aCc732BaC83F',
            '1'=>'71978AfC-57dc-A96B-822f-c8d33Cde580F',
            '2'=>'596B66b1-C941-6EC8-9ea9-455dBCCDFdd6',
            '3'=>'a7BB5A8c-Bcd1-AEe1-ef8a-3455AEadEc6d',
            '4'=>'124Bb76C-42B1-efFf-8564-54C3c8F1Fcbc',
            '5'=>'CFD57CCa-eD96-1bD9-F4f5-6A72FD8B19f8',
            '6'=>'82FCA318-360c-ffcF-271F-B2A4142FBC25',
            '7'=>'3974F49f-Db5b-cD05-CADf-1725Fe80eD77',
            '8'=>'E2f4afA9-3A3d-95B7-DfBd-e365Bb2EeB47',
            '9'=>'4CBaC877-E8f7-fdb6-bf92-EEAbD7e39e1c',),
            'all'=>1,
            'tab'=>array(
            '0'=>array(
            'user'=>'',
            'table'=>'',),),
            'fix_relation'=>1,
        );
        
        
        $res = $syncRule -> duplicateOracleRule($arr);
        $this->do_assert($res);
    }

    public function testListSyncRules()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'rule_name',
            'search_value'=>'',
            'group_uuid'=>'',
            'where_args'=>array(
            'rule_name'=>'',
            'status'=>'',
            'src_db_name'=>'',
            'tgt_db_name'=>'',
            'db_ip'=>'',
            'username'=>'',
            'node_ip'=>'',
            'rule_uuid'=>'59121C1c-6cF3-FC8E-6fC8-47b08C9D5DB6',
            'src_db_type'=>'',
            'tgt_db_type'=>'',),
        );
        
        
        $res = $syncRule -> listSyncRules($arr);
        $this->do_assert($res);
    }

    public function testCreateBatchSyncRule()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'base_settings'=>array(
            'dbmap_topic'=>'',
            'json_template'=>'',
            'binary_code'=>'',
            'kafka_message_encoding'=>'',
            'kafka_time_out'=>1,
            'part_load_balance'=>'',
            'row_map_mode'=>'',
            'save_json_text'=>false,
            'message_format'=>'',),
            'incre_sync_settings'=>array(
            'incre_sync'=>1,
            'dyn_thread'=>1,
            'convert_urp_of_key'=>1,
            'sync_lob'=>1,
            'gen_txn'=>1,
            'merge_track'=>1,
            'keep_bad_act'=>1,),
            'compress_encrypt_settings'=>array(
            'compress_switch'=>'',
            'compress_algo'=>'',
            'encrypt'=>'',
            'compress'=>'',
            'compress_level'=>'',
            'encrypt_switch'=>'',),
            'column_map'=>array(
            'include_tab_with_column'=>array(
            '0'=>array(
            'user'=>'',
            'target'=>'',
            'column'=>'',),),
            'include_tab_with_column_switch'=>'',),
            'table_map'=>array(
            '0'=>array(
            'key'=>'LeeJacksonHernandez',
            'split_dst_table'=>array(
            '0'=>array(
            'condition'=>'',
            'dst_table'=>'',
            'dst_user'=>'',),),
            'dst_table'=>'a',
            'dst_user'=>'b',
            'src_table'=>'c',
            'src_user'=>'d',
            'column'=>array(
            '0'=>array(
            'dst_column'=>'e',
            'src_column'=>'f',),),),),
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
            'try_split_part_table'=>0,
            'his_thread'=>1,
            'concurrent_table'=>array(
            '0'=>'hello.world',),
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
            'exclude_tab_with_column'=>array(),
            'exclude_table'=>array(
            '0'=>array(
            'table'=>'',
            'user'=>'',),),
            'exclude_tab_with_column_switch'=>1,),
            'etl_settings'=>array(
            'etl_table'=>array(
            '0'=>array(
            'user'=>'',
            'oprType'=>'IRP',
            'table'=>'',
            'addInfo'=>'',
            'process'=>'SKIP',),),),
            'start_rule_now'=>0,
            'storage_settings'=>array(
            'src_max_mem'=>512,
            'keep_incre_time'=>'',
            'src_max_disk'=>5000,
            'max_ld_mem'=>'',
            'tf_max_size'=>100,
            'tgt_extern_table'=>'',
            'txn_max_mem'=>10000,),
            'table_space_map'=>array(
            'table_path_map'=>array(
            'ddd'=>'sss',
            'ddd1'=>'sss1',),
            'table_mapping_way'=>'ptop',
            'tgt_table_space'=>'',
            'table_space_name'=>array(
            'qq'=>'ss',),),
            'other_settings'=>array(
            'dly_constraint_load'=>0,
            'keep_seq_sync'=>'',
            'ddl_cv'=>0,
            'keep_bad_act'=>0,
            'gen_txn'=>'',
            'ignore_foreign_key'=>0,
            'jointing'=>array(
            'table'=>'',
            'op'=>'append',
            'content'=>array(),),
            'dyn_thread'=>1,
            'convert_urp_of_key'=>0,
            'message_format'=>'',
            'table_delay_load'=>array(),
            'json_format'=>'',
            'keep_usr_pwd'=>1,
            'encrypt_switch'=>1,
            'enable_truncate_frequence'=>1,
            'encrypt_type'=>1,
            'fill_lob_column'=>'',
            'merge_track'=>'',
            'keep_dyn_data'=>0,
            'zip_level'=>0,
            'table_change_info'=>1,
            'run_time'=>'"12*00:00-13:00*40M,3*00:00-13:00*40M"',),
            'bw_settings'=>array(
            'bw_limit'=>'"12*00:00-13:00*40M,3*00:00-13:00*40M"',),
            'biz_grp_list'=>array(),
            'map_type_list'=>array(),
            'error_handling'=>array(
            'load_err_set'=>'continue',
            'drp'=>'ignore',
            'irp'=>'irpafterdel',
            'urp'=>'toirp',
            'report_failed_dml'=>1,
            'info'=>'',),
            'comment'=>'',
            'dml_track'=>array(
            '0'=>array(
            'opv_update_key'=>'',
            'load_date_time_column_unique'=>false,
            'audit_appendix'=>'',
            'opv_update'=>'',
            'audit'=>false,
            'change_table_structure'=>false,
            'opv_insert'=>'',
            'keep_deleted_row'=>false,
            'date_column'=>'',
            'time_column'=>'',
            'date_time_column'=>'',
            'opv_delete'=>'',
            'audit_prefix'=>'',
            'op_column'=>'',
            'identity_column'=>'AUTO_INCR',
            'load_date_column'=>'',
            'load_time_column'=>'',
            'load_date_time_column'=>'',
            'enable'=>false,
            'date_time_column_unique'=>false,),),
            'user_map'=>array(
            'CTT'=>'CTT',),
            'prefix'=>'',
            'db_list'=>array(
            '0'=>array(
            'src_db_uuid'=>'',
            'tgt_db_uuid'=>'',
            'src_auth_db_uuid'=>'',
            'tgt_auth_db_uuid'=>'',
            'rule_uuid'=>'',),),
        );
        
        
        $res = $syncRule -> createBatchSyncRule($arr);
        $this->do_assert($res);
    }

    public function testBatchModifySyncRule()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'base_settings'=>array(
            'dbmap_topic'=>'',
            'json_template'=>'',
            'binary_code'=>'',
            'kafka_message_encoding'=>'',
            'kafka_time_out'=>1,
            'part_load_balance'=>'',
            'row_map_mode'=>'',
            'save_json_text'=>false,
            'message_format'=>'',
            'start_rule_now'=>'',
            'full_sync_mode'=>'',
            'lib_name'=>'',
            'jnr_name'=>'',
            'exclude_dbs'=>array(),
            'exclude_dbs_switch'=>'',),
            'inc_sync_settings'=>array(
            'incre_sync'=>1,
            'dyn_thread'=>1,
            'convert_urp_of_key'=>'',
            'sync_lob'=>1,
            'gen_txn'=>1,
            'merge_track'=>1,
            'keep_bad_act'=>1,
            'fill_lob_column'=>1,
            'ddl_cv'=>1,
            'keep_seq_sync'=>'',
            'storage_settings'=>array(
            'keep_incre_time'=>1,
            'src_max_mem'=>1,
            'src_max_disk'=>1,
            'txn_max_mem'=>1,
            'tf_max_size'=>1,
            'max_ld_mem'=>1,),
            'error_handling'=>array(
            'load_err_set'=>'',
            'drp'=>'',
            'irp'=>'',
            'urp'=>'',
            'info'=>'',
            'report_failed_dml'=>'',),
            'dml_track'=>array(
            'change_table_structure'=>false,
            'date_time_column_unique'=>'',
            'load_date_time_column_unique'=>false,
            'op_column'=>'',
            'opv_insert'=>'',
            'opv_update'=>'',
            'opv_update_key'=>'',
            'opv_delete'=>'',
            'audit'=>false,
            'audit_prefix'=>'',
            'audit_appendix'=>'',
            'identity_column'=>'',
            'load_date_column'=>'',
            'load_time_column'=>'',
            'load_date_time_column'=>false,
            'keep_deleted_row'=>false,
            'date_column'=>'',
            'time_column'=>'',
            'date_time_column'=>'',),),
            'compress_encrypt_settings'=>array(
            'compress_switch'=>'',
            'compress_algo'=>'',
            'encrypt'=>'',
            'compress'=>'',
            'compress_level'=>'',
            'encrypt_switch'=>'',),
            'column_map'=>array(
            'user'=>'',
            'target'=>'',
            'column'=>'',),
            'policy_settings'=>array(
            'policy_type'=>'',
            'one_time'=>'',
            'policies'=>'',),
            'table_map'=>array(
            '0'=>array(
            'key'=>'MooreYoungLopez',
            'split_dst_table'=>array(
            '0'=>array(
            'condition'=>'',
            'dst_table'=>'',
            'dst_user'=>'',),),
            'dst_table'=>'a',
            'dst_user'=>'b',
            'src_table'=>'c',
            'src_user'=>'d',
            'column'=>array(
            '0'=>array(
            'dst_column'=>'e',
            'src_column'=>'f',),),),),
            'full_sync_settings'=>array(
            'dump_thd'=>1,
            'clean_user_before_dump'=>0,
            'existing_table'=>'drop_to_recycle',
            'full_sync'=>0,
            'start_scn'=>'',
            'keep_exist_table'=>0,
            'keep_table'=>0,
            'load_thd'=>1,
            'ld_dir_opt'=>0,
            'try_split_part_table'=>0,
            'concurrent_table'=>array(
            '0'=>'hello.world',),
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
            'other_settings'=>array(
            'dly_constraint_load'=>0,
            'ddl_cv'=>0,
            'keep_bad_act'=>0,
            'ignore_foreign_key'=>0,
            'jointing'=>array(
            'table'=>'',
            'op'=>'append',
            'content'=>array(),),
            'dyn_thread'=>1,
            'convert_urp_of_key'=>0,
            'table_delay_load'=>array(),
            'tgt_extern_table'=>'',
            'bw_limit'=>'',
            'keep_usr_pwd'=>1,
            'etl_table'=>array(
            '0'=>array(
            'oprType'=>'',
            'table'=>'',
            'user'=>'',
            'process'=>'',
            'addInfo'=>'',),),
            'filter_table_settings'=>array(
            'exclude_table'=>array(
            '0'=>array(
            'user'=>'',
            'table'=>'',),),
            'exclude_tab_with_column'=>'',
            'exclude_tab_with_column_switch'=>1,),
            'table_space_map'=>array(
            'tgt_table_space'=>'',
            'table_mapping_way'=>'',
            'table_path_map'=>array(),
            'table_space_name'=>array(),),
            'enable_truncate_frequence'=>1,
            'keep_dyn_data'=>0,
            'zip_level'=>0,
            'table_change_info'=>1,
            'run_time'=>'"12*00:00-13:00*40M,3*00:00-13:00*40M"',),
            'biz_grp_list'=>array(),
            'map_type_list'=>array(),
            'user_map'=>array(
            'src_user'=>'user1',
            'tgt_user'=>'user2',),
            'maintenance'=>1,
            'is_duplicate'=>1,
            'full_map_switch'=>1,
            'rule_uuids'=>array(),
            'batch_base_settings'=>'',
            'batch_full_sync_settings'=>'',
            'batch_inc_sync_settings'=>'',
            'batch_full_sync_obj_filter'=>'',
            'batch_inc_sync_ddl_filter'=>'',
            'batch_other_settings'=>'',
            'batch_compress_encrypt_settings'=>'',
        );
        
        
        $res = $syncRule -> batchModifySyncRule($arr);
        $this->do_assert($res);
    }

    public function testDescribeSyncRulesLoadInfo()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'rule_uuid'=>'',
        );
        
        
        $res = $syncRule -> describeSyncRulesLoadInfo($arr);
        $this->do_assert($res);
    }

    public function testDeleteSyncRule()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'rule_uuids'=>array(),
            'force'=>false,
        );
        
        
        $res = $syncRule -> deleteSyncRule($arr);
        $this->do_assert($res);
    }

    public function testDescribeSyncRulesMrtg()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'set_time_init'=>'',
            'rule_uuid'=>'',
            'set_time'=>1,
            'type'=>'',
            'interval'=>'时间间隔',
        );
        
        
        $res = $syncRule -> describeSyncRulesMrtg($arr);
        $this->do_assert($res);
    }

    public function testDescribeSyncRules()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'uuid'=>'F530FB0E-0208-9071-66D3-E595AE7D5A4C',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $syncRule -> describeSyncRules($arr);
        $this->do_assert($res);
    }

    public function testListSyncRulesStatus()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $syncRule -> listSyncRulesStatus($arr);
        $this->do_assert($res);
    }

    public function testListRuleSyncTable()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'row_uuid'=>'Bdb4aA56-6CcA-ba52-fB8F-1e749Ec705A3',
            'limit'=>15,
            'offset'=>1,
        );
        
        
        $res = $syncRule -> listRuleSyncTable($arr);
        $this->do_assert($res);
    }

    public function testListSyncRulesSliceStatus()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'where_args'=>array(
            'src_slice_id'=>'510000201207101484',
            'status'=>'',
            'src_slice_ip'=>'113.6.253.95',
            'src_slice_status'=>'',
            'src_slice_port'=>'',
            'cluster_name'=>'',
            'phy_addr'=>'',),
            'search_field'=>'rule_name',
            'search_value'=>'',
            'page'=>1,
            'limit'=>10,
            'rule_uuid'=>'',
        );
        
        
        $res = $syncRule -> listSyncRulesSliceStatus($arr);
        $this->do_assert($res);
    }

    public function testDescribeSyncRulesHasSync()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'offset'=>'0',
            'limit'=>10,
            'row_uuid'=>'C6C333eE-9ACb-86fE-4A3c-fEF5e9E34D3c',
            'search'=>'',
        );
        
        
        $res = $syncRule -> describeSyncRulesHasSync($arr);
        $this->do_assert($res);
    }

    public function testListSyncRuleLog()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'offset'=>0,
            'limit'=>10,
            'date_start'=>'1979-08-29',
            'date_end'=>'1976-02-07',
            'type'=>-1,
            'module_type'=>-1,
            'query_type'=>1,
            'rule_uuid'=>'F530FB0E-0208-9071-66D3-E595AE7D5A4C',
            'search_content'=>'test',
        );
        
        
        $res = $syncRule -> listSyncRuleLog($arr);
        $this->do_assert($res);
    }

    public function testDescribeSyncRulesObjInfo()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'offset'=>0,
            'limit'=>10,
            'rule_uuid'=>'3B3579BC-e865-ba5b-f2aA-906964d591da',
            'usr'=>'',
            'sort'=>'',
            'sort_order'=>'',
            'search'=>'',
            'obj_type'=>'',
        );
        
        
        $res = $syncRule -> describeSyncRulesObjInfo($arr);
        $this->do_assert($res);
    }

    public function testSwitchSyncRuleMaintenance()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'maintenance_switch'=>'',
            'uuid'=>'',
        );
        
        
        $res = $syncRule -> switchSyncRuleMaintenance($arr);
        $this->do_assert($res);
    }

    public function testDescribeSyncRulesFailObj()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'offset'=>0,
            'limit'=>10,
            'rule_uuid'=>'AdBFc61f-6c42-822b-8c50-524bD2C5b1A9',
            'search'=>'',
            'type'=>1,
            'stage'=>1,
        );
        
        
        $res = $syncRule -> describeSyncRulesFailObj($arr);
        $this->do_assert($res);
    }

    public function testDescribeRuleZStructure()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'db_uuid'=>'8C25b4b4-21D1-dBE4-4df8-C3F2D01246dc',
            'level'=>'',
            'type'=>'',
            'tab_name'=>'',
            'type_value'=>'',
            'auth_uuid'=>'',
            'slt_subscriber_type'=>'',
        );
        
        
        $res = $syncRule -> describeRuleZStructure($arr);
        $this->do_assert($res);
    }

    public function testDescribeSyncRulesIncreDdl()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'offset'=>0,
            'limit'=>'10',
            'rule_uuid'=>'4B9D0ABf-223A-C5fC-dBDC-9F93EDca5dC1',
        );
        
        
        $res = $syncRule -> describeSyncRulesIncreDdl($arr);
        $this->do_assert($res);
    }

    public function testRuleTableFix()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'rule_uuid'=>'F530FB0E-0208-9071-66D3-E595AE7D5A4C',
            'tab'=>array(
            '0'=>'I2.table',),
            'fix_relation'=>0,
        );
        
        
        $res = $syncRule -> ruleTableFix($arr);
        $this->do_assert($res);
    }

    public function testListRuleIncreDml()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'offset'=>0,
            'limit'=>'10',
            'rule_uuid'=>'C3f83A1d-3AEc-B3A6-Aaef-EA66BB9363cf',
        );
        
        
        $res = $syncRule -> listRuleIncreDml($arr);
        $this->do_assert($res);
    }

    public function testRuleGetScn()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'uuid'=>'B11ADfDF-A3Ea-Db7b-7148-d4665E4A0730',
        );
        
        
        $res = $syncRule -> ruleGetScn($arr);
        $this->do_assert($res);
    }

    public function testDescribeExtractSyncRulesObjInfo()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'offset'=>0,
            'limit'=>10,
            'rule_uuid'=>'bc47cc6A-ceeE-F6ca-63Bf-CF9b1BB30258',
            'usr'=>'',
            'sort'=>'',
            'sort_order'=>'',
            'search'=>'',
            'obj_type'=>'',
        );
        
        
        $res = $syncRule -> describeExtractSyncRulesObjInfo($arr);
        $this->do_assert($res);
    }

    public function testRuleGetRpcScn()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'db_uuid'=>'',
        );
        
        
        $res = $syncRule -> ruleGetRpcScn($arr);
        $this->do_assert($res);
    }

    public function testDescribeLoadSyncRulesObjInfo()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'offset'=>0,
            'limit'=>10,
            'rule_uuid'=>'14B1546d-Db6e-CDDe-B17f-e09dFaDe5f7C',
            'usr'=>'',
            'sort'=>'',
            'sort_order'=>'',
            'search'=>'',
            'obj_type'=>'',
        );
        
        
        $res = $syncRule -> describeLoadSyncRulesObjInfo($arr);
        $this->do_assert($res);
    }

    public function testRuleGetReverseScn()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'rule_uuid'=>'',
        );
        
        
        $res = $syncRule -> ruleGetReverseScn($arr);
        $this->do_assert($res);
    }

    public function testDescribeSyncRulesDML()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'offset'=>1,
            'limit'=>'10',
            'usr'=>'',
            'rule_uuid'=>'9F9262BC-4e99-B5E0-b6ef-3FE1B7DbDF8d',
            'sort_order'=>'asc',
            'search'=>'',
            'sort'=>'',
        );
        
        
        $res = $syncRule -> describeSyncRulesDML($arr);
        $this->do_assert($res);
    }

    public function testListKafkaOffsetInfo()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'rule_uuid'=>'6fEb20c4-f8F5-9781-D5ed-39f2EcAA3b4e',
        );
        
        
        $res = $syncRule -> listKafkaOffsetInfo($arr);
        $this->do_assert($res);
    }

    public function testDeleteSyncRulesDML()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'uuid'=>'',
            'type'=>0,
        );
        
        
        $res = $syncRule -> deleteSyncRulesDML($arr);
        $this->do_assert($res);
    }

    public function testGetRuleFullSyncStat()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'limit'=>'',
            'offset'=>'',
            'user'=>'',
            'table'=>'',
            'stage'=>'total',
            'rule_uuid'=>'',
        );
        
        
        $res = $syncRule -> getRuleFullSyncStat($arr);
        $this->do_assert($res);
    }

    public function testIncreDmlFixAll()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'rule_uuid'=>'',
        );
        
        
        $res = $syncRule -> increDmlFixAll($arr);
        $this->do_assert($res);
    }

    public function testSyncRulePrecheck()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'table_map'=>array(
            '0'=>array(
            'src_table'=>'',
            'src_user'=>'',
            'dst_table'=>'',
            'dst_user'=>'',),),
            'src_db_uuid'=>'',
            'tgt_db_uuid'=>'',
            'src_db_auth_uuid'=>'',
            'tgt_db_auth_uuid'=>'',
            'preview'=>array(
            'alter'=>array(
            'alter_function'=>false,
            'alter_index'=>false,
            'alter_procedure'=>false,
            'alter_queue'=>false,
            'alter_sequence'=>false,
            'alter_table'=>false,
            'alter_tablespace'=>false,
            'alter_view'=>false,),
            'create'=>array(
            'create_index'=>false,
            'create_or_replace_function'=>false,
            'create_or_replace_procedure'=>false,
            'create_or_replace_queue'=>false,
            'create_or_replace_synonym'=>false,
            'create_or_replace_type'=>false,
            'create_or_replace_view'=>false,
            'create_role'=>false,
            'create_sequence'=>false,
            'create_table'=>false,
            'create_tablespace'=>false,),
            'drop'=>array(
            'drop_function'=>false,
            'drop_index'=>false,
            'drop_procedure'=>false,
            'drop_queue'=>false,
            'drop_sequence'=>false,
            'drop_synonym'=>false,
            'drop_table'=>false,
            'drop_tablespace'=>false,
            'drop_type'=>false,
            'drop_view'=>false,),),
        );
        
        
        $res = $syncRule -> syncRulePrecheck($arr);
        $this->do_assert($res);
    }

    public function testGetDbTimezone()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'db_uuid'=>'',
        );
        
        
        $res = $syncRule -> getDbTimezone($arr);
        $this->do_assert($res);
    }

    public function testDescribeRuleDbCheck()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'isCreateTable'=>1,
            'full_map_switch'=>1,
            'map_type'=>'',
            'tab_map'=>array(),
            'map_type_list'=>array(),
            'src_db_uuid'=>'',
            'dst_db_uuid'=>'',
        );
        
        
        $res = $syncRule -> describeRuleDbCheck($arr);
        $this->do_assert($res);
    }

    public function testImportSyncRule()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'file'=>'',
            'ext'=>'',
        );
        
        
        $res = $syncRule -> importSyncRule($arr);
        $this->do_assert($res);
    }

    public function testExportSyncRule()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'include_active_db'=>1,
            'include_active_node'=>1,
            'rule_uuids'=>array(),
        );
        
        
        $res = $syncRule -> exportSyncRule($arr);
        $this->do_assert($res);
    }

    public function testGetStreamRuleLsn()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'offset'=>1,
            'limit'=>1,
            'rule_uuid'=>'',
            'date'=>'2004-10-31 01:04:58',
        );
        
        
        $res = $syncRule -> getStreamRuleLsn($arr);
        $this->do_assert($res);
    }

    public function testStatusStreamOverall()
    {
        $syncRule = $this -> syncRule;
        $arr = array();
        
        
        $res = $syncRule -> statusStreamOverall($arr);
        $this->do_assert($res);
    }

    public function testDeleteIncreDML()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'uuid'=>'',
            'opr_type'=>'ddl',
        );
        
        
        $res = $syncRule -> deleteIncreDML($arr);
        $this->do_assert($res);
    }

    public function testDescribeRuleSelectUser()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'db_uuid'=>'B2CDEdFD-0622-4FAF-dDbA-5ccd55112E8c',
            'list_db'=>1,
            'db_name'=>'',
            'auth_uuid'=>'',
        );
        
        
        $res = $syncRule -> describeRuleSelectUser($arr);
        $this->do_assert($res);
    }

    public function testListSummaryView()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'where_args'=>array(
            '0'=>array(
            'src_db_name'=>'',
            'tgt_db_name'=>'',
            'status'=>'',
            'src_db_type'=>'',
            'rule_name'=>'',),),
            'page'=>1,
            'limit'=>1,
        );
        
        
        $res = $syncRule -> listSummaryView($arr);
        $this->do_assert($res);
    }

    public function testListIncreDmlExtract()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'offset'=>1,
            'limit'=>1,
            'rule_uuid'=>'E09db3d9-eA1B-C6dA-239D-f620C0dD735F',
        );
        
        
        $res = $syncRule -> listIncreDmlExtract($arr);
        $this->do_assert($res);
    }

    public function testListIncreDmlLoad()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'offset'=>1,
            'limit'=>1,
            'rule_uuid'=>'F652B1Bc-19Ce-D3AB-6813-f7FdDFBB9E23',
        );
        
        
        $res = $syncRule -> listIncreDmlLoad($arr);
        $this->do_assert($res);
    }

    public function testListSummaryMaskView()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'where_args'=>array(
            '0'=>array(
            'src_db_name'=>'',
            'tgt_db_name'=>'',
            'status'=>'',
            'src_db_type'=>'',
            'rule_name'=>'',),),
            'page'=>1,
            'limit'=>1,
        );
        
        
        $res = $syncRule -> listSummaryMaskView($arr);
        $this->do_assert($res);
    }

    public function testListExtractHeatMap()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'rule_uuid'=>'',
            'top'=>'',
        );
        
        
        $res = $syncRule -> listExtractHeatMap($arr);
        $this->do_assert($res);
    }

    public function testListLoadHeatMap()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'rule_uuid'=>'',
            'top'=>'',
        );
        
        
        $res = $syncRule -> listLoadHeatMap($arr);
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