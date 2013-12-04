<div class="section">
	<div class="box">
		<div class="title">
			Users
			<span class="hide"></span>
		</div>
		<div class="content">
			<table cellspacing="0" cellpadding="0" border="0" class="all"> 
				<thead> 
					<tr>
						<th>ID</th>
						<th>Username</th>
						<th>E-mail</th>
						<th>Created On</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>{{id}}</td>
						<td>{{username}}</td>
						<td>{{email}}</td>
						<td>{{created_on_utc}}</td>
						<td>
								<a href="{{edit_url}}/{{id}}">Edit</a>&nbsp;|&nbsp;
								<a onclick="return confirm('Are you sure you want to soft delete {{username}}?');" href="{{softdelete_url}}/{{id}}">Soft Delete</a>&nbsp;|&nbsp;
								<a onclick="return confirm('Are you sure you want to delete {{username}}?');" href="{{delete_url}}/{{id}}">Delete</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="section">
	<div class="box">
		<div class="title">
			Soft Deleted Users
			<span class="hide"></span>
		</div>
		<div class="content">
			<table cellspacing="0" cellpadding="0" border="0" class="all"> 
				<thead> 
					<tr>
						<th>ID</th>
						<th>Username</th>
						<th>E-mail</th>
						<th>Created On</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>{{id}}</td>
						<td>{{username}}</td>
						<td>{{email}}</td>
						<td>{{created_on_utc}}</td>
						<td>
								<a href="{{edit_url}}/{{id}}">Edit</a>&nbsp;|&nbsp;
								<a onclick="return confirm('Are you sure you want to re-activate {{username}}?');" href="{{softdelete_url}}/{{id}}">Activate</a>&nbsp;|&nbsp;
								<a onclick="return confirm('Are you sure you want to delete {{username}}?');" href="{{delete_url}}/{{id}}">Delete</a>								
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>	