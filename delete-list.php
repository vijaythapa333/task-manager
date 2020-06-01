<?php 
        //Include constants.php
    include('config/constants.php');
    //echo "Delete List Page";
    
    //Check whether the list_id is assigned or not
    
    if(isset($_GET['list_id']))
    {
        //Delete the List from database
        
        //Get the list_id value from URL or Get Method
        $list_id = $_GET['list_id'];
        
        //Connect the DAtabase
        $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());
        
        //SElect Database
        $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error());
        
        //Write the Query to DELETE List from DAtabase
        $sql = "DELETE FROM tbl_lists WHERE list_id=$list_id";
        
        //Execute The Query
        $res = mysqli_query($conn, $sql);
        
        //Check whether the query executed successfully or not
        if($res==true)
        {
            //Query Executed Successfully which means list is deleted successfully
            $_SESSION['delete'] = "List Deleted Successfully";
            
            //Redirect to Manage List Page
            header('location:'.SITEURL.'manage-list.php');
        }
        else
        {
            //Failed to Delete List
            $_SESSION['delete_fail'] = "Failed to Delete List.";
            header('location:'.SITEURL.'manage-list.php');
        }
    }
    else
    {
        //Redirect to Manage List Page
        header('location:'.SITEURL.'manage-list.php');
    }
    

    
    
    
?>