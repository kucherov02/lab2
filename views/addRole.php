<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="assets/css/addForm.css">
<script src="assets/js/index.js"></script>

<div class="container">
    <h3>Add New Role</h3>
    <form action="?controller=roles&action=add" method="post">
        <div class="row">
            <div class="field">
                <label>Role Id: <input type="text" name="id"></label>
            </div>
        </div>
        <div class="row">
            <div class="field">
                <label>Title: <input type="text" name="title"><br></label>
            </div>
        </div>
        <input type="submit" class="btn" value="Add">
    </form>
</div>