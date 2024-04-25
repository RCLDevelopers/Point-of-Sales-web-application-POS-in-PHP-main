<?php
include('include/functions/product.php');
$value='';
$value2='';
$product_ID=$_POST['id'];//'4f10dae2f99490fc7d0ea8878493b783'; //;
$getproducts=getproductByID($product_ID);
if ($getproducts !=0) {
	foreach ($getproducts as $getproduct ) {
		$value .='<td> <input type="text" class="form-control" id="shortName" name="shortName" placeholder="Short Name" value="'.$getproduct->short_name.'" disabled></td>
                      <td> <input type="text" class="form-control" id="selling_price" name="selling_price" placeholder="Selling price" disabled value="'.$getproduct->selling_price.'"></td>
                      <td> <input type="number" class="form-control" id="quantity" min="0" name="quantity" placeholder="Quantity"  required></td>
                      <td> <input type="text" class="form-control" id="total_price" name="total_price" placeholder="Total"  disabled></td>
                      <td> <button type="submit" name="submit" class="btn btn-success" style="background-color:#17A589 ;color: white">Add</button></td>';
	}
}
//$value2.= '<td><select class="form-control select2" name="product" id="product" style="width:200px" onchange="getproductDetails(this.value)">';
                  
                  $getMeds=getproductByID($product_ID);
                  if ($getMeds !=0) {
                  	foreach ($getMeds as $getMed) {
                  $value2.='<option value="'. $getMed->product_ID .'">'. $getMed->product_name .'</option>';
                  	}
                  }

                  $products=getproductAll();
                  if ( $products !=0){
                  foreach ($products as $product) { 
                  $value2.='<option value="'.$product->product_ID .'">'.$product->product_name .'</option>';
                   }
                  }
                  
                // $value2.='</select></td>' ;

                 echo $code=$value;
                 ?>
