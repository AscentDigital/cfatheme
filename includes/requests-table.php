<div class="wrap">
	<h1>Construction Funding Access Requests</h1><br>
	<ul class="subsubsub">
		<li class="all">Total <span class="count">(<?php echo $total; ?>)</span></li>
	</ul>
	<div class="tablenav top">
		<div class="alignleft actions bulkactions">
			<a class="button button-primary" role="button" href="<?php echo esc_url( admin_url('admin-post.php') ); ?>?page=cfa-requests&export">Export</a>
		</div>
		<div class="tablenav-pages">
			<?php echo $p->show(); ?>
		</div>
	</div>
	<table class="widefat">
		<thead>
			<tr>
				<th>Product Type</th>
				<th>Desired Loan Range</th>       
				<th>How Fast Do You Need The Loan</th>
				<th>Full Name</th>
				<th>Phone Number</th>
				<th>City</th>
				<th>Email</th>
				<th>Date Requested</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Product Type</th>
				<th>Desired Loan Range</th>       
				<th>How Fast Do You Need The Loan</th>
				<th>Full Name</th>
				<th>Phone Number</th>
				<th>City</th>
				<th>Email</th>
				<th>Date Requested</th>
			</tr>
		</tfoot>
		<tbody>
			<?php foreach ($lists as $list) { ?>
			<tr>
				<td><?php echo $list->product_type; ?></td>
				<td><?php echo $list->loan_range; ?></td>
				<td><?php echo $list->fast; ?></td>
				<td><?php echo $list->name; ?></td>
				<td><?php echo $list->phone; ?></td>
				<td><?php echo $list->city; ?></td>
				<td><?php echo $list->email; ?></td>
				<td><?php echo date('g:i a F j, Y', strtotime($list->date)); ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<div class="tablenav">
		<div class="tablenav-pages">
			<?php echo $p->show(); ?>
		</div>
	</div>
</div>