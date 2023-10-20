<?php

require __DIR__.'/../header.php';
?>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?=$article['name'];?>Card title</h5>
    <p class="card-text"><?=$article['text'];?>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <p class="card-text">author</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
    <a href="#" class="btn btn-primary">Go somewhere</a>

  </div>
</div>
<?php
require __DIR__.'/../footer.html';