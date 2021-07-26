<?php
$lang->dev->common     = '二次開發';
$lang->dev->api        = 'API';
$lang->dev->db         = '資料庫';
$lang->dev->editor     = '編輯器';
$lang->dev->translate  = '翻譯';
$lang->dev->dbList     = '資料庫';
$lang->dev->moduleList = '模組列表';
$lang->dev->params     = '參數列表';
$lang->dev->type       = '類型';
$lang->dev->desc       = '描述';
$lang->dev->noParams   = '無參數';
$lang->dev->post       = 'POST參數';

$lang->dev->paramRange    = '取值範圍：%s';
$lang->dev->paramDate     = '日期格式：YY-mm-dd，如：2019-01-01';
$lang->dev->paramColor    = '顏色格式：#RGB，如：#3da7f5';
$lang->dev->paramMailto   = "填寫帳號，多個賬號用','分隔。";
$lang->dev->noteEditor    = "編輯器功能因為安全原因被禁用。使用該功能，請到官網下載安裝 <a href='https://www.zentao.net/extension-viewExt-150.html' target='_blank'>擴展編輯器</a> 插件。";
$lang->dev->noteTranslate = "翻譯功能因為安全原因被禁用。使用該功能，請到官網下載安裝 <a href='https://www.zentao.net/extension-viewExt-151.html' target='_blank'>翻譯</a> 插件。";

$lang->dev->fields = array();
$lang->dev->fields['id']     = '序號';
$lang->dev->fields['name']   = '欄位';
$lang->dev->fields['desc']   = '描述';
$lang->dev->fields['type']   = '類型';
$lang->dev->fields['length'] = '長度';
$lang->dev->fields['null']   = '是否可空';

