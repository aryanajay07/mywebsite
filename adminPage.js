fetch('fetch.php')
    .then(response => response.json())
    .then(data => {
        // Process the fetched data
        console.log(data);
    })
    .catch(error => {
        console.error('Error:', error);
    });
