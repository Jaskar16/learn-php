<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
  <h2>User</h2>
  <table class="table table-hover table-striped">
    <tbody>
      <tr>
        <th>ID</th>
        <td><?= $user->id ?></td>
      </tr>
      <tr>
        <th>Name</th>
        <td><?= htmlspecialchars($user->name) ?></td>
      </tr>
      <tr>
        <th>Email</th>
        <td><?= htmlspecialchars($user->email) ?></td>
      </tr>
      <tr>
        <th>Password hash</th>
        <td><code><?= htmlspecialchars($user->password) ?></code></td>
      </tr>
    </tbody>
  </table>
  <a href="/admin/users/edit?id=<?= $user->id ?>" class="btn btn-warning">Edit</a>
  <a href="/admin/users" class="btn btn-secondary">Back to users</a>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>
