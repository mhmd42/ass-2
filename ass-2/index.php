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
                
            </tbody>
        </table>
    </main>
</body>
</html>
