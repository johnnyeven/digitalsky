			<div class="span3">
				
				<div class="account-container">
				
					<div class="account-details">
					
						<span class="account-name"><?php echo $admin->admin_account; ?></span>
						
						<span class="account-role">管理员</span>
						
						<span class="account-actions">
							<a href="javascript:;">更改密码</a> |
							
							<a href="<?php echo site_url('admin/login/out'); ?>">退出登录</a>
						</span>
					
					</div> <!-- /account-details -->
				
				</div> <!-- /account-container -->
				
				<hr />
				
				<ul id="main-nav" class="nav nav-tabs nav-stacked">
					
					<li<?php if($page_name=='admin/job_list'): ?> class="active"<?php endif; ?>>
						<a href="./">
							<i class="icon-home"></i>
							Dashboard 		
						</a>
					</li>
					
					<li<?php if($page_name=='admin/job_add'): ?> class="active"<?php endif; ?>>
						<a href="./plans.html">
							<i class="icon-th-list"></i>
							Pricing Plans		
						</a>
					</li>
					
					<li<?php if($page_name=='admin/account'): ?> class="active"<?php endif; ?>>
						<a href="./account.html">
							<i class="icon-user"></i>
							User Account							
						</a>
					</li>
					
				</ul>
		
			</div>