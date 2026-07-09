<?php
namespace i2up\Test\v20260626\stream;

use i2up\stream\v20260626\SyncRule;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class SyncRuleTest extends TestCase
 {
    private $syncRule;
    
    public function setUp():void
    {
        parent::setup();
        $this -> syncRule = new SyncRule(new Auth());
    }

    public function testCreateSyncRule()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'table_map'=>array(
            '0'=>array(
            'key'=>'MooreLopezHarris',
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
            '9'=>'JAVA SOURCE',),
            'enable'=>1,),
            'inc_sync_ddl_filter'=>array(
            'inc_sync_ddl_data'=>array(
            '0'=>'INDEX',
            '1'=>'VIEW',
            '2'=>'FUNCTION',),
            'enable'=>1,),
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
            'table_delay_load'=>array(
            '0'=>array(
            'user'=>'',
            'table'=>'',),),
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
            'table'=>'',
            'schema'=>'',),),
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
            'load_unit'=>1,
            'load_full_max_memory'=>1,),
            'all_custom_config'=>array(
            '0'=>array(
            'key'=>'',
            'value'=>'',),),
            'schedule_stop_mode'=>1,
            'create_temp_table'=>1,
            'default_row_id_key'=>1,
            'auto_create_key'=>1,
            'auto_create_index'=>1,
            'auto_case_convert'=>1,
            'char_proportion_extend'=>1,
            'default_row_id_column'=>'',),
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
            'shared_process'=>false,
            'json_format'=>'',
            'env_check_result'=>array(),),
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
            'incre_max_conn'=>1,
            'server_user'=>'',
            'server_service'=>'',),
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
            'tgt_database'=>'',
            'inst_topic'=>'',),),
            'encrypt_column_key'=>'',
            'incre_cmp_switch'=>'',
            'incre_cmp_db_uuid'=>'',
            'incre_cmp_db_type'=>'',
            'src_db_stream_uuid'=>'',
            'tgt_db_stream_uuid'=>'',
            'sync_type'=>array(),
            'env_check_reault'=>array(),
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
            '0'=>'589CC5CB-486B-6F3B-06Ad-ebD5aDF71d2f',
            '1'=>'c45C9542-Cd5f-34e2-45Db-6D55CEc96B1D',
            '2'=>'4ce1d70B-CD47-5EB6-15A0-f84F62F7bc6F',
            '3'=>'A3aA52B7-5fff-15D9-DCf6-4A57B6bb98E6',
            '4'=>'eF2Ff4DA-AAdf-24fe-669B-Aae9f9e63cCc',
            '5'=>'Ff2b49Dd-D727-800F-FeA8-BA79aF3C43f1',
            '6'=>'6c74E3AE-26E3-a9db-a9c9-D2C558baAC41',
            '7'=>'B0Efb79B-8fEB-0E69-852d-3EFdD3D9f43a',
            '8'=>'6c7d9b1b-E782-2f9d-5c5e-97317DEA6E7b',
            '9'=>'3ffc431d-B944-2eBb-BEB5-CE6EbBEfcE4D',),
            'all'=>1,
            'tab'=>array(
            '0'=>array(
            'user'=>'',
            'table'=>'',),),
            'fix_relation'=>1,
            'new_src_uuid'=>'',
            'new_tgt_uuid'=>'',
            'new_full_sync_uuid'=>'',
            'env_check'=>1,
            'migrate_table'=>1,
            'migrate_option'=>1,
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
            '0'=>'F36fed34-74Bc-9CeB-bdB4-D4Efc14adFde',
            '1'=>'A13383e7-eE93-6235-525A-B7d1fEA9EF7D',
            '2'=>'0fE2e60b-AdF8-732B-eF8B-B2099d2FDDFC',
            '3'=>'cdbE9c2e-bFFa-EA9c-1fdB-dFe2d3cECEA5',
            '4'=>'4DedF5e6-cb2F-DAfA-Df9B-3C00448A1cfE',
            '5'=>'124Fe75f-9c69-fA4f-E67B-39e6F4EDCFEc',
            '6'=>'5b2CE6bb-Cc4c-AdeC-E8eC-25b6d6DE6951',
            '7'=>'6e3cBa28-59BB-3fF6-d9CB-124C9BCc952D',
            '8'=>'dA98eEBd-4AD1-EDdA-E3E2-ce89f28E09CB',
            '9'=>'E52Ab9A2-Eb9A-5fCb-A17a-579Aa3D7534e',),
            'all'=>1,
            'tab'=>array(
            '0'=>array(
            'user'=>'',
            'table'=>'',),),
            'fix_relation'=>1,
            'new_src_uuid'=>'',
            'new_tgt_uuid'=>'',
            'new_full_sync_uuid'=>'',
            'env_check'=>1,
            'migrate_table'=>1,
            'migrate_option'=>1,
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
            '0'=>'4CB574E5-8875-E581-3F42-CDe0f4EAb307',
            '1'=>'fC9CBC9c-1c6a-fdDC-bD94-9EE4c84dcc3f',
            '2'=>'F64d26CF-dee8-f8Ad-eab9-3c8AA1A2A3ED',
            '3'=>'cC328EbA-b423-De86-acd0-B10fAd61FFb1',
            '4'=>'4bF4D47d-3c6a-Fe6B-Ace3-a4d15EeAEefC',
            '5'=>'9B8a2FDA-fC5b-D40A-7F23-a4Acfe79b5AD',
            '6'=>'73a4DcbB-E3d0-fC7E-EBFB-4297d69f66FF',
            '7'=>'c7E6E47C-BbC1-dD6B-Abab-CDc1BEBF7ECf',
            '8'=>'3A30fD9F-cd9C-D1f3-3Bf2-eC8f4Ff8c9bA',
            '9'=>'C3eaba71-da7C-C8cD-1AFc-75B0DFC7DA95',),
            'all'=>1,
            'tab'=>array(
            '0'=>array(
            'user'=>'',
            'table'=>'',),),
            'fix_relation'=>1,
            'new_src_uuid'=>'',
            'new_tgt_uuid'=>'',
            'new_full_sync_uuid'=>'',
            'env_check'=>1,
            'migrate_table'=>1,
            'migrate_option'=>1,
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
            '0'=>'ED47545c-D2B2-fBe9-CfBB-77da6DEAab91',
            '1'=>'EFd5A913-7E4D-74b8-87eE-C7E66DE2CB34',
            '2'=>'87d91586-cC86-8F89-C3C3-fFB11FBd35F1',
            '3'=>'3d76fd65-DcAa-CEF3-cADA-CC1Ede43C6Ff',
            '4'=>'CD0a7Ace-41D6-5cC9-f2ee-5462D4766bdc',
            '5'=>'b2f22c7A-0CbF-D8Ab-d817-f2f6550f21Fc',
            '6'=>'1CF43ceD-9b60-3cbE-b197-DFDe61eb11EE',
            '7'=>'A38cFFfC-286E-Db0E-bdF4-CdA1b1bc2D6f',
            '8'=>'3d828Eb5-9b53-Bb83-f22c-edc6d73C11d6',
            '9'=>'31e0ce5E-be6D-4d8F-5e18-F9C56c4852E8',),
            'all'=>1,
            'tab'=>array(
            '0'=>array(
            'user'=>'',
            'table'=>'',),),
            'fix_relation'=>1,
            'new_src_uuid'=>'',
            'new_tgt_uuid'=>'',
            'new_full_sync_uuid'=>'',
            'env_check'=>1,
            'migrate_table'=>1,
            'migrate_option'=>1,
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
            '0'=>'2Acb6F8a-6778-e704-28DF-4768dBeDeA1d',
            '1'=>'bAc6eBFf-FEB3-045c-277F-59D2E34B9152',
            '2'=>'17AA274F-c9Cd-BcbA-eCA1-EeAe3fFe788f',
            '3'=>'A1F3CdAE-F8e7-f905-5522-cAeFAE69eDC1',
            '4'=>'f685c6dE-Bc7d-bbBA-83f5-1AC4Bd8EE8c4',
            '5'=>'75fAB405-A333-Da67-eFEA-cd551DEc29dc',
            '6'=>'Fd4b5b6D-6DdB-a7be-8c7b-52A328D22F59',
            '7'=>'Cd1df2cA-15A1-249C-a2bF-509E9affce0d',
            '8'=>'2bd9ADd7-06e1-74bf-bd22-cB0C2Ef3fcdD',
            '9'=>'efbb668e-12AA-B1bF-DAdE-7D65FcDE59A0',),
            'all'=>1,
            'tab'=>array(
            '0'=>array(
            'user'=>'',
            'table'=>'',),),
            'fix_relation'=>1,
            'new_src_uuid'=>'',
            'new_tgt_uuid'=>'',
            'new_full_sync_uuid'=>'',
            'env_check'=>1,
            'migrate_table'=>1,
            'migrate_option'=>1,
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
            '0'=>'525FE5Ff-5CAf-cfFA-27C4-4a04E2124af9',
            '1'=>'fD1fFEE2-2A59-cAA1-A6D5-93aeDDd610EE',
            '2'=>'fBffD2c3-7edE-ADeA-F278-3B5eFfb7dDEb',
            '3'=>'7edC17eC-7cFb-CA41-DFb6-1b5BD7FBcF1e',
            '4'=>'3BFF3B6C-4660-288d-C878-fe287dEe1F1b',
            '5'=>'C99AB4Ae-7FaE-d55d-C27A-6Cd29F39FeD5',
            '6'=>'B9D7Aa9c-7d9E-4ef8-DDcD-ccA99CdC0d3E',
            '7'=>'c46c07f5-2fEc-1dF2-b0Db-D000dD2F4aB1',
            '8'=>'9d2cAfEA-aEBb-4bEE-cDec-f1cBDecB0Cdd',
            '9'=>'b9c7dA9B-56EC-dD98-42bb-5581cD16c6c4',),
            'all'=>1,
            'tab'=>array(
            '0'=>array(
            'user'=>'',
            'table'=>'',),),
            'fix_relation'=>1,
            'new_src_uuid'=>'',
            'new_tgt_uuid'=>'',
            'new_full_sync_uuid'=>'',
            'env_check'=>1,
            'migrate_table'=>1,
            'migrate_option'=>1,
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
            '0'=>'CF13888f-2cdA-De84-9441-82e19Ac5EefC',
            '1'=>'fE2a6265-48D6-EBbD-2C8e-C9e94a38bB84',
            '2'=>'a83eF6EB-41eD-6B41-3dF7-6EDe42713CdC',
            '3'=>'47f7Ae71-E2F5-ecD4-b9E1-4f46Ae482BdE',
            '4'=>'E25EcC3C-d14f-D101-EfcA-2FACF0f3E381',
            '5'=>'BB8bC33C-5d9D-3467-88f9-c72Dec7Ed4E6',
            '6'=>'Fc3cceec-bBeC-7814-d539-43fbcdC8daC7',
            '7'=>'bA5Eb7c9-eD23-aF31-89d1-72ccDDf1BbBE',
            '8'=>'6FF588f8-DA6F-18EE-E47e-BCbd2C51a4E7',
            '9'=>'44dc9cC3-bB2F-bEb5-c81a-E8cB1cA52A60',),
            'all'=>1,
            'tab'=>array(
            '0'=>array(
            'user'=>'',
            'table'=>'',),),
            'fix_relation'=>1,
            'new_src_uuid'=>'',
            'new_tgt_uuid'=>'',
            'new_full_sync_uuid'=>'',
            'env_check'=>1,
            'migrate_table'=>1,
            'migrate_option'=>1,
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
            '0'=>'DBaC33eD-43Ff-f63f-2554-6F9DCDC4eFbA',
            '1'=>'dB22fcBe-3B25-db0A-1FcD-fEddDAb3D343',
            '2'=>'0EE50850-df40-8B16-1158-cAAB2Bf71Cf5',
            '3'=>'07E1B3a4-c16b-786A-bA4E-510D2D6E61eF',
            '4'=>'3C4E8b53-9a9D-124C-d5Fa-0bE6433CC2EE',
            '5'=>'052c141d-5EE2-52Fc-8DAF-5e934A726AEf',
            '6'=>'B7B595Dc-b3d0-239f-ccEF-5BB4fD72f082',
            '7'=>'999c5143-A2bb-eD5A-34e3-Ac78A7E1ca3E',
            '8'=>'B2dAe8DC-9e49-3E7F-F0f4-C6B1fC5A3f4A',
            '9'=>'aDb7df23-E7fF-90B0-5c15-1CAd0D25dD2e',),
            'all'=>1,
            'tab'=>array(
            '0'=>array(
            'user'=>'',
            'table'=>'',),),
            'fix_relation'=>1,
            'new_src_uuid'=>'',
            'new_tgt_uuid'=>'',
            'new_full_sync_uuid'=>'',
            'env_check'=>1,
            'migrate_table'=>1,
            'migrate_option'=>1,
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
            'rule_uuid'=>'b71f1bdd-83Ae-9FaE-46ce-dea46e6De4e2',
            'src_db_type'=>'',
            'tgt_db_type'=>'',),
        );
        
        
        $res = $syncRule -> listSyncRules($arr);
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
            'key'=>'WilsonDavisDavis',
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
            'key'=>'JonesWilliamsThompson',
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

    public function testListRuleSyncTable()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'row_uuid'=>'a22dA32d-24FC-C4FB-6Ff7-8355CF5DEB14',
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
            'src_slice_id'=>'430000199705026560',
            'status'=>'',
            'src_slice_ip'=>'246.139.75.87',
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
            'row_uuid'=>'CB649eD1-bD80-BAB9-b086-c59abDeA60Ee',
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
            'date_start'=>'1997-12-19',
            'date_end'=>'1982-11-22',
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
            'rule_uuid'=>'7cee3a71-9B91-EFe2-F765-F5dc45427787',
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

    public function testDescribeRuleZStructure()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'db_uuid'=>'74cc24Bf-cCFA-c2b6-C424-6ebd6d80860b',
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

    public function testDescribeSyncRulesFailObj()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'offset'=>0,
            'limit'=>10,
            'rule_uuid'=>'b11dFdfC-f65f-5Cac-f19e-Bc7F4db97DFf',
            'search'=>'',
            'type'=>1,
            'stage'=>1,
        );
        
        
        $res = $syncRule -> describeSyncRulesFailObj($arr);
        $this->do_assert($res);
    }

    public function testDescribeSyncRulesIncreDdl()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'offset'=>0,
            'limit'=>'10',
            'rule_uuid'=>'ddCFB5eC-cbF2-3f68-A48b-F74De02df13d',
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
            'rule_uuid'=>'9cbcF43B-e3e4-5b97-B2d2-195A21691c54',
        );
        
        
        $res = $syncRule -> listRuleIncreDml($arr);
        $this->do_assert($res);
    }

    public function testRuleGetScn()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'uuid'=>'3De83559-CdE5-47B1-fB4C-99F3ddb5C9F1',
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
            'rule_uuid'=>'Ca5f31Fc-39B9-5b97-9AA0-b10FEccf8b6B',
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
            'rule_uuid'=>'E31b6F3F-CF6B-79ba-bdfc-AfFC0EfF9b74',
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
            'rule_uuid'=>'30Cc737E-1AeC-7bff-e72B-eb6f8FCCd19C',
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
            'rule_uuid'=>'16Eeef2B-A23D-eEb8-8Abe-2B50fDee42dF',
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
            'type'=>'',
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
            'date'=>'1998-02-21 17:11:10',
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
            'db_uuid'=>'9caCe579-AcE1-23f4-Ba11-EEDfd68C5bc8',
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
            'rule_uuid'=>'1959C66C-B3c6-eFfA-F883-88A94C42985B',
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
            'rule_uuid'=>'Bc9442E5-D45A-DA6f-DB3F-C2f416d08eFB',
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

    public function testExportSyncRuleFailTable()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'rule_uuid'=>'',
            'usr'=>'',
            'obj_type'=>'',
        );
        
        
        $res = $syncRule -> exportSyncRuleFailTable($arr);
        $this->do_assert($res);
    }

    public function testExportSyncRuleDdlError()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'rule_uuid'=>'',
        );
        
        
        $res = $syncRule -> exportSyncRuleDdlError($arr);
        $this->do_assert($res);
    }

    public function testListSyncRuleFullSyncSummary()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'uuid'=>'',
            'page'=>'',
            'limit'=>'',
            'table'=>'',
            'status'=>'',
            'sort'=>'',
            'order'=>'',
        );
        
        
        $res = $syncRule -> listSyncRuleFullSyncSummary($arr);
        $this->do_assert($res);
    }

    public function testListSyncRuleIncreSyncSummary()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'uuid'=>'',
            'page'=>'',
            'limit'=>'',
            'table'=>'',
            'status'=>'',
            'sort'=>'',
            'order'=>'',
        );
        
        
        $res = $syncRule -> listSyncRuleIncreSyncSummary($arr);
        $this->do_assert($res);
    }

    public function testGetStreamGlobalSettings()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'db_type_uuid'=>'',
            'db_uuid'=>'',
            'rule_uuid'=>'',
            'key'=>'',
        );
        
        
        $res = $syncRule -> getStreamGlobalSettings($arr);
        $this->do_assert($res);
    }

    public function testAddStreamGlobalSettings()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'db_type_uuid'=>'',
            'configs'=>array(
            '0'=>array(
            'name'=>'',
            'type'=>'',
            'default'=>'',
            'description'=>'',),),
        );
        
        
        $res = $syncRule -> addStreamGlobalSettings($arr);
        $this->do_assert($res);
    }

    public function testDeleteStreamGlobalSettings()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $syncRule -> deleteStreamGlobalSettings($arr);
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