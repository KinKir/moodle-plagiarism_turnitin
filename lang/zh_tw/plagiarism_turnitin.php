<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package   turnitintooltwo
 * @copyright 2012 iParadigms LLC
 */

/*
 * To change this template, choose Tools | Templates.
 * and open the template in the editor.
 */

// General.
$string['pluginname'] = 'Turnitin 剽竊 Plugin';
$string['turnitintooltwo'] = 'Turnitin 工具';
$string['turnitin'] = 'Turnitin';
$string['task_name'] = 'Turnitin 剽竊 Plugin 工作';
$string['connecttesterror'] = '連線至 Turnitin 時發生錯誤，傳回的錯誤訊息如下：<br />';

// Assignment Settings.
$string['turnitin:enable'] = '啟用 Turnitin';
$string['excludebiblio'] = '不含參考書目';
$string['excludequoted'] = '不含引用資料內容';
$string['excludevalue'] = '排除小型相符處';
$string['excludewords'] = '字';
$string['excludepercent'] = '百分比';
$string['norubric'] = '沒有評語';
$string['otherrubric'] = '使用屬於其他指導教師的評語';
$string['attachrubric'] = '將評語附加至此作業';
$string['launchrubricmanager'] = '啟動評語管理工具';
$string['attachrubricnote'] = '注意：學生將可以在提交前，檢視附加的評語及其內容。';
$string['erater_handbook_advanced'] = '進階';
$string['erater_handbook_highschool'] = '高中';
$string['erater_handbook_middleschool'] = '中學';
$string['erater_handbook_elementary'] = '小學';
$string['erater_handbook_learners'] = '英文學習者';
$string['erater_dictionary_enus'] = '美式英文字典';
$string['erater_dictionary_engb'] = '英式英文字典';
$string['erater_dictionary_en'] = '美式和英式英語字典';
$string['erater'] = '啟用 e-rater 文法檢查';
$string['erater_handbook'] = 'ETS&copy; 手冊';
$string['erater_dictionary'] = 'e-rater 字典';
$string['erater_categories'] = 'e-rater 類型';
$string['erater_spelling'] = '拼字';
$string['erater_grammar'] = '文法';
$string['erater_usage'] = '用法';
$string['erater_mechanics'] = '技巧';
$string['erater_style'] = '筆調';
$string['anonblindmarkingnote'] = '注意：個別的 Turnitin 匿名標示設定已遭到移除。Turnitin 將使用 Moodle 的盲標設定來決定匿名標示設定。';
$string['transmatch'] = '已翻譯的相符功能';
$string['genduedate'] = '在截止日期當天產生報告 (在截止日期前允許重新提交)';
$string['genimmediately1'] = '即刻產生報告 (不允許重新提交)';
$string['genimmediately2'] = '即刻產生報告 (在截止日期前允許重新提交)';
$string['launchquickmarkmanager'] = '啟動 Quickmark 管理工具';
$string['launchpeermarkmanager'] = '啟動 Peermark 管理工具';
$string['studentreports'] = '向學生顯示原創性報告';
$string['studentreports_help'] = '允許您向學生使用者顯示 Turnitin 原創性報告。若設定為「確定」，學生將可以檢視 Turnitin 產生的原創性報告。';
$string['submitondraft'] = '在初次上傳時提交檔案';
$string['submitonfinal'] = '將學生送交評分時提交檔案';
$string['draftsubmit'] = '應何時將檔案提交至 Turnitin？';
$string['allownonor'] = '允許任何檔案類型的提交物件？';
$string['allownonor_help'] = '此設定將允許提交任何檔案類型。若此選項設為「是」，將會在可行時，檢查提交物件的原創性，可以下載提交物件，以及使用 GradeMark 反饋工具。';
$string['norepository'] = '沒有存放庫';
$string['standardrepository'] = '標準存放庫';
$string['submitpapersto'] = '儲存學生報告';
$string['institutionalrepository'] = '機構存放庫 (適用時)';
$string['submitpapersto_help'] = '此設定讓指導教師能夠選擇是否要將報告儲存在 Turnitin 學生報告存放庫內。將報告提交至學生報告存放庫的優點在於，提交至作業的學生報告將會與您現有或過去班級內其他學生的提交物件做比較。若您選擇「沒有存放庫」，您的學生報告將不會儲存在 Turnitin 學生報告存放庫內。';
$string['checkagainstnote'] = '注意：如果下面的「比較對象」選項當中，至少有一個未選擇「是」，就不會產生原創性報告。';
$string['spapercheck'] = '與已儲存的學生報告比較';
$string['internetcheck'] = '與網際網路比較';
$string['journalcheck'] = '與雜誌、<br />期刊與出版物比較';
$string['compareinstitution'] = '將提交的檔案和此機構內提交的報告比較';
$string['reportgenspeed'] = '產生報告速度';
$string['genspeednote'] = '注意：為重新提交產生的原創性報告將需要 24 小時的時間。';
$string['locked_message'] = '已鎖定訊息';
$string['locked_message_help'] = '若有任何設定遭到鎖定，會顯示此訊息說明原因。';
$string['locked_message_default'] = '於網站層級鎖定此設定';
$string['sharedrubric'] = '共用的評語';
$string['turnitinrefreshsubmissions'] = '重新整理提交物件';
$string['turnitinrefreshingsubmissions'] = '正在重新整理提交物件';
$string['turnitinppulapre'] = '若要將檔案提交至 Turnitin，您必須先接受 EULA。若選擇不接受我們的 EULA，您的檔案將只會提交至 Moodle。按一下這裡以接受。';
$string['noscriptula'] = '(因為您並未啟用 Javascript，在接受 Turnitin 使用者協議後，您必須手動更新此頁面，然後才能提交物件)';
$string['filedoesnotexist'] = '檔案已遭到刪除';

