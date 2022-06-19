@extends('shopify-app::layouts.default')
@extends('layouts.head')

@section('content')
<div class="customers">
	<div class="page-width">
		<div class="customer_topbar">
			<h2>Customers</h2>
			<a href="">Export to CSV</a>
		</div>
		<div class="customer-table">
			<table id="customer_table" style="width:100%">
				<thead>
					<tr>
						<th>Customer Name</th>
						<th>No. of items in list</th>
						<th>Last Wishlist Addition On</th>
						<th>View Wishlist</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<a href="#">Anonymous</a>
						</td>
						<td>
							<a href="#"> 1 </a>
						</td>
						<td>
							<a href="#">a month ago</a>
						</td>
						<td class="table_td">
							<a href="#">View Wishlist <i class="fa fa-share-square-o" aria-hidden="true"/>
							</a>
							<i class="fa fa-eye" aria-hidden="true"/>
						</td>
					</tr>
					<tr>
						<td>
							<a href="#">Anonymous</a>
						</td>
						<td>
							<a href="#"> 2 </a>
						</td>
						<td>
							<a href="#">21 days ago</a>
						</td>
						<td class="table_td">
							<a href="#">View Wishlist <i class="fa fa-share-square-o" aria-hidden="true"/>
							</a>
							<i class="fa fa-eye" aria-hidden="true"/>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	@include('quick-review')
</div>
@endsection

@section('scripts')
    @parent

    <script>
        
    </script>
@endsection