<?php
/**
 * DreamCat	是一个极简自适应博客主题,年轻人追梦的必备良品!
 * 
 * @package DreamCat
 * @author LychApe
 * @version 1.7-20210104
 * @link https://github.com/LychApe/DreamCat
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
	$this->need('header.php');
?>
	<div class="mdui-container-fluid" style="padding-left: 0px; padding-right: 0px;">
		<div id="body">
			<div class="container">
				<div class="row">
<!--Start-->
	<style>
		#main {
			overflow: hidden;
			/* margin: 25px auto; */
		}
		#line {
			width: 4px;
			height: 100%;
			background-color: #666666;
			position: absolute;
			left: -60px;
			transform: translateX(-50%);
		}
		#coos{
			margin: 0;
			padding: 0;
			/*font-family: "å¾®è½¯é›…é»‘"; /*你说可以不用*/
			box-sizing: border-box;
			font-size: 16px;
			transition: all .3s ease-out;
		}
	</style>
	<div class="mdui-container-fluid">
	<div class="mdui-row DreamCat-content-header">
		<div class="mdui-container fade-scale in">
		<h1 class="title">
			<?php $this->options->title(); ?></h1>
		<h5 class="subtitle">
			<?php $this->options->description(); ?></h5>
		</div>
	</div>
	<div class="mdui-row">
		<div class="mdui-col-xs-6 mdui-float-right" style="transform: translateY(-50%);width: 95px;">
		<button class="mdui-shadow-0 mdui-fab mdui-color-theme-accent mdui-ripple" mdui-dialog="{target: '#search-1'}" style="background-color: #3f51b5!important;"><i class="mdui-icon material-icons">search</i></button>
		</div>
		<div class="mdui-container">
		<div class="mdui-dialog" id="search-1">
			<div class="mdui-dialog-content">
			<form method="post" action="">
				<div class="mdui-textfield">
				<input class="mdui-textfield-input" type="text" name="s" placeholder="输入关键词进行搜索" />
				</div>
			</form>
			</div>
		</div>
		</div>
	</div>
	</div>
	<div class="mdui-container">
	<div class="mdui-row">
		<div class="mdui-col-xs-12 mdui-col-sm-8">
		<div class="mdui-card DreamCat-top-card mdui-shadow-18" style="border-radius:18px;">
			<div class="mdui-card-media">
			     <?php if(!empty($this->options->headbj1)): ?>
			     <img class="DreamCat-main-pic" src="<?php $this->options->headbj1() ?>" />
			     <?php else: ?>
			<img class="DreamCat-main-pic" src="//img14.360buyimg.com/img/jfs/t1/60307/19/4269/282412/5d2629faE5c3b1ef5/02d26b22dfe459d0.jpg" />
			<?php endif; ?>
			<div class="mdui-card-media-covered">
				<div class="mdui-card-primary">
					<div class="mdui-card-primary-title"><?php $this->options->Dec() ?> </div>
				</div>
			</div>
			</div>
		</div>
		</div>
		<div class="mdui-hidden-xs mdui-col-sm-4">
		<div class="mdui-row">
			<div class="mdui-card DreamCat-top-card mdui-shadow-20" style="border-radius:18px;">
			<div class="mdui-card-media">
			    <?php if(!empty($this->options->headbj2)): ?>
			    <img class="DreamCat-main-pic" src="<?php $this->options->headbj2() ?>" style="height: 100px;position: relative;background-size: cover;background-position: center;border-radius: var(--jinsom-border-radius) var(--jinsom-border-radius) 0 0;" />
			    <?php else: ?>
				<img class="DreamCat-main-pic" src="//img14.360buyimg.com/img/jfs/t1/60307/19/4269/282412/5d2629faE5c3b1ef5/02d26b22dfe459d0.jpg" style="height: 100px;position: relative;background-size: cover;background-position: center;border-radius: var(--jinsom-border-radius) var(--jinsom-border-radius) 0 0;" />
				<?php endif; ?>
			</div>
			<?php if(!empty($this->options->logoUrl)): ?>
			<img class="DreamCat-List-headimg mdui-shadow-6" src="<?php $this->options->logoUrl() ?>" style="margin-top: -50px;position: relative;left: 10%;/* margin-right: -20px; */" />
				<?php else: ?>
				<img class="DreamCat-List-headimg mdui-shadow-6" src="<?php $this->options->themeUrl('src/img/default-avatar.png'); ?>" style="margin-top: -50px;position: relative;left: 10%;/* margin-right: -20px; */" />
								<?php endif; ?>
								<div class="number" style="color: #999;font-size: 15px;display: flex;justify-content: center;margin: 1%;">
			    <?php if(!empty($this->options->Decc)): ?>
			  <div class="mdui-chip">
  <span class="mdui-chip-title"><?php $this->options->Decc() ?></span>
