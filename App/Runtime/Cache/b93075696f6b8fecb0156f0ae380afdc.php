<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
	<title><?php echo C('defaultinfo.name');?> - Powered By <?php echo L('AUTHOR');?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content=""/>
	<meta name="author" content="<?php echo L('AUTHOR');?>"/>
	<link type="text/css" href="__PUBLIC__/css/bootstrap.min.css?t=20140830" rel="stylesheet" />
	<link type="text/css" href="__PUBLIC__/css/bootstrap-responsive.min.css?t=20140830" rel="stylesheet">
	<link type="text/css" href="__PUBLIC__/css/jquery-ui-1.10.0.custom.css?t=20140830" rel="stylesheet" />
	<link type="text/css" href="__PUBLIC__/css/font-awesome.min.css?t=20140830" rel="stylesheet" />
	<link class="docs" href="__PUBLIC__/css/docs.css?t=20140830" rel="stylesheet"/>
	<link rel="shortcut icon" href="__PUBLIC__/ico/favicon.png"/>
    <script type="text/javascript">
        var browserInfo = {browser:"", version: ""};
        var ua = navigator.userAgent.toLowerCase();
        if (window.ActiveXObject) {
            browserInfo.browser = "IE";
            browserInfo.version = ua.match(/msie ([\d.]+)/)[1];
            if(browserInfo.version <= 7){
                if(confirm("您的ie浏览器版本过低，建议使用chorme浏览器")){}
            }
        }
    </script>
	<!--[if lt IE 9]>
	<script src="__PUBLIC__/js/respond.min.js" type="text/javascript"></script>
	<![endif]-->
	<script src="__PUBLIC__/js/jquery-1.9.0.min.js?t=20140830" type="text/javascript"></script>
	<script src="__PUBLIC__/js/bootstrap.min.js?t=20140830" type="text/javascript"></script>
	<script src="__PUBLIC__/js/jquery-ui-1.10.0.custom.min.js?t=20140830" type="text/javascript"></script>
	<script src="__PUBLIC__/js/WdatePicker.js?t=20140830" type="text/javascript"></script>
	<script src="__PUBLIC__/js/gototop.js?t=20140830" type="text/javascript"></script>
	<script src="__PUBLIC__/js/5kcrm_zh-cn.js?t=20140830" type="text/javascript"></script>
	<script src="__PUBLIC__/js/5kcrm.js?t=20140830" type="text/javascript"></script>
	<!--[if lte IE 6]>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap-ie6.css">
	<![endif]-->
	<!--[if lte IE 7]>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/ie.css">
	<![endif]-->
	<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/font-awesome-ie7.min.css" />
	<![endif]-->
	<!--[if lt IE 9]>
	<link type="text/css" href="__PUBLIC__/css/jquery.ui.1.10.0.ie.css" rel="stylesheet"/>
	<script src="__PUBLIC__/js/ie8-eventlistener.js" type="text/javascript"></script>
	<![endif]-->	
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
</head>

<body data-spy="scroll" data-target=".bs-docs-sidebar" data-twttr-rendered="true">
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div style="line-height: 40px;padding-right: 5px;padding-top: 6px;" class="pull-left"><img src="__PUBLIC__/img/logomini.png"/></div>
			<a class="brand" href="<?php echo U('dynamic/index');?>" alt="<?php echo C('defaultinfo.description');?>"><?php echo C('defaultinfo.name');?></a>
			<?php echo W("Navigation");?>
		</div> 
	</div>
