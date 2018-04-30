<?php 
 $connect = mysqli_connect("localhost", "urcscon3_a5bbee", "csc174", "urcscon3_a5bbee"); 
 $output = '';  
 $sql = "SELECT * FROM myconnect ORDER BY id DESC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Id</th>  
                     <th width="40%">First Visit</th>
                     <th width="40%">Best Animal</th> 
                     <th width="40%">Info Finder</th>   
                     <th width="10%">Delete</th>  
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
	  if($rows > 10)
	  {
		  $delete_records = $rows - 10;
		  $delete_sql = "DELETE FROM myconnect LIMIT $delete_records";
		  mysqli_query($connect, $delete_sql);
	  }
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     <td class="visit" data-id1="'.$row["id"].'" contenteditable>'.$row["visit"].'</td> 
                     <td class="animal" data-id2="'.$row["id"].'" contenteditable>'.$row["animal"].'</td>  
                     <td class="info_finder" data-id3="'.$row["id"].'" contenteditable>'.$row["info_finder"].'</td>   
                     <td><button type="button" name="delete_btn" data-id4="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="visit" contenteditable></td> 
                <td id="animal" contenteditable></td>
                <td id="info_finder" contenteditable></td> 
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
        <tr>  
          <td></td>  
          <td id="visit" contenteditable></td>
          <td id="animal" contenteditable></td>  
          <td id="info_finder" contenteditable></td>    
          <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
         </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>