$lang->dev->tableList = array();
$lang->dev->tableList['action']           = '系統日誌';
$lang->dev->tableList['bug']              = 'Bug';
$lang->dev->tableList['build']            = '版本';
$lang->dev->tableList['burn']             = '燃盡圖';
$lang->dev->tableList['case']             = '測試用例';
$lang->dev->tableList['casestep']         = '用例步驟';
$lang->dev->tableList['company']          = '公司';
$lang->dev->tableList['config']           = '配置';
$lang->dev->tableList['custom']           = '自定義';
$lang->dev->tableList['dept']             = '部門';
$lang->dev->tableList['doc']              = '文檔';
$lang->dev->tableList['doclib']           = '文檔庫';
$lang->dev->tableList['effort']           = '日誌';
$lang->dev->tableList['extension']        = '插件';
$lang->dev->tableList['file']             = '附件';
$lang->dev->tableList['group']            = '用戶組';
$lang->dev->tableList['grouppriv']        = '組權限';
$lang->dev->tableList['history']          = '操作歷史';
$lang->dev->tableList['lang']             = '語言定義';
$lang->dev->tableList['module']           = '模組';
$lang->dev->tableList['program']          = '項目集';
$lang->dev->tableList['product']          = $lang->productCommon;
$lang->dev->tableList['productplan']      = $lang->productCommon . '計劃';
$lang->dev->tableList['project']          = '項目';
$lang->dev->tableList['projectproduct']   = '項目' .  $lang->productCommon;
$lang->dev->tableList['projectstory']     = '項目' .  $lang->SRCommon;
$lang->dev->tableList['execution']        = $lang->executionCommon;
$lang->dev->tableList['release']          = '發佈';
$lang->dev->tableList['story']            = $lang->SRCommon;
$lang->dev->tableList['storyspec']        = "{$lang->SRCommon}描述";
$lang->dev->tableList['task']             = '任務';
$lang->dev->tableList['taskestimate']     = '任務預計';
$lang->dev->tableList['team']             = '團隊';
$lang->dev->tableList['testresult']       = '測試結果';
$lang->dev->tableList['testrun']          = '測試執行';
$lang->dev->tableList['testtask']         = '測試單';
$lang->dev->tableList['todo']             = '待辦';
$lang->dev->tableList['user']             = '用戶';
$lang->dev->tableList['usercontact']      = '用戶聯繫人';
$lang->dev->tableList['usergroup']        = '用戶組';
$lang->dev->tableList['userquery']        = '用戶查詢';
$lang->dev->tableList['usertpl']          = '用戶模板';
$lang->dev->tableList['admin']            = '後台管理';
$lang->dev->tableList['api']              = 'API介面';
$lang->dev->tableList['backup']           = '備份';
$lang->dev->tableList['common']           = '公有模組';
$lang->dev->tableList['convert']          = '導入';
$lang->dev->tableList['dev']              = '二次開發';
$lang->dev->tableList['git']              = 'GIT';
$lang->dev->tableList['index']            = '首頁';
$lang->dev->tableList['install']          = '安裝';
$lang->dev->tableList['mail']             = '郵箱';
$lang->dev->tableList['misc']             = '雜項';
$lang->dev->tableList['my']               = '我的地盤';
$lang->dev->tableList['qa']               = '測試';
$lang->dev->tableList['report']           = '統計';
$lang->dev->tableList['search']           = '搜索';
$lang->dev->tableList['sso']              = '單點登錄';
$lang->dev->tableList['svn']              = 'SVN';
$lang->dev->tableList['testcase']         = '測試用例';
$lang->dev->tableList['testreport']       = '測試報告';
$lang->dev->tableList['testsuite']        = '測試套件';
$lang->dev->tableList['caselib']          = '用例庫';
$lang->dev->tableList['tree']             = '模組關係';
$lang->dev->tableList['upgrade']          = '更新';
$lang->dev->tableList['cron']             = '定時任務';
$lang->dev->tableList['datatable']        = '數據表格';
$lang->dev->tableList['block']            = '區塊';
$lang->dev->tableList['branch']           = '平台/分支';
$lang->dev->tableList['doccontent']       = '文檔內容';
$lang->dev->tableList['storystage']       = "{$lang->SRCommon}階段";
$lang->dev->tableList['tutorial']         = '新手教程';
$lang->dev->tableList['suitecase']        = '套件用例';
$lang->dev->tableList['score']            = '積分';
$lang->dev->tableList['entry']            = '應用';
$lang->dev->tableList['webhook']          = 'WebHook';
$lang->dev->tableList['log']              = '介面日誌';
$lang->dev->tableList['message']          = '消息';
$lang->dev->tableList['notify']           = '通知';
$lang->dev->tableList['userview']         = '可訪問權限';
$lang->dev->tableList['repo']             = '代碼';
$lang->dev->tableList['repohistory']      = '版本歷史';
$lang->dev->tableList['repofiles']        = '代碼檔案';
$lang->dev->tableList['repobranch']       = '代碼分支';
$lang->dev->tableList['ci']               = '持續整合';
$lang->dev->tableList['compile']          = '構建';
$lang->dev->tableList['jenkins']          = 'Jenkins';
$lang->dev->tableList['job']              = '構建任務';
$lang->dev->tableList['searchdict']       = '搜索字典';
$lang->dev->tableList['searchindex']      = '搜索索引';

$lang->dev->groupList['my']        = '我的地盤';
$lang->dev->groupList['program']   = '項目集';
$lang->dev->groupList['product']   = $lang->productCommon;
$lang->dev->groupList['project']   = '項目';
$lang->dev->groupList['execution'] = $lang->executionCommon;
$lang->dev->groupList['qa']        = '測試';
$lang->dev->groupList['doc']       = '文檔';
$lang->dev->groupList['report']    = '統計';
$lang->dev->groupList['company']   = '組織';
$lang->dev->groupList['repo']      = '持續整合';
$lang->dev->groupList['api']       = 'API';
$lang->dev->groupList['message']   = '消息';
$lang->dev->groupList['search']    = '搜索';

$lang->dev->endGroupList['admin']  = '後台';
$lang->dev->endGroupList['system'] = '系統';
$lang->dev->endGroupList['other']  = '其他';
