@extends('shopify-app::layouts.default')
@extends('layouts.head')

@section('content')


<div class="product_tab">
<div class="page-width">
    <div class="product_topbar">
        <h2>Products</h2>
        <a href="">Export to CSV</a>
    </div>
    <div class="product-table">
    <table id="product_table"  style="width:100%">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>No. of items in list</th>
                <th>Last Wishlist Addition On</th>
                <th>View Product</th>
               
            </tr>
        </thead>
        <tbody>
            <tr> 
           <td><a href="#"><img src="https://cdn.shopify.com/s/files/1/0612/5459/8875/files/500048-3755386.png?v=1648318781"><span>Shirt 1 - S</span></a></td>
                <td><a href="#"> 1 </a></td>
                <td><a href="#">a month ago</a></td>
                <td class="table_td"><a href="#">View on store <i class="fa fa-share-square-o" aria-hidden="true"></i></a> <i class="fa fa-eye" aria-hidden="true"></i></td>
                
            </tr>
            <tr>
                <td><a href="#"><img src="https://cdn.shopify.com/s/files/1/0612/5459/8875/files/500048-3755386.png?v=1648318781"><span>Shirt 1 - S</span></a></td>
                <td><a href="#"> 2 </a></td>
                <td><a href="#">21 days ago</a></td>
                <td class="table_td"><a href="#">View on store <i class="fa fa-share-square-o" aria-hidden="true"></i></a> <i class="fa fa-eye" aria-hidden="true"></i></td>
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