// Plugin settings.
$string['config'] = '配置';
$string['defaults'] = '預設設定';
$string['showusage'] = '顯示資料傾印';
$string['saveusage'] = '儲存資料傾印';
$string['errors'] = '錯誤';
$string['turnitinconfig'] = 'Turnitin 剽竊 Plugin 配置';
$string['tiiexplain'] = 'Turnitin 為商務產品。您必須付費訂閱，才能使用此服務。如需更多資訊，請參閱　<a href=http://docs.moodle.org/en/Turnitin_administration>http://docs.moodle.org/en/Turnitin_administration</a>';
$string['useturnitin'] = '啟用 Turnitin';
$string['useturnitin_mod'] = '啟用 Turnitin 的對象 {$a}';
$string['pp_configuredesc'] = '您必須在turnitintooltwo單元內配置此單元。請按一下<a href={$a}/admin/settings.php?section=modsettingturnitintooltwo>這裡</a>，以配置此 Plugin';
$string['turnitindefaults'] = 'Turnitin 剽竊 Plugin 預設設定';
$string['defaultsdesc'] = '以下設定是在活動單元內啟用 Turnitin時的預設集';
$string['turnitinpluginsettings'] = 'Turnitin 剽竊 Plugin 設定';
$string['pperrorsdesc'] = '嘗試將以下檔案上傳至 Turnitin 時出現問題。若要重新提交，請選擇您要重新提交的檔案，然後按「重新提交」按鈕。這些檔案會在下次 Cron 執行時處理。';
$string['pperrorssuccess'] = '已重新提交您選擇的檔案，並將由 Cron 負責處理。';
$string['pperrorsfail'] = '您選擇的檔案有一些出現問題，無法為其建立新的 Cron 事件。';
$string['resubmitselected'] = '重新提交所選檔案';
$string['deleteconfirm'] = '確定要刪除此提交物件嗎？\n\n此動作將無法復原。';
$string['deletesubmission'] = '刪除提交物件';
$string['semptytable'] = '未找到任何結果。';
$string['configupdated'] = '配置已更新';
$string['defaultupdated'] = 'Turnitin 預設值已更新';
$string['notavailableyet'] = '無法使用';
$string['resubmittoturnitin'] = '重新提交至 Turnitin';
$string['resubmitting'] = '正在重新提交';
$string['id'] = 'ID';
$string['student'] = '學生';
$string['course'] = '課程';
$string['module'] = '單元';

// Grade book/View assignment page.
$string['turnitin:viewfullreport'] = '檢視原創性報告';
$string['launchrubricview'] = '檢視標示用的評分表';
$string['turnitinppulapost'] = '並未將您的檔案提交至 Turnitin。請按一下這裡，以接受我們的 EULA。';
$string['ppsubmissionerrorseelogs'] = '這個檔案並未提交至 Turnitin，請連絡您的系統管理員';
$string['ppsubmissionerrorstudent'] = '這個檔案並未提交至 Turnitin，請連絡您的指導教師，以取得更多詳細資料';

// Receipts.
$string['messageprovider:submission'] = 'Turnitin 剽竊 Plugin 電子回條通知';
$string['digitalreceipt'] = '電子回條';
$string['digital_receipt_subject'] = '這是您的 Turnitin 電子回條';
$string['pp_digital_receipt_message'] = '{$a->firstname} {$a->lastname} 您好：<br /><br />您已在 <strong>{$a->submission_date}</strong> 上成功將檔案 <strong>{$a->submission_title}</strong> 提交至課程 <strong>{$a->course_fullname}</strong> 中的作業 <strong>{$a->assignment_name}{$a->assignment_part}</strong>。您的提交 ID 為 <strong>{$a->submission_id}</strong>。您可以從文件檢視工具列印/下載按鈕，來檢視或列印完整的電子回條。<br /><br />感謝您使用 Turnitin，<br /><br />Turnitin 團隊敬上';

// Paper statuses.
$string['turnitinid'] = 'Turnitin ID';
$string['turnitinstatus'] = 'Turnitin 狀態';
$string['pending'] = '等待中';
$string['similarity'] = '相似度';
$string['notorcapable'] = '無法爲此檔案製作原創性報告。';
$string['grademark'] = 'GradeMark';
$string['student_read'] = '學生檢視報告於：';
$string['student_notread'] = '學生尚未檢視此報告。';
$string['launchpeermarkreviews'] = '啟動 Peermark 評論';

