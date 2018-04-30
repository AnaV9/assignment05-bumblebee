<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>

<html>  
    <head>  
        <title>Administration Section</title>  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    </head>  
    <body class="admin2">  

            <section class = "banner">
                <?php include "inc/header.inc"; ?>
                <?php include "inc/navlogin.inc"; ?>
            </section>
    
         <main>
                <div class="container">  
        			<div class="table-responsive">  
        				<span id="result"></span>
        				<div id="live_data"></div>                 
        			</div>  
        		</div>
        </main>

        <?php include "inc/footer.inc"; ?>
                </div> <!--.container -->
        <?php include "inc/scripts.inc"; ?>
    </body>  
</html>  

<script>  
$(document).ready(function(){  
    function fetch_data()  
    {  
        $.ajax({  
            url:"select.php",  
            method:"POST",  
            success:function(data){  
                $('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
    $(document).on('click', '#btn_add', function(){  
        var visit = $('#visit').text();  
        if(visit == '')  
        {  
            alert("Enter your visit");  
            return false;  
        }  
        
        var animal = $('#animal').text();  
        if(animal == '')  
        {  
            alert("Enter your animal");  
            return false;  
        } 

        var info_finder = $('#info_finder').text();  
        if(info_finder == '')  
        {  
            alert("Enter your experience finding info");  
            return false;  
        } 

        $.ajax({  
            url:"insert.php",  
            method:"POST",  
            data:{visit:visit, animal:animal, info_finder:info_finder },  
            dataType:"text",  
            success:function(data)  
            {  
                alert(data);  
                fetch_data();  
            }  
        })  
    });  
    
    function edit_data(id, text, column_name)  
    {  
        $.ajax({  
            url:"edit.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
                $('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    }  
    $(document).on('blur', '.vote', function(){  
        var id = $(this).data("id1");  
        var visit = $(this).text();  
        var animal = $(this).text(); 
        var info_finder = $(this).text(); 
        edit_data(id, visit, "visit");  
        edit_data(id, animal, "animal"); 
        edit_data(id, info_finder, "info_finder"); 
    });  
    
    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id2");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"delete.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();  
                }  
            });  
        }  
    });  
});  
</script>