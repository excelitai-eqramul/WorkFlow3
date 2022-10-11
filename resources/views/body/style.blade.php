<style>
    .employeeTable tr:nth-child(even) {
        background-color: #f8f0e3;
    }

    /* Sidebar design start */
    body {
        background-color: #fbfbfb;
    }

    @media (min-width: 991.98px) {
        main {
            padding-left: 240px;
        }
    }

    /* Sidebar */
    .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        padding: 58px 0 0;
        /* Height of navbar */
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
        width: 240px;
        z-index: 600;
    }

    @media (max-width: 991.98px) {
        .sidebar {
            width: 100%;
        }
    }

    .sidebar .active {
        border-radius: 5px;
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
    }

    .sidebar-sticky {
        position: relative;
        top: 0;
        height: calc(100vh - 48px);
        padding-top: 0.5rem;
        overflow-x: hidden;
        overflow-y: auto;
        /* Scrollable contents if viewport is shorter than content. */
    }

    /* Sidebar design End */
    /* dropdown design start */
    body {
        font-family: "Lato", sans-serif;
    }

    /* Fixed sidenav, full height */
    .sidenav {
        height: 100%;
        width: 220px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #3E0E40;
        overflow-x: hidden;
        padding-top: 20px;
    }

    /* Style the sidenav links and the dropdown button */
    .sidenav a,
    .dropdown-btn {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 20px;
        color: #818181;
        display: block;
        border: none;
        background: none;
        width: 100%;
        text-align: left;
        cursor: pointer;
        outline: none;
    }

    /* On mouse-over */
    .sidenav a:hover,
    .dropdown-btn:hover {
        color: black;
    }

    /* Main content */
    .main {
        margin-left: 200px;
        /* Same as the width of the sidenav */
        font-size: 20px;
        /* Increased text to enable scrolling */
        padding: 0px 10px;
    }

    /* Add an active class to the active dropdown button */
    .active {
        background-color: green;
        color: white;
    }

    /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
    .dropdown-container {
        display: none;
        background-color:3E0E40;
        padding-left: 8px;
    }

    /* Optional: Style the caret down icon */
    .fa-caret-down {
        float: right;
        padding-right: 8px;
    }

    /* Some media queries for responsiveness */
    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;
        }

        .sidenav a {
            font-size: 18px;
        }
    }

    /* dropdown End */
    a {

        color: black;
    }
</style>
























