
<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
		</div>

		<table class="table-border">
			<!--TODO: find solution for style -->
			<thead>

				<tr class="sign_in sign_in_tr">
					<td colspan="2" class="sign_in_title sign_in_td"><b>Sign In</b></td>
				</tr>
				
					
				<tr class="sign_in_tr sign_in_10px">
					<td class="sign_in_td" colspan="2"></td>
				</tr>
			
			</thead>
			<tbody>
				
					<tr class="sign_in_tr">
						
							
							<td class="sign_in_td"><?php 
		echo $this->Form->input('username', array('label' => 'Username:'));?></td>
						
					</tr>
				
		

					<tr class="sign_in_tr">
						
							
							<td class="sign_in_td"><?php echo $this->Form->input('password', array('label' => 'Password:'));
		?></td>
						
					</tr>
				
			 
					<tr class="sign_in_tr">
						
							<td class="sign_in_td"></td>
							<td class="sign_in_td" style="font-size: 10px;"><a href="/forgoturl">Forgot?</a></td>
						</tr>
						<tr>
							<td class="sign_in_td"></td>
							<td class="sign_in_td" style="font-size: 10px;"><input style="font-size: 10px; height: initial; width: initial;" id="remember_me" name="remember_me" value="Remember me?" type="checkbox">Remember me?</td>
						</tr><tr>
							<td class="sign_in_td"></td>
							<td class="sign_in_td" style="float:right"><?php echo $this->Form->end(('Sign In'), array('class' => 'sign_in_submit')); ?></td>
						
					</tr>
				
			
			<tr class="sign_in_tr sign_in_10px">
				<td colspan="2" class="sign_in_td"></td>
			</tr>	
			<tr class="sign_in_tr">
				<td colspan="2" class="sign_in_td">© XLabs 2015</td>
			</tr>
        	</tbody>
    	</table>
    </form>

</div>