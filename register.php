<?php
include("common/header.php");
include("common/menu.php");
?>

<div class="container-fluid">
    <h1>Inscription</h1>
    <div class="row">
        <div class="col-6 m-auto">
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php
if(isset($_POST['submit'])){
    if(!empty($_POST['username']) &&!empty($_POST['email']) &&!empty($_POST['password'])){
        $username = $_POST['username'];
        if(preg_match('/^[a-zA-Z0-9_]{4,16}$/', $username)){
    echo "Mon nom : $username";
}else{
    echo "Le nom doit contenir des chiffres, des caractères (de 4 à 16) majuscule et minuscule";
}
include("common/footer.php");
?>