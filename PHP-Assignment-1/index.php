<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ancient Inventory</title>
    <link rel="stylesheet" href="style.css">
  <!-- Main page -->
<script src="script.js"></script>

</head>
<body>
    <header>
        <?php include 'header.php'; ?>
    </header>
  <!-- New section for new elements -->
<section id="additional-section">
    
   <div class="music-section-container">
        <div class="music-section">
            <div class="music-poster">
                <img src="https://1.bp.blogspot.com/-rIK1fSxr8Lw/Xb9PWSeAe2I/AAAAAAAAIfA/BU7xtpm35Jg3HCmmaIbD1RUMODHS2DgpACLcBGAsYHQ/s1600/Memories.jpg" alt="Poster">
            </div>

            <div class="music-player-container">
                <div class="music-player">
                    <audio controls>
                        <source src="https://ia801002.us.archive.org/6/items/maroon5memories_201910/Maroon%205%20-%20Memories.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                </div>
                <div class="song-details-section">
                    <h3>MEMORIES</h3>
                    <p>Album: Jordi <br>
                    Released: 2021<br>
                    Artist: Maroon 5<br>
                    Genres: Reggae fusion, Pop</p>
                </div>
            </div>
        </div>
   </div>
  <div class="music-section-container">
        <div class="music-section">
            <div class="music-poster">
                <img src="https://i.ytimg.com/vi/64-flRq5gbw/maxresdefault.jpg" alt="Poster">
            </div>

            <div class="music-player-container">
                <div class="music-player">
                    <audio controls>
                        <source src="https://ia802809.us.archive.org/33/items/itnolmg/Martin%20Garrix%20%26%20Bebe%20Rexha%20-%20In%20The%20Name%20Of%20Love.mp3"  type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                </div>
                <div class="song-details-section">
                    <h3>IN THE NAME OF LOVE</h3>
                    <p>Singer: Bebe Rexha <br>
                    Released: 2020<br>
                    Music: Martin Garrix<br>
                    Genres: Sad Romantic</p>
                </div>
            </div>
        </div>
    </div>

</section>


      
      <section id="contact">
		<div class="container">
			<h1>Contact Us</h1>
			<form action="contact.php" method="post">
    <label>Name</label>
    <input type="text" name="name" placeholder="Enter your name" required>
    
    <label>Email</label>
    <input type="email" name="email" placeholder="Enter your email" required>
    
    <label>Message</label>
    <textarea name="message" placeholder="Enter your message"></textarea>
    
    <input type="submit" value="Submit">
</form>

		</div>
	</section>
      

	<footer>
		<div class="container">
			<p>© Dream Stream.All Rights Reserved.</p>
		</div>
	</footer>
    <script src="scripts.js"></script>
</body>
</html>
