 body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

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
