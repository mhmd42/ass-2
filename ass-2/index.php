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
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        header {
            background-color: #333;
            color: white;
            padding: 1rem;
            text-align: center;
        }

        h1 {
            font-size: 2rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 1em;
            font-family: Arial, sans-serif;
        }


        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }


        th {
            background-color: gray;
            color: white;
            text-transform: uppercase;
        }
    </style>

</head>
<body>
    <main>
        <h1>UOB Student Nationality</h1>
        <table class="overflow-auto">
            <thead>
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
            <?php foreach($data['results'] as $result): ?> 
                    <tr>
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
    </main>
</body>
</html>