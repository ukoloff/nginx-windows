<table cellspacing="0">
<tr>
  <th>
    <?= lang('Username') ?>
  </th>
  <td>
    <input name="auth[username]" value="<?php echo h($_GET["username"]); ?>" autocapitalize="off" autofocus required>
  </td>
</tr>
<tr>
  <th>
    <?= lang('Password') ?>
  </th>
  <td>
     <input type="password" name="auth[password]" required>
  </td>
</tr>
</table>
<p>
<input type="hidden" name="auth[driver]" value="pgsql">
<input type="submit" value="<?= lang('Login') ?>">
<hr>
<a href='?sqlite=&amp;username=&amp;db=C%3A%5CMy%5Crepo%5Ckabinet_karat%5Cdb%5Csqlite%5Cdevelopment.sqlite3'>SQLite3</a>
