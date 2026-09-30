<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="flower_shop.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <nav>
  <div class="header">
    <h1>&#127800 Flower Shop &#127800</h1>
  </div>
  <div>
    <input type="checkbox" id="x">
    <label class="hamb" for="x">&#9776;</label>
    <ul type="none" class="menu" dir="ltr">
      <li><a href="#home">Home</a></li>
      <li><a href="#lotus">Lotus</a></li>
      <li><a href="#peony">Peony</a></li>
      <li><a href="#tulip">Tulip</a></li>
      <li><a href="#lily">Lily</a></li>
      <li><a href="#blossom">Cherry Blossom</a></li>
      <li><a href="#order">Order</a></li>
      <li><a href="#more">More About Flowers</a></li>
      <li><a href="#footer">Contact Us</a></li>
    </ul>
  </div>
  
</nav>
</header>

<div class="slider">
    <figure>
        <div class="slide">
            <button class="prev" onclick="prevslide()">&#10094;</button>
            <img src="slide3.jpg" alt="none">
            <h1 id="t1"><b>Flowers Speak a Language <br> Of Their Own</b></h1>
<pre id="t1">soft colors, gentle scents, and quiet symbolism
that touch something deep in us.
From ancient rituals to everyday joy,
they've always reminded humans to slow down and notice beauty.</pre>
            <button class="next" onclick="nextslide()">&#10095;</button>
        </div>
        <div class="slide">
            <button class="prev" onclick="prevslide()">&#10094;</button>
            <img src="slide2.jpg" alt="none">
<h1 id="t2"><b>Beyond Their Beauty, Flowers Carry Meaning </b></h1>
<pre id="t2">love, hope, remembrance,
and celebration all wrapped in petals.
A single bloom can brighten a room, calm a mind, and say what words sometimes can't.</pre>
            <button class="next" onclick="nextslide()">&#10095;</button>
        </div>
    </figure>
</div>



<div style=" margin:10px; margin-left:230px;">
<i class="fa fa-search" style="color:brown;"></i>
<input type="text" id="search" placeholder="Search flowers..." style="border: 1px solid brown; width:1000px;">
</div>
<div id="results"></div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){
    $("#search").on("keyup", function(){
// "Watch the search input (#search). Every time you release a key while typing in it, run this function."
        var query = $(this).val();
// $(this) = the search input itself, .val() = grab whatever text is currently typed in it. Store it in query.
        $.ajax({
// Send a background request (no page reload) — this is AJAX.
            url: "search.php",
// Send the request to this PHP file.
            method: "POST",
// Send the data using POST (same as a form submission).
            data: {search: query},
// The actual data being sent — like $_POST['search'] = query. So in search.php, you access it as $_POST['search']. (query jbar nave variable,bas search is random)
            success: function(response){
// Once search.php replies back with something, run this — response = whatever search.php echoed/printed.
                $("#results").html(response);
// Take that response and put it inside the #results div (replacing whatever was there before).
            }
        });
    });
});

</script>



<section id="home">
<div>        
<pre>
Welcome to Bloom & Co., your neighborhood flower shop where every arrangement is crafted with care, creativity,
and a genuine love for flowers. We believe flowers do more than decorate a space — they carry meaning, memory,
and emotion. From the purity and rebirth symbolized by the lotus, to the romance and prosperity of the peony,
the hope and new beginnings found in tulips, the devotion and renewal represented by lilies, and the fleeting,
precious beauty of cherry blossoms, each flower we offer tells its own story.

Our team hand-selects the freshest blooms from trusted growers,
ensuring every bouquet we create is vibrant, long-lasting, and full of character.
Whether you're searching for a thoughtful gift, planning a wedding, decorating for a special event,
or simply want to treat yourself to something beautiful, we're here to help bring your vision to life.
We offer a wide range of arrangements from classic and elegant to bold and modern tailored to fit your style, occasion, and budget.

Explore our flowers below to learn more about their meanings,
origins, and uses, and when you're ready, head to our ordering section to create your own custom arrangement.
At Bloom & Co., we're more than just a flower shop — we're part of your community, here to help you celebrate life's biggest moments and quiet everyday joys alike.
Let us turn your ideas into beautifully crafted floral designs that speak from the heart, one petal at a time.</pre>
</div>
</section>
<hr>



<h2 id="lotus">
    Lotus Flowers
