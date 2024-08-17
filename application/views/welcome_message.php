
	<div class= "container">
		<div class= "row">
			<div class= "col-md-12 mt-4">
				<div class= "">
					<div class= "card-header">
						<h5>
							User
							<a href="<?php echo base_url('dokie')?>" class="btn btn-primary float-right">Add User</a>
						</h5>
					</div>
					<div class = "card-body">
					<table class="table table-bordered table-striped">
						<thead class="flex">
							<tr>
								<th>First Name</th>
								<th>Middle Name</th>
								<th>Last Name</th>
								<th>Email</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
						<?php
						if(count($result)) {
						$cnt=1;
						foreach ($result as $row){
						?>
							<tr>
							<td><?php echo htmlentities($row->firstName)?></td>
							<td><?php echo htmlentities($row->middleName)?></td>
							<td><?php echo htmlentities($row->lastName)?></td>
							<td><?php echo htmlentities($row->email)?></td>
							<td class="flex" style="display: flex; gap: 10px;">
								<form action="<?php echo base_url('edit-user-page')?>">
									<button type="submit" class= "btn btn-success">Edit</button>
								</form>
								<form action="">
									<button type="submit" class= "btn btn-danger">Delete</button>
								</form>
							</td>
							</tr>
						<?php
						$cnt++;
						} // end foreach
						} else { ?>
							<tr>
							<td colspan="7">No Record found</td>
							</tr>
						<?php
						}
						?>
						</tbody>
					</table>
					</div>

				</div>

			</div>

		</div>
	</div>
    <style>
	</style>