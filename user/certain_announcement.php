<!DOCTYPE html>
<html lang="en">

<style>

/* Event */
.event{
    min-height: 100vh;
    margin-bottom: 50px;
    display: flex;
    flex-direction: row;
}

.event_desc{
    width: 130vh;
    padding-top: 15vh;
    padding-left: 20vh;
    display: flex;
    flex-direction: column;
}

.event-back-button img {
    width: 20px; 
    height: 20px;
    vertical-align: middle;
    float: left;
    margin-right: 10px; 
    
}

.event-back-button p{
    text-align: left;
    color: #2D1674;
    font-size: 15px;
    padding-top: 7vh;
}

.event-back-button a {
    text-decoration: none; 
    color: inherit; 
}

.event_title p{
    text-align: left;
    color: #5a5950;
    
}

.event_title .title{
    font-size: 18.3px;
    color: #2D1674;
    padding-top: 6vh;
}

.event_title .event_name{
    font-size: 33px;
    font-weight:600;
    color: #2D1674;
    padding-top: 2vh;
}

.place-date{
    display: flex;
    flex-direction: row;
    padding-top: 2.5vh;
    padding-right: 16px;
}

.place-date p{
    padding-right: 26px;
}

.event_title img{
    width: 740px;
    height: 360px;
    border-radius: 10px; 
    margin-top: 5vh;
}

.event_title .heading{
    width: 93vh;
    font-size: 22px;
    font-weight: 600;
    color: #140A32;
    padding-top: 5vh;
}

.join_button{
    padding-top: 3vh;
}

.join {
    text-decoration: none;
    background-color: #C5BBD3;
    color: #2D1674;
    padding: 12px 17.6px;
    margin-top: 2vh;
    border: none;
    box-shadow: #5a5950;
    border-radius: 11px;
    font-size: 16.6px;
    font-weight: 600;
    transition: background-color 0.6s;
    cursor: pointer;
}

.join:hover {
    background-color: #2D1674;
    color: #C5BBD3;
}

.title_desc{
    width: 710px;
    display: flex;
    flex-direction: column;
}

.title_desc a{
    color: #2D1674;
    font-weight: 500;
}

.title_desc p{
    text-align: left;
    color: #140A32;
    font-size: 18.7px;
    padding-top: 3vh;
}

.highlights p{
    font-size: 18.7px;
    color: #140A32;
}

.highlights ul{
    padding-left: 6vh;
    padding-top: 1vh;
}

.highlights ul li{
    font-size: 18.5px;
    color: #140A32;
    padding-top: 4px;
}

.highlights ul dd{
    font-size: 18.5px;
    color: #140A32;
    padding-top: 4px;
    margin-left: -10px;
}

/* Other desc */
.other_desc{
    padding-top: 50vh;
    padding-left: 10vh;
}

.other_desc h4{
    color: #2D1674;
}

.other_events{
    width: 30vh;
    display: flex;
    flex-direction: column;
}

.category{
    margin-bottom: 25px;
}

.category p{
    text-align: left;
    color: #9B9988;
}

.category .title{
    color: #2D1674;
    padding-top: 6px;
    padding-bottom: 6px;
}
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Webpage Title -->
    <title>eBarangay Event Page</title>

    <!-- Branding -->
    <link rel="icon" href="../assets/branding/logo-lightmode.png">

    <!-- Styles -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/unicons.css">
</head>
<body>
    <!-- Top navbar -->
    <?php
    require_once('../partials/user_topnav.html');
    ?>

    <!-- Event Section -->
    <section id="event" class="event">
        <div class="event_desc">
            <div class="event-back-button">
            
                <a href="_index.php">
                <!--<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAACCAYAAABytg0kAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAE0lEQVR4nGPQECmQ1JIsl2OAMQAcZwM7EW5bDAAAAABJRU5ErkJggg==">-->
                    <p>Back</p></a>
            </div>
            <div class="event_title">
                <p class="title">Announcement</p>
                <p class="event_name">Support Needed for [Deceased's Name]'s Burial</p>
                <!--<div class="place-date">
                    <p>Tanghalang Onofre Pagsanghan</p>
                    <p>Thu, 28 Sep 2023 at 2:00 PM - 4:00 PM</p>
                </div>-->
                <div class="event_img">
                    <img src="../assets/events/certain_event.png" alt="Event picture">
                </div>
                
                <p class="heading">Dear Barangay Residents,</p>
                
            </div>
            <div class="title_desc">
                <p>
                It is with deep sorrow that we inform you of the passing of a beloved member of our community, <a href="#">[Deceased's Full Name]</a>. <a href="#">[He/She]</a> peacefully departed on <a href="#">[Date]</a>.
                </p>
                <div class="highlights">
                    <p>How You Can Help:</p>
                    <ul>
                        <li>Monetary Donations: The family is open to receiving monetary donations to cover funeral costs. You can send your contributions via Gcash to the following number: <a href="#">[GCash Number]</a>.</li>
                        <li>Material Support: If you have access to any resources that can aid the family during this period, such as funeral supplies or services, please reach out to <a href="#">[Contact Person's Name]</a>.</li>
                       
                    </ul>
                </div>
                <div class="highlights">
                    <p>Funeral Details:</p>
                    <ul>
                        <dd>The funeral service for <a href="#">[Deceased's Name]</a> will be held at <a href="#">[Location]</a> on <a href="#">[Date and Time]</a>. Your presence and support would mean a lot to the grieving family.</dd>
                    </ul>
                </div>
                
            </div>
            <div class="join_button">
            <button class="join">Donate Now</button></div>
        </div>
        <div class="other_desc">
            <h4>Other</h4>
            <div class="other_events">
                <div class="category">
                    <p>Announcement</p>
                    <p class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    <p>Fri, 29 Sep 2023</p>
                </div>
                <div class="category">
                    <p>Event</p>
                    <p class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    <p>Fri, 29 Sep 2023</p>
                </div>
                <div class="category">
                    <p>Announcement</p>
                    <p class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    <p>Fri, 29 Sep 2023</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php require_once('../partials/footer.html'); ?>
</body>

</html>