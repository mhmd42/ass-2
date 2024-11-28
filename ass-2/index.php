<!-- PHP to get the data and encode it in JSON to use -->
<?php
$url = 'https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?where=colleges%20like%20%22IT%22%20AND%20the_programs%20like%20%22bachelor%22&limit=100';
$response = file_get_contents($url);
$data = json_decode($response, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UOB Student Nationality</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
<!-- Internal CSS for the table and page -->
    <style>
        body{
            background-color: white;
            font-family: Arial, sans-serif;
        }
        h1{
            font-family: Arial, sans-serif;
            color: black;
            text-align: center;
            background-color: #f4f4f9;
            border-radius: 10px;
        }
        article{
            background-color: white;
            padding: 1rem;
            margin: 1rem;
        }
    
    </style>

</head>
<body>
    <main>
        <article>
            <h1>UOB Student Nationality</h1>
                <!-- overflow feature in PICO to make the page responsive -->
                <table class="striped" class="overflow-auto">
                    <!-- data-theme feature in PICO to design the table -->
                    <thead data-theme="light">
                        <tr>
                            <th>Year</th>
                            <th>Semester</th>
                            <th>The Programs</th>
                            <th>Nationality</th>
                            <th>Colleges</th>
                            <th>Number of Students</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- For each loop using PHP to loop over the JSON data and print them in the table -->
                        <?php foreach($data['results'] as $result): ?> 
                        <tr data-theme="light">
                            <td><?= htmlspecialchars($result['year']) ?></td>
                            <td><?= htmlspecialchars($result['semester']) ?></td>
                            <td><?= htmlspecialchars($result['the_programs']) ?></td>
                            <td><?= htmlspecialchars($result['nationality']) ?></td>
                            <td><?= htmlspecialchars($result['colleges']) ?></td>
                            <td><?= htmlspecialchars($result['number_of_students']) ?></td>
                        </tr>              
                        <?php endforeach; ?>
                    </tbody>
                </table>
        </article>
    </main>
</body>
</html>