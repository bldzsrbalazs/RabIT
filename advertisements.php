<h2>Page of <span>Advertisements</span> list</h2>
    <table class="table">
            <thead>
                <tr>
                <th>#</th>
                <th>User name</th>
                <th>Advertisement name</th>
                </tr>
            </thead>
            <tbody>
    <?php
        //MYSQL database query for the advertisements and name
        $alladvertisementquery = "select * from advertisements,users where advertisements.userid = users.id";
        $alladvertisements = getList($alladvertisementquery);
        //If the table is empty, show the "No advertisement found in the table!" text in there, otherwise runs the foreach loop and write all the data from the table
        if($alladvertisements === NULL || empty($alladvertisements))
        {
                echo '
                <tr>
                <td colspan = "3">No <b>advertisement</b> found in the table!</td>
                </tr>
                ';
        }
            foreach($alladvertisements as $row)
            {
                echo '
                <tr>
                <td><span>'.$row["id"].'</span></td>
                <td><span>'.$row["name"].'</span></td>
                <td><span>'.$row["title"].'</span></td>
                </tr>
                ';
            }
    ?>
            </tbody>
    </table>