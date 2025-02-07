<?php
namespace i2up\Test\v20250123\stream;

use i2up\stream\v20250123\SyncRule;
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
            'key'=>'WhiteRobinsonHernandez',
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
            'run_time'=>'"12*00:00-13:00*40M,3*00:00-13:00*40M"',
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
            'column'=>'',),),),
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
            'ha_switch'=>'',),
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
            '0'=>'fC9Aa7f1-eD72-c1F1-aEda-5e9e2A6540ed',
            '1'=>'AB1FB3F1-84fC-873E-A1Dd-b6ceAba2D577',
            '2'=>'de8B6A8c-4A1A-2Db8-EDB3-FE1c1b1F23d5',
            '3'=>'4Ca885A6-Bd5A-ca17-9B4d-dcb3800cE78e',
            '4'=>'FbAa61DB-fD95-7f98-Fc2C-8E62beaC41eF',
            '5'=>'C9C76FD8-7eAf-BD08-fB0A-fd1Cb9996E8D',
            '6'=>'d2Fba5Ae-A9c1-08bb-EEc3-bf2c0612C7b7',
            '7'=>'CF5A2BD8-2e35-FAbD-4D5c-5C73E14C5f74',
            '8'=>'Ecce9d9e-bec8-D1BA-F3e6-fD9d5AB2d3AC',
            '9'=>'dAB7E1cc-4e52-bB7A-0ee5-52FF41C86C41',),
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
            '0'=>'BEeCd43C-2D81-7BF6-EbE8-e66e2dAc7471',
            '1'=>'65f8ee56-eAb3-120f-1Ed3-e9bABd3D829E',
            '2'=>'BcD1b2fF-a8dc-4d0E-51b3-4Ee9A21C794c',
            '3'=>'232b1786-e29D-8a8D-eBAC-DD29EAfEd6EF',
            '4'=>'dA448bE5-5ffC-bFe9-dCFB-72CdEcFEcce8',
            '5'=>'D9f3Cd22-aE6D-af6A-AEff-42d4a44DbBC3',
            '6'=>'fc2Eb76A-fc1B-1cbA-8e76-bfceeD2c924D',
            '7'=>'Fb4feB3f-446c-27ee-4e93-3f766d5cFCDf',
            '8'=>'11cD7d63-C4FD-C5fA-ae2E-9DD988fBd93e',
            '9'=>'EdcDB5ba-D91b-AB76-bEfE-b1439BB6dDF4',),
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
            '0'=>'D91B1d94-0513-9D3d-95c9-0F5dd99E9fc8',
            '1'=>'ff198548-4b34-59bb-2eA4-9D6B4CE59F69',
            '2'=>'2fFe9d18-D90B-cfCc-E2EB-f33ffe05eCe3',
            '3'=>'56377cDe-CEAa-E545-a84e-CdD4fEEdF866',
            '4'=>'C5DC6ef1-d3eF-e8AF-bdAA-b3Cf560c1535',
            '5'=>'8f72CBe6-C5dC-D9eA-AF1C-AF4Aacd816b8',
            '6'=>'Ae3F1Acc-18C3-e09b-47DC-369936FF1354',
            '7'=>'E31bA5DB-5Efd-9166-F6ce-dEb3Dff7779e',
            '8'=>'e6E2438d-DDbE-CFcd-f66b-92eBe6dFd3b4',
            '9'=>'f23EbDA5-E4Fc-e2d5-5f94-EF4dAAcb5Bd6',),
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
            '0'=>'cE87e77B-36f3-991c-C5b2-7Ac7d98C8D6b',
            '1'=>'c8A453f1-E63E-D8e7-1d10-7EdFad4Bb3fE',
            '2'=>'4cEEDab9-EbDd-A4f2-c714-9258d9a7Fd8D',
            '3'=>'339eFb06-74c3-1ebb-feac-EE900F9Ba7Fc',
            '4'=>'4814BAbe-CefA-cbd5-E15c-a61ffEf5FEf9',
            '5'=>'4aE9AAa8-4f49-8Fe1-Fd9D-28Cc9fdd8f8F',
            '6'=>'eA6C705F-f7D4-9a64-A297-7AbEC3bBCA09',
            '7'=>'E7CEdE2f-Fc65-ceE3-27eE-95cB5763DdaA',
            '8'=>'DEC69fCA-f2B9-C82B-5BC3-DEB9DEA84AcF',
            '9'=>'Eccf1b9C-C6e5-b9b4-bBFc-AfcFE71cF4EA',),
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
            '0'=>'E8C28Cbf-b92c-f8CE-F6dc-fBDCDbEA251f',
            '1'=>'26797d9F-d6Fd-dC1d-2FeA-Cbd7FBCbE8E2',
            '2'=>'CDF0fFA7-788A-F0cE-634F-0dc65b59F1A8',
            '3'=>'Af6FcF4d-23c5-acB8-1A6d-4FfCa4deBcDE',
            '4'=>'AEfAE977-bE2c-2Dc7-feEf-E5BFbc987779',
            '5'=>'d2debE94-4dce-d322-28Fd-154D4f8593AD',
            '6'=>'c4f1eA9F-3b6a-AcBb-145A-ED526fBdeA59',
            '7'=>'Ce807F2e-bde5-ae21-2ed3-8c6b5BBA2dbD',
            '8'=>'588F2FE3-43F0-bA44-a6D7-E1dC66bf58fa',
            '9'=>'1Ef8dF3f-D4Ab-A1bc-2f74-ecEb2F8bf1AE',),
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
            '0'=>'8F749F0A-c69D-FC1c-9D4F-5CFAB6e1F763',
            '1'=>'76E5dc9E-A9e4-55De-e1cD-51bB14Bb3DC5',
            '2'=>'a2Ad7dA4-9D6D-7F8b-2BdA-5A51e1CbFb9b',
            '3'=>'6AdDeD2a-Bb7b-8eFf-DE04-1424BeE75bD1',
            '4'=>'2C42c3Ed-a4FE-cb13-A347-D47440Adb3fE',
            '5'=>'53ee6E28-aEB7-b97f-8E54-7dA6CcdD8f2D',
            '6'=>'fDaD39BC-64D8-742d-cd36-FF8Aa91BCBf6',
            '7'=>'443C4d98-ffAF-9B6D-fF07-2b6f2dA4CbFd',
            '8'=>'EbDCF220-7EEB-4DA3-1bFD-CF43e7f1fE94',
            '9'=>'ab1386Ec-Df5b-b43C-Ab3e-C760452f76E9',),
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
            '0'=>'7b7ebe6b-9d6b-DfEc-734E-1C57B3F4252E',
            '1'=>'a3b4Ee14-0dc8-fb2A-57BF-Ebac9baDC9ED',
            '2'=>'D4Bd1e8C-fe4d-ddD3-e5ff-3CA01536c2BD',
            '3'=>'cA5f4B63-c3F1-6f49-3BA5-4aC776b65C8F',
            '4'=>'dbbFC8d8-e6cb-66ba-6Cd5-491B5b34bF39',
            '5'=>'bBEcACc3-Ae2b-5dde-fee0-4cd2bbEb1474',
            '6'=>'72dC71Ad-4EC8-fdDB-DeD7-9c1F7fEAFeee',
            '7'=>'6d9EcBEB-F3fD-3CB9-9181-24fBfBECEE5A',
            '8'=>'bcE9bf76-3Cad-e44b-0633-4eFc39dF8ed6',
            '9'=>'8fB6FCBE-be3c-B86f-EbC6-98A17Cbce5Ac',),
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
            '0'=>'9ffbFaaB-AD3F-6AA3-57F5-ff9522AAc592',
            '1'=>'bDaAAfA1-5b79-A1D4-e29e-3383761Fb8bC',
            '2'=>'cde17C54-5e15-e9E9-B570-FE295B47DCbF',
            '3'=>'bceB5E2A-42BE-C9cE-Fa8e-1A4D02dc1c52',
            '4'=>'1B40F77A-212B-aCec-7683-EF06cf5B0f30',
            '5'=>'4DC738A6-e1A9-318e-CEE6-54D9c46F8D9f',
            '6'=>'5C77b663-ECe5-23cb-a199-Ae2ec832EA4e',
            '7'=>'13B2efFe-D9F5-deBF-163D-e4Cd22ee49BC',
            '8'=>'8FcF8b1A-AA9B-d636-E5f9-05b198356d69',
            '9'=>'30AE1614-79c7-e12f-Ec9b-b7C9cAcD0Ff2',),
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
            'rule_uuid'=>'26fDb35A-DeEa-641A-E16A-dD854ABfCEb6',
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
            'key'=>'SmithWilliamsMoore',
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
            'key'=>'MooreDavisLee',
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

    public function testListSyncRulesSliceStatus()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'where_args'=>array(
            'src_slice_id'=>'620000197605134050',
            'status'=>'',
            'src_slice_ip'=>'38.146.97.65',
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

    public function testListRuleLog()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'offset'=>0,
            'limit'=>10,
            'date_start'=>'2000-01-12',
            'date_end'=>'2010-03-12',
            'type'=>-1,
            'module_type'=>-1,
            'query_type'=>1,
            'rule_uuid'=>'F530FB0E-0208-9071-66D3-E595AE7D5A4C',
            'search_content'=>'test',
        );
        
        
        $res = $syncRule -> listRuleLog($arr);
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

    public function testDescribeRuleUser()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'db_uuid'=>'59c9Df9E-B49f-C79e-cBe2-cdDC6Db6B4bb',
        );
        
        
        $res = $syncRule -> describeRuleUser($arr);
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

    public function testRuleGetScn()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'uuid'=>'7c33DdFC-6BAD-196a-8f9D-FF33c8A42f6D',
        );
        
        
        $res = $syncRule -> ruleGetScn($arr);
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

    public function testRuleGetReverseScn()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'rule_uuid'=>'',
        );
        
        
        $res = $syncRule -> ruleGetReverseScn($arr);
        $this->do_assert($res);
    }

    public function testListKafkaOffsetInfo()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'rule_uuid'=>'33917eF1-9e6d-9C5c-Af36-Ab41c8c64982',
        );
        
        
        $res = $syncRule -> listKafkaOffsetInfo($arr);
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