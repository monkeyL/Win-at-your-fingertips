<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="utf-8" />
<title><?php echo $this->_var['page_title']; ?> </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="<?php echo $this->_var['ectouch_themes']; ?>/images/touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="<?php echo $this->_var['ectouch_themes']; ?>/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="<?php echo $this->_var['ectouch_themes']; ?>/ectouch.css?id=1212" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,common.js,user.js')); ?>
<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/jquery-1.4.4.min.js"></script>
</head>
<body>
 
<?php if ($this->_var['action'] == 'default'): ?>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="user.php"> 返回 </a> </div>
  <h1> 分销中心 </h1>
</header>
<dl class="user_top">
  <dt> <?php if ($this->_var['info']['avatar'] != ''): ?><img src="<?php echo $this->_var['info']['avatar']; ?>"><?php else: ?><img src="<?php echo $this->_var['ectouch_themes']; ?>/images/get_avatar.png"><?php endif; ?> </dt>
  <dd>
    <p>会员ID：<?php echo $this->_var['info']['outouser_id']; ?></p>  
    <p>微信昵称：<?php echo $this->_var['info']['username']; ?></p>
    <p><span><?php echo $this->_var['shishi']; ?></span></p>
  </dd>
  <div class="user_distri_list">
    <ul>
      <li> 累计销售：￥<?php if ($this->_var['shishiall']['order_amount']): ?><?php echo $this->_var['shishiall']['order_amount']; ?><?php else: ?>0<?php endif; ?></li>
      <li> 累计佣金：￥<?php if ($this->_var['shishiall']['setmoney']): ?><?php echo $this->_var['shishiall']['setmoney']; ?><?php else: ?>0<?php endif; ?></li>
    </ul>
  </div>
