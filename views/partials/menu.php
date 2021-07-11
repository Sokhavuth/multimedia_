<!--views/partials/menu.php-->
<link href="<?php echo $BASE ?>/public/styles/partials/menu.css" rel="stylesheet" />

<nav class='Menu'>
    <div class='wrapper region'>
        <div class="topnav" id="myTopnav">
            <a href="<?php echo $BASE ?>/" class="active">ទំព័រ​ដើម</a>
            <a href="#news">ព័ត៌មាន</a>
            <a href="#contact">ទំនាក់ទំនង</a>

            <div class="dropdown">
                <button class="dropbtn">ជំពូក
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="#">ជំពូក ក</a>
                    <a href="#">ជំពូក ខ</a>
                    <a href="#">ជំពូក គ</a>
                </div>
            </div>

            <a href="#about">អំពី​យើង​ខ្ញុំ</a>
            <a href="<?php echo $BASE ?>/admin">ចូល​ក្នុង</a>
            <a href="javascript:void(0);" class="icon" onclick="mobileMenu()">&#9776;</a>
        </div>
    </div>
</nav>

<script>
function mobileMenu() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>