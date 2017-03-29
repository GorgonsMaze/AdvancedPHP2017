<?php if ( is_array($addressses) && count($addressses) > 0 ) : ?>
<h1 class="title is-2 has-text-centered">Addresses</h1>
<table class="table">
<?php foreach( $addressses as $row ) : ?>
    <tr>
        <td><?php echo $row['fullname']; ?> </td>
        <td><?php echo $row['email']; ?> </td>
        <td><?php echo $row['addressline1']; ?> </td>
        <td><?php echo $row['city']; ?> </td>
        <td><?php echo $row['state']; ?> </td>
        <td><?php echo $row['zip']; ?> </td>
        <td><?php echo date("F j, Y, g:i a",strtotime($row['birthday']))?> </td>
    </tr>
<?php endforeach; ?>
</table>
<?php endif; ?>
