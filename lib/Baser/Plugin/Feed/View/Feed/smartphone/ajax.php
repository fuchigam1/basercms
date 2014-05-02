<?php
/* SVN FILE: $Id$ */
/**
 * [PUBLISH] フィード読み込みAJAX
 *
 * PHP versions 5
 *
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright 2008 - 2013, baserCMS Users Community <http://sites.google.com/site/baserusers/>
 *
 * @copyright		Copyright 2008 - 2013, baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			Feed.View
 * @since			baserCMS v 0.1.0
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://basercms.net/license/index.html
 */
header("Content-type: text/javascript charset=UTF-8");
$this->BcBaser->cacheHeader(MONTH, 'js');
?>
document.write('<div id="feeds<?php echo $id; ?>"><?php echo $this->html->image('admin/ajax-loader.gif', array('alt' => 'loading now...', 'style' => 'display:block;margin:auto')) ?></div>');

// 読込み成功時の処理
var successCallback = function (response)
{
	if(response == 'false'){
		$("#feeds<?php echo $id; ?>").html("");
	}else{	
		$("#feeds<?php echo $id; ?>").hide();
		$("#feeds<?php echo $id; ?>").html(response);
		$("#feeds<?php echo $id; ?>").slideDown(500);
	}
};
// 読込み失敗時の処理
var errorCallback = function (xml, status, e)
{
	$("#feeds<?php echo $id; ?>").html("");
};

//  リクエスト処理
$.ajax({
	type: 'GET',
	url:      '<?php echo $this->BcBaser->getUrl(array(Configure::read('BcAgent.smartphone.prefix') => true, 'plugin' => 'feed', 'controller' => 'feed', 'action' => 'index', $id)); ?>',
	cache: false,
	success:  successCallback,
	error:    errorCallback
});

<?php exit() ?>