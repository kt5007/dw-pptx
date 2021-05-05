<?php
    include('../common/_header.php');
?>

    <main>
      <!-- 会員登録 -->
      <section class="py-5">
        <div class="container">
          <form>
            <div class="form-group">
              <label for="InputName">Name</label>
              <input type="text" class="form-control" id="InputName" aria-describedby="nameHelp" placeholder="Enter Name">
              <small id="nameHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="InputPassword1">Password</label>
              <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="Check1">
              <label class="form-check-label" for="Check1">利用規約に同意</label>
            </div>
            <div class="py-2">
              <button type="submit" class="btn btn-outline-success btn-lg btn-block" type="button">登録</button>
            </div>
          </form>
        </div>
      </section>
    </main>

<?php
  include('../common/_footer.php');
?>