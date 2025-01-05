<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Reservations - Restoran</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Reservations Display Start -->
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center mb-4">Table Reservations</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Date & Time</th>
                                    <th>People</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require 'db_connection.php'; // Ensure this is the correct file name

                                // Check if connection is established
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                $sql = "SELECT * FROM reservations";
                                $result = $conn->query($sql);

                                if ($result === false) {
                                    die("Error: " . $conn->error);
                                }

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . htmlspecialchars($row["Name"] ?? 'N/A') . "</td>";
                                        echo "<td>" . htmlspecialchars($row["Email"] ?? 'N/A') . "</td>";
                                        echo "<td>" . htmlspecialchars($row["datetime"] ?? 'N/A') . "</td>";
                                        echo "<td>" . htmlspecialchars($row["people"] ?? 'N/A') . "</td>";
                                        echo "<td>" . htmlspecialchars($row["message"] ?? 'N/A') . "</td>";
                                        echo "<td>" . htmlspecialchars($row["status"] ?? 'Pending') . "</td>"; // Default to 'Pending' if no status
                                        echo "<td>
                                                <form method='POST' action='manage_reservation.php' style='display:inline;'>
                                                    <input type='hidden' name='id' value='" . htmlspecialchars($row["id"] ?? '') . "'>
                                                    <button type='submit' name='action' value='confirm' class='btn btn-success'>Confirm</button>
                                                </form>
                                                <form method='POST' action='manage_reservation.php' style='display:inline;'>
                                                    <input type='hidden' name='id' value='" . htmlspecialchars($row["id"] ?? '') . "'>
                                                    <button type='submit' name='action' value='delete' class='btn btn-danger'>Delete</button>
                                                </form>
                                              </td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='7' class='text-center'>No reservations found</td></tr>";
                                }

                                $conn->close();
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reservations Display End -->
    </div>
</body>

</html>