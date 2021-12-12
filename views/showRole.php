
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<div class="container">
    <h3>Show Role form</h3>
    <form  action="?controller=roles&action=edit" method="post">
        <input type="hidden" name="id" value="<?=$role['id']?>" />
        <div class="row">
            <div class="field">
                <label>Role id: <input type="text" name="id" value="<?=$role['id']?>"></label>
            </div>
        </div>
        <div class="row">
            <div class="field">
                <label>Title: <input type="text" name="title" value="<?=$role['title']?>"><br></label>
            </div>
        </div>
        <input type="submit" class="btn" value="Edit">
    </form>
</div>

<style>
    body{
        padding-top: 3rem;
    }
    .container {
        max-width: 500px;
    }
</style>