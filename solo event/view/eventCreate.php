<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Event</title>
    <script>
        function validateForm() {
           
            let eventName = document.getElementById("event_name").value;
            let eventDate = document.getElementById("event_date").value;
            let eventTime = document.getElementById("event_time").value;
            let eventPlace = document.getElementById("event_place").value;
            let eventType = document.getElementById("event_type").value;
            let amount = document.getElementById("amount").value;

         
            if (eventName.trim() === '' || eventDate.trim() === '' || eventTime.trim() === '' || eventPlace.trim() === '' || eventType.trim() === '' || amount.trim() === '') {
                alert("All fields must be filled out");
                return false;
            }

            
            return true;
        }
    </script>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        input[type="time"] {
            width: calc(100% - 22px); /* Adjusted to accommodate borders */
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .back-button {
            width: 100%;
            padding: 10px;
            background-color: #ccc;
            color: #333;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: #aaa;
        }
    </style>
</head>
<body>
    <h2>Create Event</h2>
    <div style="margin-top: 100px; margin-left: 20%; margin-right: 20%;">
    <form id="event_form" action="../controller/create_event.php" method="POST" onsubmit="return validateForm()">
        <label for="event_name">Event Name:</label><br>
        <input type="text" id="event_name" name="event_name"><br>
        
        <label for="event_date">Event Date:</label><br>
        <input type="date" id="event_date" name="event_date"><br>
        
        <label for="event_time">Event Time:</label><br>
        <input type="time" id="event_time" name="event_time"><br>
        
        <label for="event_place">Event Place:</label><br>
        <input type="text" id="event_place" name="event_place"><br>
        
        <label for="event_type">Event Type:</label><br>
        <input type="text" id="event_type" name="event_type"><br>
        
        <label for="amount">Requried Amount:</label><br>
        <input type="text" id="amount" name="amount"><br>
        
        <input type="submit" value="Create Event">
        <button class="back-button" onclick="window.location.href='dashboardCustomer.php'">Back</button>

    </form>
    </div>
</body>
</html>
