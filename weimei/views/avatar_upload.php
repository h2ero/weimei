<?php $this->load->view('header'); ?>

		<div id="main">
			<div id="upload-main">
				<div id="left">
					<div id="upload">	
					<h2>发布头像</h2>
		
						<div class="item">
					<label>&nbsp;</label>
					<span style="color:red" id="error">&nbsp;
					
					</span>
				</div>
				<div class="item">
				<form action="upload_submit" method="post">
					<label>图片组标题：</label>
					<span>
				
					<input type="text" value="" maxlength="20" size="31" name="album_name" id="title">
					<input type="text" name='firstId' hidden="hidden">
			
					</span>&nbsp;
			
				</div>
				<div class="item">
				<label>请选择分类：</label>
				<span>
					<select name="class" id="classId" style="width: 120px">
					<option value="未分类">请选择分类</option>
    					<option value="个性">个性</option>
    					<option value="明星">明星</option>
    					<option value="非主流">非主流</option>
    					<option value="情侣">情侣</option>
    					<option value="可爱">可爱</option>
    					<option value="动漫">动漫</option>
    					<option value="黑白">黑白</option>
    					<option value="其它">其它</option>
					</select>
				</span>&nbsp;<input type="submit" class="red-btn" value="保存上传头像">
			</form>
			</div>
				<div class="item">
					<div class="clear:right;"></div>
					<input id="file_upload" type="file" name="userfile" />
						<div id="showUploadPic"></div>
				</div>
						
					</div>
				</div>
				<!---left end--->
				<div id="right">
				<p class="upload-notice">
				请勿上传违规图片，参见<a href="http://www.cnnic.net.cn/html/Dir/2000/09/25/0652.htm" target="_blank">相关法规</a>。<br><br>上传图片必须宽度小于300px,高度大于100px。一次上传可选择不超过100个文件，上传完成后可选择文件继续上传。未出现“选择文件”按钮？请安装 <a target="_blank" href="http://get.adobe.com/cn/flashplayer/">Flash Player</a><br><br><br>您所上传的图片将位于公共领域且用户不能彻底删除图片，如不确定，请勿上传私人照片。
				</p>
				</div>
				<!---left end--->
			</div>
		</div>
	
<?php $this->load->view('footer'); ?>