<table border="1">
    <tr>
        <th>Email ID</th>
        <th>Registered On</th>
    </tr>
    <tr>
        <th><?php echo Session::get('email'); ?></th>
        <th><?php echo Session::get('user_created_on'); ?></th>
    </tr>
</table>
