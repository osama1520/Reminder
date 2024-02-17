
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
/* Form Styling */
form {
    max-width: 500px; /* Increased max-width for a slightly larger form */
    margin: 0 auto;
    padding: 30px; /* Increased padding for more space */
    background-color: #E5DDC8;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    text-align: center;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 10px; /* Slightly increased margin for spacing */
    text-align: left;
}

/* Set width to 80% for input fields and textarea */
input[type="text"],
input[type="datetime-local"],
textarea {
    width: 80%;
    padding: 12px; /* Increased padding for larger input fields */
    margin: 0 auto; /* Center-align the input fields */
    border: 1px solid #ccc;
    border-radius: 3px;
    font-size: 18px; /* Slightly increased font size */
}

textarea {
    resize: vertical;
}

input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 12px 24px; /* Increased padding for the submit button */
    border: none;
    border-radius: 3px;
    cursor: pointer;
    font-size: 20px; /* Slightly increased font size */
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

/* Styling for the success message */
.success-message {
    max-width: 500px;
    margin: 20px auto; /* Increased margin for spacing */
    padding: 15px; /* Increased padding for the success message */
    background-color: #4CAF50;
    color: #fff;
    border-radius: 5px;
    text-align: center;
    font-size: 18px; /* Slightly increased font size */
}

/* Styling for the error message */
.error-message {
    max-width: 500px;
    margin: 20px auto; /* Increased margin for spacing */
    padding: 15px; /* Increased padding for the error message */
    background-color: #FF0000;
    color: #fff;
    border-radius: 5px;
    text-align: center;
    font-size: 18px; /* Slightly increased font size */
}

/* Styling for the output container */
.output-container {
    max-width: 500px;
    margin: 20px auto; /* Increased margin for spacing */
    padding: 15px; /* Increased padding for the output container */
    background-color: #f4f4f4; /* Light background color */
    border-radius: 5px;
    text-align: left;
    font-size: 18px; /* Slightly increased font size */
}

/* Styling for the output field labels */
.output-field {
    font-weight: bold;
}

/* Styling for the output values (centered) */
.output-value {
    text-align: center;
    margin: 5px 0;
}

/* Responsive Styles */
@media screen and (max-width: 600px) {
    form {
        padding: 20px; /* Adjust padding for smaller screens */
    }
    .form-results {
        padding: 10px; /* Adjust padding for smaller screens */
    }
    .output-container {
        max-width: 100%;
    }
    input[type="text"],
    input[type="datetime-local"],
    textarea {
        width: 100%;
        font-size: 16px; /* Adjust font size for smaller screens */
    }
    input[type="submit"] {
        font-size: 18px; /* Adjust font size for smaller screens */
    }
    /* Adjust max-width for messages on smaller screens */
    .success-message,
    .error-message,
    .output-container {
        max-width: 100%;
    }
}
    </style>
</head>
<body>
    <br><br><br><div class="output-container"><div class="output-field">Date and Time:</div><div class="output-value">29-12-2023 00:07</div><div class="output-field">Description:</div><div class="output-value">ww</div><div class="output-field">Phone Number:</div><div class="output-value">97430993718@c.us</div></div><div class="success-message">Reminder inserted successfully.</div></body>
</html>
