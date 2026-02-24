<?php
namespace i2up\Test\v20260209\stream;

use i2up\stream\v20260209\SyncRule;
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
            'key'=>'MartinMooreHall',
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
            'load_unit'=>1,
            'load_full_max_memory'=>1,),
            'all_custom_config'=>array(
            '0'=>array(
            'key'=>'',
            'value'=>'',),),),
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
            'json_format'=>'',),
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
            'tgt_database'=>'',),),
            'encrypt_column_key'=>'',
            'incre_cmp_switch'=>'',
            'incre_cmp_db_uuid'=>'',
            'incre_cmp_db_type'=>'',
            'src_db_stream_uuid'=>'',
            'tgt_db_stream_uuid'=>'',
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
            '0'=>'FB0BCbeb-3593-daFE-3D15-e7D8BbDf5e5b',
            '1'=>'b86Cc76f-919e-b7CE-E543-B948fAf4c6C2',
            '2'=>'fE771D11-dCDf-4A2f-2FbE-49D2888fdf89',
            '3'=>'0C16154b-A82D-c4E8-26dF-57ea3Dd6C48A',
            '4'=>'dc9De1D7-B219-070C-BcdA-1F7844c0BAb6',
            '5'=>'DA0c272B-8DEB-F5FE-7C8f-ecCb2bE65C76',
            '6'=>'52fdD9Bc-a13E-c32B-6109-FE411ef84cec',
            '7'=>'d2A6E827-388d-aA8D-1105-D8dcfb3C4B83',
            '8'=>'db66cA6E-dDDc-aE1E-92bf-Ad7EFE9fAD5b',
            '9'=>'Db5CcC44-DEcE-6357-bDC7-DfD79b9dCA4b',),
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
            '0'=>'efA3f1A4-Dd87-6621-E617-16bcd82Cd23d',
            '1'=>'dE11a6DE-CdD8-54eA-5FFA-e3a5cF88f7F8',
            '2'=>'DC252eDB-A2DB-fCD8-bEfc-2BDb36AAA6D4',
            '3'=>'9aeEf1DD-f6EF-C6EB-3F2A-078eAe5Ccdd6',
            '4'=>'28AeEA2A-0E1F-Bd1C-4Fd0-C6BcC11aEFFC',
            '5'=>'F14913ba-f3B6-97BA-b683-fc2B2E913789',
            '6'=>'A9b7f8bA-fd70-42E1-F541-1052514D5Cd2',
            '7'=>'D289ce55-c27A-694B-C9B3-D33b0D6368Ae',
            '8'=>'D1A8ccf9-01Ba-E29D-0B2A-bcF7f1F3CBd9',
            '9'=>'b5addd95-9dBA-eA5A-6e85-8DBB9B35383b',),
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
            '0'=>'dF2b6355-BcE3-129D-eAbe-Ace38BFeAee1',
            '1'=>'1cEBe8CE-D5EC-9ceE-F54A-Dfb3c7D2a776',
            '2'=>'BB98dB85-fEf1-bc56-CFEb-BeF3f5f4b886',
            '3'=>'E7BcAe3F-8DaD-d8ab-2b7e-A42C21ADfEC7',
            '4'=>'Ba1B59fe-712e-46CE-Af0C-C58769059Dcc',
            '5'=>'d9BfEC8D-F18A-cAd7-0bD7-7Cf7C7DDfDb8',
            '6'=>'dDa4bCca-EC6f-DDfa-fF6A-6740FDBdBCaF',
            '7'=>'539b2aAB-cC0e-39d7-EAAe-D70BcC49bc5d',
            '8'=>'1bD52D8F-54E0-fd81-8e15-e07833B38BEe',
            '9'=>'9AF12A8C-AA48-a53A-26D1-6132A5Fa72Ad',),
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
            '0'=>'a7fEEAdc-3Dc8-5b47-FF29-b2D3dD1EeF48',
            '1'=>'A0d9D9DE-B9D4-Aa9e-deEA-2d71BDE3D54A',
            '2'=>'b4BcD88E-f6CC-5CEf-2C98-b8cDa97005A8',
            '3'=>'88EE9dA1-147f-58D3-5ca3-dFb7eEfDB0e4',
            '4'=>'bAD836EF-5Fc3-64d0-1A2B-a2F7dd2FdD87',
            '5'=>'c0A152CE-20b7-e197-FB75-eeEd81B2CEFD',
            '6'=>'2351b8cB-b7Ab-4b8D-1BbA-BE22C9E3eC0E',
            '7'=>'39D810b9-eB4C-0Beb-b4bE-de855CB1b7aB',
            '8'=>'e1313eCd-F5fD-c4A4-fc3B-AAE6F4d95945',
            '9'=>'fB4fF2A9-DbC9-de98-8edE-EFe4D54C1C2f',),
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
            '0'=>'daee3CB3-D2Ad-C27C-4c31-7028B96a285c',
            '1'=>'ec03bf3D-A19e-Ce2b-6FD6-14b3B85E2fDb',
            '2'=>'BFb3d5AE-4BaC-19DE-7Fd9-6EC7AAbbfF5B',
            '3'=>'531eFFE9-962e-d932-FC5e-aFcb31E808Ab',
            '4'=>'5e5BF6ca-ED1f-db18-a9c8-2E37DCCF1ABd',
            '5'=>'2A74FE5b-eB73-D729-19d4-aAF2C87B1637',
            '6'=>'DFEf64E6-14F1-e2AF-f0e5-FC154B903DAA',
            '7'=>'37BC93dd-B497-B6be-bad1-EF6Ba3FDAfeb',
            '8'=>'eE5c119B-e31d-332C-8ff6-C466B4B33d2E',
            '9'=>'a2Ff3448-8Ac8-E9aD-eC8b-D4F36510E234',),
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
            '0'=>'63453CfD-ef79-6BaB-2B6B-A099bA7fbADA',
            '1'=>'8e6ED3ff-C26c-bEb6-1dfe-CcfcEdcfDcDd',
            '2'=>'17dc1b72-eBbE-0feC-4C99-DFDAdAC2FeA2',
            '3'=>'C8D18fba-25ab-CF77-96fA-F6Ae8d2F0967',
            '4'=>'1AdCfCCA-E1c9-fAA7-EfEe-Bf2AcfaD6bF9',
            '5'=>'7c2c211C-18A4-EEd5-e2cC-4B4EffDa5C44',
            '6'=>'371Bbf7E-6AfB-AD9D-8C15-93cA0Cc84e0C',
            '7'=>'A143cac7-214D-DFDc-c6de-e689ADB43EFc',
            '8'=>'D8FdCAA6-CB97-5E39-8D7F-c4Fe3BCB9B2A',
            '9'=>'481D3dC1-6af0-1d59-62d7-7eA862F56d2B',),
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
            '0'=>'2DfEDD5A-49AA-7fCb-bf62-A282977EABCb',
            '1'=>'9ec56f29-96fD-399A-e252-C08d5d71dCc2',
            '2'=>'f9e80bE3-85Bf-BADD-8b57-7f727FC7dFb5',
            '3'=>'2E2fFE1E-6CAF-Dae1-8613-BF1D0AdC4Fcd',
            '4'=>'6eB58ee5-EcC2-ceE3-155F-Fbf463b822c4',
            '5'=>'ea64fefb-e83A-BfA6-A971-809FEFe322FA',
            '6'=>'Ff60D939-6E6b-8cA6-8EfB-88B1c2f3F1F7',
            '7'=>'cfB04A36-Fa54-BBf3-A2fd-E7d5ba1cEFFF',
            '8'=>'8bDEBD8C-6Fad-FEFE-7B1D-3eb2daD10C6C',
            '9'=>'4A56BD6A-512B-aC5A-2CAb-a9D6c73f1525',),
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
            '0'=>'E2aa85d3-9B51-e138-D98D-dc73D9Cf7b6f',
            '1'=>'ECdEB4A4-CeCF-Fc1b-7429-eddfEDEDc1C1',
            '2'=>'2D3FEbc2-69bd-eec9-f8e4-D44BE4d5B464',
            '3'=>'E22f335f-ead4-8cA5-14dF-4BeAaE8d17bA',
            '4'=>'fDD5d0D3-DEeD-Dc71-6C61-Bdd8f4fA1F9f',
            '5'=>'AC0C5ADC-3F8A-d6eB-E0bF-FdcD5B7Eb8F3',
            '6'=>'804B3B12-e65E-16A9-b1BB-5aC1cdb71Dde',
            '7'=>'Bb72B03F-43AC-6cfA-4AA9-bFcFc6c8D7CE',
            '8'=>'8CB678D9-128D-fCe7-B0dE-51CcB7c915Fd',
            '9'=>'3DcFeB44-3e0b-33fa-d9af-6178A3a68FDb',),
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
            'rule_uuid'=>'Eec914Fb-3ad1-f462-6dB2-bbC9EA0AA9C3',
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
            'key'=>'AndersonHallWilson',
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
            'key'=>'HarrisDavisAnderson',
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
            'row_uuid'=>'8F59b7a1-d054-0A06-d59B-2EDC5fF94b26',
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
            'src_slice_id'=>'990000201404281516',
            'status'=>'',
            'src_slice_ip'=>'192.202.144.46',
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
            'row_uuid'=>'Fa265F7D-D9ee-0380-Dacf-0ecE9D833c23',
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
            'date_start'=>'1993-07-01',
            'date_end'=>'1987-03-22',
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
            'rule_uuid'=>'F52fDFe0-FA07-Ebd8-15f0-F8DCdAbd9635',
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
            'db_uuid'=>'EEe29A1b-b4bA-Bf9F-9D9a-7AF69bFbCF6b',
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
            'rule_uuid'=>'7E36Ebb0-271A-F449-3BFa-cf79bfb5e2c8',
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
            'rule_uuid'=>'0307A9eC-EbB1-b6Fe-Fb2A-DA90AaFAa949',
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
            'rule_uuid'=>'eB4d282F-f1d6-Be6E-fBfF-e967A68ABd8B',
        );
        
        
        $res = $syncRule -> listRuleIncreDml($arr);
        $this->do_assert($res);
    }

    public function testRuleGetScn()
    {
        $syncRule = $this -> syncRule;
        $arr = array(
            'uuid'=>'4AD8a7d2-Ad5F-967c-e3cC-2Eb3D4eeE8FA',
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
            'rule_uuid'=>'FeADa1f9-b583-2ba7-BF29-8b9f3cFd3dcc',
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
            'rule_uuid'=>'32fc84B0-39C6-9B84-71b4-DAE7d669659d',
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
            'rule_uuid'=>'6dfcbFEb-57f1-4A75-d63f-11E387dAADFa',
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
            'rule_uuid'=>'D5c0f68E-bC2d-B13C-FfE9-A7c62e203338',
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
            'date'=>'1988-05-14 19:34:53',
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
            'db_uuid'=>'bF1C6Efd-BA7B-5BcE-ABCd-67ef264D1c7C',
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
            'rule_uuid'=>'EEBd22ff-2822-effd-e95C-1A1D6B6f765c',
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
            'rule_uuid'=>'CCF6D20c-f38E-2bCE-EBC9-Bb93C8Ed9fB7',
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