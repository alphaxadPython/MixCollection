    
    <!-- Modal fo login form -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-muted">Login Please</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
				</div>
				<div class="modal-body login-form">
				<form action="" method="POST">
					<input type="text" name="username" placeholder="Username" required />
					<input type="password" name="password" placeholder="password" required/>
					<span class="text-muted">
						<input type="checkbox" class="checkbox"> Keep me signed in
						
					</span>
					<button type="submit" name="login" class="btn btn-default">Login</button>
				</form>
				</div>
				<div class="modal-footer d-sm-block d-md-none">
					<span>Have No Account ? <a href="" data-dismiss="#modelId"  data-toggle="modal" data-target="#modelId1">Signup Here!</a></span>
				</div>
				
			</div>
		</div>
	</div>


    <!-- Signup modal for the new users -->
    <div class="modal fade" id="modelId1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-muted">New User Signup</h5>
                       
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                <div class="signup-form"><!--sign up form-->
						
						<form action="" method="POST">
							<input type="text" name="username" placeholder="Username" required/>
							<input type="email" name="email" placeholder="Email Address" required/>
                            <div class="row">
                                <div class="col-md-6">
						        	<input type="password" name="password1" placeholder="Password" required/>
                                </div>
                                <div class="col-md-6">
						        	<input type="password" name="password2" placeholder="Confirm Password" required/>
                                </div>
                            </div>
							<button class="btn btn default" type="submit" name="signup">Signup</button>
						</form>
					</div><!--/sign up form-->
                </div>
              
            </div>
        </div>
    </div>