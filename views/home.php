<?php 


$isLogined = false;

if (isset($_SESSION['auth']) && $_SESSION['auth'] === true) {
   $isLogined = true;
}

?>

<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>       
</head>
<body>
<nav class="indigo">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo center">LAB 2</a>
      <ul class="left hide-on-med-and-down">
        <li><a class=" modal-trigger indigo" href="#modal2">Sign In</a>
        <div id="modal2" class="modal">
    <div class="modal-content">
    <form action="?controller=login" method="post">
           <div class="row">
               <div class="field">
                   <label>Email: <input type="email" name="email"></label>
               </div>
           </div>
           <div class="row">
               <div class="field">
                   <label>Password: <input type="password" name="password"><br></label>
               </div>
           </div>
           <input type="submit" class="btn darken-4" value="Login">
       </form>
     </li>
        <li><a class=" modal-trigger indigo" href="#modal1">Sign Up</a>
        <div id="modal1" class="modal">
    <div class="modal-content">
      <!-- Form to add User -->
       <form action="?controller=users&action=add" method="post" enctype="multipart/form-data">
           <div class="row">
               <div class="field">
                   <label>First name: <input type="text" name="name"></label>
               </div>
           </div>
           <div class="row">
               <div class="field">
                   <label>Second name: <input type="text" name="secondName"></label>
               </div>
           </div>
           <div class="row">
                <div class="field">
                <label>Password: <input type="password" name="password"></label>
            </div>
           </div> 
           <div class="row">
               <div class="field">
                   <label>E-mail: <input type="email" name="email"><br></label>
               </div>
           </div>
           <div class="row">
                                <div class="field">
                                    <div class="input-field">
                                        <p class="black-text">Role ID</p>
                                        <select name="role">
                                          <option value="" disabled selected>Choose your id</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
        </div>
           <div class="row">
               <div class="field">
                   <label>
                       <input class="with-gap" type="radio" name="gender" value="female"/>
                       <span>Female</span>
                   </label>
               </div>
               <div class="field">
                   <label>
                       <input class="with-gap"  type="radio" name="gender" value="male"/>
                       <span>Male</span>
                   </label>
               </div>
           </div>
           <div class="row">
               <div class="file-field input-field">
                   <div class="btn indigo">
                       <span>Photo</span>
                       <input type="file" name="photo"  accept="image/png, image/gif, image/jpeg">
                   </div>
                   <div class="file-path-wrapper">
                       <input class="file-path validate" type="text">
                   </div>
               </div>
           </div>
           <input type="submit" class="btn darken-4" value="Sign Up">
       </form>
    </div>
  </div>
    </li>
      </ul>
    </div>
  </nav>
  <table class="striped">
        <thead>
          <tr>
              <th>#</th>
              <th>First name</th>
              <th>First name</th>
              <th>Email</th>
              <th>Photo</th>
          </tr>
        </thead>
        <tbody>
         <?php foreach ($users as $user):?>
              <tr><td><a href="?controller=users&action=show&id=<?=$user['id']?>"><?php echo $user['id']?></a></td>
                  <td><?=$user['name']?></td>
                  <td><?=$user['secondName']?></td>
                  <td><?=$user['email']?></td>
                  <
                  <td><img width="50" height="50" src='<?=$user['path_to_img']?>'/></td>
                  <td><a href="?controller=users&action=delete&id=<?=$user['id']?>">X</a></td>
              </tr>
           <?php endforeach;?>
        </tbody>
      </table>
      <div>

      </div>
      <script>
          document.addEventListener('DOMContentLoaded', function() {
        let elems = document.querySelectorAll('.modal');
        let options = {
            inDuration: 300
        }
        let  instances = M.Modal.init(elems, options);
    });


    document.addEventListener('DOMContentLoaded', function() {
    let elems = document.querySelectorAll('select');
    let options = {
            inDuration: 300
        }
    let instances = M.FormSelect.init(elems, options);
  });
      </script>
</body>
</html>

