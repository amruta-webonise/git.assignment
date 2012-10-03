
<h1>Albums</h1>
<table>
    <tr>
        <th>Id</th>
        <th>name</th>
        <th>description</th>
        <th>Release date</th>


    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($albums as $album): ?>
    <tr>
        <td><?php $id= $album['Album']['id']; echo $album['Album']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($album['Album']['name'],
            array('controller' => 'albums', 'action' => 'view', $album['Album']['id'])); ?>
        </td>
        <td><?php echo $album['Album']['description']; ?></td>


        <td><?php echo $album['Album']['release_date']; ?></td>




    </tr>
    <?php endforeach; ?>
    <?php unset($album); ?>
</table>

