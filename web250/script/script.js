 body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
const container = document.getElementById("pyramid-container");
const brickWidth = 50;
const brickHeight = 30;
const maxRows = Math.floor(container.offsetHeight / brickHeight);

function generatePyramid(rows) {
    let bricks = "";
    for (let row = 1; row <= rows; row++) {
        const bricksInRow = Math.pow(2, row) - 1;
        for (let brick = 0; brick < bricksInRow; brick++) {
            const left = brickWidth * brick + brickWidth / 2;
            const top = brickHeight * row - brickHeight / 2;
            bricks += `<div class="brick" style="left: ${left}px; top: ${top}px;"></div>`;
        }
    }
    return bricks;
}

container.innerHTML = generatePyramid(maxRows);
        #pyramid {
            position: relative;
            width: 200px;
            height: 240px;
            background-color: #58D68D;
        }

        .row {
            position: absolute;
            width: 100%;
            height: 20px;
            background-color: #344955;
        }

        .row:nth-child(2n) {
            top: 20px;
            height: 40px;
        }

        .row:nth-child(3n) {
            top: 60px;
            height: 60px;
        }

        .row:nth-child(4n) {
            top: 100px;
            height: 80px;
        }

        .row:nth-child(5n) {
            top: 140px;
            height: 100px;
        }
