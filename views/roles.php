
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<div class="container">
    <div class="row">
        <table>
            <?php foreach ($roles as $role):?>
             <tr>
                 <td><a href="?controller=roles&action=show&id=<?=$role['id']?>"><?php echo $role['id']?></a></td>
                 <td><?=$role['id']?></td>
                 <td><?=$role['title']?></td>
                 <td><a href="?controller=roles&action=delete&id=<?=$role['id']?>">X</a></td>
             </tr>
            <?php endforeach;?>
        </table>
    </div>
    <a class="btn" href="?controller=roles&action=addForm">add new role</a>
    <a class="btn" href="?controller=index">return back</a>
</div>

<style>

    body {
        padding-top: 3rem;
    }

    .container {
        max-width: 500px;
    }
</style>