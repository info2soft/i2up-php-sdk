<?php
namespace i2up\Test\v20240819\stream;

use i2up\stream\v20240819\SyncRule;
use i2up\common\Auth;
                
class SyncRuleTest extends \PHPUnit_Framework_TestCase
 {
    private $syncRule;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> syncRule = new SyncRule(new Auth());
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
            'rule_uuid'=>'2EFA8f9A-C5D7-EEbD-f6cb-2eC5c7ebEdEB',
            'src_db_type'=>'',
            'tgt_db_type'=>'',),
        );
        
        
        $res = $syncRule -> listSyncRules($arr);
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
            '0'=>'4FBAE6AD-5Dc1-3c22-f84b-db4e6cCdd128',
            '1'=>'C1D8135B-6A7E-5bAd-4dbc-55e0b3bC3eFb',
            '2'=>'8A4A1c2C-59AC-7848-4A1a-aE45cfd7C1F6',
            '3'=>'2e22A0ED-cA8E-8A64-887c-cAEC28d808f8',
            '4'=>'2DEC23F4-5EC2-AD0f-cEFB-e75646eFcdEF',
            '5'=>'98D5BEEf-6358-be1A-f68C-f16C5D4DDE38',
            '6'=>'24C99fdf-2052-Fb2E-ebA9-DBFe7fAFA2Ec',
            '7'=>'F4A6AaeB-eAbF-BbDF-A921-34Fbf1c6896a',
            '8'=>'a1efF4fc-dcb7-9F90-dCc7-CCD5B3ae39df',
            '9'=>'fdEEdF81-E36b-e933-B2eE-75c2FeCbD60e',),
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
            '0'=>'fEc8084E-DC66-9D9F-b2f9-bB1de49EFd07',
            '1'=>'A5cDAEDF-247B-283b-b4e7-DE1EfeFBEdb3',
            '2'=>'494B1eb5-DaC1-1F8A-14e8-aA57F4aF177B',
            '3'=>'A13d08e1-fE0f-Fd79-0EDA-d1D1af2bC28c',
            '4'=>'B2e887A8-c8fA-bb9e-F391-a56efA29ff8E',
            '5'=>'15AFFc65-CFe7-d21F-49Bd-CA5bBe684636',
            '6'=>'53D8fD44-9931-aEED-d9A3-251190BE7df7',
            '7'=>'fCF5cE5A-eCD1-ebF5-Bba1-49A47Be562B8',
            '8'=>'2F9fB855-DaEA-16dE-7978-bceC9bCB6b39',
            '9'=>'abbC7d65-38cc-c9f8-DDFD-B2dFA2ef791e',),
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
            '0'=>'6959BFDd-aA2F-6F3E-cB69-c4c29668bA4c',
            '1'=>'C3cefFbb-8695-ec7C-E4EC-B6b3cb2AEB3B',
            '2'=>'3bCc11cB-6711-74BA-eB0E-27Ee5929A5cb',
            '3'=>'0EfC3DfB-b8Bc-b52E-3B5A-a8fB6d498dc6',
            '4'=>'E9C81F13-1a7B-85AC-7906-3989c1B7b94B',
            '5'=>'8CB9205b-9ADF-4fCc-A8Ad-bda59aa834d7',
            '6'=>'829A2e7c-6eE8-5745-C6BE-68BCe4f2A8eB',
            '7'=>'225bDbe7-44A6-9adA-54ED-aEC732a3d1D3',
            '8'=>'08655a31-cF65-94D5-7FD9-fC3417D1AfCE',
            '9'=>'b8D9aF98-Aebe-cF5A-f8b9-e8Ebe82166e2',),
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
            '0'=>'3a5Ba7B0-0cbF-CeCd-DA18-fFffEB4Ef7f8',
            '1'=>'7Fb85A16-4bc5-54CD-34e5-50D78f8c3cdc',
            '2'=>'7dB8bcDC-C7bb-7C13-c8a9-8E2f37bDc63e',
            '3'=>'CC6FA2C9-9A94-8b42-F53c-5c9BAe6E5b3e',
            '4'=>'3dc757AF-F9d4-5A1e-6b37-eB2f62AFfA10',
            '5'=>'d3F5eeec-63CD-6C3b-E1e4-64D7fDEA1A2F',
            '6'=>'49C13cdB-E021-CAD3-08D6-31B11E1DFD1d',
            '7'=>'836Bdf48-F7AB-A385-EAcd-a8fC8e5B943C',
            '8'=>'5C3CbbCA-Fd15-65dd-7203-AB6FdFbFBBE1',
            '9'=>'61d161fd-7C6f-e8e9-b00f-7CFD8ADdcB7B',),
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
            '0'=>'70BE1e73-D353-daD5-EEa7-9fFEFBbE6DcF',
            '1'=>'BCecc7D3-17F2-bF59-DbFc-fc7e540eD8e3',
            '2'=>'9FFF9C51-5FE8-fEEB-C84F-76bCDEcF16Fd',
            '3'=>'dE71F776-ffCe-cB38-e30b-cDbe9B2F27ed',
            '4'=>'65CB3CDD-CC7F-D8bb-BfaC-a8e529E1CABC',
            '5'=>'B2e5A61f-C8C8-FfFC-6DB1-BAe6968FECAd',
            '6'=>'C457dC8c-cC71-E5cc-0A3F-c82AbF7EE8dF',
            '7'=>'c6fCCe29-8697-fB6f-3d41-aE6FBaC8278f',
            '8'=>'DC0c5A1C-94f1-1Bce-fEDF-d9fc5DBca6Df',
            '9'=>'4D9f4bfd-5d12-7F98-2dE0-365D90acF7CF',),
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
            '0'=>'D4cd5FBe-c118-E13C-F422-840CEAB0F013',
            '1'=>'75D33f72-16ef-ff5d-F86C-9bBfC33EA57F',
            '2'=>'4726682b-6D89-7992-CD9C-4a9cBdbCA821',
            '3'=>'98fAa282-A9DA-F9B8-6dE4-e1BB6c8f5706',
            '4'=>'F71FBcFD-F599-d47C-Dee0-8AEeB8F7a1A3',
            '5'=>'2c1FBf2B-bf23-4D9F-9F4B-B76bEFcc2dde',
            '6'=>'EbA2326f-8Ba5-0eAd-9A9D-eb44f1BC317C',
            '7'=>'ffFbbA8C-e9CB-D986-cbc4-cef7e4366e5d',
            '8'=>'C872e611-c1dc-ebDb-843d-c5fEe1eD4D5B',
            '9'=>'6Ac67313-4dAA-Fe98-68e2-2B57AbBf2696',),
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
            '0'=>'387baC91-FeAA-f6DE-cC3b-aFdDBC7dcfD5',
            '1'=>'6A8c268e-52A5-577D-56ed-ED9Ec4D6CcbA',
            '2'=>'E3bACFbF-DBde-8fC7-20ed-64d13a95fD12',
            '3'=>'09F52F36-75Eb-6EfE-2aeD-2581B6a4CeCD',
            '4'=>'Bb2ae24D-54E4-d8bb-A5Be-DaDdeA243Ed4',
            '5'=>'71fEbCeE-69dA-1C23-ADe9-6f6CaB6CDC91',
            '6'=>'cce2991E-BBc8-ba5a-1AbA-9DDbbEE4AAE2',
            '7'=>'47AB11dB-bBAc-9A85-eFAC-1E33204De6f2',
            '8'=>'dc3b1B6E-Caf6-E82c-e3BB-A3Fa86A587ed',
            '9'=>'EB5a8BCf-7abB-e3cb-1Bf3-6e7e85cCF264',),
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
            '0'=>'A85ED9aF-AFa4-F74b-2Eb4-645eBbca2b41',
            '1'=>'d4AF96D2-C823-A72D-B7BB-a93c4FDBbCF2',
            '2'=>'A6e44c86-Be41-AAd6-8FbC-Ad36e2fe749A',
            '3'=>'25BB8E8D-EDbE-f6fC-Ffe1-B183cB2fbc82',
            '4'=>'4cCfeD7A-eABa-b67B-b3C9-0B0071CD554b',
            '5'=>'FB435faf-E1A0-fd12-dfeF-A5C5dFffd82E',
            '6'=>'AF2CE7Ce-eD06-1bcd-fbde-18CcdC4Cfb19',
            '7'=>'52BADe22-e7b1-81fD-f9B2-AC0dD3F2B2C3',
            '8'=>'446EEc2f-b68B-CDBD-C2ef-c7aDbeAc6daa',
            '9'=>'e9Ec62D2-37F8-edbF-B8e7-D490c0Df4413',),
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

    public function testCreateSyncRule()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'table_map'=>array(
            '0'=>array(
            'key'=>'AndersonWalkerTaylor',
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
            'db_map_uuid'=>'',),
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
            'distribute_mode'=>'',),
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
            'compress_switch'=>'',
            'compress_algo'=>'',
            'encrypt'=>'',
            'compress'=>'',
            'compress_level'=>'',
            'encrypt_switch'=>'',),
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
        );
        
        
        $res = $syncRule -> createSyncRule($arr);
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
            'key'=>'LewisLopezJohnson',
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
            'key'=>'RodriguezAndersonRodriguez',
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
            'src_slice_id'=>'340000198703118799',
            'status'=>'',
            'src_slice_ip'=>'57.158.197.159',
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
            'date_start'=>'2019-01-01',
            'date_end'=>'1992-01-07',
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
            'db_uuid'=>'3546c1cD-1176-FA09-949A-ffC2cCC1A51c',
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
            'uuid'=>'9Db4F18D-c4F3-2E61-Eb59-Dccf68BC7Bf1',
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
            'rule_uuid'=>'54bFF5d5-d05F-4eAF-46c4-aDD0f6fBBF5d',
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