</h2>
<section class="flowers">
<div class="flower-container">
    <div class="flower-box" id="lotus">
        <img src="lotus_symbol.jpg" alt="Sold Out">
        <h3><b>Symbolism</b></h3> <br>
        <p>The lotus represents purity, rebirth, and enlightenment — rising clean and radiant from muddy water, it's sacred in Buddhist and Hindu traditions.</p>
    </div>

    <div class="flower-box">
        <img src="lotus_env.jpg"  alt="Sold Out">
        <h3><b>Origin</b></h3> <br>
        <p>Native to Asia and Australia, lotus flowers grow in ponds and slow-moving water, blooming in warm summer months.</p>
    </div>
    
    <div class="flower-box" >
        <img src="lotus_med.jpg" alt="Sold Out">
        <h3><b>Uses</b></h3> <br>
        <p>Beyond its beauty, the lotus is used in cooking (seeds and roots), teas, and traditional medicine for its calming, anti-inflammatory properties.</p>
    </div>
</div>
</div>
</section>

<hr>

<h2 id="peony">Peony Flowers</h2>

<section class="flowers2">
    <div class="flower-container2">
        <div class="flower-box2" >
            <img src="peony_symbol.jpg" width="200px" height="300px" alt="Sold Out">
            <h3><b>Symbolism</b></h3> <br>
            <p>The peony represents honor, prosperity, and romance — often called the "king of flowers" in Chinese culture, symbolizing wealth and good fortune.</p>
        </div>

        <div class="flower-box2" >
            <img src="peony_env.jpg" width="200px" height="300px" alt="Sold Out">
            <h3><b>Origin</b></h3> <br>
            <p>Native to Asia, Europe, and North America, peonies thrive in cooler climates and bloom briefly each spring, making their appearance highly anticipated.</p>
        </div>

        <div class="flower-box2" >
            <img src="peony_b.jpg" width="200px" height="300px" alt="Sold Out">
            <h3><b>Uses</b></h3> <br>
            <p>Beyond bouquets, peonies are prized in perfumery for their soft, rosy scent and have long been used in traditional medicine for their calming properties.</p>
        </div>
    </div>
</section>
<hr>

<h2 id="tulip"> Tulip Flowers </h2>
<section class="flowers3">
    <div class="flower-container3">
        <div class="flower-box3" >
            <img src="tulip_symbol.jpg" width="200px" height="300px" alt="Sold Out">
            <h3><b>Symbolism</b></h3> <br>
            <p>Tulips represent perfect love and new beginnings — historically linked to 17th-century "Tulip Mania" in the Netherlands,
                where they symbolized wealth and beauty.
            </p>
        </div>
        <div class="flower-box3" >
            <img src="tulip_env.jpg" width="200px" height="300px" alt="Sold Out">
            <h3><b>Origin</b></h3> <br>
            <p>Native to Central Asia, tulips were cultivated in the Ottoman Empire before becoming iconic in the Netherlands, blooming each spring in a wide range of colors.</p>
        </div>
        <div class="flower-box3" >
            <img src="tulip_food.jpg" width="200px" height="300px" alt="Sold Out">
            <h3><b>Uses</b></h3> <br>
            <p>Widely used in gardens and bouquets, tulip petals and bulbs have also
                 been used historically in cooking and traditional remedies (though raw bulbs can be toxic if not prepared properly).</p>
        </div>
    </div>
</section>

<h2 id="lily"> Lily Flowers </h2>

<section class="flowers4">
<div class="flower-container4">
    <div class="flower-box4">
        <img src="lily_symbol.jpg" width="200px" height="300px" alt="Sold Out">
        <h3><b>Symbolism</b></h3> <br>
        <p>Lilies represent purity, devotion, and renewal — commonly linked to motherhood, remembrance, and used in both weddings and funerals across cultures.</p>
    </div>
    <div class="flower-box4">
        <img src="lily_env.jpg" width="200px" height="300px" alt="Sold Out">
        <h3><b>Origin</b></h3> <br>
        <p>Native to temperate regions of the Northern Hemisphere, lilies grow from bulbs and typically bloom in summer, thriving in well-drained soil and full sun.</p>
    </div>
    <div class="flower-box4">
        <img src="lily_med.jpg" width="200px" height="300px" alt="Sold Out">
        <h3><b>Uses</b></h3> <br>
        <p>Beyond ornamental use, lilies are valued for their fragrance in perfumery, and some varieties have roles in traditional medicine — though note some lily species are toxic to pets like cats.</p>
    </div>
</div>
</section>

<h2 id="blossom"> Cherry Blossom Flowers </h2>

