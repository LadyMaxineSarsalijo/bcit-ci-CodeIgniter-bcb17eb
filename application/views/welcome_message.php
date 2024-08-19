
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
						<form action="<?php echo base_url() ?>" method="GET">
							<div class="row g-3 align-items-center mb-2">
								<div class="col-auto">
									<label for="search_check" class="col-form-label">Search</label>
								</div>
								<div class="col-auto">
								<input type="text" placeholder="Search here.." id="search_text" name="search_text" class="form-control" aria-describedby="passwordHelpInline">
								</div>
								<div class="col-auto">
									<input type="submit" class="btn btn-primary" value="Search">
								</div>
							</div>
						</form>
						
					<table id="datatable" class="table table-bordered table-striped">
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
								<form action="<?php echo base_url('edit-user-page/'.$row->id)?>">
									<button type="submit" class= "btn btn-success">Edit</button>
								</form>
								<form action="<?php echo base_url('delete-user/'.$row->id)?>">
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