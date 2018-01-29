<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:51:"E:\alphaCMS/app/admin\view\core\role\home_page.html";i:1516681183;s:46:"E:\alphaCMS\app\admin\view\Public\content.html";i:1516067394;s:46:"E:\alphaCMS\app\admin\view\Public\head_in.html";i:1516067394;s:44:"E:\alphaCMS\app\admin\view\Public\alert.html";i:1516683724;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo \think\Config::get('title'); ?></title>
    <link rel="icon" href="/data/upload/admin/common/logo.png" type="image/x-icon" />
<link rel="stylesheet" type="text/css" id="theme" href="/public/admin/alpha/css/theme-default-in.css"/>
<!-- EOF CSS INCLUDE -->

<!-- START PLUGINS -->
<script type="text/javascript" src="/public/admin/alpha/js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="/public/admin/alpha/js/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="/public/admin/alpha/js/plugins/bootstrap/bootstrap.min.js"></script>
<!-- END PLUGINS -->

<!-- THIS PAGE PLUGINS -->
<script type='text/javascript' src='/public/admin/alpha/js/plugins/icheck/icheck.min.js'></script>
<script type="text/javascript" src="/public/admin/alpha/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

<script type="text/javascript" src="/public/admin/alpha/js/plugins/bootstrap/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="/public/admin/alpha/js/plugins/bootstrap/bootstrap-file-input.js"></script>
<script type="text/javascript" src="/public/admin/alpha/js/plugins/bootstrap/bootstrap-select.js"></script>
<script type="text/javascript" src="/public/admin/alpha/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="/public/admin/alpha/js/plugins/datatables/jquery.dataTables.min.js"></script>

<!-- END THIS PAGE PLUGINS -->
<script type="text/javascript" src="/public/admin/alpha/js/plugins.js"></script>
<script type="text/javascript" src="/public/admin/alpha/js/actions.js"></script>


<link rel="stylesheet" href="/public/admin/alpha/plugins/message_alert/css/m_css.css">
<script src="/public/admin/alpha/plugins/message_alert/js/m_js.js"></script>
<script src="/public/admin/alpha/plugins/layer-v3.0.1/layer/layer.js"></script>
<script src="/public/admin/alpha/plugins/ajax-form/ajax-form.js"></script>

<!--MY-->
<script src="/public/admin/controller/upload.js"></script>
<script src="/public/admin/controller/controller.js"></script>
<!--前台框架自带的弹出层-->
<div class="message-box animated fadeIn message-box-info" data-sound="alert" id="mb-signout">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title"><span class="fa fa-sign-out"></span><strong>退出</strong> ?</div>
            <div class="mb-content">
                <p>你确定要退出?</p>
                <p>如果你想继续操作后台请按‘否’. 按‘是’则回到登录页面.</p>
            </div>
            <div class="mb-footer">
                <div class="pull-right">
                    <a href="<?php echo url('admin/core.Index/login_out'); ?>" class="btn btn-success btn-lg">是</a>
                    <button class="btn btn-default btn-lg mb-control-close">否</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--自定义弹出提示-->
<div class="m_tip">
    <div>
        <img class="m_icon m_normal" src="/public/admin/alpha/plugins/message_alert/img/tip.svg">
        <img class="m_icon m_error" src="/public/admin/alpha/plugins/message_alert/img/error.svg">
        <img class="m_icon m_success" src="/public/admin/alpha/plugins/message_alert/img/success.svg">
        <img class="m_icon m_warning" src="/public/admin/alpha/plugins/message_alert/img/warning.svg">
        <img class="m_icon m_loading" src="/public/admin/alpha/plugins/message_alert/img/loading.svg">
        <span>提示内容</span>
    </div>
    <img class="m_icon m_close" src="/public/admin/alpha/plugins/message_alert/img/close.svg" onclick=close_tip(this)>
</div>

</head>
<body>
<!--前台框架自带的弹出层-->
<div class="message-box animated fadeIn message-box-info" data-sound="alert" id="mb-signout">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title"><span class="fa fa-sign-out"></span><strong>退出</strong> ?</div>
            <div class="mb-content">
                <p>你确定要退出?</p>
                <p>如果你想继续操作后台请按‘否’. 按‘是’则回到登录页面.</p>
            </div>
            <div class="mb-footer">
                <div class="pull-right">
                    <a href="<?php echo url('admin/core.Index/login_out'); ?>" class="btn btn-success btn-lg">是</a>
                    <button class="btn btn-default btn-lg mb-control-close">否</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--自定义弹出提示-->