// Cron.
$string['ppqueuesize'] = '剽竊 Plugin 事件佇列中的事件數';
$string['ppcronsubmissionlimitreached'] = '因為每次執行這個 Corn，只能處理 {$a} 個，所以不會再將提交物件傳送至 Turnitin。';
$string['cronsubmittedsuccessfully'] = '課程 {$a->coursename} 上作業 {$a->assignmentname} 的提交物件：{$a->title} (TII ID：{$a->submissionid}) 已成功提交至 Turnitin。';
$string['pp_submission_error'] = 'Turnitin 已傳回有關提交物件的錯誤：';
$string['turnitindeletionerror'] = 'Turnitin 提交物件刪除失敗。本機的 Moodle 複本已遭到移除，但無法刪除 Turnitin 內的提交物件。';
$string['ppeventsfailedconnection'] = '因為無法與 Turnitin 建立連接，所以執行此 Cron，Turnitin 剽竊 Plugin 也不會處理任何事件。';

// Error codes.
$string['tii_submission_failure'] = '請連絡您的指導教師或系統管理員，以取得更多詳細資料';
$string['faultcode'] = '錯誤代號';
$string['line'] = '列';
$string['message'] = '訊息';
$string['code'] = '代號';
$string['tiisubmissionsgeterror'] = '嘗試從 Turnitin 內取得此作業的提交物件時發生錯誤';
$string['errorcode0'] = '這個檔案並未提交至 Turnitin，請連絡您的系統管理員';
$string['errorcode1'] = '因為這個檔案的內容不足，無法產生原創性報告，所以並未提交至 Turnitin。';
$string['errorcode2'] = '這個檔案超過允許的檔案大小上限 {$a}，因此將不會提交至 Turnitin';
$string['errorcode3'] = '因為使用者尚未接受 Turnitin 使用者授權協議，所以不會將此檔案提交至 Turnitin。';
$string['errorcode4'] = '您必須為此作業上傳支援的檔案類型。可接受的檔案類型如下：.doc、.docx、.ppt、.pptx、.pps、.ppsx、.pdf、.txt、.htm、.html、.hwp、.odt、.wpd、.ps 及 .rtf';
$string['errorcode5'] = '這個檔案並未提交至 Turnitin，因為在 Turnitin 中建立單元時出現問題，故無法提交。請參閱 API 記錄檔以取得進一步資訊';
$string['errorcode6'] = '這個檔案並未提交至 Turnitin，因為在 Turnitin 中建立單元時出現問題，故無法提交。請參閱 API 記錄檔以取得進一步資訊';
$string['errorcode7'] = '這個檔案並未提交至 Turnitin，因為在 Turnitin 中建立使用者時出現問題，故無法提交。請參閱 API 記錄檔以取得進一步資訊';
$string['errorcode8'] = '因為建立暫存檔案時出現問題，所以並未提交這個檔案。原因很可能是檔案名稱無效。請重新命名該檔案，然後使用「編輯提交物件」來重新上傳';
$string['errorcode9'] = '因為檔案集區中沒有可存取的內容可供提交，所以無法提交該檔案。';
$string['coursegeterror'] = '無法取得課程資料';
$string['configureerror'] = '在課程內使用此單元之前，您必須先以管理員的身分進行完整設定。請聯繫您的 Moodle 管理員。';
$string['turnitintoolofflineerror'] = '發生暫時性問題。請稍後再試。';
$string['defaultinserterror'] = '嘗試將預設的設定值插入資料庫時發生錯誤';
$string['defaultupdateerror'] = '嘗試更新資料庫中預設的設定值時發生錯誤';
$string['tiiassignmentgeterror'] = '嘗試從 Turnitin 內取得作業時發生錯誤';
$string['assigngeterror'] = '無法取得 turnitintooltwo 資料';
$string['classupdateerror'] = '無法更新 Turnitin 課程資料';
$string['pp_createsubmissionerror'] = '嘗試在 Turnitin 內建立提交物件時發生錯誤';
$string['pp_updatesubmissionerror'] = '嘗試將您的提交物件重新提交至 Turnitin 時發生錯誤';
$string['tiisubmissiongeterror'] = '嘗試從 Turnitin 內取得提交物件時發生錯誤';

// Javascript.
$string['closebutton'] = '關閉';
$string['loadingdv'] = '正在載入 Turnitin 文件檢視工具...';
$string['changerubricwarning'] = '變更或分離評語，會將從此作業內的報告中移除現有的所有評語分數，包括之前標示的計分卡。之前已評分報告的整體成績則會予以保留。';
$string['messageprovider:submission'] = 'Turnitin 剽竊 Plugin 電子回條通知';

// Turnitin Submission Status.
$string['turnitinstatus'] = 'Turnitin 狀態';
$string['deleted'] = '已刪除';
$string['pending'] = '等待中';
$string['because'] = '這是因為管理員從處理佇列中刪除等待中的作業，並中止提交至Turnitin。<br /><strong>檔案仍存在 Moodle 中，請連絡您的指導教師。</strong><br />如需任何錯誤代碼，請參閱下面資訊：';
