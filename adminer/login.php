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
