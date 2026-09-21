<?php include __DIR__ . '/partials/header.php'; ?>
<main class="container">
  <?php if(isset($_GET['name']) && isset($_GET['age'])): ?>
  <h1>Hello <?= $_GET['name'] ?? 'Nameless'?>! You are <?= $_GET['age'] ?? 'infinite' ?> years old</h1>
  <?php endif; ?>
  <form>
    <label>
      Name:
      <input name="name" type="text" placeholder="name">
    </label>
    <label for="">age:</label>
    <input age="age" id="age" type="number" placeholder="age">

    <input type="submit" value="Send">
    <button>Send</button>
  </form>
</main>
<?php include __DIR__ . '/partials/footer.php'; ?>