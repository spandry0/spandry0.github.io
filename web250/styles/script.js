document.addEventListener('DOMContentLoaded', function() {
    const brandName = document.querySelector('h1');
    const brandColor = '#333';

    // Change the brand name color
    brandName.style.color = brandColor;

    // Add a click event listener to the brand name
    brandName.addEventListener('click', function() {
        // Change the brand name color to a random color
        brandName.style.color = getRandomColor();

        // Change the background color to a random color
        document.body.style.backgroundColor = getRandomColor();
    });
});

function getRandomColor() {
    const letters = '0123456789ABCDEF';
    let color = '#';
    for (let i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}
