<?php require('../../vendor/autoload.php');

    $lava = new \Khill\Lavacharts\Lavacharts;

    $data = $lava->DataTable();
    $data->addDateColumn('Month')
         ->addNumberColumn('Donuts Sold')
         ->addRoleColumn('number', 'interval')
         ->addRoleColumn('number', 'interval')
         ->addColumn('number', 'Expenses')
         ->addRows([
             ['2015-1-1', 1000,  900, 1100,  400],
             ['2015-2-1', 1170, 1000, 1200,  460],
             ['2015-3-1',  660,  550,  800, 1120],
             ['2015-4-1', 1030, null, null,  540]
         ]);

    $lava->TableChart('Sales', $data);
?>

<doctype html>
    <html>
    <body>
        <div id="chart"></div>
        <?= $lava->render('TableChart', 'Sales', 'chart'); ?>
    </body>
</html>