<section class="flowers5">
<div class="flower-container5">
    <div class="flower-box5">
        <img src="blossom_symbol.jpg" width="200px" height="300px" alt="Sold Out">
        <h3><b>Symbolism</b></h3> <br>
        <p>Cherry blossoms represent the fleeting beauty of life — their brief bloom is a reminder to appreciate the present moment, deeply tied to Japanese culture (sakura).</p>
    </div>
    <div class="flower-box5">
        <img src="blossom_env.jpg" width="200px" height="300px" alt="Sold Out">
        <h3><b>Origin</b></h3> <br>
        <p>Native to East Asia, especially Japan, China, and Korea, cherry blossoms bloom for just one to two weeks each spring, often celebrated with viewing festivals (hanami).</p>
    </div>
    <div class="flower-box5">
        <img src="blossom_food.jpg" width="200px" height="300px" alt="Sold Out">
        <h3><b>Uses</b></h3> <br>
        <p>Beyond their beauty, cherry blossoms are used in teas, seasonal foods, and skincare products for their delicate fragrance and antioxidant properties.</p>
    </div>
</div>
</section>

<hr>

<div id="order">
<h2> Order Custom Arrangement </h2>

<pre>
As you've explored, Bloom & Co. offers a thoughtfully curated selection of flowers — each with its own story, symbolism,
and charm, from the pure elegance of the lotus to the romantic richness of the peony,
the vibrant hope of tulips, the graceful devotion of lilies, and the delicate beauty of cherry blossoms.
every arrangement we create is more than just a gift; it's a way to express emotions words sometimes can't capture,
whether you're celebrating a milestone, comforting a loved one, or simply brightening someone's day.
Our team takes pride in hand-selecting the freshest blooms and crafting each bouquet with care, ensuring your order reflects both quality and meaning.
No occasion is too big or too small, and no request is too specific — we're here to bring your vision to life, one petal at a time.
When you're ready to turn your ideas into a beautiful floral arrangement,
simply <a href="page2.php" target="_self"><b><u>Click here to order</u></b></a>, and let us take care of the rest </pre>

</div>

<hr>

<section id="more">
    <h2>More About Flowers</h2>
    <a href="admin_login.php" target="_self" style="margin-left:1425px;">____&#9999;</a>
    
<?php
    $conn = mysqli_connect("localhost","root","","flowers");
    // mysqli_connect() opens a connection to a MySQL database.
    $result = mysqli_query($conn, "SELECT * FROM flowerss");
    // mysqli_query() sends a SQL query to a MySQL database and returns the result.
    ?>
    <table class="table table-striped" style="text-align: center;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>More About The Flower</th>
            </tr>
        </thead>
        <tbody>
        <?php
        if ($result -> num_rows > 0){
            while ($row = mysqli_fetch_assoc($result)) { 
//  mysqli_fetch_assoc($result) → gets the next row as an associative array (e.g. $row['name']) 
            echo (
            "<tr>"
                ."<td>". $row['id']."</td>"
                ."<td>". $row['name']."</td>"
                ."<td>". $row['usage']."</td>"
                ."<td>". $row['price']. " IQD" ."</td>"
                ."<td><a href='".$row['link']."' target='_blank'>Read more</a></td>"
// noqta jbir naka,double qoutation jda bu har tagak u grtna wi,jbli axir ek jbar href u double qoutation bu content href jbir naka
            ."</tr>"
            );
            }
            }
            ?>
        </tbody>
    </table>
</section>





<section id="footer">
    <h2>Contact Us</h2>
    <div class="contact">
        <div class="contact-info">
            <h3>About Us</h3>
            <p>At Bloom & Co., we believe every flower tells a story.
                What started as a small neighborhood shop has grown into a place where people come to celebrate life's biggest moments and quiet everyday joys alike.
                We handpick every stem with care, blending tradition, symbolism, and creativity into arrangements that speak from the heart.
                Thank you for letting us be part of your story — one petal at a time.</p>
        </div>
        <div class="contact-info">
            <h3>Social Media</h3>
            <p><a href="#"><b>&#128100; Facebook</b></a></p>
            <p><a href="#"><b>&#128247; Instagram</b></a></p>
            <p><a href="#"><b>&#128100; Twitter</b></a></p>
        </div>
        <div class="contact-info">
            <h3>Get In Touch</h3>
            <p><b>&#128205; Address:</b> 123 Flower Street, Bloomville</p>
            <p><b>&#128222; Phone:</b> (123) 456-7890</p>
            <p><b>&#9993; Email:</b> info@bloomandco.com</p>
        </div>
    </div>
</footer> 
</section>
<div class="copyright">
    <p><b>&copy; 2024 Bloom & Co. All rights reserved.</b></p>
</div>

<script src="test.js"></script>
</body>
</html>
