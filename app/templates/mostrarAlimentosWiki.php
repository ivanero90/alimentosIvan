<?php ob_start() ?>

    <table>
        <tr>
            <th>alimento</th>
            <th>Wikipedia</th>
        </tr>
        <?php foreach ($params['resultado'] as $alimento) : ?>
            <tr>
                <td><a href="index.php?ctl=ver&id=<?php echo $alimento['id'] ?>">
                        <?php echo $alimento['nombre'] ?></a></td>
                <td><?php echo "<a href='http://es.wikipedia.org/wiki/".$alimento['nombre']."' target='_blank'>Link Wikipedia</a>" ?></td>
            </tr>
        <?php endforeach; ?>

    </table>

<?php $contenido = ob_get_clean() ?>

<?php include 'layout.php' ?>