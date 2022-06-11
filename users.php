<h2>Page of <span>Users</span> list</h2>
    <table class="table">
            <thead>
                <tr>
                <th>#</th>
                <th>User name</th>
                </tr>
            </thead>
            <tbody>
    <?php
        //MYSQL database query for the advertisements and name
        $alluserquery = "select * from users";
        $allusers = getList($alluserquery);
        //If the table is empty, show the "No user found in the table!" text in there, otherwise runs the foreach loop and write all the data from the table
        if($allusers === NULL || empty($allusers))
        {
                echo '
                <tr>
                <td colspan = "2">No <b>user</b> found in the table!</td>
                </tr>
                ';
        }
        else
            foreach($allusers as $row)
            {
                echo '
                <tr>
                <td><span>'.$row["id"].'</span></td>
                <td><span>'.$row["name"].'</span></td>
                </tr>
                ';
            }
    ?>
            </tbody>
    </table>