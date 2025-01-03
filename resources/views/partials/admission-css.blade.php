<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
    }

    .container {
        width: 950px;
        margin: 20px auto;
        border: 4px solid #e8dada;
        background: #fff;
        padding: 20px;
        position: relative;
    }

    .header {
        text-align: center;
        position: relative;
    }

    .header img {
        max-height: 120px;
        position: absolute;
        top: 5px;
        left: 5px;
    }

    .header h1 {
        font-size: 48px;
        margin: 0;
        color: #FF6600;
        font-weight: bold;
    }

    .header h2 {
        font-size: 20px;
        margin: 5px 0;
        font-weight: bold;
    }

    .certificate-title {
        text-align: center;
        background: #000;
        color: #fff;
        font-size: 20px;
        padding: 5px 30px;
        margin: 0;
        margin-bottom: 5px;
        display: inline-block;
        border-radius: 30px;
    }

    .sub-header {
        text-align: center;
        margin: 10px 0;
        font-size: 18px;
    }

    .form-number1 {
        background: #FFF899;
        padding: 10px;
        font-size: 16px;
        font-weight: bold;
        display: inline-block;
        margin: 10px 0;
        text-align: left !important;
    }

    .contact-section {
        position: absolute;
        right: 20px;
        top: 20px;
        text-align: right;
    }

    .form-number-container {
        display: flex;
        justify-content: space-between;
        margin: 20px 0;
        font-size: 16px;
        font-weight: bold;
    }

    .form-number-container div {
        flex: 0 0 27%;
        background: #FFF899;
        padding: 10px;
        text-align: center;
    }

    .form-number-container div:last-child {
        flex: 0 0 67%;
        background: #fff;
        padding: 10px;
        font-size: 16px;
        font-weight: bold;
        display: inline-block;
        margin: 10px 0;
        margin-left: 10px;
        text-align: left !important;
        border: 1px solid #e8dada;

    }

    .content table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .content table td {
        padding: 0 10px;
        border: 1px solid #e8dada;
    }

    .content table td.label {
        width: 10%;
        font-size: 12px;
        font-weight: bold;
    }

    .side-image {
        border: 1px dashed #e8dada;
        width: 120px;
        height: 80px;
        text-align: center;
        line-height: 16px;
        margin: 5px auto;
    }

    .signature-section {
        display: flex;
        justify-content: space-between;
        margin-top: 60px;
    }

    .signature {
        text-align: center;
        font-size: 16px;
    }

    .signature p {
        margin: 5px 0;
    }

    .footer {
        text-align: center;
        margin-top: 20px;
        font-size: 14px;
        font-weight: bold;
    }

    .contact-section p {
        display: flex;
        /* Align icon and text horizontally */
        align-items: center;
        /* Vertically center content */
        margin: 6px 0;
        /* Reduce space between rows */
        font-size: 14px;
        /* Adjust font size */
    }

    .contact-section i {
        display: inline-flex;
        /* Ensures proper alignment for icons */
        justify-content: center;
        /* Center the icon in the background */
        align-items: center;
        /* Center the icon vertically */
        width: 20px;
        /* Circular width */
        height: 20px;
        /* Circular height */
        margin-right: 5px;
        /* Space between icon and text */
        font-size: 12px;
        /* Icon size */
        color: #fff;
        /* Icon color (white for better contrast) */
        background-color: #007BFF;
        /* Background color (e.g., Bootstrap primary) */
        border-radius: 50%;
        /* Circular shape */
        padding: 5px;
        /* Short padding inside the icon */
    }

    .contact-section i:hover {
        background-color: #0056b3;
        /* Darker background on hover */
    }
</style>
