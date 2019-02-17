<?php
$akcja = (isset($_GET['akcja'])?$baza->waliduj($_GET['akcja']):'');
switch ($akcja) {
  case 'podglad':
  if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany']==1){
    include 'podglad.php';
  } else {
    echo '<br /></bc><div class="alert alert-danger" role="alert">Tylko zalogowani użytkownicy mają dostęp do tej części strony</div>';
  }
  break;
  case 'dodaj':
  if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany']==1){
    include 'dodaj.php';
  } else {
    echo '<br /></bc><div class="alert alert-danger" role="alert">Tylko zalogowani użytkownicy mają dostęp do tej części strony</div>';
  }
  break;
  case 'logowanie':
  include 'logowanie.php';
  break;
  case 'wyloguj':
  $_SESSION['zalogowany']=0;
  unset ($_SESSION['user']);
  unset ($_SESSION['user_id']);
  header('Location: index.php');
  break;
  default:
  ?>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta labore aperiam, velit id nisi eius molestiae fugit optio eligendi, laudantium laboriosam quod. Esse molestias harum debitis adipisci dicta magnam velit.</p>
  <p>Unde quo, vero, eius aut blanditiis eum magnam modi veritatis sit dolores dignissimos tenetur numquam quaerat neque dicta molestias architecto odit nam optio iste. Inventore eaque ut sequi, illo amet.</p>
  <p>Quo doloribus voluptatibus, sequi, expedita nisi tempore dolor explicabo officiis laudantium, deserunt velit neque quis porro itaque aliquid earum vero corporis unde laboriosam nam perferendis! Quae sapiente quia est esse!</p>
  <p>Blanditiis voluptatibus officiis voluptate, aspernatur ab, optio necessitatibus modi nesciunt nemo molestiae vero ducimus eos dolorem cupiditate cumque adipisci odio mollitia laborum eaque aut quam? Reiciendis sunt nisi dolorum doloribus.</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque suscipit adipisci hic, labore tenetur provident deserunt soluta ea. Cumque, aspernatur necessitatibus natus. Ea quos sapiente corporis, debitis provident. Animi, iusto.</p>
  <p>Iusto libero adipisci tempore officia excepturi, iure beatae dolorum debitis, similique non, consectetur assumenda quidem qui. Esse dolores recusandae sint error unde obcaecati soluta. Delectus debitis, est tenetur nobis neque.</p>
  <p>Accusantium nulla commodi quo perferendis deserunt, et fuga ab deleniti error cum minus, vitae. Veritatis neque explicabo quibusdam. Hic dolor ipsam aut illo mollitia sed cumque neque rerum sapiente est.</p>
  <p>Dolores similique sequi obcaecati pariatur sed labore nisi, reiciendis qui, aut officiis corporis vitae dicta esse, quidem tempore neque non temporibus quae quisquam delectus porro? Totam reiciendis aliquam soluta animi!</p>
  <p>Commodi, totam, esse minima, quia quas quibusdam ex recusandae illo dicta dolore voluptate quasi molestiae. Explicabo, accusamus! Tempora eveniet fuga veniam. Itaque harum voluptatibus esse accusantium atque, dolorem hic quo.</p>
  <p>Blanditiis, sapiente aut, qui aliquid eos, vero incidunt enim modi unde officia quam! Ex, laborum dolorum eos alias cumque deserunt quis, omnis eum vitae distinctio expedita, est itaque facilis ducimus!</p>
  <p>Deserunt quae voluptate sit, libero aperiam, fugiat sint saepe veniam. Quam dignissimos provident quos reiciendis, libero nisi itaque. Unde non voluptates ratione laborum eaque, numquam inventore eos dolorum deserunt ipsam!</p>
  <p>Nobis neque quisquam minus quam, rerum, eaque obcaecati enim facilis impedit optio quod vitae odit adipisci aperiam. Impedit facilis dolore odio, asperiores ipsam, commodi veritatis officia, reiciendis animi ad ab.</p>
  <p>Officiis, repudiandae blanditiis tempore et quia, vero nisi rem impedit cumque sunt, dolore esse adipisci ipsam non ratione nulla. Velit repellat sapiente voluptas ab eum natus. Sint deserunt quis in.</p>
  <p>Facere, inventore atque voluptas incidunt natus magni, dolor, ipsum ipsa fugit ab nisi sapiente. Quo necessitatibus, sapiente excepturi quis earum hic architecto non! Odit deleniti repellendus quisquam sapiente, ullam expedita.</p>

  <?php
  break;
}
?>
