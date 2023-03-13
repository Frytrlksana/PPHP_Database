<?php
include('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Classic Model</title>
    <style>
         td {
            border-right: 1px solid;
            border-bottom: 1px solid;
        }

        th {
            border-right: 1px solid;
            border-bottom: 1px solid;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: grey;
            margin-bottom: 20px;
            border-bottom: 1px solid #514f4f;
        }

        ul {
            list-style: none;
            display: flex;
            padding-right: 100px;
        }

        li {
            margin-left: 20px;
        }

        ul li a {
            margin-left: 20px;
            background-image: linear-gradient(90deg, #fff 0%, #fff 100%);
            background-position: 0 100%;
            background-repeat: no-repeat;
            background-size: 0% 2px;
            transition: all 0.3s ease-in-out;
        }

        ul li a:hover {
            background-size: 50% 2px;
            color: #fff;
        }

        a {
            text-decoration: none;
            color: black;
        }

        h2 {
            text-align: center;
            flex-grow: 1;
        }
    </style>
</head>

<body>
    <nav>
        <h2>Classic Model</h2>
        <ul>
            <li><a href="costumer.php">costumer</a></li>
            <li><a href="#">products</a></li>
        </ul>
    </nav>

    <div>
        <table>
            <thead>
                <tr>
                    <th>productCod</th>
                    <th>productName</th>
                    <th>productLine</th>
                    <th>productScale</th>
                    <th>productVendor</th>
                    <th>productDescription</th>
                    <th>quantityInStock</th>
                    <th>buyPrice</th>
                    <th>MSRP</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    $query = "SELECT * FROM products";
                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <td>
                                <?php echo $row['productCode']; ?>
                            </td>
                            <td>
                                <?php echo $row['productName']; ?>
                            </td>
                            <td>
                                <?php echo $row['productLine']; ?>
                            </td>
                            <td>
                                <?php echo $row['productScale']; ?>
                            </td>
                            <td>
                                <?php echo $row['productVendor']; ?>
                            </td>
                            <td>
                                <?php echo $row['productDescription']; ?>
                            </td>
                            <td>
                                <?php echo $row['quantityInStock']; ?>
                            </td>
                            <td>
                                <?php echo $row['buyPrice']; ?>
                            </td>
                            <td>
                                <?php echo $row['MSRP']; ?>
                            </td>
                        </tr>
                        <?php
                        }
                        mysqli_free_result($result);
                    } else {
                        echo "Data tidak ada";
                    }
                    mysqli_close($conn);
                    ?>
            </tbody>
        </table>
    </div>
</body>

</html>