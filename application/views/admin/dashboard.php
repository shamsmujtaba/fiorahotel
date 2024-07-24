<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel - Reviews</title>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    
    <table id="Table_ID" class="display" style=" width: 85%; ">
        <thead>
            <tr>
                <th>Name</th>
                <th>Cell No</th>
                <th>Room No</th>
                <th>Comments</th>
                <th>Quality</th>
                <th>Timeliness</th>
                <th>Comfort</th>
                <th>Ambience</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($reviews->result() as $review): ?>
            <tr>
                <td><?= $review->customer_name; ?></td>
                <td><?= $review->contact_no; ?></td>
                <td><?= $review->roomId; ?></td>
                <td><?= $review->comments; ?></td>
                <td><?= $review->quality; ?></td>
                <td><?= $review->timeliness; ?></td>
                <td><?= $review->comfort; ?></td>
                <td><?= $review->ambience; ?></td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Include DataTables JavaScript -->
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#Table_ID').DataTable();
        });
    </script>
</body>
</html>
