<?php
$title = 'u.s';
$posts = [
  [
    'title' => 'Some technology title 1',
   'content' => 'some technology content 1', 
   'date' => 'January 1, 2021',
   'author' => 'jass',
   ],

     [
    'title' => 'Some technology title 2',
   'content' => 'some technology content 2', 
   'date' => 'January 2, 2021',
   'author' => 'kaspar',
   ],

     [
    'title' => 'Some technology title 3',
   'content' => 'some technology content 3', 
   'date' => 'January 3, 2021',
   'author' => 'karl',
   ],

     [
    'title' => 'Some technology title 4',
   'content' => 'some technology content 4', 
   'date' => 'January 4, 2021',
   'author' => 'frederik',
   ],
];

?>

<?php include __DIR__ . '/partials/header.php'; ?>

    <main class="container">

      <div class="row g-5">
        <div class="col-md-8">
          <?php include __DIR__ . '/partials/posts.php'; ?>
        </div>
        <div class="col-md-4">
          <?php include __DIR__ . '/partials/sidebar.php'; ?>
        </div>
      </div>
    </main>
  <?php include __DIR__ . '/partials/footer.php'; ?>