</div>
<div class="container">
	<!-- Docs nav ================================================== -->
	<div class="page-header" style="border:none; font-size:14px; ">
		<ul class="nav nav-tabs">
		   <li><a  href="<?php echo U('log/index');?>"><img src="__PUBLIC__/img/my_log.png"/>&nbsp; <?php echo L('WORK STATEMENTS');?></a></li>
		   <li class="active"><a href="<?php echo U('log/anly');?>"><img src="__PUBLIC__/img/tongji.png"/>&nbsp; <?php echo L('ADVANCES IN STATISTICS');?></a></li>
		</ul>
	</div>
	<?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php echo ($vv); ?>
		</div><?php endforeach; endif; endforeach; endif; ?>
	<p class="view"><b><?php echo L('VIEW_NAV');?></b>
	<img src="__PUBLIC__/img/by_time.png"/> <a href="<?php echo U('log/anly','by=all');?>" <?php if($_GET['by']== 'all'): ?>class="active"<?php endif; ?>><?php echo L('ALL');?></a> | 
	<a href="<?php echo U('log/anly','by=today');?>" <?php if($_GET['by']== 'today'): ?>class="active"<?php endif; ?>><?php echo L('CREATE_TODAY');?></a> | 
	<a href="<?php echo U('log/anly','by=week');?>" <?php if($_GET['by']== 'week'): ?>class="active"<?php endif; ?>><?php echo L('CREATE_THIS_WEEK');?></a> | 
	<a href="<?php echo U('log/anly','by=month');?>" <?php if($_GET['by']== 'month'): ?>class="active"<?php endif; ?>><?php echo L('CREATE_THIS_MONTH');?></a>
	</p>
	<div class="row">
		<div class="span2 knowledgecate">
			<ul class="nav nav-list">
				<li class="active">
					<a href="javascript:void(0);"><?php echo L('VIEW_BY_LOG_CATEGORY');?></a>
				</li>
				<li><a href="<?php echo U('log/anly','by='.$_GET['by']);?>" <?php if($_GET['module'] == null): ?>class="active"<?php endif; ?>><i class="icon-white icon-chevron-right"></i><?php echo L('ALL');?></a></li>
				<li><a <?php if($_GET['module'] == 'customer'): ?>class="active"<?php endif; ?> href="<?php echo U('Log/anly','r=rCustomerLog&module=customer&by='.$_GET['by']);?>"><i class="icon-chevron-right"></i><?php echo L('CUSTOMER');?></a></li>
				<li><a <?php if($_GET['module'] == 'business'): ?>class="active"<?php endif; ?> href="<?php echo U('Log/anly','r=rBusinessLog&module=business&by='.$_GET['by']);?>"><i class="icon-chevron-right"></i><?php echo L('BUSINESS');?></a></li>
				<li><a <?php if($_GET['module'] == 'leads'): ?>class="active"<?php endif; ?> href="<?php echo U('Log/anly','r=rLeadsLog&module=leads&by='.$_GET['by']);?>"><i class="icon-chevron-right"></i><?php echo L('LEADS');?></a></li>
				<li><a <?php if($_GET['module'] == 'task'): ?>class="active"<?php endif; ?> href="<?php echo U('Log/anly','r=rLogTask&module=task&by='.$_GET['by']);?>"><i class="icon-chevron-right"></i><?php echo L('TASK');?></a></li>
				<li><a <?php if($_GET['module'] == 'event'): ?>class="active"<?php endif; ?> href="<?php echo U('Log/anly','r=rEventLog&module=event&by='.$_GET['by']);?>"><i class="icon-chevron-right"></i><?php echo L('EVENT');?></a></li>
				<li><a <?php if($_GET['module'] == 'contacts'): ?>class="active"<?php endif; ?> href="<?php echo U('Log/anly','r=rContactsLog&module=contacts&by='.$_GET['by']);?>"><i class="icon-chevron-right"></i><?php echo L('CONTACTS');?></a></li>
			</ul>
		</div>
		<div class="span10">
			<ul class="nav pull-left">		
				<li class="pull-left"><a id="delete" class="btn" style="margin-right: 5px;"><i class="icon-remove"></i>&nbsp;<?php echo L('DELETE');?></a> </li>
				<li class="pull-left">
					<form class="form-inline" id="searchForm" action="index.php" method="get">
						<ul class="nav pull-left">
							<li class="pull-left">
								<?php echo L('ROLE_NAME');?>&nbsp; <select style="width:auto" name="role" id="role" >
									<option class="all" value="all"><?php echo L('ALL');?></option>
									<?php if(is_array($role_list)): $i = 0; $__LIST__ = $role_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option <?php if($_GET['role'] == $vo.role_id): ?>selected="selected"<?php endif; ?> value="<?php echo ($vo["role_id"]); ?>"><?php echo ($vo["role_name"]); ?>-<?php echo ($vo["user_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
								</select>&nbsp;&nbsp;
							</li>
							
							<li class="pull-left">
								<?php echo L('SELECT DATE');?>&nbsp; <?php echo L('FROM');?><input type="text" id="start_time" name="start_time" onClick="WdatePicker({dateFmt:'yyyy-MM-dd'})" class="Wdate" style="width:auto;" value="<?php echo ($_GET['start_time']); ?>"/><?php echo L('TO');?><input type="text" id="end_time" onClick="WdatePicker({dateFmt:'yyyy-MM-dd'})" style="width:auto;" name="end_time" class="Wdate" value="<?php echo ($_GET['end_time']); ?>" />&nbsp;&nbsp;
							</li>
							
							<li class="pull-left"><input type="hidden" name="m" value="log"/><input type="hidden" name="a" value="anly"/>
							<?php if($_GET['by']!= null): ?><input type="hidden" name="by" value="<?php echo ($_GET['by']); ?>"/><?php endif; ?>
							<?php if($_GET['type']!= null): ?><input type="hidden" name="type" value="<?php echo ($_GET['type']); ?>"/><?php endif; ?>
							<?php if($_GET['module']!= null): ?><input type="hidden" name="module" value="<?php echo ($_GET['module']); ?>"/><?php endif; ?>
							<?php if($_GET['r']!= null): ?><input type="hidden" name="r" value="<?php echo ($_GET['r']); ?>"/><?php endif; ?>
							<button type="submit" class="btn"> <img src="__PUBLIC__/img/search.png"/><?php echo L('SEARCH');?></button></li>
							
						</ul>
					</form>
				</li>
			</ul>
			<div class="pull-right">
				<a href="<?php echo U('log/mylog_add');?>" class="btn btn-primary"><i class="icon-plus"></i>&nbsp; <?php echo L('ADD_LOG');?></a>
			</div>
		</div>
		<div class="span10">
			<form id="form1" method="post">
			<table class="table table-hover table-striped">
				<?php if($list == null): ?><tr><td><?php echo L('EMPTY_TPL_DATA');?></td></tr>
				<?php else: ?>
					<thead>
						<tr>
							<th><input id="check_all" class="control_all" type="checkbox" /></th>
							<th width="10px"></th>
							<th><?php echo L('SUBJECT');?></th>
							<th><?php echo L('ROLE_NAME');?></th>
							<?php if(($_GET['module'] == '')): ?><th><?php echo L('BELONG_TO');?></th>
							<?php elseif(($_GET['module'] == 'customer')): ?>
								<th><?php echo L('BELONG_TO');?></th>
							<?php elseif(($_GET['module'] == 'contacts')): ?>
								<th><?php echo L('BELONG_TO_CONTACTS');?></th>
							<?php elseif(($_GET['module'] == 'business')): ?>
								<th><?php echo L('BELONG_TO_BUSINESS');?></th>
							<?php elseif(($_GET['module'] == 'task')): ?>
								<th><?php echo L('BELONG_TO_TASK');?></th>
							<?php elseif(($_GET['module'] == 'event')): ?>
								<th><?php echo L('BELONG_TO_EVENT');?></th>
							<?php elseif(($_GET['module'] == 'leads')): ?>
								<th><?php echo L('BELONG_TO_LEADS');?></th><?php endif; ?>
							<?php if($_GET['module'] == 'business' || $_GET['module'] == 'leads'): ?><th style="width:20%"><?php echo L('NEXT_LINK');?></th><?php endif; ?>
							<th><?php echo L('CREATE_TIME');?></th>
							<th  style="width:10%"><?php echo L('OPERATING');?></th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<td colspan="8">
								<p><?php echo L('NOTE_');?><span style="color:green"><i class="icon-check"></i></span><?php echo L('HAVE_SUPERIORS_COMMENTS');?> &nbsp; &nbsp;  <span style="color:red"><i class="icon-edit"></i></span><?php echo L('NO_SUPERIORS_COMMENTS');?></p>
								<?php echo ($page); ?>
							</td>
						</tr>
					</tfoot>
					<tbody>
						<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
							<td><input class="check_list" type="checkbox" name="log_id[]" value="<?php echo ($vo["log_id"]); ?>"/></td>
							<td><?php if($vo['is_comment']): ?><span style="color:green"><i class="icon-check"></i></span><?php else: ?><span style="color:red"><i class="icon-edit"></i></span><?php endif; ?></td>
							<td><a href="<?php echo U('log/mylog_view','id='.$vo['log_id'].'&type='.$_GET['type']);?>"><?php if($vo['subject'] ): echo ($vo["subject"]); else: echo (msubstr($vo['content'],0,20)); ?>...<?php endif; ?></a></td>
							<td><?php if(!empty($vo["creator"]["user_name"])): ?><a class="role_info" rel="<?php echo ($vo["creator"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["creator"]["user_name"]); ?></a><?php endif; ?></td>

							<td>
								<?php if($vo['customer_name'] != null): ?><a href="<?php echo U('customer/view','id='.$vo['customer_id']);?>" target="blank"><?php echo ($vo["customer_name"]); ?></a>
								<?php elseif($vo['contacts_name'] != null): ?>
									<a href="<?php echo U('contacts/view','id='.$vo['contacts_id']);?>" target="blank"><?php echo ($vo["contacts_name"]); ?></a>
								<?php elseif($vo['business_name'] != null): ?>
									<a href="<?php echo U('business/view','id='.$vo['business_id']);?>" target="blank"><?php echo ($vo["business_name"]); ?></a>
								<?php elseif($vo['task_name'] != null): ?>
									<a href="<?php echo U('task/view','id='.$vo['task_id']);?>" target="blank"><?php echo ($vo["task_name"]); ?></a>
								<?php elseif($vo['event_name'] != null): ?>
									<a href="<?php echo U('event/view','id='.$vo['event_id']);?>" target="blank"><?php echo ($vo["event_name"]); ?></a>
								<?php elseif($vo['leads_name'] != null): ?>
								<a href="<?php echo U('leads/view','id='.$vo['leads_id']);?>" target="blank"><?php echo ($vo["leads_name"]); ?></a>
								<?php else: ?>
									<?php echo L('NONE'); endif; ?>
							</td>
							<?php if($_GET['module'] == 'business' || $_GET['module'] == 'leads'): ?><td><?php if($vo['nextstep_time']): echo (date("Y-m-d H:i",$vo["nextstep_time"])); ?> &nbsp; <?php echo ($vo["nextstep"]); endif; ?></td><?php endif; ?>
							<td><?php echo (date("Y-m-d H:i",$vo["create_date"])); ?></td>
							<td>
								<a href="<?php echo U('log/mylog_view','id='.$vo['log_id'].'&type='.$_GET['type']);?>"><?php echo L('VIEW');?></a>&nbsp;
								<a href="<?php echo U('log/mylog_edit','id='.$vo['log_id'].'&type='.$_GET['type']);?>"><?php echo L('EDIT');?></a>
							</td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					</tbody><?php endif; ?>
			</table>
			</form>
		</div>
	</div>
</div>
<div class="hide" id="dialog-role-info" title="<?php echo L('DIALOG_USER_INFO');?>">loading...</div>
<script type="text/javascript">
$("#dialog-role-info").dialog({
    autoOpen: false,
    modal: true,
	width: 600,
	maxHeight: 400,
	position: ["center",100]
});
$(function(){
	<?php if($_GET['role']!= null): ?>$("#role option[value='<?php echo ($_GET['role']); ?>']").prop("selected", true);<?php endif; ?>
	$('#delete').click(function(){
		if(confirm('<?php echo L('CONFIRM_DELETE');?>')){
			$("#form1").attr('action', '<?php echo U("log/log_delete");?>');
			$("#form1").submit();
		}
	});
	$(".role_info").click(function(){
		$role_id = $(this).attr('rel');
		$('#dialog-role-info').dialog('open');
		$('#dialog-role-info').load('<?php echo U("user/dialoginfo","id=");?>'+$role_id);
	});
	$("#check_all").click(function(){
		$("input[class='check_list']").prop('checked', $(this).prop("checked"));
	});
})

</script>

</body>
</html>