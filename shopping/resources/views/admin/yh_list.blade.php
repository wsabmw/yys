<!DOCTYPE html>
<html>

<head>
    <!-- 页面meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>商家管理</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" name="viewport">
    <link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/plugins/adminLTE/css/AdminLTE.css">
    <link rel="stylesheet" href="/plugins/adminLTE/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="/css/style.css">
	<script src="/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <script src="/plugins/bootstrap/js/bootstrap.min.js"></script>
    
</head>

<body class="hold-transition skin-red sidebar-mini"  >
  <!-- .box-body -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">商家管理</h3>
                    </div>

                    <div class="box-body">

                        <!-- 数据表格 -->
                        <div class="table-box">

                            <!--工具栏-->
                            
                            <div class="box-tools pull-right">
                                <div class="has-feedback">
									店铺名称： <input  >
								
									<button class="btn btn-default" >查询</button>                                    
                                </div>
                            </div>
                            <!--工具栏/-->

			                  <!--数据列表-->
			                  <table id="dataList" class="table table-bordered table-striped table-hover dataTable">
			                      <thead>
			                          <tr>
			                              <th class="" style="padding-right:0px">
			                                  <input id="selall" type="checkbox" class="icheckbox_square-blue">
			                              </th> 
										  <th class="sorting_asc">用户ID</th>
									      <th class="sorting">账号</th>
									      <th class="sorting">密码</th>
									      <th class="sorting">注册时间</th>
									      <th class="sorting">消费总金额</th>
										  <th class="sorting">会员等级</th>		
										  <th class="sorting">操作</th>								
			                          </tr>
			                      </thead>
			                      <tbody>
                                    @foreach($data as $v)
                                    <tr>
                                       <td><input  type="checkbox"></td>			                              
                                       <td>{{ $v->id }}</td>
                                       <td>{{ $v->username }}</td>
                                       <td>{{ $v->password }}</td>
                                       <td>{{ $v->created_at }}</td>
                                       <td>{{ $v->xf_price }}</td>
                                       @if($v->xf_price > 10000 && $v->xf_price < 20000)
                                               <td>一级</td>
                                       @elseif($v->xf_price > 20000 && $v->xf_price < 30000)
                                               <td>二级</td>
                                       @elseif($v->xf_price > 30000 && $v->xf_price < 40000)
                                               <td>三级</td>
                                       @elseif($v->xf_price > 40000 && $v->xf_price < 50000)
                                               <td>四级</td>
                                       @else {
                                           <td>至尊</td>
                                       }
                                       @endif
                                       {{-- <td class="text-center">                                          
                                            <button type="button" class="btn bg-olive btn-xs">修改</button>                  
									   </td> --}}
									   <td> <a href="">禁用</a> </td>
                                   </tr>
                                   @endforeach
			                      </tbody>
			                  </table>
			                  <!--数据列表/-->                        
							  
							 
                        </div>
                        <!-- 数据表格 /-->
                        
                        
                        
                        
                     </div>
                    <!-- /.box-body -->
                    
	          
					    
                                
<!-- 商家详情 -->
<div class="modal fade" id="sellerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" >
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel">商家详情</h3>
		</div>
		<div class="modal-body">							
			
			 <ul class="nav nav-tabs">
			  <li class="active"><a href="#home" data-toggle="tab">基本信息</a></li>
			  <li><a href="#linkman" data-toggle="tab">联系人</a></li>
			  <li><a href="#certificate" data-toggle="tab">证件</a></li>
			  <li><a href="#ceo" data-toggle="tab">法定代表人</a></li>
			  <li><a href="#bank" data-toggle="tab">开户行</a></li>
			</ul>							
			
			<!-- 选项卡开始 -->         
		    <div id="myTabContent" class="tab-content">
			    <div class="tab-pane active in" id="home">
			      <br>
			      <table class="table table-bordered table-striped"  width="800px">
			      	<tr>
			      		<td>公司名称</td>
			      		<td>美琪数码经营店</td>
			      	</tr>
			      	<tr>
			      		<td>公司手机</td>
			      		<td>13900221212</td>
			      	</tr>
			      	<tr>
			      		<td>公司电话</td>
			      		<td>010-20112222</td>
			      	</tr>
			      	<tr>
			      		<td>公司详细地址</td>
			      		<td>北京市西三旗建材城西路888号</td>
			      	</tr>
			      </table>			      
      			</div>	
			    <div class="tab-pane fade" id="linkman">
			    	<br>
					<table class="table table-bordered table-striped" >
			      	<tr>
			      		<td>联系人姓名</td>
			      		<td>王美琪</td>
			      	</tr>
			      	<tr>
			      		<td>联系人QQ</td>
			      		<td>78223322</td>
			      	</tr>
			      	<tr>
			      		<td>联系人手机</td>
			      		<td>13500223322</td>
			      	</tr>
			      	<tr>
			      		<td>联系人E-Mail</td>
			      		<td>78223322@qq.com</td>
			      	</tr>
			      </table>
			    </div>
			    <div class="tab-pane fade" id="certificate">
					<br>
					<table class="table table-bordered table-striped" >
				      	<tr>
				      		<td>营业执照号</td>
				      		<td>330106000109206</td>
				      	</tr>
				      	<tr>
				      		<td>税务登记证号</td>
				      		<td>0292039393011</td>
				      	</tr>
				      	<tr>
				      		<td>组织机构代码证号</td>
				      		<td>22320320302421</td>
				      	</tr>				      	
			     	</table>
			    </div>
			    <div class="tab-pane fade" id="ceo">
					<br>
					<table class="table table-bordered table-striped" >
				      	<tr>
				      		<td>法定代表人</td>
				      		<td>王小聪</td>
				      	</tr>
				      	<tr>
				      		<td>法定代表人身份证号</td>
				      		<td>211030198503223122</td>
				      	</tr>					   			      	
			     	</table>
			    </div>
			    <div class="tab-pane fade" id="bank">
					<br>
					<table class="table table-bordered table-striped" >
				      	<tr>
				      		<td>开户行名称</td>
				      		<td>中国建设银行北京市分行</td>
				      	</tr>
				      	<tr>
				      		<td>开户行支行</td>
				      		<td>海淀支行</td>
				      	</tr>		
				      	<tr>
				      		<td>银行账号</td>
				      		<td>999000111222</td>
				      	</tr>			   			      	
			     	</table>					
			    </div>
  			    </div> 			
           <!-- 选项卡结束 -->          
			
			
		</div>
		<div class="modal-footer">						
			<button class="btn btn-success" data-dismiss="modal" aria-hidden="true">审核通过</button>
         	<button class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">审核未通过</button>
            <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">关闭商家</button>
			<button class="btn btn-default" data-dismiss="modal" aria-hidden="true">关闭</button>
		</div>
	  </div>
	</div>
</div>


</body>

</html>