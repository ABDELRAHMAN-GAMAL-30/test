<?php

require ('./employers.php');
$gender_filter = $_REQUEST ['Gender'];
var_dump($gender_filter);
//foreach ($employers as $employer){
  //  if($gender_filter['Gender']== )
//}
?>
<table>
    <thead>
    <tr>
        <th>id</th>
        <th>first name</th>
        <th>last name</th>
        <th>gender</th>
        <th>salary</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($employers as $employer){?>
        <tr style="color : <?php echo $color ?>">
        <td><?php echo $employer['id']; ?></td>
        <td><?php echo $employer['first_name']; ?></td>
        <td><?php echo $employer['last_name']; ?></td>
        <td><?php echo $employer['gender']; ?></td>
        <td><?php echo $employer['Salary']; ?></td>

        </tr>
        <?php };?>
    </tbody>
</table>