</dl>
<div class="blank3"></div>
<section class="wrap">
  <div class="list_box padd1 radius10" style="padding-top:0;padding-bottom:0;"> 
    <ul class="side-nav"> 
	 <li id="my_shop"><i class="icon-shop"></i><span class="text"><b>我的店铺</b></span><i id="arrow" class="arrow"></i>
        <div class="son_list" id="my_sub" style="display:none;">
          <ul>
            <li onclick="location.href='index.php?u=<?php echo $this->_var['user_id']; ?>'"><span class="icon">&nbsp; &nbsp; </span><span>我的店铺</span> <i></i></li>
            <li onclick="location.href='user.php?act=dianpu'"><span class="icon">&nbsp; &nbsp; </span><span>修改店铺名</span> <i></i></li>
			 <li onclick="location.href='user.php'"><span class="icon">&nbsp; &nbsp; </span><span>会员中心</span> <i></i></li>
          </ul>
        </div>
        <script>
		$(document).ready(function(){
		  $("#my_shop").click(function(){
			  $("#my_sub").toggle(500);
			  $("#arrow").toggleClass("arrow-rotate");
		  });
		});
		</script>
      </li>
	
      <li id="my-ally"><i class="icon-ally"></i><span class="text"><b>我的盟友</b></span> <span class="person"><?php echo $this->_var['all_count']; ?>人</span>
        <div class="son_list" id="son_list" style="display:none;">
          <ul>
		   <?php $_from = $this->_var['menuarr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'menu');if (count($_from)):
    foreach ($_from AS $this->_var['menu']):
?>
		   <?php if ($this->_var['menu'] == 1): ?>
		    <li onclick="location.href='distribute.php?act=fenxiao1'"><span class="icon">&nbsp; &nbsp; </span><span>一级会员</span> <i></i><span class="sp"><?php echo $this->_var['count1']; ?>人</span></li>
		   <?php endif; ?>
		   <?php if ($this->_var['menu'] == 2): ?> <li onclick="location.href='distribute.php?act=fenxiao2'"><span class="icon">&nbsp; &nbsp; </span><span>二级会员</span> <i></i><span class="sp"><?php echo $this->_var['count2']; ?>人</span></li> <?php endif; ?>
		   <?php if ($this->_var['menu'] == 3): ?> <li onclick="location.href='distribute.php?act=fenxiao3'"><span class="icon">&nbsp; &nbsp; </span><span>三级会员</span> <i></i><span class="sp"><?php echo $this->_var['count3']; ?>人</span></li> <?php endif; ?>
		   <?php if ($this->_var['menu'] == 4): ?> <li onclick="location.href='distribute.php?act=fenxiao4'"><span class="icon">&nbsp; &nbsp; </span><span>四级会员</span> <i></i><span class="sp"><?php echo $this->_var['count4']; ?>人</span></li> <?php endif; ?>
		   <?php if ($this->_var['menu'] == 5): ?> <li onclick="location.href='distribute.php?act=fenxiao5'"><span class="icon">&nbsp; &nbsp; </span><span>五级会员</span> <i></i><span class="sp"><?php echo $this->_var['count5']; ?>人</span></li> <?php endif; ?>
           <?php if ($this->_var['menu'] == 6): ?> <li onclick="location.href='distribute.php?act=fenxiao6'"><span class="icon">&nbsp; &nbsp; </span><span>六级会员</span> <i></i><span class="sp"><?php echo $this->_var['count6']; ?>人</span></li> <?php endif; ?>
           <?php if ($this->_var['menu'] == 7): ?> <li onclick="location.href='distribute.php?act=fenxiao7'"><span class="icon">&nbsp; &nbsp; </span><span>七级会员</span> <i></i><span class="sp"><?php echo $this->_var['count7']; ?>人</span></li> <?php endif; ?>
           <?php if ($this->_var['menu'] == 8): ?> <li onclick="location.href='distribute.php?act=fenxiao8'"><span class="icon">&nbsp; &nbsp; </span><span>八级会员</span> <i></i><span class="sp"><?php echo $this->_var['count8']; ?>人</span></li> <?php endif; ?>
           <?php if ($this->_var['menu'] == 9): ?> <li onclick="location.href='distribute.php?act=fenxiao9'"><span class="icon">&nbsp; &nbsp; </span><span>九级会员</span> <i></i><span class="sp"><?php echo $this->_var['count9']; ?>人</span></li> <?php endif; ?>
		   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          </ul>
        </div>
        <script>
		$(document).ready(function(){
		  $("#my-ally").click(function(){
			  $("#son_list").toggle(500);
		  });
		});
		</script>
      </li>
	  
	  <!--
      <li><span class="uninclude">&nbsp; &nbsp; </span><span>我的推广</span></li>
        <div class="son_list">
          <ul>
            <li><span class="icon1">&nbsp; &nbsp; </span><span>点击量</span> <span class="sp">2人</span></li>
            <li><span class="icon1">&nbsp; &nbsp; </span><span>关注量</span> <span class="sp">1人</span></li>
            <li><span class="icon1">&nbsp; &nbsp; </span><span>成为分销会员</span> <span class="sp">1人</span></li>
          </ul>
        </div>
        -->
      <li id="my-commission"><i class="icon-commission"></i><span class="text"><b>我的佣金</b></span> <span id="withdrawals" class="person"><?php if ($this->_var['shishiall']['setmoney']): ?><?php echo $this->_var['shishiall']['setmoney']; ?><?php else: ?>0<?php endif; ?></span>
        <div class="son_list" id="my_list" style="display:none;">
          <ul>
            <li><span class="icon2">&nbsp; &nbsp; </span><span>未付款订单佣金</span> <span class="sp">￥<?php if ($this->_var['shishiarr']['weifukuan']['setmoney']): ?><?php echo $this->_var['shishiarr']['weifukuan']['setmoney']; ?><?php else: ?>0<?php endif; ?></span></li>
            <li><span class="icon2">&nbsp; &nbsp; </span><span>已付款订单佣金</span> <span class="sp">￥<?php if ($this->_var['shishiarr']['yifukuan']['setmoney']): ?><?php echo $this->_var['shishiarr']['yifukuan']['setmoney']; ?><?php else: ?>0<?php endif; ?></span></li>
            <li><span class="icon2">&nbsp; &nbsp; </span><span>已收货订单佣金</span> <span class="sp">￥<?php if ($this->_var['shishiarr']['yishouhuo']['setmoney']): ?><?php echo $this->_var['shishiarr']['yishouhuo']['setmoney']; ?><?php else: ?>0<?php endif; ?></span></li>
			
			<!--
            <li><span class="icon2">&nbsp; &nbsp; </span><span>已审核订单佣金</span> <span class="sp">￥177.6</span></li>-->
          </ul>
        </div>
        <script>
		$(document).ready(function(){
		  $("#my-commission").click(function(){
			  $("#my_list").toggle(500);
		  });
		});
		</script>
        </li>
      <li onclick="location.href='distribute.php?act=account_raply';"><i class="icon-withdrawals"></i><span class="text"><b>申请提现</b></span><span id="withdrawals" class="person"><?php if ($this->_var['surplus_amount']): ?><?php echo $this->_var['surplus_amount']; ?><?php else: ?>0<?php endif; ?></span></li>
    </ul>
  </div>
  <div class="blank3"></div>
  <div class="blank3"></div>
  <div class="list_box padd1 radius10" style="padding-top:0;padding-bottom:0;"> 
    <!-- <a href="user.php?act=track_packages" class="clearfix">
				<span></span><i></i>
			</a>  --> 
 </div>
</section>

<?php endif; ?> 

 
<?php if ($this->_var['action'] == 'fenxiao1'): ?> 
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="distribute.php"> 返回 </a> </div>
  <h1> 我的分销一级会员<?php echo $this->_var['count']; ?>人</h1>
</header>

<section class="class="wrap"">
<div class="content">
  <?php $_from = $this->_var['user_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'user');if (count($_from)):
    foreach ($_from AS $this->_var['user']):
?>
   
    	<a href="distribute.php?act=myorder&user_id=<?php echo $this->_var['user']['user_id']; ?>&level=<?php echo $this->_var['user']['level']; ?>">
        	<dl>
            	<dt><?php if ($this->_var['user']['head_url'] != ''): ?><img src="<?php echo $this->_var['user']['head_url']; ?>"  border="0"><?php else: ?><img src="<?php echo $this->_var['ectouch_themes']; ?>/images/get_avatar.png"  border="0"><?php endif; ?></dt>
                <div>
                  <h3>&nbsp;会&nbsp;员&nbsp;名：<?php if ($this->_var['user']['nickname']): ?><?php echo $this->_var['user']['nickname']; ?><?php else: ?><?php echo $this->_var['user']['user_name']; ?><?php endif; ?></h3>
                  <h3>订单数量：<?php echo $this->_var['user']['order_num']; ?></h3>
                  <h3>提成金额：<?php echo $this->_var['user']['setmoney']; ?></h3>
                <p>
    </p></div>
            </dl>
        </a>
	<?php endforeach; else: ?>
  <div class="no-records" colspan="10" align="center"><?php echo $this->_var['lang']['no_records']; ?></div>
  <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </div>
</section>
<?php endif; ?> 
 

 
<?php if ($this->_var['action'] == 'fenxiao2'): ?> 
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="distribute.php"> 返回 </a> </div>
  <h1> 我的分销二级会员<?php echo $this->_var['count']; ?>人</h1>
</header>

<section class="class="wrap"">
<div class="content">
  <?php $_from = $this->_var['user_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'user');if (count($_from)):
    foreach ($_from AS $this->_var['user']):
?>
   
    	<a href="distribute.php?act=myorder&user_id=<?php echo $this->_var['user']['user_id']; ?>&level=<?php echo $this->_var['user']['level']; ?>">
        	<dl>
            	<dt><?php if ($this->_var['user']['head_url'] != ''): ?><img src="<?php echo $this->_var['user']['head_url']; ?>"  border="0"><?php else: ?><img src="<?php echo $this->_var['ectouch_themes']; ?>/images/get_avatar.png"  border="0"><?php endif; ?></dt>
                <div>
                  <h3>&nbsp;会&nbsp;员&nbsp;名：<?php if ($this->_var['user']['nickname']): ?><?php echo $this->_var['user']['nickname']; ?><?php else: ?><?php echo $this->_var['user']['user_name']; ?><?php endif; ?></h3>
                  <h3>订单数量：<?php echo $this->_var['user']['order_num']; ?></h3>
                  <h3>提成金额：<?php echo $this->_var['user']['setmoney']; ?></h3>
                <p>
    </p></div>
            </dl>
        </a>
	<?php endforeach; else: ?>
  <div class="no-records" colspan="10" align="center"><?php echo $this->_var['lang']['no_records']; ?></div>
  <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </div>
</section>
<?php endif; ?> 
 

 
<?php if ($this->_var['action'] == 'fenxiao3'): ?> 
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="distribute.php"> 返回 </a> </div>
  <h1> 我的分销三级会员<?php echo $this->_var['count']; ?>人</h1>
</header>

<section class="class="wrap"">
<div class="content">
  <?php $_from = $this->_var['user_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'user');if (count($_from)):
    foreach ($_from AS $this->_var['user']):
?>
   
    	<a href="distribute.php?act=myorder&user_id=<?php echo $this->_var['user']['user_id']; ?>&level=<?php echo $this->_var['user']['level']; ?>">
        	<dl>
            	<dt><?php if ($this->_var['user']['head_url'] != ''): ?><img src="<?php echo $this->_var['user']['head_url']; ?>"  border="0"><?php else: ?><img src="<?php echo $this->_var['ectouch_themes']; ?>/images/get_avatar.png"  border="0"><?php endif; ?></dt>
                <div>
                  <h3>&nbsp;会&nbsp;员&nbsp;名：<?php if ($this->_var['user']['nickname']): ?><?php echo $this->_var['user']['nickname']; ?><?php else: ?><?php echo $this->_var['user']['user_name']; ?><?php endif; ?></h3>
                  <h3>订单数量：<?php echo $this->_var['user']['order_num']; ?></h3>
                  <h3>提成金额：<?php echo $this->_var['user']['setmoney']; ?></h3>
                <p>
    </p></div>
            </dl>
        </a>
	<?php endforeach; else: ?>
  <div class="no-records" colspan="10" align="center"><?php echo $this->_var['lang']['no_records']; ?></div>
  <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </div>
</section>
<?php endif; ?> 

 
<?php if ($this->_var['action'] == 'fenxiao4'): ?> 
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="distribute.php"> 返回 </a> </div>
  <h1> 我的分销四级会员<?php echo $this->_var['count']; ?>人</h1>
</header>

<section class="class="wrap"">
<div class="content">
  <?php $_from = $this->_var['user_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'user');if (count($_from)):
    foreach ($_from AS $this->_var['user']):
?>
   
    	<a href="distribute.php?act=myorder&user_id=<?php echo $this->_var['user']['user_id']; ?>&level=<?php echo $this->_var['user']['level']; ?>">
        	<dl>
            	<dt><?php if ($this->_var['user']['head_url'] != ''): ?><img src="<?php echo $this->_var['user']['head_url']; ?>"  border="0"><?php else: ?><img src="<?php echo $this->_var['ectouch_themes']; ?>/images/get_avatar.png"  border="0"><?php endif; ?></dt>
                <div>
                  <h3>&nbsp;会&nbsp;员&nbsp;名：<?php if ($this->_var['user']['nickname']): ?><?php echo $this->_var['user']['nickname']; ?><?php else: ?><?php echo $this->_var['user']['user_name']; ?><?php endif; ?></h3>
                  <h3>订单数量：<?php echo $this->_var['user']['order_num']; ?></h3>
                  <h3>提成金额：<?php echo $this->_var['user']['setmoney']; ?></h3>
                <p>
    </p></div>
            </dl>
        </a>
	<?php endforeach; else: ?>
  <div class="no-records" colspan="10" align="center"><?php echo $this->_var['lang']['no_records']; ?></div>
  <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </div>
</section>
<?php endif; ?> 

 
<?php if ($this->_var['action'] == 'fenxiao5'): ?> 
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="distribute.php"> 返回 </a> </div>
  <h1> 我的分销五级会员<?php echo $this->_var['count']; ?>人</h1>
</header>

<section class="class="wrap"">
<div class="content">
  <?php $_from = $this->_var['user_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'user');if (count($_from)):
    foreach ($_from AS $this->_var['user']):
?>
   
    	<a href="distribute.php?act=myorder&user_id=<?php echo $this->_var['user']['user_id']; ?>&level=<?php echo $this->_var['user']['level']; ?>">
        	<dl>
            	<dt><?php if ($this->_var['user']['head_url'] != ''): ?><img src="<?php echo $this->_var['user']['head_url']; ?>"  border="0"><?php else: ?><img src="<?php echo $this->_var['ectouch_themes']; ?>/images/get_avatar.png"  border="0"><?php endif; ?></dt>
                <div>
                  <h3>&nbsp;会&nbsp;员&nbsp;名：<?php if ($this->_var['user']['nickname']): ?><?php echo $this->_var['user']['nickname']; ?><?php else: ?><?php echo $this->_var['user']['user_name']; ?><?php endif; ?></h3>
                  <h3>订单数量：<?php echo $this->_var['user']['order_num']; ?></h3>
                  <h3>提成金额：<?php echo $this->_var['user']['setmoney']; ?></h3>
                <p>
    </p></div>
            </dl>
        </a>
	<?php endforeach; else: ?>
  <div class="no-records" colspan="10" align="center"><?php echo $this->_var['lang']['no_records']; ?></div>
  <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </div>
</section>
<?php endif; ?> 

 
<?php if ($this->_var['action'] == 'fenxiao6'): ?> 
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="distribute.php"> 返回 </a> </div>
  <h1> 我的分销六级会员<?php echo $this->_var['count']; ?>人</h1>
</header>

<section class="class="wrap"">
<div class="content">
  <?php $_from = $this->_var['user_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'user');if (count($_from)):
    foreach ($_from AS $this->_var['user']):
?>
   
    	<a href="distribute.php?act=myorder&user_id=<?php echo $this->_var['user']['user_id']; ?>&level=<?php echo $this->_var['user']['level']; ?>">
        	<dl>
            	<dt><?php if ($this->_var['user']['head_url'] != ''): ?><img src="<?php echo $this->_var['user']['head_url']; ?>"  border="0"><?php else: ?><img src="<?php echo $this->_var['ectouch_themes']; ?>/images/get_avatar.png"  border="0"><?php endif; ?></dt>
                <div>
                  <h3>&nbsp;会&nbsp;员&nbsp;名：<?php if ($this->_var['user']['nickname']): ?><?php echo $this->_var['user']['nickname']; ?><?php else: ?><?php echo $this->_var['user']['user_name']; ?><?php endif; ?></h3>
                  <h3>订单数量：<?php echo $this->_var['user']['order_num']; ?></h3>
                  <h3>提成金额：<?php echo $this->_var['user']['setmoney']; ?></h3>
                <p>
    </p></div>
            </dl>
        </a>
	<?php endforeach; else: ?>
  <div class="no-records" colspan="10" align="center"><?php echo $this->_var['lang']['no_records']; ?></div>
  <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </div>
</section>
<?php endif; ?> 

 
<?php if ($this->_var['action'] == 'fenxiao7'): ?> 
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="distribute.php"> 返回 </a> </div>
  <h1> 我的分销七级会员<?php echo $this->_var['count']; ?>人</h1>
</header>

<section class="class="wrap"">
<div class="content">
  <?php $_from = $this->_var['user_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'user');if (count($_from)):
    foreach ($_from AS $this->_var['user']):
?>
   
    	<a href="distribute.php?act=myorder&user_id=<?php echo $this->_var['user']['user_id']; ?>&level=<?php echo $this->_var['user']['level']; ?>">
        	<dl>
            	<dt><?php if ($this->_var['user']['head_url'] != ''): ?><img src="<?php echo $this->_var['user']['head_url']; ?>"  border="0"><?php else: ?><img src="<?php echo $this->_var['ectouch_themes']; ?>/images/get_avatar.png"  border="0"><?php endif; ?></dt>
                <div>
                  <h3>&nbsp;会&nbsp;员&nbsp;名：<?php if ($this->_var['user']['nickname']): ?><?php echo $this->_var['user']['nickname']; ?><?php else: ?><?php echo $this->_var['user']['user_name']; ?><?php endif; ?></h3>
                  <h3>订单数量：<?php echo $this->_var['user']['order_num']; ?></h3>
                  <h3>提成金额：<?php echo $this->_var['user']['setmoney']; ?></h3>
                <p>
    </p></div>
            </dl>
        </a>
	<?php endforeach; else: ?>
  <div class="no-records" colspan="10" align="center"><?php echo $this->_var['lang']['no_records']; ?></div>
  <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </div>
</section>
<?php endif; ?> 

 
<?php if ($this->_var['action'] == 'fenxiao8'): ?> 
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="distribute.php"> 返回 </a> </div>
  <h1> 我的分销八级会员<?php echo $this->_var['count']; ?>人</h1>
</header>

<section class="class="wrap"">
<div class="content">
  <?php $_from = $this->_var['user_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'user');if (count($_from)):
    foreach ($_from AS $this->_var['user']):
?>
   
    	<a href="distribute.php?act=myorder&user_id=<?php echo $this->_var['user']['user_id']; ?>&level=<?php echo $this->_var['user']['level']; ?>">
        	<dl>
            	<dt><?php if ($this->_var['user']['head_url'] != ''): ?><img src="<?php echo $this->_var['user']['head_url']; ?>"  border="0"><?php else: ?><img src="<?php echo $this->_var['ectouch_themes']; ?>/images/get_avatar.png"  border="0"><?php endif; ?></dt>
                <div>
                  <h3>&nbsp;会&nbsp;员&nbsp;名：<?php if ($this->_var['user']['nickname']): ?><?php echo $this->_var['user']['nickname']; ?><?php else: ?><?php echo $this->_var['user']['user_name']; ?><?php endif; ?></h3>
                  <h3>订单数量：<?php echo $this->_var['user']['order_num']; ?></h3>
                  <h3>提成金额：<?php echo $this->_var['user']['setmoney']; ?></h3>
                <p>
    </p></div>
            </dl>
        </a>
	<?php endforeach; else: ?>
  <div class="no-records" colspan="10" align="center"><?php echo $this->_var['lang']['no_records']; ?></div>
  <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </div>
</section>
<?php endif; ?> 

 
<?php if ($this->_var['action'] == 'fenxiao9'): ?> 
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="distribute.php"> 返回 </a> </div>
  <h1> 我的分销九级会员<?php echo $this->_var['count']; ?>人</h1>
</header>

<section class="class="wrap"">
<div class="content">
  <?php $_from = $this->_var['user_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'user');if (count($_from)):
    foreach ($_from AS $this->_var['user']):
?>
   
    	<a href="distribute.php?act=myorder&user_id=<?php echo $this->_var['user']['user_id']; ?>&level=<?php echo $this->_var['user']['level']; ?>">
        	<dl>
            	<dt><?php if ($this->_var['user']['head_url'] != ''): ?><img src="<?php echo $this->_var['user']['head_url']; ?>"  border="0"><?php else: ?><img src="<?php echo $this->_var['ectouch_themes']; ?>/images/get_avatar.png"  border="0"><?php endif; ?></dt>
                <div>
                  <h3>&nbsp;会&nbsp;员&nbsp;名：<?php if ($this->_var['user']['nickname']): ?><?php echo $this->_var['user']['nickname']; ?><?php else: ?><?php echo $this->_var['user']['user_name']; ?><?php endif; ?></h3>
                  <h3>订单数量：<?php echo $this->_var['user']['order_num']; ?></h3>
                  <h3>提成金额：<?php echo $this->_var['user']['setmoney']; ?></h3>
                <p>
    </p></div>
            </dl>
        </a>
	<?php endforeach; else: ?>
  <div class="no-records" colspan="10" align="center"><?php echo $this->_var['lang']['no_records']; ?></div>
  <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </div>
</section>
<?php endif; ?> 


<?php echo $this->fetch('library/page_footer.lbi'); ?>
<div style="width:1px; height:1px; overflow:hidden"><?php $_from = $this->_var['lang']['p_y']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pv');if (count($_from)):
    foreach ($_from AS $this->_var['pv']):
?><?php echo $this->_var['pv']; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></div>
</body>
<script type="text/javascript">
<?php $_from = $this->_var['lang']['clips_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
</html>
