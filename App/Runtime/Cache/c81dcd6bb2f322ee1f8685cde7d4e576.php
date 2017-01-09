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
<script src="__PUBLIC__/js/chart/highcharts.js"></script>
<script src="__PUBLIC__/js/chart/modules/exporting.js"></script>

<div class="container">
	<div style="margin-top:10px; font-size:14px;">
		<ul class="nav nav-tabs">
		  <li>
			<a href="<?php echo U('task/index');?>"><img src="__PUBLIC__/img/renwu.png"/>&nbsp; 任务</a>
		  </li>
		  <li class="active"><a href="<?php echo U('task/analytics');?>"><img src="__PUBLIC__/img/tongji.png"/> &nbsp;<?php echo L('STATISTICS');?></a></li>
		  <li><a href="http://5kcrm.com/index.php?m=doc&a=index&id=14" target="_blank" style="font-size: 12px;color: rgb(255, 102, 0);"><img width="20px;" src="__PUBLIC__/img/help.png"/> <?php echo L('HELP');?></a></li>
		</ul>
	</div>
	<?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php echo ($vv); ?>
		</div><?php endforeach; endif; endforeach; endif; ?>
	<div class="row">
		<div class="span12">
			<ul class="nav pull-left">
				<li class="pull-left">
					<form class="form-inline" id="searchForm" onsubmit="return checkSearchForm();" action="" method="get">
						<ul class="nav pull-left">
							<li class="pull-left">
								<?php echo L('SELECT_DEPARTMENT');?>&nbsp; <select style="width:auto" name="department" id="department" onchange="changeRole()">
									<option class="all" value="all"><?php echo L(ALL);?></option>
									<?php if(is_array($departmentList)): $i = 0; $__LIST__ = $departmentList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["department_id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
								</select>&nbsp;&nbsp;
							</li>
							<li class="pull-left">
								<?php echo L('SELECT_USER');?>&nbsp; <select style="width:auto" name="role" id="role" onchange="changeCondition()">
									<option class="all" value="all"><?php echo L('ALL');?></option>
									<?php if(is_array($roleList)): $i = 0; $__LIST__ = $roleList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["role_id"]); ?>"><?php echo ($vo["role_name"]); ?>-<?php echo ($vo["user_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
								</select>&nbsp;&nbsp;
							</li>
							<li class="pull-left">
								<?php echo L('SELECT_DATE');?>&nbsp; <?php echo L('FROM');?><input type="text" id="start_time" name="start_time" onClick="WdatePicker({dateFmt:'yyyy-MM-dd'})" class="Wdate" value="<?php echo ($_GET['start_time']); ?>"/><?php echo L('TO');?><input type="text" id="end_time" onClick="WdatePicker({dateFmt:'yyyy-MM-dd'})" name="end_time" class="Wdate" value="<?php echo ($_GET['end_time']); ?>" />&nbsp;&nbsp;
							</li>
							<li class="pull-left"><input type="hidden" name="m" value="task"/><input type="hidden" name="a" value="analytics"/>
							<?php if($_GET['by']!= null): ?><input type="hidden" name="by" value="<?php echo ($_GET['by']); ?>"/><?php endif; ?>
							<button type="submit" class="btn"><?php echo L('SEARCH');?></button></li>
						</ul>
					</form>
				</li>				
			</ul>
		</div>
		<div class="span2 knowledgecate">
			<ul class="nav nav-list">
				<li class="active">
					<a href="javascript:void(0);"><?php echo L('SELECT_STATISTICAL_CONTENT');?></a>
				</li>
				<li id="report"><a id="show_report" class="active" href="javascript:void(0)"><i class="icon-white icon-chevron-right"></i><?php echo L('TASK_STATISTICAL_REPORTS');?></a></li>
				<li id="scale"><a id="show_completion" href="javascript:void(0)"><i class="icon-white icon-chevron-right"></i><?php echo L('TASK_COMPLETION_STATISTICS');?></a></li>
			</ul>
		</div>
		<div>
			<div class="span10" id="report_content">
				<table class="table table-hover">
					<thead>
						<tr>
							<th><?php echo L('USER');?></th>
							<th><?php echo L('TASK_TOTAL_COUNT');?></th>
							<th><?php echo L('NOT_START_COUNT');?></th>
							<th><?php echo L('DELY_TASK_COUNT');?></th>
							<th><?php echo L('ONGOING_TASK_COUNT');?></th>
							<th><?php echo L('COMPLETED_TASK_COUNT');?></th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<td><?php echo L('TOTAL');?>:</td>
							<td colspan="5"><span style="color:red;">
							<?php echo L('TASK_DESCRIPTION' ,array($total_report['own_count'] , $total_report['new_count'] , $total_report['late_count'] ,$total_report['deal_count'] ,$total_report['success_count']));?> </span></td>
						</tr>
					</tfoot>
					<tbody>
						<?php if(is_array($reportList)): $i = 0; $__LIST__ = $reportList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
							<td><a class="role_info" rel="<?php echo ($vo["user"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["user"]["user_name"]); ?></a></td>
							<td><?php echo ($vo["own_count"]); ?></td>
							<td><a href="<?php echo U('task/index');?>&field=owner_role_id&search=<?php echo ($vo["user"]["role_id"]); ?>&by=s1"><?php echo ($vo["new_count"]); ?></a></td>
							<td><a href="<?php echo U('task/index');?>&field=owner_role_id&search=<?php echo ($vo["user"]["role_id"]); ?>&by=s2"><?php echo ($vo["late_count"]); ?></a></td>
							<td><a href="<?php echo U('task/index');?>&field=owner_role_id&search=<?php echo ($vo["user"]["role_id"]); ?>&by=s3"><?php echo ($vo["deal_count"]); ?></a></td>
							<td><a href="<?php echo U('task/index');?>&field=owner_role_id&search=<?php echo ($vo["user"]["role_id"]); ?>&by=s4"><?php echo ($vo["success_count"]); ?></a></td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					</tbody>
				</table>
			</div>
			
			<div id="completion_content" class="hidden span10">
				<div id="an_chart" class="span6">
					<div id="canvas_completion" style="min-width: 500px; height: 500px; margin: 0 auto"><?php echo L('EMPTY_DATA');?>!</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="hide" id="dialog-import" title="<?php echo L('IMPORT_DATA');?>">loading...</div>
