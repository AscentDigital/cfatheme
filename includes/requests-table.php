<div class="wrap">
	<h1>Construction Funding Access Requests</h1><br>
	<div class="tablenav top">
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