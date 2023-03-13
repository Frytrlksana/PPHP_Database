<?php
include('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Costumer</title>
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
        <h2> Classic Model</h2>
        <ul>
            <li><a href="#">customers</a></li>
            <li><a href="product.php">products</a></li>
        </ul>
    </nav>

    <div class="tabel-wrapper">
        <table style="border  : 1px solid">
            <thead>
                <tr>
                    <th>customerNumber</th>
                    <th>customerName</th>
                    <th>contactLastName</th>
                    <th>contactFirstName</th>
                    <th>phone</th>
                    <th>addressLine1</th>
                    <th>addressLine2</th>
                    <th>city</th>
                    <th>state</th>
                    <th>postalCode</th>
                    <th>country</th>
                    <th>salesRepEmployeeNumber</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM customers";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $row['customerNumber']; ?>
                            </td>
                            <td>
                                <?php echo $row['customerName']; ?>
                            </td>
                            <td>
                                <?php echo $row['contactLastName']; ?>
                            </td>
                            <td>
                                <?php echo $row['contactFirstName']; ?>
                            </td>
                            <td>
                                <?php echo $row['phone']; ?>
                            </td>
                            <td>
                                <?php echo $row['addressLine1']; ?>
                            </td>
                            <td>
                                <?php echo $row['addressLine2']; ?>
                            </td>
                            <td>
                                <?php echo $row['city']; ?>
                            </td>
                            <td>
                                <?php echo $row['state']; ?>
                            </td>
                            <td>
                                <?php echo $row['postalCode']; ?>
                            </td>
                            <td>
                                <?php echo $row['country']; ?>
                            </td>
                            <td>
                                <?php echo $row['salesRepEmployeeNumber']; ?>
                            </td>
                        </tr>
                        <?php
                    }
                    mysqli_free_result($result);
                } else {
                    echo "Data Tidak Ada";
                }
                mysqli_close($conn);
                ?>

                </tr>

            </tbody>
        </table>

</body>

</html>