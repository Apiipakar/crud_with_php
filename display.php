<?php
// include database.
include "connection.php";
   
if(isset($_POST["loadUser"])){
  $sql = "select * from user";
  $result = $conn->query($sql);
  
  $numbers = 1;
    // echo $table;
        if($result->num_rows > 0){
          $table  = "<table id='table' class='w-full h-max my-5'>
          <thead class='bg-zinc-800 text-white'>
            <tr>
              <td class='px-3 py-2 capitalize'>ID</td>
              <td class='px-3 py-2 capitalize'>fullname</td>
              <td class='px-3 py-2 capitalize'>username</td>
              <td class='px-3 py-2 capitalize'>email</td>
              <td class='px-3 py-2 capitalize'>password</td>
              <td class='px-3 py-2 capitalize'>Delete</td>
              <td class='px-3 py-2 capitalize'>update</td>
            </tr>
            </thead>
            <tbody>
            ";
        while ($row = mysqli_fetch_assoc($result)) {
          
          $id = $row['id'];
          $numbersId = $numbers;
          $fullname = $row['fullname'];
          $username = $row['username'];
          $email = $row['email'];
          $password = $row['password'];
          
          // $data = [];
           $table = $table  . '
          <tr>
          <td class="px-3 py-2 capitalize backround-slate-50">'.$numbersId.'</td>
          <td class="px-3 py-2 capitalize backround-slate-50">'.$fullname.'</td>
          <td class="px-3 py-2 capitalize backround-slate-50">'.$username.'</td>
          <td class="px-3 py-2 capitalize backround-slate-50">'.$email.'</td>
          <td class="px-3 py-2 capitalize backround-slate-50">'.$password.'</td>
          <td class="px-3 py-2 capitalize backround-slate-50 text-center"><i class="fa-solid fa-trash text-red-500 cursor-pointer" onclick="deleteUser('.$id.')"></i></td>
          <td class="px-3 py-2 capitalize backround-slate-50 text-center"><i class="fa-solid fa-edit text-green-500 cursor-pointer" onclick="editUser('.$id.')"></i></td>
          </tr>';     
          $numbers++; 
       }
       echo $table .'
       </body>
       </table>';
      }else{
        echo '<h1 class="text-center text-slate-500 text-[20px] font-medium">There is no data found</h1>';
      }
}
?>