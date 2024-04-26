<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Poli</title>
</head>
<body>
    <h1>Add Poli</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('poli/add'); ?>
        <label for="nama_poli">Nama Poli:</label>
        <input type="text" name="nama_poli" id="nama_poli" required><br>
        <button type="submit">Add</button>
    <?php echo form_close(); ?>
</body>
</html>
