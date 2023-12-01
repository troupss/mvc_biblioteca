<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-startup-image" href="https://www.wepora.com/asset/img/wepora-logo.png">
    <link rel="icon" type="image/x-icon" href="https://www.wepora.com/asset/img/wepora-logo.png">
    <meta name="description" content="Wepora is a best Graphics, software and Web Development company  and provides all IT solutions to their client. In india.."/>
    <meta name="Keywords" content="website design | website development | website logo  |  website hosting  | logo design| logo design ideas  | SEO | android |  best software company in india | cheapest | graphic design | Shrikant Kushwaha">
    <meta name="author" content="contain by Wepora team">
    <meta name="copyright" content="Copyright © 2020 Wepora" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <title>Mostrar Prestecs</title>
  </head>
<body>
<!--content start-->
<div class="container mt-5">
        <h1>Llistat de Prestecs</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Codi</th>
                    <th>ISBN</th>
                    <th>DNI</th>
                    <th>Data Prestec</th>
                    <th>Data Retorn</th>
                    <th>Estat (0 = No Retornat)</th>
                    <th>Retornat</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($prestec = $prestecs->fetch_object()) : ?>
                    <tr>
                        <td><?= $prestec->codi ?></td>
                        <td><?= $prestec->ISBN ?></td>
                        <td><?= $prestec->DNI ?></td>
                        <td><?= $prestec->data_prestec ?></td>
                        <td><?= $prestec->data_retorn ?></td>
                        <td><?= $prestec->retornat ?></td>
                        <td><a href="index.php?controller=prestecs&action=retornarPrestec&codi=<?= $prestec->codi ?>"><button class="btn btn-outline-primary">Retornat</button></a></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <a href="index.php?controller=prestecs&action=afegir"><button class="btn btn-outline-primary">Afegir Prestecs</button></a>
    </div>

<!--content end-->
<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>