<div class="hide" id="dialog-role-info" title="<?php echo L('DIALOG_USER_INFO');?>">loading...</div>
<script type="text/javascript">
	<?php if(C('ismobile') == 1): ?>width=$('.container').width() * 0.9;<?php else: ?>width=800;<?php endif; ?>
	$("#dialog-role-info").dialog({
		autoOpen: false,
		modal: true,
		width: width,
		maxHeight: 400,
		position: ["center",100]
	});
	
	$(".role_info").click(function(){
		$role_id = $(this).attr('rel');
		$('#dialog-role-info').dialog('open');
		$('#dialog-role-info').load('<?php echo U("user/dialoginfo","id=");?>'+$role_id);
	});
	
	$(function () {
		$(document).ready(function () {
			var chart1;
			// Build the chart1
			<?php if($total_report["own_count"] > 0): ?>$('#canvas_completion').highcharts({
				chart1: {
					plotBackgroundColor: null,
					plotBorderWidth: null,
					plotShadow: false
				},
				title: {
					text: "<?php echo L('TASK_COMPLETION_COUNT' ,array($total_report['own_count']));?>"
				},
				tooltip: {
					pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b>',
					percentageDecimals: 1
				},
				plotOptions: {
					pie: {
						allowPointSelect: true,
						cursor: 'pointer',
						dataLabels: {
							enabled: false
						},
						showInLegend: true
					}
				},
				series: [{
					type: 'pie',
					name: "<?php echo L('STAGE_RATE');?>",
					data: [
						<?php echo ($completion_count); ?>
					]
				}]
			});<?php endif; ?>
		});
		
	});
	
	function changeRole(){
		department_id = $("#department option:selected").val();
		$.ajax({
			type:'get',
			url:'index.php?m=user&a=getrolebydepartment&department_id='+department_id,
			async:true,
			success:function(data){
				options = '<option value="all"><?php echo L('ALL');?></option>';
				if(data.data != null){
					$.each(data.data, function(k, v){
						options += '<option value="'+v.role_id+'">'+v.role_name+"-"+v.user_name+'</option>';
					});
				}
				$("#role").html(options);
				<?php if($_GET['role']): ?>$("#role option[value='<?php echo ($_GET['role']); ?>']").prop("selected", true);<?php endif; ?>
			},
			dataType:'json'});
	}
	
	<?php if($_GET['department'] and $_GET['department'] != 'all'): ?>$("#department option[value='<?php echo ($_GET['department']); ?>']").prop("selected", true); 
	changeRole();<?php endif; ?>
	<?php if($_GET['department'] == 'all'): ?>$("#role option[value='<?php echo ($_GET['role']); ?>']").prop("selected", true);<?php endif; ?>
	
	$(function(){
		$("#show_report").click(function(){
			$(this).addClass('active');
			$("#show_completion").removeClass('active');
			$("#report_content").removeClass('hidden');
			$("#completion_content").addClass('hidden');
		});
		$("#show_completion").click(function(){
			$(this).addClass('active');
			$("#show_report").removeClass('active');
			$("#completion_content").removeClass('hidden');
			$("#report_content").addClass('hidden');
		});
	});
</script>

</body>
</html>