<div class="m_tip">
    <div>
        <img class="m_icon m_normal" src="/public/admin/alpha/plugins/message_alert/img/tip.svg">
        <img class="m_icon m_error" src="/public/admin/alpha/plugins/message_alert/img/error.svg">
        <img class="m_icon m_success" src="/public/admin/alpha/plugins/message_alert/img/success.svg">
        <img class="m_icon m_warning" src="/public/admin/alpha/plugins/message_alert/img/warning.svg">
        <img class="m_icon m_loading" src="/public/admin/alpha/plugins/message_alert/img/loading.svg">
        <span>提示内容</span>
    </div>
    <img class="m_icon m_close" src="/public/admin/alpha/plugins/message_alert/img/close.svg" onclick=close_tip(this)>
</div>
<div class="page-container">
    <div class="page-content">
        <!-- START BREADCRUMB -->
       <!-- <ul class="breadcrumb push-down-0">
            <li><a href="#">Home</a></li>
            <li><a href="#">Layouts</a></li>
            <li class="active">Frame Right Column</li>
        </ul>-->
        <!-- END BREADCRUMB -->

        <!-- START CONTENT FRAME -->

            <!-- START CONTENT FRAME TOP -->
                <div class="page-title">
                    <h2><span class="fa fa-arrow-circle-o-left"></span><?php echo $title; ?></h2>
                </div>
            <!-- END CONTENT FRAME TOP -->

            <div class="content-frame-body content-frame-body-left">
                
<div class="row animated fadeIn">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#tab-first" role="tab" data-toggle="tab"><?php echo $tab_1; ?>
                        <button class="btn btn-success btn-rounded btn-sm"><?php echo $dataNums; ?></button>
                    </a></li>
                    <li><a href="#tab-second" role="tab" data-toggle="tab"><?php echo $tab_2; ?></a></li>
                </ul>
                <div class="panel-body tab-content">
                    <div class="alert alert-info" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <strong>温馨提醒！</strong>点击编辑按钮,进行权限分配
                    </div>
                    <div class="tab-pane active" id="tab-first">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>角色名称</th>
                                <th>角色描述</th>
                                <th>创建时间</th>
                                <th>更新时间</th>
                                <th>状态</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(is_array($dataArr) || $dataArr instanceof \think\Collection || $dataArr instanceof \think\Paginator): $i = 0; $__LIST__ = $dataArr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                            <tr class="del_tr">
                                <td><?php echo $v['name']; ?></td>
                                <td><?php echo $v['remark']; ?></td>
                                <td><?php echo tranTime($v['create_time']); ?></td>
                                <td><?php echo tranTime($v['update_time']); ?></td>
                                <td><?php echo is_stop($v['status']); ?></td>
                                <td>
                                    <a title="<?php echo $v['name']; ?>【编辑】" data-url="<?php echo url('admin/core.Role/edit_page',['id'=>$v['id']]); ?>" onclick="edit_row(this)"  class="btn btn-default btn-rounded btn-sm"><span class="fa fa-pencil"></span></a>
                                    <button data-url="<?php echo url('admin/core.Role/del_think',['id'=>$v['id']]); ?>" onClick="delete_row(this);" class="btn btn-danger btn-rounded btn-sm" ><span class="fa fa-trash-o"></span></button>
                                </td>
                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>
                        <?php echo $pages; ?>
                    </div>
                    <div class="tab-pane" id="tab-second">
                        <form id="add_form" action="<?php echo url('admin/core.Role/add_think'); ?>" method="post" class="form-horizontal">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">角色名称</label>
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                    <input type="text" name="name" class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">备注</label>
                                            <div class="col-md-9 col-xs-12">
                                                <textarea class="form-control" name="remark" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3  control-label">是否通过</label>
                                            <div class="col-md-9">
                                                <label class="switch">
                                                    <input type="checkbox" name="status" checked value="1"/>
                                                    <span class="help-block"></span>
                                                </label>
                                                <span class="help-block">默认正常</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <button class="btn btn-info pull-right">保存修改<span class="fa fa-floppy-o fa-right"></span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
</script>

            </div>
            <!-- START CONTENT FRAME BODY -->

            <!-- END CONTENT FRAME BODY -->
        <!-- END CONTENT FRAME -->
    </div>
</div>

</body>
</html>