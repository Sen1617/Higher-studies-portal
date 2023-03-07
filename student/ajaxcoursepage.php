<html>  
    <head>  
        <title>course available</title>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>    
        <style>
          .card{
                border:1px solid grey;
                padding:10px;
                height:316px;
                box-shadow: 0 10px 20px -5px rgba(115,115,115,0.75),
                10px 0 20px -5px rgba(115,115,115,0.75);
                margin-top:10px;
                
            }
            .cardbody{
                margin-bottom:20px;
            }
            .boxdes{
                height:120px;
            }
            .cardfoot{
                padding-top: 15px; 
                margin-left:-10px;
                padding-right:25px;
                padding-left:25px;
                margin-right:-10px;
                padding-bottom:15px;
                margin-bottom:20px;               
                alignment:flex-end;
                border-top:1px solid grey;;
                display: flex;
                justify-content: space-between;
                align-items: center;
                color: #555555;
                background:#eeeeeeee;
            }
        </style>
    </head>  
    <body>  
        <?php
        $rollnum=$_GET['rn'];
        $con = mysqli_connect("localhost", "root", "", "hsportal");  
        $dept=mysqli_query($con,"SELECT * FROM student_tbl WHERE reg_id='$rollnum'");
        $seldept=mysqli_fetch_array($dept);
        $selcour=$seldept['cour_id'];
        $deptname=$seldept['dept'];?>

        <div class="container">  
            <br />  
			<div class="table-responsive">  
				<h3 align="center">Course Available for <?php echo $deptname;?></h3><br/>

                <?php if($selcour==""){
                   echo "<h3 align='center'>You have not selected any course yet.</h3><br/>";
                }
                else{
                echo "<h3 align='center'>You have already Selected ". $selcour."</h3><br/>";
                    }?>

		    </div>
            <div id="live_data"></div>                 
		</div>  
    </body>  
</html>  
<script>  

//select
$(document).ready(function(){  
    function fetch_data()  
    {  
        var name="<?php echo "$deptname"?>";
        var roll="<?php echo $_GET['rn']?>";
        $.ajax({  
            url:"ajaxselectcourse.php",  
            method:"POST",  
            data: {"dept":name,"rn":roll},
            success:function(data){  
				$('#live_data').html(data);  
            }  
        });  
    }  
    //fetching data
    fetch_data();  
    
    //insert or update  
    $(document).on('click', '.btn-warning', function(){  
        var id=$(this).data("id4");  
        var roll="<?php echo $_GET['rn']?>";
        if(confirm("Are you ready to add this course?"))  
        {  
            $.ajax({  
                url:"ajaxinupcourse.php",  
                method:"POST",  
                data:{id:id,"rn":roll},  
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