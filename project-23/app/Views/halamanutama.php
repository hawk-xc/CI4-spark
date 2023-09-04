<!DOCTYPE html>
<html>

<head>
    <style>
        .card {
            width: 200px;
            height: 300px;
            background-color: #3498db;
            perspective: 1000px;
            /* Add perspective for 3D effect */
        }

        .card-inner {
            width: 100%;
            height: 100%;
            transition: transform 0.5s;
            /* Apply a smooth transition to the transform property */
            transform-style: preserve-3d;
            /* Ensure proper 3D rendering */
        }

        .card:hover .card-inner {
            transform: rotateY(180deg);
            /* Rotate the card 180 degrees on hover */
        }

        .card-face {
            width: 100%;
            height: 100%;
            position: absolute;
            backface-visibility: hidden;
            /* Hide the backface of the card */
        }

        .front {
            background-color: #3498db;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            color: white;
        }

        .back {
            background-color: #e74c3c;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            color: white;
            transform: rotateY(180deg);
            /* Initially, show the back face rotated */
        }
    </style>
</head>

<body>
    <div class="card">
        <div class="card-inner">
            <div class="card-face front">
                Front
            </div>
            <div class="card-face back">
                Back
            </div>
        </div>
    </div>
</body>

</html>