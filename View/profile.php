<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <meta http-equiv="Content-Security-Policy"
      content="default-src *; style-src 'self' 'unsafe-inline'; script-src 'self' 'unsafe-inline' 'unsafe-eval'; img-src 'self' data:"> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Cyber Links</title>
  </head>

  <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <h5 class="my-0 mr-md-auto font-weight-normal">Cyber Links</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <img class="rounded-circle" src="https://api.adorable.io/avatars/285/abott@adorable.png" alt=""
          style="height: 32px;">
        <a class="p-2 text-dark" href="./?page=profile"><?php echo htmlspecialchars($_SESSION['username']);?></a>
      </nav>
      <a class="btn btn-outline-primary" href="./?page=signout">Sign out</a>
    </div>

    <main role="main" class="container">
      <div class="container">
        <div class="row">
          <div class="col-4">
            <div class="d-flex flex-column my-3 p-3 bg-white rounded shadow-sm text-center">
              <img class="rounded-circle mx-auto" src="https://api.adorable.io/avatars/285/abott@adorable.png" alt=""
                width="64" height="64">
              <strong class="p-2 text-muted" href="#"><?php echo '@'.htmlspecialchars($username); ?></strong>
              <a class="p-2 text-dark" href="#"><?=htmlspecialchars($name)?></a>
              <div>
                <?php
                if ($_SESSION['username'] != $username) {
                ?>
                <a id="btn-follow" class="btn btn-outline-primary" href="./?api=follow&action=<?=$action?>&user=<?=htmlspecialchars($username)?>"><?=htmlspecialchars($text_follow)?></a>
                <?php
                }
                ?>
              </div>
            </div>
            <div class="d-flex flex-column my-10 px-2 pb-4 bg-white rounded shadow-sm text-center">
              <h5 class="mb-5">Follow Requests</h5>
              <?php
              foreach ($follow as $key => $value) {
              ?>
              <div class="d-flex flex-row mb-2 justify-content-between">
                <div class="text-left col-6"><?php echo htmlspecialchars($value['name']).' <a href="./?page=profile&profile='.htmlspecialchars($value['username']).'">@'.htmlspecialchars($value['username']);?></a></div>
                <div class="col-6 d-flex flex-row justify-content-end">
                  <a class="btn-approve btn-sm mr-2 btn-primary" href="./?api=request-follow&action=approve&user=<?=htmlspecialchars($value['username'])?>">Approve</a>
                  <a class="btn-reject btn-sm btn-danger" href="./?api=request-follow&action=reject&user=<?=htmlspecialchars($value['username'])?>">Reject</a>
                </div>
              </div>
              <?php
              }
              ?>
            </div>
          </div>
          <div class="col-8">
            <div class="my-3 p-3 bg-white rounded shadow-sm">
              <h6 class="border-bottom border-gray pb-2 mb-0">Recent links</h6>
              <?php require_once('View/component/posts.php');?>
              <small class="d-block text-center mt-3">
                <strong>The End</strong>
              </small>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="static/js/like.js"></script>
    <script src="static/js/follow.js"></script>
  </body>

</html>
