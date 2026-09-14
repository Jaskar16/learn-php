<?php
$title = 'world';
$posts = [
  [
    'title' => 'Some world title 1',
   'content' => 'some world content 1', 
   'date' => 'January 1, 2021',
   'author' => 'jass',
   ],

     [
    'title' => 'Some world title 2',
   'content' => 'some world content 2', 
   'date' => 'January 2, 2021',
   'author' => 'nigger',
   ],

     [
    'title' => 'Some world title 3',
   'content' => 'some world content 3', 
   'date' => 'January 3, 2021',
   'author' => 'karl',
   ],

     [
    'title' => 'Some world title 4',
   'content' => 'some world content 4', 
   'date' => 'January 4, 2021',
   'author' => 'frederik',
   ],
];

?>
<?php include __DIR__ . '/partials/header.php'; ?>

    <main class="container">
      <?php include __DIR__ . '/partials/hero.php'; ?>
      <?php include __DIR__ . '/partials/featured.php'; ?>

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