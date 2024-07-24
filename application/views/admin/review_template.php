<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poor Reviews Alert</title>
    <style>
        body {
            font-family: 'Helvetica Neue', 'Arial', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        p {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Poor Reviews Alert </h2>
        <p>Dear Admin,</p>
        <p>This email is to inform you about the latest feedback details that include poor reviews:</p>

        <table>
            <thead>
                <tr>
                    <th>Customer Name</th>
                    <th>Contact Number</th>
                    <th>Room No</th>
                    <th>Comments</th>
                    <th>Quality</th>
                    <th>Timeliness</th>
                    <th>Comfort</th>
                    <th>Cleanliness</th>
                    <th>Ambience</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $data['customer_name'] ?></td>
                    <td><?= $data['contact_no'] ?></td>
                    <td><?= $data['roomId'] ?></td>
                    <td><?= $data['comments'] ?></td>
                    <td><?= $data['quality'] ?></td>
                    <td><?= $data['timeliness'] ?></td>
                    <td><?= $data['comfort'] ?></td>
                    <td><?= $data['cleanliness'] ?></td>
                    <td><?= $data['ambience'] ?></td>

                    <td><?php
                        $timestamp = strtotime($data['checkout_date']);
                        $formattedDate = date("d-M-Y", $timestamp);
                        ?>

                        <?= $formattedDate ?>
                    </td>
                </tr>
            </tbody>
        </table>

        <p>Thank you for your attention.</p>
        <p>Best regards,<br>Fiora Hotel</p>
    </div>
</body>

</html>