
<?php include 'session.php'?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor</title>
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script src="../jquery/sorting_sold.js"></script>

    <!--Alertify JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

    <!-- 
        RTL version
    -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.rtl.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.rtl.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.rtl.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.rtl.min.css"/>
    <style>
    /* Custom CSS to style scrollbar */
    .table-responsive {
        height: 100vh; /* Set desired height */
        overflow: hidden; /* Hide the scrollbar initially */
        position: relative; /* Set position to use pseudo-element */
    }

    .table-responsive:hover {
        overflow: auto; /* Display scrollbar when hovering */
    }

    /* Style scrollbar */
    .table-responsive::-webkit-scrollbar {
        width: 12px; /* Set the width of the scrollbar */
        height: 12px; /* Set the height of the scrollbar */
    }

    /* Track (the area behind the scrollbar) */
    .table-responsive::-webkit-scrollbar-track {
        background: #f5f5f5; /* Light gray color for the track */
    }

    /* Handle (the draggable part of the scrollbar) */
    .table-responsive::-webkit-scrollbar-thumb {
        background: #c0c0c0; /* Light gray color for the handle */
        border-radius: 6px; /* Roundness of the handle */
        height: 100px; /* Set the height of the handle */
    }

    /* Handle on hover */
    .table-responsive::-webkit-scrollbar-thumb:hover {
        background: #a0a0a0; /* Darker gray color on hover */
    }

    /* For Firefox */
    .table-responsive {
        scrollbar-width: thin;
        scrollbar-color: #c0c0c0 #f5f5f5;
    }

    .message:hover{
        background-color: gainsboro;
        color: black;
    }
</style>

</head>