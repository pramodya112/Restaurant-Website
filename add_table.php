<!-- add_table.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Add Table</title>
</head>
<body>
    <h1>Add Table Details</h1>
    
    <form action="process_add_table.php" method="post">
        <label for="table_number">Table Number:</label>
        <input type="number" id="table_number" name="table_number" required>
        
        <label for="capacity">Capacity:</label>
        <input type="number" id="capacity" name="capacity" required>
        
        <label for="status">Status:</label>
        <select id="status" name="status">
            <option value="Available">Available</option>
            <option value="Reserved">Reserved</option>
        </select>
        
        <input type="submit" value="Add Table">
    </form>
</body>
</html>