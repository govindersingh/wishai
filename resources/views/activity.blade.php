@extends('shopify-app::layouts.default')
@extends('layouts.head')

@section('content')
<div class="activity">
    <div class="page-width">
    <div class="activity_topbar">
        <h2>Activity</h2>
        <a href="">Export to CSV</a>
    </div>
    <div class="activity_table"> 
           <!-- <div class="search_wrapper">
                <form>
                 <div class="activity_form_grp">
                <div class="input-group-prepend">
                    <span><i class="fa fa-search"></i></span>
                    <input type="search" placeholder="Search.." name="search">
                    <a href="">more filters</a>
                </div>
                <div class="search-btn">
                <span><button type="button">search</button></span>
                </div>
            </div>
            </form>
    
           </div> -->
       <table id="myTable"  style="width:100%">
        <thead>
            <tr>
                <th>Customer Name</th>
                <th>Product Name</th>
                <th>Action Time</th>
                <th>Action Type</th>
                <th>View Wishlist</th>
               
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="#">Anonymous</a></td>
                <td class="table_td"><a href="#">jeans 2 - 28 <i class="fa fa-share-square-o" aria-hidden="true"></i></a></td>
                <td><a href="#">21 days ago</a></td>
                <td><a href="#">Removed from wishlist</a></td>
                <td class="table_td"><a href="#">View Wishlist <i class="fa fa-share-square-o" aria-hidden="true"></i></a> <i class="fa fa-eye" aria-hidden="true"></i></td>
                
            </tr>
            <tr>
            <td>
                <a href="#">Anonymous</a></td>
                <td class="table_td"><a href="#">jeans 2 - 28 <i class="fa fa-share-square-o" aria-hidden="true"></i></a></td>
                <td><a href="#">21 days ago</a></td>
                <td><a href="#">Removed from wishlist</a></td>
                <td class="table_td"><a href="#">View Wishlist <i class="fa fa-share-square-o" aria-hidden="true"></i></a> <i class="fa fa-eye" aria-hidden="true"></i></td>
                
            </tr>
            <tr>
                <td><a href="#">Anonymous</a></td>
                <td class="table_td"><a href="#">jeans 2 - 28 <i class="fa fa-share-square-o" aria-hidden="true"></i></a></td>
                <td><a href="#">21 days ago</a></td>
                <td><a href="#">Removed from wishlist</a></td>
                <td class="table_td"><a href="#">View Wishlist <i class="fa fa-share-square-o" aria-hidden="true"></i></a> <i class="fa fa-eye" aria-hidden="true"></i></td>
            </tr>
            <tr>
                <td><a href="#">Anonymous</a></td>
                <td class="table_td"><a href="#">jeans 2 - 28 <i class="fa fa-share-square-o" aria-hidden="true"></i></a> </td>
                <td><a href="#">21 days ago</a></td>
                <td><a href="#">Removed from wishlist</a></td>
                <td class="table_td"><a href="#">View Wishlist <i class="fa fa-share-square-o" aria-hidden="true"></i></a> <i class="fa fa-eye" aria-hidden="true"></i></td>
                
            </tr>
            <tr>
                <td><a href="#">Anonymous</a></td>
                <td class="table_td"><a href="#">jeans 2 - 28 <i class="fa fa-share-square-o" aria-hidden="true"></i></a> </td>
                <td><a href="#">21 days ago</a></td>
                <td><a href="#">Removed from wishlist</a></td>
                <td class="table_td"><a href="#">View Wishlist <i class="fa fa-share-square-o" aria-hidden="true"></i></a> <i class="fa fa-eye" aria-hidden="true"></i></td>
               
            </tr>      
            <tr>
            <td><a href="#">Anonymous</a></td>
                <td class="table_td"><a href="#">jeans 2 - 28 <i class="fa fa-share-square-o" aria-hidden="true"></i></a></td>
                <td><a href="#">21 days ago</a></td>
                <td><a href="#">Removed from wishlist</a></td>
                <td class="table_td"><a href="#">View Wishlist <i class="fa fa-share-square-o" aria-hidden="true"></i></a> <i class="fa fa-eye" aria-hidden="true"></i></td>
                
            </tr>
            <tr>
            <td><a href="#">Anonymous</a></td>
                <td class="table_td"><a href="#">jeans 2 - 28 <i class="fa fa-share-square-o" aria-hidden="true"></i></a></td>
                <td><a href="#">21 days ago</a></td>
                <td><a href="#">Removed from wishlist</a></td>
                <td class="table_td"><a href="#">View Wishlist <i class="fa fa-share-square-o" aria-hidden="true"></i></a> <i class="fa fa-eye" aria-hidden="true"></i></td>
                
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