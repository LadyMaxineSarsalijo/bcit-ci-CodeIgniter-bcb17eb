
<div class= "container">
		<div class= "row">
			<div class= "col-md-12 mt-4">
				<div class= "card">
					<div class= "card-header">
						<h5>
							User Information
						</h5>
					</div>
					<div class = "card-body">
                    <form action="<?php echo base_url('create-user')?>" method="POST">
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="firstName">
                            </div>
                            <div class="form-group">
                                <label for="middleName">Middle Name</label>
                                <input type="text" class="form-control" id="middleName" name="middleName">
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="lastName">
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Submit</button>
                        </form>
					</div>

				</div>

			</div>

		</div>
	</div>
    