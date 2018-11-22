<!-- Example single danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <?php session_start(); echo "Welcome ".$_SESSION['login'] ?>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Invite developpers</a>
    <a class="dropdown-item" href="#">recived invitations</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="userDisconnect.php">Logout</a>
  </div>
</div>