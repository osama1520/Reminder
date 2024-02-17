
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        /* Basic Form Styling */
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #E5DDC8;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            text-align: left;
        }

        /* Set width to 80% for input fields and textarea */
        input[type="text"],
        input[type="datetime-local"],
        textarea {
            width: 90%;
            padding: 10px;
            margin: 0 auto; /* Center-align the input fields */
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 18px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        p {
            color: #FF0000;
            font-size: 14px;
        }

        /* Responsive Styles */
        @media screen and (max-width: 600px) {
            form {
                padding: 10px;
                background-color: #E5DDC8;
            }

            input[type="text"],
            input[type="datetime-local"],
            textarea {
                width: 100%;
                font-size: 14px;
            }

            input[type="submit"] {
                font-size: 16px;
            }

        }
    </style>
</head>
<body>
<br><br><br>
    <form method="post" action="process_form.php">
        <h3>Whatsapp Reminder System</h3>
        <label for="datetime">Date and Time:</label>
        <input type="datetime-local" name="datetime" id="datetime" required>
        
        <label for="description">Description:</label>
        <textarea name="description" id="description" rows="4" cols="50" required></textarea>

        <label for="phone_no">Phone Number:</label>
        <input type="text" name="phone_no" id="phone_no" required>
        <p>Please include the country code when entering your phone number. For example, 97430993718.</p>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
