<?php 
//Get the connection from the database, this is only runs in the getList() function
function getConnection()
{
    //Set the database settings to variables
    $server = 'localhost'; 
    $username = 'root';
    $password = '';
    $database = 'rabit';
    //$connection variable tries to connect the database and after return the function the $connection result
    $connection = mysqli_connect($server,$username,$password, $database);
    return $connection;
}

//Get the list of the table with a query
function getList($query)
{
    //Get the connection fom database
    $connection = getConnection();
    //Tries to run the given query from the database
    $statement = mysqli_prepare($connection,$query);
    //Success variable, if success is true the datas stored in a $result block, if false echo the query and die with error message
    $success = mysqli_stmt_execute($statement);
    $result = [];
    if($success === TRUE)
    {
        $idk = $statement->get_result();
        while($temp = $idk->fetch_assoc())
        {
            $result[]=$temp;
        }
    }
    else{
        echo $query;
        die('Unable to execute!');
    }
    //Close the statement
    mysqli_stmt_close($statement);
    //Close the connection
    mysqli_close($connection);
    //Return the results
    return $result;

}

?>