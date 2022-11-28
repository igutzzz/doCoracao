window.addEventListener('DOMContentLoaded', e => {
    fetch('./php/userData.php')
    .then(response => response.json())
    .then(data => console.log(data))
})