</div>
				
				<?php else: ?>
				<div class="mdui-chip">
  <span class="mdui-chip-title">博主很懒,啥都没写</span>
</div>
					<?php endif; ?>
			</div>


	<center>
	    <?php if(!empty($this->options->qq)): ?>
	    <a mdui-dialog="{target: '#qq'}">
<svg class="icon" aria-hidden="true">
  <use xlink:href="#icon-QQ"></use>
  
</svg></a>
<?php endif; ?>
<?php if(!empty($this->options->weibo)): ?>
<a mdui-dialog="{target: '#weibo'}">
<svg class="icon" aria-hidden="true">
<use xlink:href="#icon-weibo"></use>
</svg></a>
<?php endif; ?>
<?php if(!empty($this->options->zfb)): ?>
<a mdui-dialog="{target: '#zfb'}">
<svg class="icon" aria-hidden="true">
<use xlink:href="#icon-zhifubao"></use>
</svg></a>
<?php endif; ?>
<?php if(!empty($this->options->weixin)): ?>
<a mdui-dialog="{target: '#weixin'}">
<svg class="icon" aria-hidden="true">
<use xlink:href="#icon-weixin"></use>
</svg></a>
<?php endif; ?>
</center>
			</div>
			</div>
		</div>
		</div>
	</div>
	</div>
	<br />
	<br />
	
	<div class="mdui-container mdui-center">
	   
<?php while($this->next()): ?>
 <a href ='<?php $this->permalink() ?>'>
		<article class="post" itemscope="" itemtype="http://schema.org/BlogPosting">
			<div class="mdui-row">
				<div id="main">
					<div class="mdui-col-md-1 mdui-col-lg-1">
					</div>
					<div class="mdui-col-md-10 mdui-col-lg-10">
					<div id="line"></div>
						<div id="coos">
							<div class="lis">
							<div class="spot"></div>
							<div class="g-lin mdui-hidden-xs"></div>
								<div class="mdui-card mdui-hoverable" id="main" role="main" style="border-radius:9px; transform: translateY(-15%);">
									<div class="mdui-card-media">
									<img class="moe-post-wzimg" src="<?php echo thumb($this); ?>" />
									<div class="mdui-card-media-covered">
										<div class="mdui-card-primary">
											<div class="mdui-card-primary-title">
												<?php $this->title(); ?>
												
												<?php if($this->options->articletime == 'checked'): ?>
												<br><small>发表时间:
												<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished">
												<?php $this->date(); ?></time>
												</small>
												<?php endif; ?>
											</div>
										</div>
									</div>
								</div>
							
								</div>
							</div>
						</div>
					</div>
					<div class="mdui-col-md-1 mdui-col-lg-1"></div>
				</div>
			</div>
</article>
		</a>
<?php endwhile; ?>
	</div>
	</a>
	</div>
	
	<div class="moe-margin-card-top"></div>
	<div class="moe-page-div moe-card-a">
		<?php $this->pageLink('<button class="mdui-btn mdui-btn-icon mdui-ripple mdui-color-theme-accent mdui-shadow-5 moe-prev"><i class="mdui-icon material-icons">navigate_before</i></button>','prev'); ?>
		<button class="mdui-btn moe-number" disabled="">
			<span class="">
				<?php if($this->_currentPage>1) echo $this->_currentPage; else echo 1;?>/ 
				<?php echo ceil($this->getTotal() / $this->parameter->pageSize); ?>
			</span>
		</button>
		<?php $this->pageLink('<button class="mdui-btn mdui-btn-icon mdui-ripple mdui-color-theme-accent mdui-shadow-5 moe-next"><i class="mdui-icon material-icons">navigate_next</i></button>','next'); ?>
	</div>
<?php #$this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>	
</body>
</html>