
<div class= "container">
		<div class= "row">
			<div class= "col-md-12 mt-4">
				<div class= "card">
					<div class= "card-header">
						<h5>
							User Edit Information
						</h5>
					</div>
					<div class = "card-body">
                    <form action="<?php echo base_url('update-user/'.$users->id) ?>" method="POST">
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="firstName"  value="<?= $users->firstName ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="middleName">Middle Name</label>
                                <input type="text" class="form-control" id="middleName" name="middleName"  value="<?= $users->middleName ?>">
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="lastName"  value="<?= $users->lastName ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" name="email"  value="<?= $users->email ?>" required>
                            </div>
                            <button type="submit" class="btn btn-info mt-2">Update</button>
                        </form>
					</div>

				</div>

			</div>

		</div>
	</div>
    