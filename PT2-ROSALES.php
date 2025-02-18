<html>
<head>
    <title>Library Expansion Cost Estimates</title>
    <style>
        body {
            font-family: Verdana, sans-serif;
            background-color: #f5f5dc; /* Beige background */
            color: #333;
        }
        table {
            width: 70%;
            margin: 40px auto;
            border-collapse: collapse;
            background-color: #e0ffff; /* Light cyan table */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #4682b4; /* Steel blue header */
            color: white;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-style: italic;
        }
        h2, h3 {
            text-align: center;
            color: #8b0000; /* Dark red titles */
        }
    </style>
</head>
<body>

<h2>Public Library Expansion Project</h2>
<h3>Cost Estimates</h3>

<table>
    <tr>
        <th>Expenditures</th>
        <th>Estimated Cost</th>
        <th>10% Increase</th>
        <th>15% Increase</th>
        <th>20% Increase</th>
    </tr>
    <?php
    $items = [
        ["Lumber", 15000],
        ["Concrete", 7000],
        ["Drywall", 2500],
        ["Paint", 1200],
        ["Miscellaneous", 5000],
    ];

    $total_estimated = 0;
    $total_10_increase = 0;
    $total_15_increase = 0;
    $total_20_increase = 0;

    foreach ($items as $item) {
        $estimated_cost = $item[1];
        $cost_10 = $estimated_cost * 1.10;
        $cost_15 = $estimated_cost * 1.15;
        $cost_20 = $estimated_cost * 1.20;

        $total_estimated += $estimated_cost;
        $total_10_increase += $cost_10;
        $total_15_increase += $cost_15;
        $total_20_increase += $cost_20;

        echo "<tr>
                <td>{$item[0]}</td>
                <td>\$" . number_format($estimated_cost, 2) . "</td>
                <td>\$" . number_format($cost_10, 2) . "</td>
                <td>\$" . number_format($cost_15, 2) . "</td>
                <td>\$" . number_format($cost_20, 2) . "</td>
              </tr>";
    }
    ?>
    <tr>
        <th>Total Expenditures</th>
        <th><?php echo "\$" . number_format($total_estimated, 2); ?></th>
        <th><?php echo "\$" . number_format($total_10_increase, 2); ?></th>
        <th><?php echo "\$" . number_format($total_15_increase, 2); ?></th>
        <th><?php echo "\$" . number_format($total_20_increase, 2); ?></th>
    </tr>
</table>

<div class="footer">
    Created by: Your Name
</div>

</body>
</html>
