<?php 

$page_title = 'Home';
require_once $_SERVER['DOCUMENT_ROOT']. "/views/layouts/header.php";

?>

<div class="d-flex justify-content-center">
<form class="m-5 col-6" method="POST" action="/auth/register">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Имя</label>
    <input type="name" class="form-control">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Пароль</label>
    <input type="password" class="form-control">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Подтверждение пароля</label>
    <input type="password_confirm" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Отправить</button>
</form>
</div>

<?php 
print_r($_POST);
require_once $_SERVER['DOCUMENT_ROOT']. "/views/layouts/footer.php"; 

?>
    